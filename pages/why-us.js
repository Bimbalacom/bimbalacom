import Layout from "../components/layout";
import React from "react";

export default function WhyUS() {
    return (
        <Layout title={'Why us? - Bimbala.com'}>
            <section class="p-0 border-top border-bottom bg-light row no-gutters">
                <div class="col-lg-5 col-xl-6 order-lg-2">
                    <div class="divider divider-side transform-flip-y bg-light d-none d-lg-block"></div>
                    <img class="flex-fill" src={"img/blog/large-2.jpg"} alt="blog.1.image" />
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="container min-vh-lg-70 d-flex align-items-center">
                        <div class="row justify-content-center">
                            <div class="col col-md-10 col-xl-9 py-4 py-sm-5">
                                <div class="my-4 my-md-5">
                                    <h1 class="display-4">Why use Bimbala.com?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <h3 class="h2">Part of the reasons why client pick us:</h3>
            The Bimbala aprouch - Our way of working is a combination of our understading of the user behaviour with the commitment to help our clients help themselves.<br />
            Saving time = Saving money - When all  your support needs are made and worked on one platform Project Managers, Developers and all Level's of support will love you. They will not need to check 50 places for they're daily needs and can concentrate better on the more important aspects of work.<br />
            We give back - We try to Open source as much as possible all the time. Even the website you are checking out right now is on our Github page.<br />
            Painfully honest - We will tell you if we make mistakes. As a company we believe in honesty in all its formes. So we will not sleep it under the rug if we have a problem.<br />
            {/* <Share/> */}
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-light pt-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card card-body shadow-sm h-100">
                                <div class="display-4 text-primary mb-3" data-countup data-start="" data-end="97" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="%" data-easing=""></div>
                                <div>Average satisfaction rating received in the past year</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card card-body shadow-sm h-100">
                                <div class="display-4 text-primary mb-3" data-countup data-start="20" data-end="24" data-duration="1" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="/7" data-easing="false"></div>
                                <div>Our support experts are ready to assist anytime</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card card-body shadow-sm h-100">
                                <div class="display-4 text-primary mb-3" data-countup data-start="" data-end="100" data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping="" data-suffix="k+" data-easing=""></div>
                                <div>Montly views</div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="bg-primary-3 text-white jarallax" data-jarallax data-speed="0.75">
                <img src={"img/heros/hero-2.jpg"} alt="Hero" class="jarallax-img opacity-60" />
                <div class="container min-vh-40 d-flex flex-column justify-content-center">
                    <div class="row justify-content-center text-center text-sm-left">
                        <div class="col d-flex flex-column flex-sm-row justify-content-center align-items-center">
                            <a data-fancybox href="https://vimeo.com/166034462#t=32s" class="btn btn-lg btn-light rounded-circle" data-aos="zoom-in" data-aos-delay="400">
                                <img src={"img/icons/interface/icon-media-play.svg"} alt="Media Play Icon" class="icon icon-lg bg-dark pl-1" data-inject-svg />
                            </a>
                            <div class="h1 mb-0 mt-4 mt-sm-0 ml-sm-4" data-aos="fade-up">&ldquo;They changed the game&rdquo;</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-gradient text-white pb-0">
                <div class="container">
                    <div class="row section-title justify-content-center text-center">
                        <div class="col-md-9 col-lg-8 col-xl-7">
                            <h3 class="display-4">Less work, <mark data-aos="highlight-text" data-aos-delay="250">more flow.</mark></h3>
                            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 d-flex flex-wrap justify-content-center">
                            <div class="m-2">
                                <div class="media rounded align-items-center px-3 px-md-4 py-2 py-md-3 bg-white text-dark">
                                    <img src={"img/logos/product/kyan.svg"} alt="Kyan logo" class="icon icon-sm mr-3" />
                                    <h5 class="mb-0">Kyan Boards</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </Layout>
    )
}