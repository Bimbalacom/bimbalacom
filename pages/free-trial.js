import Link from 'next/link'
import Layout from "../components/layout";
import React from "react";
import RequestDemoForm from "../components/forms/requestDemoForm"

export default function FirstPost() {
    return (
        <Layout title={'Free trial'}>
           <div className="bg-gradient o-hidden position-relative" data-overlay>
      <section className="pb-0">
        <div className="container">
          <div className="row justify-content-around align-items-center">
            <div className="col-lg-6 col-xl-5 mb-4 mb-sm-5 mb-lg-0">
              <div className="text-white text-center text-lg-left mb-4 mb-xl-5" data-aos="fade-up">
                <h1 className="display-3">Try fast, launch quickly.</h1>
                <p className="lead">Get yourself the trial you deserve. You will receive all information on your e-mail.
                </p>
              </div>
              <div className="d-flex flex-wrap justify-content-center justify-content-lg-start">
                <div className="m-2" data-aos="fade-up" data-aos-delay="100">
                  <div className="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                    <img src={"img/icons/theme/navigation/route.svg"} loading="lazy" alt="Binoculars icon" className="icon mr-3"/>
                    <h5 className="mb-0">Fully Responsive</h5>
                  </div>
                </div>
                <div className="m-2" data-aos="fade-up" data-aos-delay="200">
                  <div className="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white">
                    <img src={"img/icons/theme/layout/layout-left-panel-2.svg"} loading="lazy" alt="Layouts icon" className="icon mr-3"/>
                    <h5 className="mb-0">Multiple Components</h5>
                  </div>
                </div>
              </div>
            </div>
            <div className="col-lg-6 col-xl-5 col-md-9" data-aos="fade-left" data-aos-delay="250">
              <RequestDemoForm />
            </div>
          </div>
        </div>
        <div className="divider divider-bottom bg-white"/>
      </section>
      <div className="position-absolute w-50 h-50 bottom right" data-jarallax-element="-50">
        <div className="blob blob-3 w-100 h-100 top right bg-white opacity-10"/>
      </div>
    </div>
    <div className="divider divider-bottom bg-white"/>
    <section className="p-0 bg-light">
      <div className="container">
        <div className="row align-items-center justify-content-around">
          <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
            <div className="text-center text-lg-left">
              <h2 className="h1">Save tons on development and maintance</h2>
              <p className="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div id="faq-accordion">
              <div className="card mb-2 mb-md-3">
                <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" className="p-3 p-md-4">
                  <div className="d-flex justify-content-between align-items-center">
                    <h6 className="mb-0 mr-2">Fully Responsive</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} loading="lazy" alt="Caret Right" className="icon icon-sm"/>
                  </div>
                </a>
                <div className="collapse" id="accordion-1" data-parent="#faq-accordion">
                  <div className="px-3 px-md-4 pb-3 pb-md-4">
                    Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                  </div>
                </div>
              </div>
              <div className="card mb-2 mb-md-3">
                <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" className="p-3 p-md-4">
                  <div className="d-flex justify-content-between align-items-center">
                    <h6 className="mb-0 mr-2">Multiple Layouts</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} loading="lazy" alt="Caret Right" className="icon icon-sm"/>
                  </div>
                </a>
                <div className="collapse" id="accordion-2" data-parent="#faq-accordion">
                  <div className="px-3 px-md-4 pb-3 pb-md-4">
                    Non pulvinar neque laoreet suspendisse interdum Catelyn libero id. Olenna imp leo in vitae turpis massa. Sapien habitant Tyrion.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="col-md-9 col-lg-5" data-aos="fade-in">
            <img src={"img/square-5.jpg"} alt="Image" className="img-fluid rounded shadow"/>
            <img src={"img/square-4.jpg"} alt="Image" className="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top right shadow-lg mt-5 mr-n5 mr-lg-n3 mr-xl-n5 d-none d-md-block" data-jarallax-element="-20 0"/>
          </div>

        </div>
      </div>
      <div className="divider divider-bottom bg-white"/>
    </section>
    </Layout>
  )
}