import Layout from "../../components/layout";
import React from "react";

export default function Blog(){
    return (
        <Layout>
            <section className={"bg-primary-3"}>
                <div className="container">
                    <div className="row">
                        <div className="col">
                            <div className="mb-4 mb-md-5" data-aos="fade-up">
                                <div
                                    className="d-flex flex-column flex-lg-row no-gutters border rounded bg-white o-hidden">
                                    <a href="#" className="d-block position-relative bg-gradient col-xl-5">
                                        <img className="flex-fill hover-fade-out" src="/img/blog/thumb-2.jpg"
                                             alt="blog.1.image" />
                                            <div className="divider divider-side bg-white d-none d-lg-block"/>
                                    </a>
                                    <div className="p-4 p-md-5 col-xl-7 d-flex align-items-center">
                                        <div className="p-lg-4 p-xl-5">
                                            <div
                                                className="d-flex justify-content-between align-items-center mb-3 mb-xl-4">
                                                <a href="#" className="badge badge-pill badge-danger">Design</a>
                                                <div className="text-small text-muted">October 10th</div>
                                            </div>
                                            <a href="#">
                                                <h1>Unveiling our new vision for Jumpstart</h1>
                                            </a>
                                            <p className="lead">
                                                Volantis vitae unuch sed velit sodales. Sandor imperdiet proin fermentum
                                                leo vel Hodor.
                                            </p>
                                            <a href="#" className="lead">Read Story</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="row justify-content-center mt-4">
                        <div className="col-auto">
                            <nav>
                                <ul className="pagination">
                                    <li className="page-item">
                                        <a className="page-link rounded" href="#" aria-label="Previous">
                                            <img src="/img/icons/interface/icon-arrow-left.svg" alt="Arrow Left"
                                                 className="icon icon-xs"/>
                                        </a>
                                    </li>
                                    <li className="page-item active"><a className="page-link" href="#">1</a>
                                    </li>
                                    <li className="page-item"><a className="page-link" href="#">2</a>
                                    </li>
                                    <li className="page-item"><a className="page-link" href="#">3</a>
                                    </li>
                                    <li className="page-item">
                                        <a className="page-link rounded" href="#" aria-label="Next">
                                            <img src="/img/icons/interface/icon-arrow-right.svg" alt="Arrow Right"
                                                 className="icon icon-xs"/>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </Layout>
    )
}