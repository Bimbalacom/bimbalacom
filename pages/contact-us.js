
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
  return (
    <Layout title={'Contact us'}>
      <section>
        <div className="row section-title justify-content-center text-center"><div className="col-md-9 col-lg-8 col-xl-7"><h3 className="display-4">Contact us</h3><div className="lead">Who dosn't love talking to the comunity? Just pick a way ...</div></div></div>
        <div className="container">
          <div className="row justify-content-center text-center">
            <div className="col-md-auto" data-aos={"fade-up"}>
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0" data-aos-delay="0">
                <a href={"https://www.facebook.com/bimbalacom"}><img src={"img/icons/social/facebook.svg"} alt="Bimbala Facebook" width="75px" height="75px" /></a>
                <br /><br />like us! 
              </div>
            </div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="100">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <a href={"https://twitter.com/bimbalacom"}><img src={"img/icons/social/twitter.svg"} alt="Bimbala Twitter" width="75px" height="75px" /></a>
              <br /><br /> tweet at us!
              </div>

            </div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <a href={"https://www.instagram.com/bimbalaapp/"}><img src={"img/icons/social/instagram.svg"} alt="Bimbala Instagram" width="75px" height="75px" /></a>
                <br /><br /> like our photos! 
              </div>
            </div>
            <div className="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div className="px-md-4 px-lg-5 mb-5 mb-md-0">
                <a href={"https://discord.gg/teKwr6qVdg"}><img src={"img/icons/social/discord.svg"} alt="Bimbala Discord" width="75px" height="75px" /></a>
                <br /><br /> talk to us! 
              </div>
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}
