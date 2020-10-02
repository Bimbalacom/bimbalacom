import Link from "next/link";
import matter from 'gray-matter'
import ReactMarkdown from 'react-markdown'
import React from "react";
import Layout from "../../components/layout";
import Share from "../../components/share";
import { DiscussionEmbed } from 'disqus-react';
import { ArticleJsonLd, BreadcrumbJsonLd } from "next-seo";

const glob = require('glob')

export default function BlogTemplate(props) {
  // Render data from `getStaticProps`
  //TODO: extract this html as a component before creating the blog package
  return (
    <Layout title={props.siteTitle}>
      <ArticleJsonLd
          url={`${process.env.WEBSITE_URL}/blog/${props.slug}`}
          title={props.frontmatter.title}
          images={[
            (!props.frontmatter.image.startsWith('http') ? process.env.WEBSITE_URL+'/img' : '') + props.frontmatter.image
          ]}
          datePublished={props.frontmatter.date}
          authorName={props.frontmatter.author}
          publisherName={props.frontmatter.author}
          publisherLogo={(!props.frontmatter.authorImage.startsWith('http') ? process.env.WEBSITE_URL+'/img' : '') +props.frontmatter.authorImage}
          description={props.markdownBody.slice(0, props.markdownBody.indexOf('.')+1)}
      />
      <section className="p-0 border-top border-bottom bg-light row no-gutters">
        <div className="col-lg-5 col-xl-6 order-lg-2">
          <div className="divider divider-side transform-flip-y bg-light d-none d-lg-block" />
          <img className="flex-fill" src={props.frontmatter.image} alt={props.frontmatter.imageAlt} />
        </div>
        <div className="col-lg-7 col-xl-6">
          <div className="container min-vh-lg-70 d-flex align-items-center">
            <div className="row justify-content-center">
              <div className="col col-md-10 col-xl-9 py-4 py-sm-5">
                <div className="my-4 my-md-5">
                  <div className="d-flex align-items-center mb-3 mb-xl-4">
                    <a href="#" className="badge badge-pill badge-danger">{props.frontmatter.category}</a>
                    <div className="ml-3 text-small text-muted">{props.frontmatter.date}</div>
                  </div>
                  <h1 className="display-4">
                    {props.frontmatter.title}
                  </h1>
                  <a href="#" className="d-flex align-items-center">
                    <img src={(!props.frontmatter.authorImage.startsWith('http') ? process.env.WEBSITE_URL+'/img' : '')+props.frontmatter.authorImage} alt={props.frontmatter.author + ' profile image'}
                      className="avatar avatar-sm" />
                    <div className="h6 mb-0 ml-3">{props.frontmatter.author}</div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div className="container">
          <div className="row justify-content-center">
            <div className="col-xl-7 col-lg-8 col-md-10">
              <article className={'article'}>
                <ReactMarkdown source={props.markdownBody} />
              </article>
              <div className="mt-4 mt-sm-5 border-top pt-5 d-none d-sm-block">
                <nav aria-label="breadcrumb">
                  <ol className="breadcrumb mb-0">
                    <li className="breadcrumb-item"><a href="#">Blog</a>
                    </li>
                    <li className="breadcrumb-item"><a href="#">{props.frontmatter.category}</a>
                    </li>
                    <li className="breadcrumb-item">{props.frontmatter.title}</li>
                  </ol>
                  <BreadcrumbJsonLd
                      itemListElements={[
                        {
                          position: 1,
                          name: 'Blog',
                          item: `${process.env.WEBSITE_URL}/blog`,
                        },
                        {
                          position: 2,
                          name: props.frontmatter.category,
                          item: `${process.env.WEBSITE_URL}/blog`,
                        },
                        {
                          position: 3,
                          name: props.frontmatter.title,
                          item: `${process.env.WEBSITE_URL}/blog/${props.slug}`,
                        },
                      ]}
                  />
                </nav>
              </div>
              <Share frontmatter={props.frontmatter}/>
              <DiscussionEmbed
    shortname='bimbala'
    config={
        {
            url: `${process.env.WEBSITE_URL}/blog/${props.slug}`,
            identifier: props.slug,
            title: props.frontmatter.title,
            language: 'en_us' 
        }
    }
/>
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}

export async function getStaticProps({ ...ctx }) {
  const { slug } = ctx.params
  const content = await import(`../../posts/${slug}.md`)
  const data = matter(content.default)
  return {
    props: {
      slug: slug,
      siteTitle: data.data.title + ' - Bimbala blog',
      frontmatter: data.data,
      markdownBody: data.content,
    },
  }
}

export async function getStaticPaths() {
  //get all .md files in the posts dir
  const blogs = glob.sync('posts/**/*.md')

  //remove path and extension to leave filename only
  const blogSlugs = blogs.map(file =>
    file
      .split('/')[1]
      .replace(/ /g, '-')
      .slice(0, -3)
      .trim()
  )

  // create paths with `slug` param
  const paths = blogSlugs.map(slug => `/blog/${slug}`)

  return {
    paths,
    fallback: false,
  }
}