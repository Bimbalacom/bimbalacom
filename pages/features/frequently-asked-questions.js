import Layout from "../../components/layout";
import React from "react";

export default function FirstPost() {
  return (
    <Layout title={'Frequently Asked Questions'}>
    <section className="o-hidden">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                <h3 className="h1">Everybody has questions</h3>
                <p className="lead">Isn't it better to help your clients out ?!? People can read information from everywhere but you can give them what they exactly need.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5">
              <img src={"../img/illustrations/faq.svg"} alt="FAQ" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden pt-0">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 className="h1">Questions the experts</h2>
                <p className="lead">You are the best source of information about your software / startup. Giving the right answers when it counts is something that people remember.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src={"../img/illustrations/questions.svg"} alt="Questions the experts" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                <h3 className="h1">Let's vote it out</h3>
                <p className="lead">You can see it live if your answers are helping people out or need to be reworked. Rome wasn't build</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5">
              <img src={"../img/illustrations/voting.svg"} alt="Voting" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden pt-0">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 className="h1">Show people you care</h2>
                <p className="lead">Let's make the support team great again...</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src={"../img/illustrations/detailed_information.svg"} alt="Show people you care" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}