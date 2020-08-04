import Link from "next/link";

export default function Navbar(){
    return (
        <div className="navbar-container">
            <nav className="navbar navbar-expand-lg navbar-light" data-overlay data-sticky="top">
                <div className="container">
                    <a className="navbar-brand navbar-brand-dynamic-color fade-page" href="index.html">
                        <img alt="Jumpstart" data-inject-svg src="/img/logos/jumpstart.svg" />
                    </a>
                    <div className="d-flex align-items-center order-lg-3">
                        <a href="#"
                           className="btn btn-primary ml-lg-4 mr-3 mr-md-4 mr-lg-0 d-none d-sm-block order-lg-3">Client area</a>
                        <button aria-expanded="false" aria-label="Toggle navigation" className="navbar-toggler"
                                data-target=".navbar-collapse" data-toggle="collapse" type="button">
                            <img alt="Navbar Toggler Open Icon" className="navbar-toggler-open icon icon-sm"
                                 data-inject-svg src="/img/icons/interface/icon-menu.svg" />
                                <img alt="Navbar Toggler Close Icon" className="navbar-toggler-close icon icon-sm"
                                     data-inject-svg src="/img/icons/interface/icon-x.svg" />
                        </button>
                    </div>
                    <div className="collapse navbar-collapse order-3 order-lg-2 justify-content-lg-end"
                         id="navigation-menu">
                        <ul className="navbar-nav my-3 my-lg-0">
                            <li className="nav-item">
                                <Link passHref={true} href="/pricing">
                                    <a aria-expanded="false" aria-haspopup="true"
                                       className="nav-link nav-item" role="button">Pricing</a>
                                </Link>
                            </li>
                            <li className="nav-item">
                                <Link passHref={true} href="/contact-us">
                                    <a aria-expanded="false" aria-haspopup="true"
                                       className="nav-link nav-item" role="button">Contact Us</a>
                                </Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    )
}