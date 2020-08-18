import Layout from '../components/layout'
import Link from 'next/link'
import {DefaultSeo} from 'next-seo';

export default function Home() {
    return (
        <Layout title={'Home - Bimbala.com'}>
            <div data-overlay className="o-hidden">
                <section className="bg-primary-3 text-white pb-0 o-hidden">
                    <div className="container">
                        <div className="row justify-content-between align-items-center">
                            <div className="col-xl-5 col-lg-6 text-center text-lg-left mb-4 mb-md-5 mb-lg-0"
                                 data-aos="fade-right">
                                <h1 className="display-3">A modular software for your support upgrade.</h1>
                                <p className="lead">Grab it now and make your business awesome. About 5M customers are
                                    more satisfied after the project became using Bimbala!</p>
                                <a href={"/why-us"} className="btn btn-lg btn-primary">Why us?</a>
                            </div>
                            <div className="col" data-aos="fade-left" data-aos-delay="250">
                                <img src={"/img/desktop-app/desktop-app-2.jpg"} alt="Screenshot"
                                     className="img-fluid rounded shadow-lg border"/>
                            </div>
                        </div>
                    </div>
                    <div className="w-50 h-50 bottom right position-absolute" data-jarallax-element="50">
                        <div className="blob blob-2 bg-gradient w-100 h-100"/>
                    </div>
                    <div className="w-50 h-50 bottom right position-absolute" data-jarallax-element="75">
                        <div className="blob blob-4 bg-white opacity-10 w-100 h-100"/>
                    </div>
                    <div className="divider divider-bottom bg-white"/>
                </section>
                <section>
                    <div className="container">
                        <div className="row">
                            <div className="col-md-4 mb-4 mb-md-0">
                                <div>
                                    <img src={"/img/icons/theme/general/thunder-move.svg"} alt="Lightning icon"
                                         className="icon bg-primary-alt rounded-circle p-1"/>
                                    <h5 className="mt-4">Suits Your Style</h5>
                                    <div>
                                        Drogon sed ut perspiciatis unde omnis iste error sit voluptatem accusantium
                                        doloremque laudantium, totam aperiam, eaque Arya.
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4 mb-md-0">
                                <div>
                                    <img src={"/img/icons/theme/general/bookmark.svg"} alt="Bookmark icon"
                                         className="icon bg-primary-alt rounded-circle p-1"/>
                                    <h5 className="mt-4">Well Documented</h5>
                                    <div>
                                        Duis convallis convallis tellus imp interdum. Non diam phasellus vestibulum
                                        lorem sed risus ultricies Tyrion. Enim blandit volutpat.
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-4 mb-4 mb-md-0">
                                <div>
                                    <img src={"/img/icons/theme/design/select.svg"} alt="Selection interface icon"
                                         className="icon bg-primary-alt rounded-circle p-1"/>
                                    <h5 className="mt-4">Highly Customizable</h5>
                                    <div>
                                        Eunuch sed blandit libero volutpat sed cras. Cersei quis imperdiet tincidunt
                                        unuch pulvinar sapien. Habitasse platea Davos vestibulum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-primary-3 text-white">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Why are we diffirent?</h3>
        </div>
        </div>
        <div class="row justify-content-center">
          <div class="col d-flex flex-wrap justify-content-center">
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/navigation/route.svg"} alt="Fully responsive" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Fully Responsive</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/layout/layout-left-panel-2.svg"} alt="Layouts icon" class="icon mr-3 bg-primary"/>
                <h5 class="mb-0">Multiple Layouts</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/shopping/box-2.svg"} alt="Box icon" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Modular Components</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/general/thunder-move.svg"} alt="Lightning icon" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Suits Your Style</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/general/bookmark.svg"} alt="Bookmark icon" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Well Documented</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/design/select.svg"} alt="Selection interface icon" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Highly Customizable</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/general/fire.svg"} alt="Fire icon" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Saves You Time</h5>
              </div>
            </div>
            <div class="m-2 text-dark">
              <div class="media rounded align-items-center pl-3 pr-4 pl-md-4 pr-md-5 py-2 bg-white text-dark">
                <img src={"img/icons/theme/food/sushi.svg"} alt="Sushi icon" class="icon mr-3 bg-primary" />
                <h5 class="mb-0">Delicious Stuff</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
                <section class="bg-light o-hidden">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h2 class="display-4">Make a diffirence with Bimbala</h2>
            <div class="lead">Changing the way you support your clients in only 3 steps!</div>
          </div>
        </div>
        <div class="row align-items-center justify-content-around">
          <div class="col-md-9 col-lg-5" data-aos="fade-in">
            <img src={"img/square-2.jpg"} alt="Image" class="img-fluid rounded shadow"/>
            <img src={"img/square-1.jpg"} alt="Image" class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top left shadow-lg mt-5 ml-n5 ml-lg-n3 ml-xl-n5 d-none d-md-block" data-jarallax-element="-20 0"/>
          </div>
          <div class="col-md-9 col-lg-6 col-xl-5 mt-4 mt-md-5 mt-lg-0">
            <ol class="list-unstyled p-0">
              <li class="d-flex align-items-start my-4 my-md-5">
                <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                  <div class="position-absolute text-white h5 mb-0">1</div>
                </div>
                <div class="ml-3 ml-md-4">
                  <h4>Create account</h4>
                  <p>
                    It is really easy!
                  </p>
                  <a href="#">Create one now</a>
                </div>
              </li>
              <li class="d-flex align-items-start my-4 my-md-5">
                <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                  <div class="position-absolute text-white h5 mb-0">2</div>
                </div>
                <div class="ml-3 ml-md-4">
                  <h4>Add information</h4>
                  <p>
                    Add everything about your product in our service. That way your clients know what and where it is happening.
                  </p>
                </div>
              </li>
              <li class="d-flex align-items-start my-4 my-md-5">
                <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                  <div class="position-absolute text-white h5 mb-0">3</div>
                </div>
                <div class="ml-3 ml-md-4">
                  <h4>Share and enjoy</h4>
                  <p>
                    Your clients will love the new way of communicating between you. The new way of working will help productivity by more then 29%.
                  </p>
                </div>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </section>

                <section className="border-bottom" id="counters">
                    <div className="container">
                        <div className="row justify-content-between align-items-start">
                            <div className="col-lg-3 mb-4 sticky-lg-top">
                                <h4>Part of our numbers</h4>
                            </div>
                            <div className="col-lg-8">
                                <div className="row mb-md-5 mb-4">
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="97"
                                            data-duration="" data-decimal-places="" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="%" data-easing=""/>
                                        <h6>User Satisfaction</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="20" data-end="24"
                                            data-duration="1" data-decimal-places="" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="/7" data-easing="false"/>
                                        <h6>Support</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="142"
                                            data-duration="" data-decimal-places="" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="k+" data-easing=""/>
                                        <h6>Downloads</h6>
                                    </div>
                                </div>
                                <div className="row mb-md-5 mb-4">
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="99.99"
                                            data-duration="" data-decimal-places="2" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="%" data-easing=""/>
                                        <h6>Uptime</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="4.9"
                                            data-duration="" data-decimal-places="1" data-prefix="" data-separator=""
                                            data-grouping="" data-suffix="/5" data-easing=""/>
                                        <h6>Average Rating</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="527439"
                                            data-end="529467" data-duration="1000" data-decimal-places="" data-prefix=""
                                            data-separator="," data-grouping="true" data-suffix="" data-easing="false"/>
                                        <h6>Loyal followers</h6>
                                    </div>
                                </div>
                                <div className="row mb-md-5 mb-4">
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="450"
                                            data-duration="" data-decimal-places="" data-prefix="$" data-separator=","
                                            data-grouping="true" data-suffix="k" data-easing=""/>
                                        <h6>Paid out this year</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="1282417"
                                            data-end="1283744" data-duration="3981" data-decimal-places=""
                                            data-prefix="" data-separator="," data-grouping="true" data-suffix=""
                                            data-easing="false"/>
                                        <h6>Active Accounts</h6>
                                    </div>
                                    <div className="col-6 col-sm-4">
                                        <h2 className="text-primary mb-2" data-countup data-start="" data-end="37634"
                                            data-duration="" data-decimal-places="" data-prefix="" data-separator=","
                                            data-grouping="true" data-suffix="+" data-easing=""/>
                                        <h6>Support Tickets Closed</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {/*TODO: Integrations listing*/}
            </div>
        </Layout>
    )
}