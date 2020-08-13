import Link from "next/link";
import React from "react";

export default function ComingSoon(){
    return (
        <section className="bg-primary-3 text-white p-0 o-hidden">
            <div
                className="container min-vh-100 d-flex flex-column justify-content-between text-center py-4 py-md-5">
                <div className="my-5">
                    <div className="row justify-content-center">
                        <div className="col-5 mb-4">
                            <img src={"/img/case-studies/comingsoon.jpg"} alt="404 Page Not Found"
                                 className="img-fluid" />
                        </div>
                        <div className="col-12">
                            <h1>Coming soon...</h1>
                            <div className="lead">Something awesome is being prepared here.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )
}