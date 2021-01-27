import Layout from '../components/layout'
import React from "react";
import dynamic from 'next/dynamic';

const Steps = dynamic(() => import('../components/index/steps'));

export default function Home() {
    return (
        <Layout title={'Home'}>
            <div data-overlay className="o-hidden">
                <section className="bg-primary-3 text-white pb-0 o-hidden">
                    <div className="container">
                        <div className="row justify-content-between align-items-center">
                            <div className="col-xl-5 col-lg-5 text-center text-lg-left mb-3 mb-md-5 mb-lg-0"
                                data-aos="fade-right">
                                <h1 className="display-3">A modular software for your support upgrade.</h1>
                                <p className="lead">Grab it now and make your business awesome. Take your community in hands!</p>
                                <a href={"/why-us"} className="btn btn-lg btn-primary">Why us?</a>
                            </div>
                            <div className="col" data-aos="fade-left" data-aos-delay="250">
                                <img src={"/img/demo/roadmap-demo.webp"} alt="Roadmap screenshot"
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
                    <div className="container mt-5">

                    </div>
                    <div className="divider divider-bottom bg-white" />
                </section>

                <section>
                    <div className="container">
                        <div className="row section-title justify-content-center text-center">
                            <div className="col-md-9 col-lg-8 col-xl-7">
                                <h3 className="display-4">What we offer?</h3>
                            </div>
                            <div className="row align-items-center justify-content-around text-center text-lg-left">
                                <div className="col-md-9 col-lg-6">
                                    <img src={"img/illustrations/timeline.svg"} alt="Public timeline" className="img-fluid" />
                                </div>
                                <div className="col-md-9 col-lg-6 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
                                    <div className={'row align-items-center'}>
                                        <img src={"img/icons/interface/icon-arrow-right.svg"} loading="lazy" alt="Arrow Down"
                                            className="icon icon-md col-2" />
                                        <h3 className={'h1 col-10 mb-0'}><mark data-aos="highlight-text"
                                            data-aos-delay="500" className={'text-primary'}>A dedicated support &nbsp; portal for your business.</mark></h3>
                                    </div>
                                    <p className="lead mt-4">In your portal you will have access to stack of various tools. We will help you automate your workflow and satisfy your customers' expectations. Make them part of your product!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section className="bg-primary text-white">
                    <div className="container">
                        <div className="row section-title justify-content-center text-center">
                            <div className="col-md-9 col-lg-8 col-xl-7">
                                <h3 className="display-4">Why Bimbala is the perfect choice for you</h3>
                                <div className="lead"></div>
                            </div>
                        </div>
                        <div className="row justify-content-center">
                            <div className="col d-flex flex-wrap justify-content-center">
                                <div className="row">
                                    <div className="col-md-4 mb-4 mb-md-0">
                                        <div className={'text-center'}>
                                            <img src={"/img/icons/theme/general/thunder-move-white.svg"} loading="lazy" alt="Lightning icon"
                                                className="icon bg-light-alt rounded-circle p-1 shadow" />
                                            <h5 className="mt-4 text-primary-1">Suits Your Style</h5>
                                            <div className={'text-justify'}>
                                                Your support needs to be <mark data-aos="highlight-text"
                                                    data-aos-delay="500" className={'font-weight-bold text-uppercase h5'}>fast</mark>. That is why everything connected with our software is integrated into one panel.
                                    </div>
                                        </div>
                                    </div>
                                    <div className="col-md-4 mb-4 mb-md-0">
                                        <div className={'text-center'}>
                                            <img src={"/img/icons/theme/general/bookmark-white.svg"} loading="lazy" alt="Bookmark icon"
                                                className="icon bg-light-alt rounded-circle p-1 shadow" />
                                            <h5 className="mt-4 text-primary-1">Everything you need</h5>
                                            <div className={'text-justify'}>
                                            From a website to a reward winning ducking counting robot - Bimbala helps you explain everything to your client. 
                                            Impress your audience as if you know them personally without paying "the big bucks"
                                    </div>
                                        </div>
                                    </div>
                                    <div className="col-md-4 mb-4 mb-md-0">
                                        <div className={'text-center'}>
                                            <img src={"/img/icons/theme/design/select-white.svg"} loading="lazy" alt="Selection interface icon"
                                                className="icon bg-light-alt rounded-circle p-1 shadow" />
                                            <h5 className="mt-4 text-primary-1">Highly Customizable</h5>
                                            <div className={'text-justify'}>
                                                Like people every company is different. That is why we have a different approach for every client and every project.
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <Steps />
                <section className="bg-light o-hidden">
                    <div className="container">
                        {/* <div className="row section-title justify-content-center text-center">
                            <div className="col-md-9 col-lg-8 col-xl-7">
                                <h3 className="display-4">Great Functionality</h3>
                            </div>
                        </div> */}
                            <div className="row">
                                <div className="col">
                                    <ul className="nav nav-pills lead mb-4 mb-md-5 justify-content-center" id="myTab" role="tablist">
                                        <li className="nav-item">
                                            <a className="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Teams</a>
                                        </li>
                                        {/* <li className="nav-item">
                                            <a className="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dark Mode</a>
                                        </li> */}
                                        <li className="nav-item">
                                            <a className="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Integrations</a>
                                        </li>
                                    </ul>
                                    <div className="tab-content" id="myTabContent">
                                        <div className="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div className="row align-items-center justify-content-between flex-lg-row-reverse">
                                                <div className="col-lg-6 col-xl-5 text-center text-lg-left mb-4 mb-md-5 mb-lg-0">
                                                    <div className="pl-lg-4 pr-xl-5 aos-init aos-animate" data-aos="fade-right">
                                                        <h3 className="h1">Be the part of the <mark data-aos="highlight-text" data-aos-delay="250" className="aos-init aos-animate">team / change</mark></h3>
                                                        <p>
                                                            Supports and Managers love to get to know they're clients. This is the easiest and funniest way possible.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div className="col-lg-6 col-xl-7 aos-init aos-animate" data-aos="fade-left">
                                                    <img src={"img/illustrations/collaboration.svg"} alt="collaboration" className="img-fluid rounded shadow border" />
                                                </div>
                                            </div>
                                        </div>
                                        {/* <div className="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div className="row align-items-center justify-content-around">
                                                <div className="col-lg-6 col-xl-5 text-center text-lg-left mb-4 mb-md-5 mb-lg-0">
                                                    <div className="pr-lg-4 pr-xl-5 aos-init aos-animate" data-aos="fade-right">
                                                        <h3 className="h1">Easy on the eyes, and the wallet.</h3>
                                                        <p>
                                                            Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.
                                                        </p>
                                                        <div className="mt-4">
                                                            <div className="media rounded align-items-center pl-3 pr-3 pr-md-4 py-2 d-inline-flex text-left shadow-sm bg-white">
                                                                <img src={"img/avatars/male-1.jpg"} alt="Harvey Derwent avatar image" className="avatar avatar-sm flex-shrink-0 mr-3" />
                                                                <div className="text-dark mb-0">“Jumpstart increases productivity.”</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="col-lg-6 col-xl-7 aos-init aos-animate" data-aos="fade-left">
                                                    <img src={"img/desktop-app/desktop-app-1.jpg"} alt="Screenshot" className="img-fluid rounded shadow border" />
                                                </div>
                                            </div>
                                        </div> */}
                                        <div className="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <div className="row align-items-center justify-content-around">
                                                <div className="col-lg-6 col-xl-5 text-center text-lg-left mb-4 mb-md-5 mb-lg-0">
                                                    <div className="pr-lg-4 pr-xl-5 aos-init aos-animate" data-aos="fade-right">
                                                        <h3 className="h1">Updating or adding a integration every  major <mark data-aos="highlight-text" data-aos-delay="250" className="aos-init aos-animate">update</mark>.</h3>
                                                        <p>
                                                            We love being a part of something big. That is why we have at least one new or updated integration with part of our friends.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div className="col-lg-6 col-xl-7 aos-init aos-animate" data-aos="fade-left">
                                                    <img src={"img/illustrations/integrations.svg"} alt="Integrations" className="img-fluid rounded shadow border" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
                {/*<section className="border-bottom" id="counters">
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
                </section>*/}
                {/*TODO: Integrations listing*/}
            </div>
        </Layout>
    )
}
