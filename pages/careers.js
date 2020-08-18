import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
        <Layout title={'Carrers - Bimbala.com'}>
      <section class="pb-0 bg-light">
        <div class="container">
          <div class="row section-title justify-content-center text-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <h3 class="display-4">Job Vacancies</h3>
              <div class="lead">Be a part of a team making a diffirentce in one of the best industries.</div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-10">
              <div class="px-3 d-none d-md-block">
                <div class="row mb-4">
                  <div class="col">
                    <h5 class="mb-0">Position</h5>
                  </div>
                  <div class="col-3">
                    <h5 class="mb-0">Department</h5>
                  </div>
                  <div class="col-3">
                    <h5 class="mb-0">Location</h5>
                  </div>
                </div>
              </div>
              <a href="#" class="card card-body px-3 py-4 flex-sm-row align-items-center justify-content-between hover-box-shadow mb-2 mb-sm-3">
                <div class="col-auto col-md">
                  <h6 class="mb-0">Design Director</h6>
                </div>
                <div class="col-auto col-md-3">
                  Design
                </div>
                <div class="col-auto col-md-3">
                  Remove
                </div>
              </a>
            </div>
          </div>
          <div class="row justify-content-center mt-3 mt-md-4">
            <div class="col-auto">
              <div class="alert bg-secondary">Don't see a good fit? <a href="mailto:contact@bimbala.com">Submit your r&eacute;sum&eacute;</a>
              </div>
            </div>
          </div>
        </div>
        <div class="divider divider-bottom bg-primary-3"></div>
    </section>

    </Layout>
  )
}