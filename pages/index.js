import Layout from '../components/layout'
import Link from 'next/link'
import { DefaultSeo } from 'next-seo';
import TagManager from 'react-gtm-module'

{/*const tagManagerArgs = {
    gtmId: 'GTM-5PHBJG2'
} 


TagManager.initialize(tagManagerArgs);
*/}




export default function Home() {
  return (
    <Layout>
        <div data-overlay className="o-hidden">
            <section className="bg-primary-3 text-white pb-0 o-hidden">
                <div className="container">
                    <div className="row justify-content-between align-items-center">
                        <div className="col-xl-5 col-lg-6 text-center text-lg-left mb-4 mb-md-5 mb-lg-0"
                             data-aos="fade-right">
                            <h1 className="display-3">A modular Saas for support integration.</h1>
                            <p className="lead">Grab it now and make your business awesome. About 5M customers are more satisfied after the project became using Bimbala!</p>
                            <a href="#" className="btn btn-lg btn-primary">Pricing</a>
                        </div>
                        <div className="col" data-aos="fade-left" data-aos-delay="250">
                            <img src={"/img/desktop-app/desktop-app-2.jpg"} alt="Screenshot"
                                 className="img-fluid rounded shadow-lg border" />
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
                                     className="icon bg-primary"  />
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
                                     className="icon bg-primary" />
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
                                     className="icon bg-primary" />
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
        </div>
    </Layout>
  )
}
