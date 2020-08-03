export default function Footer(){
  return (
      <footer className="bg-primary-3 text-white links-white pb-4 footer-1">
        <div className="container">
          <div className="row">
            <div className="col-xl-auto mr-xl-5 col-md-3 mb-4 mb-md-0">
              <h5>Demos</h5>
              <ul className="nav flex-row flex-md-column">
                <li className="nav-item mr-3 mr-md-0">
                  <a href="landing-1.html" className="nav-link fade-page px-0 py-2">Landing 1</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="landing-2.html" className="nav-link fade-page px-0 py-2">Landing 2</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="landing-3.html" className="nav-link fade-page px-0 py-2">Landing 3</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="landing-4.html" className="nav-link fade-page px-0 py-2">Landing 4</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="landing-5.html" className="nav-link fade-page px-0 py-2">Landing 5</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="landing-6.html" className="nav-link fade-page px-0 py-2">Landing 6</a>
                </li>
              </ul>
            </div>
            <div className="col-xl-auto mr-xl-5 col-md-3">
              <h5>Pages</h5>
              <ul className="nav flex-row flex-md-column">
                <li className="nav-item mr-3 mr-md-0">
                  <a href="company-about-1.html" className="nav-link fade-page px-0 py-2">Company</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="blog-listing-1.html" className="nav-link fade-page px-0 py-2">Blog</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="help-center-home.html" className="nav-link fade-page px-0 py-2">Help Center</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="careers-1.html" className="nav-link fade-page px-0 py-2">Careers</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="case-studies.html" className="nav-link fade-page px-0 py-2">Case Studies</a>
                </li>
                <li className="nav-item mr-3 mr-md-0">
                  <a href="pricing-plans.html" className="nav-link fade-page px-0 py-2">Pricing</a>
                </li>
              </ul>
            </div>
            <div className="col mt-4 mt-md-0 mt-lg-5 mt-xl-0 order-lg-4 order-xl-3">
              <h5>Articles</h5>
              <ul className="list-unstyled d-flex flex-wrap">
                <li className="col-12 col-lg-6 col-xl-12 px-0">
                  <div className="row my-2 my-md-3">
                    <a className="col-5" href="#">
                      <img className="rounded img-fluid hover-fade-out" src="assets/img/blog/thumb-2.jpg"
                           alt="blog.1.image"/>
                    </a>
                    <div className="col">
                      <a className="h6" href="#">Unveiling our new vision for Jumpstart</a>
                      <div className="text-small text-muted mt-2">October 10th</div>
                    </div>
                  </div>
                </li>
                <li className="col-12 col-lg-6 col-xl-12 px-0">
                  <div className="row my-2 my-md-3">
                    <a className="col-5" href="#">
                      <img className="rounded img-fluid hover-fade-out" src="assets/img/blog/thumb-1.jpg"
                           alt="blog.2.image"/>
                    </a>
                    <div className="col">
                      <a className="h6" href="#">Making the most of team-building sessions</a>
                      <div className="text-small text-muted mt-2">October 2nd</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div className="col-lg mt-2 mt-md-5 mt-lg-0 order-lg-3 order-xl-4">
              <h5>Newsletter</h5>
              <div className="card card-body bg-white">
                <p>Get a bi-weekly digest of great articles</p>
                <form data-form-email noValidate action="/forms/mailchimp.php">
                  <div className="d-flex flex-column flex-sm-row form-group">
                    <input className="form-control mr-sm-2 mb-2 mb-sm-0 w-auto flex-grow-1" name="email"
                           placeholder="Email Address" type="email" required/>
                    <button type="submit" className="btn btn-primary btn-loading" data-loading-text="Sending">
                      <span>Go</span>
                    </button>
                    >
                  </div>
                  <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE" data-size="invisible"
                       data-badge="bottomleft"></div>
                  <div className="d-none alert alert-success w-100" role="alert" data-success-message>
                    Thanks, a member of our team will be in touch shortly.
                  </div>
                  <div className="d-none alert alert-danger w-100" role="alert" data-error-message>
                    Please fill all fields correctly.
                  </div>
                  <div className="text-small text-muted">We'll never share your email address</div>
                </form>
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col">
              <hr/>
            </div>
          </div>
          <div
              className="row flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <div className="col-auto">
              <div className="d-flex flex-column flex-sm-row align-items-center text-small">
                <div className="text-muted">&copy; 2020 Page protected by reCAPTCHA and subject to Google's <a
                    href="https://www.google.com/policies/privacy/" target="_blank">Privacy Policy</a> and <a
                    href="https://policies.google.com/terms" target="_blank">Terms of Service</a>
                </div>
              </div>
            </div>
            <div className="col-auto mt-3 mt-lg-0">
              <ul className="list-unstyled d-flex mb-0">
                <li className="mx-3">
                  <a href="#" className="hover-fade-out">
                    <img src="assets/img/icons/social/dribbble.svg" alt="Dribbble" className="icon icon-xs bg-white"
                         data-inject-svg/>
                  </a>
                </li>
                <li className="mx-3">
                  <a href="#" className="hover-fade-out">
                    <img src="assets/img/icons/social/twitter.svg" alt="Twitter" className="icon icon-xs bg-white"
                         data-inject-svg/>
                  </a>
                </li>
                <li className="mx-3">
                  <a href="#" className="hover-fade-out">
                    <img src="assets/img/icons/social/github.svg" alt="Github" className="icon icon-xs bg-white"
                         data-inject-svg/>
                  </a>
                </li>
                <li className="mx-3">
                  <a href="#" className="hover-fade-out">
                    <img src="assets/img/icons/social/facebook.svg" alt="Facebook" className="icon icon-xs bg-white"
                         data-inject-svg/>
                  </a>
                </li>
                <li className="mx-3">
                  <a href="#" className="hover-fade-out">
                    <img src="assets/img/icons/social/google.svg" alt="Google" className="icon icon-xs bg-white"
                         data-inject-svg/>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  )
}