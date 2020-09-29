import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
        <Layout title={'Carrers'}>
      <section className="pb-0 bg-light">
        <div className="container">
          <div className="row section-title justify-content-center text-center">
            <div className="col-md-9 col-lg-8 col-xl-7">
              <h3 className="display-4">Job Vacancies</h3>
              <div className="lead">Be a part of a team making a diffirentce in one of the best industries.</div>
            </div>
          </div>
          <div className="row justify-content-center">
            <div className="col-xl-8 col-lg-9 col-md-10">
              <div className="px-3 d-none d-md-block">
                <div className="row mb-4">
                  <div className="col">
                    <h5 className="mb-0">Position</h5>
                  </div>
                  <div className="col-3">
                    <h5 className="mb-0">Department</h5>
                  </div>
                  <div className="col-3">
                    <h5 className="mb-0">Location</h5>
                  </div>
                </div>
              </div>
              <a href="#" className="card card-body px-3 py-4 flex-sm-row align-items-center justify-content-between hover-box-shadow mb-2 mb-sm-3">
                <div className="col-auto col-md">
                  <h6 className="mb-0">Design Director</h6>
                </div>
                <div className="col-auto col-md-3">
                  Design
                </div>
                <div className="col-auto col-md-3">
                  Remote
                </div>
              </a>
            </div>
          </div>
          <div className="row justify-content-center mt-3 mt-md-4">
            <div className="col-auto">
              <div className="alert bg-secondary">Don't see a good fit? <a href="mailto:contact@bimbala.com">Submit your r&eacute;sum&eacute;</a>
              </div>
            </div>
          </div>
        </div>
        <div className="divider divider-bottom bg-primary-3"></div>
    </section>

    </Layout>
  )
}