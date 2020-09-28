import Layout from "../components/layout";
import React from "react";

export default function WhyUS() {
    return (
        <Layout title={'Why us? - Bimbala.com'}>
            <section className="p-0 border-top border-bottom bg-light row no-gutters">
                <div className="col-lg-5 col-xl-6 order-lg-2">
                    <div className="divider divider-side transform-flip-y bg-light d-none d-lg-block"/>
                    <img className="flex-fill" src={"blog/mind-body-monkey.jpg"} alt="Why pick Bimbala" />
                </div>
                <div className="col-lg-7 col-xl-6">
                    <div className="container min-vh-lg-70 d-flex align-items-center">
                        <div className="row justify-content-center">
                            <div className="col col-md-10 col-xl-9 py-4 py-sm-5">
                                <div className="my-4 my-md-5">
                                    <h1 className="display-4">Why use <mark data-aos="highlight-text" data-aos-delay="250">Bimbala.com?</mark></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-xl-12 col-lg-12 col-md-12">
                            <h3 className="h2">Part of the reasons why clients pick us:</h3>
            The Bimbala approach - Our way of working is a combination of our understanding of the user behaviour with the commitment to help our clients help themselves.<br />
            Saving time = Saving money - When all  your support's needs are made and fulfilled on one platform, Project Managers, Developers and all levels of support will love you. They will not need to check 50 places for their daily needs and can concentrate better on the more important aspects of work.<br />
            We give back - We try to Open source as much as possible all the time. Even the website you are checking out right now is on our Github page.<br />
            Painfully honest - We will tell you if we make mistakes. As a company we believe in honesty in all its forms. So we will not sweep it under the rug if we have a problem.<br />
            {/* <share/> */}
                        </div>
                    </div>
                </div>
            </section>
            <section className="bg-light pt-0">
                <div className="container">
                    <div className="row">
                        <div className="col-md-4 mb-3 mb-md-0">
                            <div className="card card-body shadow-sm h-100">
                                <div className="display-4 text-primary mb-3" data-countup data-start="" data-end="97" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="%" data-easing=""/>
                                <div>Average satisfaction rating received in the past year</div>
                            </div>
                        </div>
                        <div className="col-md-4 mb-3 mb-md-0">
                            <div className="card card-body shadow-sm h-100">
                                <div className="display-4 text-primary mb-3" data-countup data-start="20" data-end="24" data-duration="1" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="/7" data-easing="false"/>
                                <div>Our support experts are ready to assist anytime</div>
                            </div>
                        </div>
                        <div className="col-md-4 mb-3 mb-md-0">
                            <div className="card card-body shadow-sm h-100">
                                <div className="display-4 text-primary mb-3" data-countup data-start="" data-end="100" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="k+" data-easing=""/>
                                <div>Monthly views</div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section className="bg-primary-3 text-white jarallax" data-jarallax data-speed="0.75">
                <img src={"img/heros/hero-2.jpg"} alt="Hero" className="jarallax-img opacity-60" />
                <div className="container min-vh-40 d-flex flex-column justify-content-center">
                    <div className="row justify-content-center text-center text-sm-left">
                        <div className="col d-flex flex-column flex-sm-row justify-content-center align-items-center">
                            <a data-fancybox href="https://vimeo.com/166034462#t=32s" className="btn btn-lg btn-light rounded-circle" data-aos="zoom-in" data-aos-delay="400">
                                <img src={"img/icons/interface/icon-media-play.svg"} loading="lazy" alt="Media Play Icon" className="icon icon-lg bg-dark pl-1"  />
                            </a>
                            <div className="h1 mb-0 mt-4 mt-sm-0 ml-sm-4" data-aos="fade-up">&ldquo;They changed the game&rdquo;</div>
                        </div>
                    </div>
                </div>
            </section>
            <section className="bg-gradient text-white pb-0">
                <div className="container">
                    <div className="row section-title justify-content-center text-center">
                        <div className="col-md-9 col-lg-8 col-xl-7">
                            <h3 className="display-4">Less work, <mark data-aos="highlight-text" data-aos-delay="250">more flow.</mark></h3>
                            <div className="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
                        </div>
                    </div>
                    <div className="row justify-content-center">
                        <div className="col-xl-9 d-flex flex-wrap justify-content-center">
                            <div className="m-2">
                                <div className="media rounded align-items-center px-3 px-md-4 py-2 py-md-3 bg-white text-dark">
                                    <img src={"img/logos/product/kyan.svg"} loading="lazy" alt="Kyan logo" className="icon icon-sm mr-3" />
                                    <h5 className="mb-0">Kyan Boards</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </Layout>
    )
}