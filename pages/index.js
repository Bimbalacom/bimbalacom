import Layout from '../components/layout'
import Link from 'next/link'
import { DefaultSeo } from 'next-seo';



export default function Home() {
  return (
    <Layout>
        <div data-overlay className="o-hidden">
            <section className="pb-0">
                <div className="container">
                    <div
                        className="row justify-content-center text-center min-vh-40 d-flex flex-column align-items-center">
                        <div className="col-md-10 col-lg-9 col-xl-8" data-aos="fade-up">
                            <h1 className="display-3">A modular Saas for<br />
                                <mark><span data-typed-text data-loop="true" data-type-speed="90"
                                            data-strings='["Support","User feedback","Support integration","user satisfaction","smarter managemenet"]'></span>
                                </mark></h1>
                            <p className="lead px-xl-5">Grab it now and make your business awesome. About 5M customers are more satisfied after the project became using Bimbala! </p>
                            <div className="d-flex flex-column flex-sm-row mt-4 mt-md-5 justify-content-center"
                                 data-aos="fade-up" data-aos-delay="300">
                                <a href="#landing-pages" className="btn btn-primary btn-lg mx-sm-2 my-1 my-sm-0"
                                   data-smooth-scroll>Client area</a>
                                <a href="#" className="btn btn-outline-primary btn-lg mx-sm-2 my-1 my-sm-0">Pricing</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="position-absolute bottom left w-50 h-50 d-none d-md-block"
                     data-jarallax-element="-24 48">
                    <div className="blob bg-gradient w-50 h-100 bottom left"></div>
                </div>
                <div className="position-absolute top right w-50 h-50 d-none d-md-block" data-jarallax-element="48">
                    <div className="blob blob-2 bg-gradient w-50 h-50 top right"></div>
                </div>
                <div className="divider divider-bottom bg-primary-3"></div>
            </section>
        </div>
    </Layout>
  )
}
