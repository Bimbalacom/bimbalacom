import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
        <Layout title={'Team - Bimbala.com'}>
            <div className="o-hidden" data-overlay>
                <section className="pb-0">
                    <div className="container">
                        <div
                            className="row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                            <div className="col-md-9 col-lg-6 col-xl-5 pl-lg-5 pl-xl-0 order-lg-2" data-aos="fade-left"
                                 data-aos-delay="250">
                                <h1 className="display-3">A feisty group of <mark data-aos="highlight-text"
                                                                                  data-aos-delay="500">change
                                    makers</mark></h1>
                                <p className="lead">
                                    
                                </p>
                               
                            </div>
                            <div className="col-md-8 col-lg-6 mt-4 mt-md-5 mt-lg-0 order-lg-1" data-aos="fade-right">
                                <img src="img/about-1.jpg" alt="Image" className="rounded img-fluid shadow-lg"/>
                            </div>
                        </div>
                    </div>
                    <div className="position-absolute w-50 h-100 top right" data-jarallax-element="50">
                        <div className="blob bg-primary opacity-20 w-100 h-100 top left"/>
                    </div>
                    <div className="divider divider-bottom bg-primary-3"/>
                </section>
            </div>
            <section className="bg-primary-3 text-white">
                <div className="container">
                    <div className="row section-title justify-content-center text-center">
                        <div className="col-md-9 col-lg-8 col-xl-7">
                            <h3 className="display-4">What we’re about</h3>
                            <div className="lead">
                            </div>
                        </div>
                    </div>
                </div>
                <div className="o-hidden">
                    <div className="highlight-selected" data-flickity='{ "imagesLoaded": true, "wrapAround":true }'>
                        <div className="carousel-cell text-center col-9 col-md-7 col-lg-5">
                            <img className="img-fluid rounded" src={"img/blog/thumb-3.jpg"} alt="blog.3.image"/>
                        </div>
                        <div className="carousel-cell text-center col-9 col-md-7 col-lg-5">
                            <img className="img-fluid rounded" src={"img/blog/thumb-4.jpg"} alt="blog.4.image"/>
                        </div>
                        <div className="carousel-cell text-center col-9 col-md-7 col-lg-5">
                            <img className="img-fluid rounded" src={"img/blog/thumb-5.jpg"} alt="blog.5.image"/>
                        </div>
                        <div className="carousel-cell text-center col-9 col-md-7 col-lg-5">
                            <img className="img-fluid rounded" src={"img/blog/thumb-8.jpg"} alt="blog.6.image"/>
                        </div>
                        <div className="carousel-cell text-center col-9 col-md-7 col-lg-5">
                            <img className="img-fluid rounded" src={"img/blog/thumb-6.jpg"} alt="blog.7.image"/>
                        </div>
                        <div className="carousel-cell text-center col-9 col-md-7 col-lg-5">
                            <img className="img-fluid rounded" src={"img/blog/thumb-7.jpg"} alt="blog.8.image"/>
                        </div>
                    </div>
                </div>
            </section>
            <section className="bg-light">
                <div className="container">
                    <div className="row section-title justify-content-center text-center">
                        <div className="col-md-9 col-lg-8 col-xl-7">
                            <h3 className="display-4">We glow all the way up</h3>
                            <div className="lead">
                            </div>
                            <br/><h5>The team in mostly alphabetical order</h5>
                        </div>
                    </div>
                    <div className="row justify-content-center">
                        <div className="col-xl-10 col-lg-11">
                            <div className="row justify-content-center">
                                <div className="col-xl-10">
                                    <div className="row">
                                        <div className="col-sm-6 text-center mb-5">
                                            <div className="d-flex flex-column align-items-center">
                                                <img src={"img/avatars/gkanev.jpg"} alt="Gabriel Kanev profile image"
                                                     className="avatar avatar-xl mb-4"/>
                                                <h5 className="mb-2">Gabriel Kanev</h5>
                                                <div className="mb-3">Co-Founder & loves ducks</div>
                                                <ul className="list-unstyled d-flex mb-0">
                                                    <li className="mx-2">
                                                        <a href={"https://twitter.com/mrgkanev"} className="hover-fade-out">
                                                            <img src="img/icons/social/twitter.svg" alt="Twitter"
                                                                 className="icon icon-xs"/>
                                                        </a>
                                                    </li>
                                                    <li className="mx-2">
                                                        <a href={"https://github.com/mrgkanev"} className="hover-fade-out">
                                                            <img src="img/icons/social/github.svg" alt="Github"
                                                                 className="icon icon-xs"/>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div className="col-sm-6 text-center mb-5">
                                            <div className="d-flex flex-column align-items-center">
                                                <img src={"img/avatars/lalexandrov.jpg"}
                                                     alt="Lyuboslav Alexandrov profile image"
                                                     className="avatar avatar-xl mb-4"/>
                                                <h5 className="mb-2">Lyuboslav Alexandrov</h5>
                                                <div className="mb-3">Co-Founder & loves shitty frameworks</div>
                                                <ul className="list-unstyled d-flex mb-0">
                                                    <li className="mx-2">
                                                        <a href={"https://fb.me/lyuboslav.alexandrov"}
                                                           className="hover-fade-out">
                                                            <img src="img/icons/social/facebook.svg" alt="Facebook"
                                                                 className="icon icon-xs"/>
                                                        </a>
                                                    </li>
                                                    <li className="mx-2">
                                                        <a href={"https://github.com/lubo1998"}
                                                           className="hover-fade-out">
                                                            <img src="img/icons/social/github.svg" alt="Github"
                                                                 className="icon icon-xs"/>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="row justify-content-center mt-3 mt-sm-4">
                        <div className="col-auto">
                            <div className="alert bg-secondary">We think you'll fit in here. <a href={"/careers"}>Submit
                                your r&eacute;sum&eacute;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {/* <Companies/> */}
        </Layout>
    )
}