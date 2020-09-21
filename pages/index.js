import Layout from '../components/layout'
import Link from 'next/link'
import { DefaultSeo } from 'next-seo';
import TakeFlight from "../components/take_flight";
import dynamic from 'next/dynamic';

const Steps = dynamic(() => import('../components/index/steps'));


export default function Home() {
    return (
        <Layout title={'Home - Bimbala.com'}>
            <div data-overlay className="o-hidden">
                <section className="bg-primary-3 text-white pb-0 o-hidden">
                    <div className="container">
                        <div className="row justify-content-between align-items-center">
                            <div className="col-xl-5 col-lg-6 text-center text-lg-left mb-4 mb-md-5 mb-lg-0"
                                data-aos="fade-right">
                                <h1 className="display-3">A modular software for your support upgrade.</h1>
                                <p className="lead">Grab it now and make your business awesome. About 5M customers are
                                    more satisfied after the project became using Bimbala!</p>
                                <a href={"/why-us"} className="btn btn-lg btn-primary">Why us?</a>
                            </div>
                            <div className="col" data-aos="fade-left" data-aos-delay="250">
                                <img src={"/img/demo/roadmap-demo.jpg"} alt="Screenshot"
                                    className="img-fluid rounded shadow-lg border" />
                            </div>
                        </div>
                    </div>
                    <div className="w-50 h-50 bottom right position-absolute" data-jarallax-element="50">
                        <div className="blob blob-2 bg-gradient w-100 h-100" />
                    </div>
                    <div className="w-50 h-50 bottom right position-absolute" data-jarallax-element="75">
                        <div className="blob blob-4 bg-white opacity-10 w-100 h-100" />
                    </div>
                    <div className="divider divider-bottom bg-white" />
                </section>
                <section>
                    <div className="container">
                        <div className="row">
                            <div className="col-md-4 mb-4 mb-md-0">
                                <div>
                                    <img src={"/img/icons/theme/general/thunder-move.svg"} loading="lazy" alt="Lightning icon"
                                        className="icon bg-primary-alt rounded-circle p-1" />
                                    <h5 className="mt-4">Suits Your Style</h5>
                                    <div>
                                        Your support needs to be fast. That is why everything connected with our software is integrated into one panel. 
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4 mb-md-0">
                                <div>
                                    <img src={"/img/icons/theme/general/bookmark.svg"} loading="lazy" alt="Bookmark icon"
                                        className="icon bg-primary-alt rounded-circle p-1" />
                                    <h5 className="mt-4">Everything you need</h5>
                                    <div>
                                        Duis convallis convallis tellus imp interdum. Non diam phasellus vestibulum
                                        lorem sed risus ultricies Tyrion. Enim blandit volutpat.
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4 mb-md-0">
                                <div>
                                    <img src={"/img/icons/theme/design/select.svg"} loading="lazy" alt="Selection interface icon"
                                        className="icon bg-primary-alt rounded-circle p-1" />
                                    <h5 className="mt-4">Highly Customizable</h5>
                                    <div>
                                        Like people every company is diffirent. That is why we have a different approach for every client and every project.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <TakeFlight />
                <Steps />

                <section className="border-bottom" id="counters">
                    <div className="container">
                        <div className="row justify-content-between align-items-start">
                            <div className="col-lg-3 mb-4 sticky-lg-top">
                                <h4>Part of our numbers</h4>
                            </div>
                            <div className="col-lg-8">
                                <div className="row mb-md-5 mb-4">
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="97"
                                            data-duration="" data-decimal-places="" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="%" data-easing="" />
                                        <h6>User Satisfaction</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="20" data-end="24"
                                            data-duration="1" data-decimal-places="" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="/7" data-easing="false" />
                                        <h6>Support</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="142"
                                            data-duration="" data-decimal-places="" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="k+" data-easing="" />
                                        <h6>Downloads</h6>
                                    </div>
                                </div>
                                <div className="row mb-md-5 mb-4">
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="99.99"
                                            data-duration="" data-decimal-places="2" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="%" data-easing="" />
                                        <h6>Uptime</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="4.9"
                                            data-duration="" data-decimal-places="1" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="/5" data-easing="" />
                                        <h6>Average Rating</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="527439"
                                            data-end="529467" data-duration="1000" data-decimal-places="" data-prefix=""
                                            data-separator="," data-grouping="true" data-suffix="" data-easing="false" />
                                        <h6>Loyal followers</h6>
                                    </div>
                                </div>
                                <div className="row mb-md-5 mb-4">
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="450"
                                            data-duration="" data-decimal-places="" data-prefix="$" data-separator=","
                                            data-grouping="true" data-suffix="k" data-easing="" />
                                        <h6>Paid out this year</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="1282417"
                                            data-end="1283744" data-duration="3981" data-decimal-places=""
                                            data-prefix="" data-separator="," data-grouping="true" data-suffix=""
                                            data-easing="false" />
                                        <h6>Active Accounts</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="37634"
                                            data-duration="" data-decimal-places="" data-prefix="" data-separator=","
                                            data-grouping="true" data-suffix="+" data-easing="" />
                                        <h6>Support Tickets Closed</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {/*TODO: Integrations listing*/}
            </div>
        </Layout>
    )
}