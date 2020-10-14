import Link from 'next/link'
import Layout from "../components/layout";
import React from "react";

export default function Integrations() {
  return (
    <Layout title={'Integrations'}>
      <section class="p-0 bg-primary row no-gutters o-hidden">
      <div class="col-lg-5 col-xl-6 d-flex align-items-center justify-content-center">
        <img src={"img/illustrations/integrations.svg"} alt="Integrations"  width="75%" height="75%"/>
        <div class="divider divider-side bg-primary d-none d-lg-block"></div>
      </div>
      <div class="col-lg-7 col-xl-6">
        <section>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col col-md-10 col-xl-9">
                <div class="text-white text-center text-lg-left">
                  <h3 class="h1">Connect your apps</h3>
                  <p class="lead">
                    Get and send all kind of data everywhere. <br />Who doesn't love automatisation?
                  </p>
                </div>
          </div>
            </div>
          </div>
        </section>
      </div>
    </section>
      <section>
        <div className="row section-title justify-content-center text-center">
          <div className="col-md-9 col-lg-8 col-xl-7"><h3 className="display-4">Integrations</h3><div className="lead">We love integrationg other people's projects and that is why we are doing it every day.</div></div></div>
        <div className="container">
          <div className="row justify-content-center text-center">
            <div className="col-md-auto" data-aos={"fade-up"}>
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0" data-aos-delay="0">
               <img src={"img/integrations/GA-logo-color.svg"} alt="Google Analytics" width="150px" height="250px" /><br />
                Google Analytics
              </div>
            </div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="100">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <img src={"img/integrations/google-tag-manager.svg"} alt="Google Tag Manager" width="150px" height="250px" /><br />
                Google Tag Manager
              </div>
            </div>
              <div className="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <img src={"/img/logos/bimbalaLogo_head.svg"} alt="Bimbala head logo" width="150px" height="250px" /><br />
                More to come ...
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-primary-3 text-white">
      <div class="container">
        <div class="row text-center">
        <h3 className="display-4">Don't see your integration?</h3>
        <div className="lead">Please take a moment and suggest what you think we should integrate. </div>
        </div>
      </div>
    </section>
    <div className="container">Integrate a google form maybe</div>
    </Layout>
  )
}