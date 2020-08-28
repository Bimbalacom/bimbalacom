import Layout from "../../components/layout";
import React from "react";
import matter from "gray-matter";
// import Blog from "../../components/blog";

export default function BlogIndex(props) {
    return (
        <Layout title={'Blog - Bimbala.com'}>
            <section className={"bg-primary-3"}>
                <div className="container">
                    <div className="row">
                        <div className="col">
                            <div className="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
                                <a href={'/blog/'+props.posts[0].slug} className="d-block position-relative bg-gradient col-xl-5">
                                    <img className="flex-fill hover-fade-out" src={props.posts[0].image} alt={props.posts[0].imageAlt} />
                                    <div className="divider divider-side bg-white d-none d-lg-block"/>
                                </a>
                                <div className="p-4 p-md-5 col-xl-7 d-flex align-items-center">
                                    <div className="p-lg-4 p-xl-5">
                                        <div className="d-flex justify-content-between align-items-center mb-3 mb-xl-4">
                                            <a href={'/blog/'+props.posts[0].slug} className="badge badge-pill badge-danger">{props.posts[0].category}</a>
                                            <div className="text-small text-muted">{props.posts[0].date}</div>
                                        </div>
                                        <a href={'/blog/'+props.posts[0].slug}>
                                            <h1>{props.posts[0].title}</h1>
                                        </a>
                                        <p className="lead">Volantis vitae unuch sed velit sodales. Sandor imperdiet proin fermentum leo vel Hodor.</p>
                                        <a href={'/blog/'+props.posts[0].slug} className="lead">Read Story</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {props.posts > 1 &&
            <section className="bg-light">
                <div className="container">
                    <div className="row">
                        <div className="col">
                            {props.posts.map(function(post, idx) {
                                if(idx===0){
                                    return;
                                }
                                return (
                                    <div className="mb-4 mb-md-5" data-aos="fade-up" key={idx}>
                                        <div className="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
                                            <a href={'/blog/'+post.slug} className="d-block position-relative bg-gradient col-xl-5">
                                                <img className="flex-fill hover-fade-out" src={post.image} alt={post.imageAlt} />
                                                <div className="divider divider-side bg-white d-none d-lg-block" />
                                            </a>
                                            <div className="p-4 p-md-5 col-xl-7 d-flex align-items-center">
                                                <div className="p-lg-4 p-xl-5">
                                                    <div className="d-flex justify-content-between align-items-center mb-3 mb-xl-4">
                                                        <a href={'/blog/'+post.slug} className="badge badge-pill badge-danger">{post.category}</a>
                                                        <div className="text-small text-muted">{post.date}</div>
                                                    </div>
                                                    <a href={'/blog/'+post.slug}>
                                                        <h1>{post.title}</h1>
                                                    </a>
                                                    <p className="lead">{post.data.data}</p>
                                                    <a href={'/blog/'+post.slug} className="lead">Read Story</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                )
                            })}

                        </div>
                    </div>
                    {/* <Blog/> */}
                    {/*<div className="row justify-content-center mt-4">
                        <div className="col-auto">
                            <nav>
                                <ul className="pagination">
                                    <li className="page-item">
                                        <a className="page-link rounded" href="#" aria-label="Previous">
                                            <img src="/img/icons/interface/icon-arrow-left.svg" alt="Arrow Left"
                                                className="icon icon-xs" />
                                        </a>
                                    </li>
                                    <li className="page-item active"><a className="page-link" href="#">1</a>
                                    </li>
                                    <li className="page-item"><a className="page-link" href="#">2</a>
                                    </li>
                                    <li className="page-item"><a className="page-link" href="#">3</a>
                                    </li>
                                    <li className="page-item">
                                        <a className="page-link rounded" href="#" aria-label="Next">
                                            <img src="/img/icons/interface/icon-arrow-right.svg" alt="Arrow Right"
                                                className="icon icon-xs" />
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>*/}
                </div>
            </section>}
        </Layout>
    )
}

export async function getStaticProps() {
    const allPosts = await getAllPosts()

    return {
        props: {
            posts: allPosts
        }
    }
}
export async function getAllPosts() {
    const context = require.context('../../posts', false, /.md$/)
    const posts = []
    for(const key of context.keys()){
        const post = key.slice(2);
        const content = await import(`../../posts/${post}`);
        const meta = matter(content.default)
        posts.push({
            slug: post.replace('.md',''),
            title: meta.data.title,
            image: meta.data.image,
            imageAlt: meta.data.imageAlt,
            date: meta.data.date,
            category: meta.data.category
        })
    }
    return posts;
}