import Link from 'next/link'
import Layout from "../components/layout";
import React from "react";
import take_flight from "../components/take_flight";

export default function FirstPost() {
  return (
    <Layout title={'Features - Bimbala.com'}>
      <take_flight/>
    <section class="o-hidden">
        <div class="container">
          <div class="row align-items-center justify-content-around text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                <div class="alert bg-secondary rounded-lg d-inline-block mb-4">
                  <div class="d-flex align-items-center">
                    <div class="badge badge-pill badge-success">New</div>
                    <div class="mx-3">Announce a great new feature</div>
                  </div>
                </div>
                <h3 class="h1">Everything you’ll need to launch your site</h3>
                <p class="lead">Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</p>
                <a href="#" class="lead">Explore More</a>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="img/illustrations/illustration-2.svg" alt="Image" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section class="o-hidden pt-0">
        <div class="container">
          <div class="row align-items-center justify-content-around text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 class="h1">Save tons on design and development</h2>
                <p class="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
              </div>
              <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="100">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src="img/icons/interface/icon-check.svg" alt="Binoculars icon" class="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 class="mb-0 ml-3">Fully Responsive</h6>
                  </div>
                </div>
                <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="200">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src="img/icons/interface/icon-check.svg" alt="Layouts icon" class="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 class="mb-0 ml-3">Multiple Layouts</h6>
                  </div>
                </div>
                <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="300">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src="img/icons/interface/icon-check.svg" alt="Box icon" class="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 class="mb-0 ml-3">Modular Components</h6>
                  </div>
                </div>
                <div class="mb-3 mr-4 ml-lg-0 mr-lg-4" data-aos="fade-left" data-aos-delay="400">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src="img/icons/interface/icon-check.svg" alt="Lightning icon" class="m-2 icon icon-xs bg-success" />
                    </div>
                    <h6 class="mb-0 ml-3">Suits Your Style</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src="img/illustrations/illustration-3.svg" alt="Image" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section class="bg-primary-3 text-white jarallax pb-0" data-jarallax data-speed="0.2">
        <img src="img/heros/hero-1.jpg" alt="Image" class="jarallax-img opacity-50" />
        <div class="container pb-5">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-7">
              <blockquote class="blockquote p-0 border-0 text-white">
                &ldquo;We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps. Fear not, Jumpstart does away with all of that.&rdquo;
                </blockquote>
              <img class="bg-white opacity-50 mt-3 mt-md-4 mb-3" src="img/logos/brand/kanba.svg" alt="Kanba company logo" />
              <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                <h6 class="mb-0 mr-2">Shelley McNabb</h6>
                <span>Software Engineer</span>
              </div>
            </div>
          </div>
        </div>
        <div class="divider divider-bottom bg-white"></div>
      </section>
    </Layout>
  )
}