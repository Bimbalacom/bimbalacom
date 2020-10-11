import Link from 'next/link'
import Layout from "../../components/layout";
import React from "react";
import TakeFlight from "../../components/take_flight";

export default function FirstPost() {
  return (
    <Layout title={'Features'}>
      <TakeFlight/>
    <section className="o-hidden">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                {/* <div className="alert bg-secondary rounded-lg d-inline-block mb-4">
                  <div className="d-flex align-items-center">
                    <div className="badge badge-pill badge-success">New</div>
                    <div className="mx-3">Announce a great new feature</div>
                  </div>
                </div> */}
                <h3 className="h1">Everything you’ll need to launch your support community</h3>
                <p className="lead">Helping your clients grow and know how to use your software is a key thing for a successful company. We can help with that!</p>
                <a href="#" className="lead">Explore More</a>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5">
              <img src={"img/illustrations/user_flow.svg"} alt="Everything you need to launch" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden pt-0">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 className="h1">Better decision making</h2>
                <p className="lead">Asking your community is on of the best ways to know if you are going in the right path.</p>
              </div>
              <div className="d-flex flex-wrap justify-content-center justify-content-lg-start">
                <div className="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt="Binoculars icon" className="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 className="mb-0 ml-3">Easy to maintain</h6>
                  </div>
                </div>
                <div className="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="200">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt="Layouts icon" className="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 className="mb-0 ml-3">Multiple Layouts</h6>
                  </div>
                </div>
                <div className="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="300">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt="Box icon" className="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 className="mb-0 ml-3">Modular Components</h6>
                  </div>
                </div>
                <div className="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="400">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt="Lightning icon" className="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 className="mb-0 ml-3">Suits Your Style</h6>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src={"img/illustrations/informed_decision.svg"} alt="Informed decision" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                {/* <div className="alert bg-secondary rounded-lg d-inline-block mb-4">
                  <div className="d-flex align-items-center">
                    <div className="badge badge-pill badge-success">New</div>
                    <div className="mx-3">Announce a great new feature</div>
                  </div>
                </div> */}
                <h3 className="h1">Timeline</h3>
                <p className="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                {/* <a href="#" className="lead">Explore More</a> */}
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5">
              <img src={"img/illustrations/timeline.svg"} alt="Public timeline" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden pt-0">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 className="h1">Roadmap</h2>
                <p className="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src={"img/illustrations/roadmap.svg"} alt=" Public roadmap" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
     
      <section className="bg-primary-3 text-white jarallax pb-0" data-jarallax data-speed="0.2">
        <img src={"img/heros/hero-1.jpg"} alt="Image" className="jarallax-img opacity-50" />
        <div className="container pb-5">
          <div className="row">
            <div className="col-xl-5 col-lg-6 col-md-7">
              <blockquote className="blockquote p-0 border-0 text-white">
                &ldquo;We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps. Fear not, Jumpstart does away with all of that.&rdquo;
                </blockquote>
              <img className="bg-white opacity-50 mt-3 mt-md-4 mb-3" src={"img/logos/brand/kanba.svg"} alt="Kanba company logo" />
              <div className="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                <h6 className="mb-0 mr-2">Shelley McNabb</h6>
                <span>Software Engineer</span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}