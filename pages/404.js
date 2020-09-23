import React from 'react'
import Link from "next/link";
import Layout from "../components/layout";
export default class Custom404 extends React.Component {
    componentDidMount(){
        document.querySelector('body').classList.add('loaded');
    }
    render() {
        return (
            <Layout title={'404'}>
                <section className="bg-primary-3 text-white p-0 o-hidden">
                    <div
                        className="container min-vh-100 d-flex flex-column justify-content-between text-center py-4 py-md-5">
                        <div className="my-5">
                            <div className="row justify-content-center">
                                <div className="col-5 mb-4">
                                    <img src={"/img/illustrations/illustration-4.svg"} alt="404 Page Not Found"
                                         className="img-fluid" />
                                </div>
                                <div className="col-12">
                                    <h1>404 - Page Not Found</h1>
                                    <div className="lead">Whoops, it looks like the shark ate your desired page.</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <Link href={"/"} passHref={true}>
                                <a className="btn btn-sm btn-outline-light fade-page">Back to Home</a>
                            </Link>
                        </div>
                    </div>
                </section>
            </Layout>
        )
    }
}