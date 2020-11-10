
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
        <Layout title={'Pricing'}>
             <div data-overlay className="bg-primary-3 text-white o-hidden">
      <section>
        <div className="container">
          <div className="row text-center justify-content-center">
            <div className="col">
              <h1 className="display-3">Pricing which is <mark data-aos="highlight-text" data-aos-delay="200">specially made for you</mark></h1>
            </div>
          </div>
          <div className="row text-center justify-content-center">
            <div className="col-md-9 col-lg-8 col-xl-7">
              <p className="lead">We are a startup and wanted to help people out. That is why until we finish our MVP these are our pricing:</p>
            </div>
          </div>
        </div>
      </section>
      <div className="position-absolute w-100 h-100 top left" data-jarallax-element="100">
        <div className="blob blob-2 bg-gradient top left w-75 h-75"/>
      </div>
      <div className="divider divider-bottom bg-light"/>
    </div>
    <section className="bg-light">
      <div className="container">
        <div className="row align-items-center justify-content-center">
          <div className="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div className="card card-body align-items-center shadow">
              <div className="badge badge-success badge-pill mb-4">Best Value</div>
              <div className="text-center mb-4">
                <h4>Before MVP</h4>
                <div className="d-flex align-items-center justify-content-center mb-1">
                  <span className="h5 mb-0 mr-2">$</span>
                  <span className="display-3 mb-0 text-dark">9.99</span>
                </div>
                <div>Per month</div>
              </div>
              <ul className="list-unstyled p-0">
                <li className="my-3">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" className="m-2 icon icon-xs " />
                    </div>
                    <h6 className="mb-0 ml-3">Unlimited users</h6>
                  </div>
                </li>
                <li className="my-3">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" className="m-2 icon icon-xs " />
                    </div>
                    <h6 className="mb-0 ml-3">New major features every month</h6>
                  </div>
                </li>
                <li className="my-3">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" className="m-2 icon icon-xs " />
                    </div>
                    <h6 className="mb-0 ml-3">99% Uptime Guarantee</h6>
                  </div>
                </li>
                <li className="my-3">
                  <div className="d-flex align-items-center">
                    <div className="rounded-circle bg-success">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" className="m-2 icon icon-xs " />
                    </div>
                    <h6 className="mb-0 ml-3">Personal Account Manager</h6>
                  </div>
                </li>
              </ul>
              <a href="#" className="btn btn-lg btn-block btn-primary">Start</a>
            </div>
          </div>
     </div>
      </div>
    </section>
    <section className="p-0 bg-light">
      <div className="container">
        <div className="row">
        </div>
      </div>
      <div className="divider divider-bottom"/>
    </section>
    <section>
      <div className="container">
        <div className="row section-title justify-content-center text-center">
          <div className="col-md-9 col-lg-8 col-xl-7">
            <h3 className="display-4">FAQ</h3>
            <div className="lead">Let's answer some questions</div>
          </div>
        </div>
        <div className="row justify-content-center">
          <div className="col-md-9 col-lg-8 col-xl-7">
            <div id="faq-accordion">
              <div className="card mb-2 mb-md-3">
                <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" className="p-3 p-md-4">
                  <div className="d-flex justify-content-between align-items-center">
                    <h6 className="mb-0 mr-2">How long will the building of the MVP last?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" className="icon icon-sm" />
                  </div>
                </a>
                <div className="collapse" id="accordion-1" data-parent="#faq-accordion">
                  <div className="px-3 px-md-4 pb-3 pb-md-4">
                    Hopefully we will be ready end of Q2 2021.
                  </div>
                </div>
              </div>
              <div className="card mb-2 mb-md-3">
                <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" className="p-3 p-md-4">
                  <div className="d-flex justify-content-between align-items-center">
                    <h6 className="mb-0 mr-2">Do you offer refunds?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" className="icon icon-sm" />
                  </div>
                </a>
                <div className="collapse" id="accordion-2" data-parent="#faq-accordion">
                  <div className="px-3 px-md-4 pb-3 pb-md-4">
                    Yes, you can. Just check your account out.
                  </div>
                </div>
              </div>
              <div className="card mb-2 mb-md-3">
                <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false" className="p-3 p-md-4">
                  <div className="d-flex justify-content-between align-items-center">
                    <h6 className="mb-0 mr-2">Can I change my plan?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" className="icon icon-sm" />
                  </div>
                </a>
                <div className="collapse" id="accordion-3" data-parent="#faq-accordion">
                  <div className="px-3 px-md-4 pb-3 pb-md-4">
                    For now we only have one plan until the end of our MVP. After that there will be plans, but we can't give you more information for now.
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div className="row justify-content-center mt-4 mt-md-5">
          <div className="col-auto">
            <div className="alert bg-light">Still have unanswered questions? <a href="/contact-us">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    {/* <section className="bg-primary text-white pb-0">
      <div className="container">
        <div className="row section-title justify-content-center text-center">
          <div className="col-md-9 col-lg-8 col-xl-7">
            <h3 className="display-4">People are diggin’ it</h3>
            <div className="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div className="row justify-content-center">
          <div className="col-xl-8 col-lg-9 col-md-10 mb-3 mb-sm-4" data-aos="fade-up" data-aos-delay="100">
            <div className="card card-body flex-md-row pl-md-3 bg-white">
              <img src={"img/avatars/male-4.jpg"} alt="Harvey Derwent avatar image" className="avatar d-block mr-md-5 ml-md-n5 mb-3 mb-md-0"/>
              <div>
                <blockquote className="blockquote pl-0 border-0 mb-3 mb-sm-4">
            &ldquo;We had all sorts of problems around motivation and productivity from our smallest scrums to our largest teams.  Jumpstart helped us rise above all and conquer.&rdquo;
        </blockquote>
                <div className="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                  <h6 className="mb-0 mr-2">Harvey Derwent</h6>
                  <span>Resident Zen Master</span>
                </div>
              </div>
            </div>
          </div>
          <div className="col-xl-8 col-lg-9 col-md-10 mb-3 mb-sm-4" data-aos="fade-up" data-aos-delay="200">
            <div className="card card-body flex-md-row pl-md-3 bg-white">
              <img src={"img/avatars/male-1.jpg"} alt="Harvey Derwent avatar image" className="avatar d-block mr-md-5 ml-md-n5 mb-3 mb-md-0"/>
              <div>
                <blockquote className="blockquote pl-0 border-0 mb-3 mb-sm-4">
            &ldquo;We had all sorts of problems around motivation and productivity from our smallest scrums to our largest teams. <mark data-aos="highlight-text" data-aos-delay="200">Jumpstart helped us rise above all and conquer.</mark>&rdquo;
        </blockquote>
                <div className="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                  <h6 className="mb-0 mr-2">Harvey Derwent</h6>
                  <span>Resident Zen Master</span>
                </div>
              </div>
            </div>
          </div>
          <div className="col-xl-8 col-lg-9 col-md-10 mb-3 mb-sm-4" data-aos="fade-up" data-aos-delay="300">
            <div className="card card-body flex-md-row pl-md-3 bg-white">
              <img src={"img/avatars/female-4.jpg"} alt="Shelley McNabb avatar image" className="avatar d-block mr-md-5 ml-md-n5 mb-3 mb-md-0"/>
              <div>
                <blockquote className="blockquote pl-0 border-0 mb-3 mb-sm-4">
            &ldquo;We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps. Fear not, Jumpstart does away with all of that.&rdquo;
        </blockquote>
                <div className="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                  <h6 className="mb-0 mr-2">Shelley McNabb</h6>
                  <span>Software Engineer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className="divider divider-bottom bg-primary-3"/>
    </section> */}

    </Layout>
  )
}