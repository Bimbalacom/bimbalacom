
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
    <Layout>
             <div data-overlay class="bg-primary-3 text-white o-hidden">
      <section>
        <div class="container">
          <div class="row text-center justify-content-center">
            <div class="col">
              <h1 class="display-3">Pricing that <mark data-aos="highlight-text" data-aos-delay="200">scales with you</mark></h1>
            </div>
          </div>
          <div class="row text-center justify-content-center">
            <div class="col-md-9 col-lg-8 col-xl-7">
              <p class="lead">Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
          </div>
        </div>
      </section>
      <div class="position-absolute w-100 h-100 top left" data-jarallax-element="100">
        <div class="blob blob-2 bg-gradient top left w-75 h-75"></div>
      </div>
      <div class="divider divider-bottom bg-light"></div>
    </div>
    <section class="bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body align-items-center shadow">

              <div class="text-center mb-4">
                <h4>Basic</h4>
                <div class="d-flex align-items-center justify-content-center mb-1">
                  <span class="h5 mb-0 mr-2">$</span>
                  <span class="display-3 mb-0 text-dark">19</span>
                </div>
                <div>Per user, per month</div>
              </div>
              <ul class="list-unstyled p-0">
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">2GB Cloud Storage</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">100GB CDN Bandwidth</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">98.88% Uptime Guarantee</h6>
                  </div>
                </li>
                <li class="my-3 opacity-50">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-danger-alt">
                      <img src={"img/icons/interface/icon-x.svg"} alt=" icon=" class="m-2 icon icon-xs bg-danger" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Personal Account Manager</h6>
                  </div>
                </li>
                <li class="my-3 opacity-50">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-danger-alt">
                      <img src={"img/icons/interface/icon-x.svg"} alt=" icon=" class="m-2 icon icon-xs bg-danger" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Enterprise SLA</h6>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-lg btn-block btn-outline-primary">Start with Basic</a>
            </div>
          </div>
          <div class="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="card card-body align-items-center shadow">
              <div class="badge badge-success badge-pill mb-4">Best Value</div>
              <div class="text-center mb-4">
                <h4>Premium</h4>
                <div class="d-flex align-items-center justify-content-center mb-1">
                  <span class="h5 mb-0 mr-2">$</span>
                  <span class="display-3 mb-0 text-dark">29</span>
                </div>
                <div>Per user, per month</div>
              </div>
              <ul class="list-unstyled p-0">
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">20GB Cloud Storage</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">1TB CDN Bandwidth</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">99.95% Uptime Guarantee</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Personal Account Manager</h6>
                  </div>
                </li>
                <li class="my-3 opacity-50">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-danger-alt">
                      <img src={"img/icons/interface/icon-x.svg"} alt=" icon=" class="m-2 icon icon-xs bg-danger" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Enterprise SLA</h6>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-lg btn-block btn-primary">Start with Premium</a>
            </div>
          </div>
          <div class="col-sm-9 col-md-7 col-lg-4 mb-3 mb-md-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="card card-body align-items-center shadow">

              <div class="text-center mb-4">
                <h4>Pro</h4>
                <div class="d-flex align-items-center justify-content-center mb-1">
                  <span class="h5 mb-0 mr-2">$</span>
                  <span class="display-3 mb-0 text-dark">79</span>
                </div>
                <div>Per user, per month</div>
              </div>
              <ul class="list-unstyled p-0">
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Unlimited Storage</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">100TB CDN Bandwidth</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">99.999% Uptime Guarantee</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Personal Account Manager</h6>
                  </div>
                </li>
                <li class="my-3">
                  <div class="d-flex align-items-center">
                    <div class="rounded-circle bg-success-alt">
                      <img src={"img/icons/interface/icon-check.svg"} alt=" icon=" class="m-2 icon icon-xs bg-success" data-inject-svg/>
                    </div>
                    <h6 class="mb-0 ml-3">Enterprise SLA</h6>
                  </div>
                </li>
              </ul>
              <a href="#" class="btn btn-lg btn-block btn-outline-primary">Start with Pro</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="p-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0 text-center">
            <div class="px-xl-3">
              <div>
                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                  <img src={"img/icons/theme/navigation/route.svg"} alt="Binoculars icon" class="icon bg-primary-2" data-inject-svg/>
                </div>
                <h5>Fully Responsive</h5>
                <div>
                  Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque Arya.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0 text-center">
            <div class="px-xl-3">
              <div>
                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                  <img src={"img/icons/theme/layout/layout-left-panel-2.svg"} alt="Layouts icon" class="icon bg-primary-2" data-inject-svg/>
                </div>
                <h5>Multiple Layouts</h5>
                <div>
                  Non pulvinar neque laoreet suspendisse interdum Catelyn libero id. Olenna imp leo in vitae turpis massa. Sapien habitant Tyrion.
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4 mb-md-0 text-center">
            <div class="px-xl-3">
              <div>
                <div class="d-inline-block mb-4 p-3 p-md-4 rounded-circle bg-primary-2-alt">
                  <img src={"img/icons/theme/shopping/box-2.svg"} alt="Box icon" class="icon bg-primary-2" data-inject-svg/>
                </div>
                <h5>Modular Components</h5>
                <div>
                  Khaleesi vedit sodales ut eu. Melisandre pellentesque elit eget Gendry est sociis natoque penatibus. Eunuch pulvinar sapien et Loras.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divider divider-bottom"></div>
    </section>
    <section>
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">FAQ</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <div id="faq-accordion">
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Can I upgrade later on?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" class="icon icon-sm" data-inject-svg/>
                  </div>
                </a>
                <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Integer ut Oberyn massa. Sed feugiat vitae turpis a porta. Aliquam sagittis interdum Melisandre. Vivamus ornare pharetra diam sit amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tempor ipsum, sit amet elementum neque. Sed faucibus posuere pharetra.
                    In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec eu commodo nunc. Mauris dignissim lectus massa, eget cursus quam mollis id. Eddard sit amet ex Jon nibh maximus cursus at vitae mi. Duis tincidunt
                    aliquam mi sed sagittis.

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Can I port my data from another provider?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" class="icon icon-sm" data-inject-svg/>
                  </div>
                </a>
                <div class="collapse" id="accordion-2" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Eunuch nec dapibus ex. Aenean placerat, ex imp convallis dictum, ex nulla rutrum justo, Jon lobortis nisi ex at leo. Sed Tyrion aliquet sem vel pharetra. Vestibulum ante ipsum primis in faucibus Hodor luctus et ultrices posuere cubilia Curae; Class aptent
                    taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis a sapien quis quam auctor feugiat. Donec volutpat condimentum risus, eu iaculis nibh dapibus eu.

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Are my food photos stored forever in the cloud?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" class="icon icon-sm" data-inject-svg/>
                  </div>
                </a>
                <div class="collapse" id="accordion-3" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Volantisi fringilla, unuch eu sagittis sagittis, urna Loras luctus odio, vitae hendrerit massa dui ac est. Donec leo tortor, Tyrion et aliquet at, convallis imp mi. Vivamus turpis diam, ultrices et tempus quis, sollicitudin et risus. Pellentesque nec
                    sapien imp dolor condimentum condimentum ut sed neque. Integer efficitur accumsan risus, vitae posuere massa aliquam at.

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-4" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Who foots the bill for that?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" class="icon icon-sm" data-inject-svg/>
                  </div>
                </a>
                <div class="collapse" id="accordion-4" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Khaleesi ornare pharetra diam sit amet tincidunt. Eunuch sit amet pharetra odio. Vivamus in tempor ipsum, sit amet elementum neque. Sed faucibus posuere pharetra. In imperdiet eleifend dui a aliquet. Aliquam imperdiet Tyrion purus vitae rutrum. Donec
                    eu commodo nunc. Vivamus Melisandre Jon lorem eget bibendum. Sed tincidunt sed enim at dignissim. Mauris erat diam, lacinia eget efficitur et, iaculis sed augue.

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-5" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">What's the real cost?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" class="icon icon-sm" data-inject-svg/>
                  </div>
                </a>
                <div class="collapse" id="accordion-5" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Brienne ac maximus Loras, eu placerat odio. Etiam vestibulum Loras et sollicitudin pellentesque. Mauris sed Tyrion Varys. Curabitur posuere augue risus, eget mollis unuch consectetur quis. Vestibulum accumsan congue risus, in semper eros interdum id.
                    Tincidunt vitae libero efficitur viverra. Integer venenatis massa in dui viverra fermentum. Eunuch fringilla arcu ac urna sodales fermentum. Ut luctus enim ut sagittis consectetur.

                  </div>
                </div>
              </div>
              <div class="card mb-2 mb-md-3">
                <a href="#accordion-6" data-toggle="collapse" role="button" aria-expanded="false" class="p-3 p-md-4">
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 mr-2">Can my company request a custom plan?</h6>
                    <img src={"img/icons/interface/icon-caret-right.svg"} alt="Caret Right" class="icon icon-sm" data-inject-svg/>
                  </div>
                </a>
                <div class="collapse" id="accordion-6" data-parent="#faq-accordion">
                  <div class="px-3 px-md-4 pb-3 pb-md-4">
                    Brienne ac maximus Loras, eu placerat odio. Etiam vestibulum Loras et sollicitudin pellentesque. Mauris sed Tyrion Varys. Curabitur posuere augue risus, eget mollis unuch consectetur quis. Vestibulum accumsan congue risus, in semper eros interdum id.

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="row justify-content-center mt-4 mt-md-5">
          <div class="col-auto">
            <div class="alert bg-light">Still have unanswered questions? <a href="/contact-us">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-primary text-white pb-0">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">People are diggin’ it</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-10 mb-3 mb-sm-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card card-body flex-md-row pl-md-3 bg-white">
              <img src={"img/avatars/male-4.jpg"} alt="Harvey Derwent avatar image" class="avatar d-block mr-md-5 ml-md-n5 mb-3 mb-md-0"/>
              <div>
                <blockquote class="blockquote pl-0 border-0 mb-3 mb-sm-4">
            &ldquo;We had all sorts of problems around motivation and productivity from our smallest scrums to our largest teams.  Jumpstart helped us rise above all and conquer.&rdquo;
        </blockquote>
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                  <h6 class="mb-0 mr-2">Harvey Derwent</h6>
                  <span>Resident Zen Master</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-9 col-md-10 mb-3 mb-sm-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card card-body flex-md-row pl-md-3 bg-white">
              <img src={"img/avatars/male-1.jpg"} alt="Harvey Derwent avatar image" class="avatar d-block mr-md-5 ml-md-n5 mb-3 mb-md-0"/>
              <div>
                <blockquote class="blockquote pl-0 border-0 mb-3 mb-sm-4">
            &ldquo;We had all sorts of problems around motivation and productivity from our smallest scrums to our largest teams. <mark data-aos="highlight-text" data-aos-delay="200">Jumpstart helped us rise above all and conquer.</mark>&rdquo;
        </blockquote>
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                  <h6 class="mb-0 mr-2">Harvey Derwent</h6>
                  <span>Resident Zen Master</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-9 col-md-10 mb-3 mb-sm-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card card-body flex-md-row pl-md-3 bg-white">
              <img src={"img/avatars/female-4.jpg"} alt="Shelley McNabb avatar image" class="avatar d-block mr-md-5 ml-md-n5 mb-3 mb-md-0"/>
              <div>
                <blockquote class="blockquote pl-0 border-0 mb-3 mb-sm-4">
            &ldquo;We all know the stigma around build times and the ever expanding arsenal of tooling in modern web apps. Fear not, Jumpstart does away with all of that.&rdquo;
        </blockquote>
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center">
                  <h6 class="mb-0 mr-2">Shelley McNabb</h6>
                  <span>Software Engineer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divider divider-bottom bg-primary-3"></div>
    </section>

    </Layout>
  )
}