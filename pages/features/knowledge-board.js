import Layout from "../../components/layout";
import React from "react";

export default function FirstPost() {
  return (
    <Layout title={'Knowledge Board'}>
    <section className="o-hidden">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                <h3 className="h1">Tell the people how is done</h3>
                <p className="lead">People love to learn. Why don't you provide them with information that they need they will love you even more.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5">
              <img src={"../img/illustrations/tell-how-is-done.svg"} alt="Love to learn" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden pt-0">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 className="h1">Help your team work / party more</h2>
                <p className="lead">Developers / Support / Managers love they're jobs. Don't make them do stuff 4-5 times just because you don't have a good system behind you. Help yourself by helping them.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src={"../img/illustrations/party.svg"} alt="Help your team party / work" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">
              <div>
                <h3 className="h1">Files away</h3>
                <p className="lead">Not everything can be explained by only text. We support uploading images/files/etc.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5">
              <img src={"../img/illustrations/documents.svg"} alt="Files away" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
      <section className="o-hidden pt-0">
        <div className="container">
          <div className="row align-items-center justify-content-around text-center text-lg-left">
            <div className="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
              <div>
                <h2 className="h1">Tidy</h2>
                <p className="lead">All necessary in one place. Keep the important things for your users in a single page.</p>
              </div>
            </div>
            <div className="col-md-9 col-lg-6 col-xl-5 order-lg-1">
              <img src={"../img/illustrations/work_time.svg"} alt="Work Time" className="img-fluid" />
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}