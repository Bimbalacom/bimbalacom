
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
  return (
    <Layout title={'Our brand'}>
      <section>
        <div className="row section-title justify-content-center text-center">
          <div className="col-md-9 col-lg-8 col-xl-7"><h3 className="display-4">Our brand</h3><div className="lead">Some guidelines and resources</div></div></div>
        <div className="container"><div className="row section-title justify-content-center text-center">
          <div className="col-md-9 col-lg-8 col-xl-7"><div className="lead">When using the Bimbala logo, please use the images provided below. If you're in need of it in a different format / resolution, <a href={"/contact-us"} className="nav-link fade-page px-0 py-2">please ask.</a>
            We designed our current logo in 2020.</div></div></div>
        </div>
        <div className="container">
          <div className="row justify-content-center text-center">
            <div className="col-md-auto" data-aos={"fade-up"}>
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0" data-aos-delay="0">
                <a href={"https://bimbala.com/img/logos/bimbalalogo_head.svg"}><img src={"/img/logos/bimbalaLogo_head.svg"} alt="Bimbala head logo" width="250px" height="250px" /></a>
              </div>
            </div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="100">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <a href="https://bimbala.com/img/logos/bimbalalogo_head.svg"><img src={"/img/logos/bimbalaLogo_head.svg"} alt="Bimbala head logo" width="250px" height="250px" /></a>
              </div>

            </div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <a href="https://bimbala.com/img/logos/bimbalalogo_head.svg"><img src={"/img/logos/bimbalaLogo_head.svg"} alt="Bimbala head logo" width="250px" height="250px" /></a>
              </div>
            </div>
            <div className="container"><h5 className="display-4">Our favourite color</h5><div className="lead">You can use it when you are talking about us.</div></div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div className="px-md-4 px-lg-3 mb-2 mb-md-0">
              <br /><div class="p-5 mb-3 bg-primary text-white">#246865</div>
              </div>
            </div> 

          </div>
        </div>
      </section>
    </Layout>
  )
}
