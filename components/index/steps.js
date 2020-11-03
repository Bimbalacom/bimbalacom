import React from "react";
import Strengths from "../strengths";
export default function Steps(){
    return (
        <section className="bg-light o-hidden">
            <div className="container">
                <div className="row section-title justify-content-center text-center">
                    <div className="col-md-9 col-lg-8 col-xl-7">
                        <h2 className="display-4">Make a difference with Bimbala</h2>
                        <div className="lead">Changing the way you support your clients in only 3 steps!</div>
                    </div>
                </div>
                <div className="row align-items-center justify-content-around">
                    <div className="col-md-9 col-lg-5" data-aos="fade-in">
                        <img src={"img/case-studies/thumb-7.jpg"} alt="Image" className="img-fluid rounded shadow" />
                    </div>
                    <div className="col-md-9 col-lg-6 col-xl-5 mt-4 mt-md-5 mt-lg-0">
                        <ol className="list-unstyled p-0">
                            <li className="d-flex align-items-start my-4 my-md-5">
                                <div className="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                                    <div className="position-absolute text-white h5 mb-0">1</div>
                                </div>
                                <div className="ml-3 ml-md-4">
                                    <h4>Create account</h4>
                                    <p>It is really easy!</p>
                                    <a href="#">Create one now</a>
                                </div>
                            </li>
                            <li className="d-flex align-items-start my-4 my-md-5">
                                <div className="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                                    <div className="position-absolute text-white h5 mb-0">2</div>
                                </div>
                                <div className="ml-3 ml-md-4">
                                    <h4>Add information</h4>
                                    <p>Add everything about your product in our service. That way your clients know what and where it is happening.</p>
                                </div>
                            </li>
                            <li className="d-flex align-items-start my-4 my-md-5">
                                <div className="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-success">
                                    <div className="position-absolute text-white h5 mb-0">3</div>
                                </div>
                                <div className="ml-3 ml-md-4">
                                    <h4>Share and enjoy</h4>
                                    <p>Your clients will love the new way of communicating between you. The new way of working will help productivity by more then 29%.</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <Strengths />
            </div>
        </section>
    )
}