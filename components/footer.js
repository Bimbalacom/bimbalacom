import SubscribeForm from "./forms/subscribeForm";
export default function Footer() {
  return (
    <footer className="bg-primary-3 text-white links-white pb-4 footer-1">
      <div className="container">
        <div className="row">
          <div className="col-xl-auto mr-xl-5 col-md-3 mb-4 mb-md-0">
            <h5>About us</h5>
            <ul className="nav flex-row flex-md-column">
              <li className="nav-item mr-3 mr-md-0">
                <a href={"https://demo.bimbala.com"} className="nav-link fade-page px-0 py-2">Demo</a>
              </li>
               <li className="nav-item mr-3 mr-md-0">
                <a href={"/pricing"} className="nav-link fade-page px-0 py-2">Pricing</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/features"} className="nav-link fade-page px-0 py-2">Features</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"https://uptime.bimbala.com"} className="nav-link fade-page px-0 py-2">Uptime</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/integrations"} className="nav-link fade-page px-0 py-2">Integrations</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/why-us"} className="nav-link fade-page px-0 py-2">Why us?</a>
              </li>
            </ul>
          </div>
          <div className="col-xl-auto mr-xl-5 col-md-3">
            <h5>Information</h5>
            <ul className="nav flex-row flex-md-column">
            <li className="nav-item mr-3 mr-md-0">
                <a href={"/free-trial"} className="nav-link fade-page px-0 py-2">Free trial</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/security"} className="nav-link fade-page px-0 py-2">Security</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/customer-reviews"} className="nav-link fade-page px-0 py-2">Customer Reviews</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/blog/"} className="nav-link fade-page px-0 py-2">Blog</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/partners"} className="nav-link fade-page px-0 py-2">Partners</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/affiliates"} className="nav-link fade-page px-0 py-2">Affiliates</a>
              </li>
            </ul>
          </div>
          <div className="col mt-4 mt-md-0 mt-lg-5 mt-xl-0 order-lg-4 order-xl-3">
            <h5>About Us</h5>
            <ul className="nav flex-row flex-md-column">
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/company"} className="nav-link fade-page px-0 py-2">Company</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/team"} className="nav-link fade-page px-0 py-2">Team</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"#"} className="nav-link fade-page px-0 py-2">Help Center</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/careers"} className="nav-link fade-page px-0 py-2">Careers</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href={"/case-studies"} className="nav-link fade-page px-0 py-2">Case Studies</a>
              </li>
            </ul>
          </div>
          <div className="col mt-4 mt-md-0 mt-lg-5 mt-xl-0 order-lg-4 order-xl-3">
            <h5>Social</h5>
            <ul className="nav flex-row flex-md-column">
              <li className="nav-item mr-3 mr-md-0">
                <a href="https://fb.com/bimbalacom" className="nav-link fade-page px-0 py-2">Facebook</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href="https://twitter.com/bimbalacom" className="nav-link fade-page px-0 py-2">Twitter</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href="https://github.com/bimbalacom" className="nav-link fade-page px-0 py-2">Github</a>
              </li>
              <li className="nav-item mr-3 mr-md-0">
                <a href="https://www.youtube.com/channel/UChe6dcq2IXt6BnTlRByAEXA" className="nav-link fade-page px-0 py-2">Youtube</a>
              </li>

            </ul>
          </div>
          <SubscribeForm />
        </div>
        <div className="row">
          <div className="col">
            <hr />
          </div>
        </div>
        <div
          className="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
          <div className="col-auto">
            <div className="d-flex flex-column flex-sm-row align-items-center text-small">
              <div className="text-muted">&copy; 2020 Bimbala Ltd | <a href={"privacy-policy/"}>Privacy Policy</a>,
            <a href={"terms-of-service/"}> Terms of Service</a> and <a href={"gdpr/"}>GDPR</a> | <a href={"https://github.com/Bimbalacom/Website"}>Website version - 0.1.1</a> 
              </div>
            </div>
          </div>
          <div className="col-auto mt-3 mt-lg-0">
            <ul className="list-unstyled d-flex mb-0">
              <li className="mx-3">
                <a href="https://fb.com/bimbalacom" className="hover-fade-out">
                  <img src={"/img/icons/social/facebook.svg"} loading="lazy" alt="Facebook" className="icon icon-sm bg-white rounded-circle p-1" />
                </a>
              </li>
              <li className="mx-3">
                <a href="https://twitter.com/bimbalacom" className="hover-fade-out">
                  <img src={"/img/icons/social/twitter.svg"} loading="lazy" alt="Twitter" className="icon icon-sm bg-white rounded-circle p-1" />
                </a>
              </li>
              <li className="mx-3">
                <a href="https://github.com/bimbalacom" className="hover-fade-out ">
                  <img src={"/img/icons/social/github.svg"} loading="lazy" alt="Github" className="icon icon-sm bg-white rounded-circle p-1" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  )
}