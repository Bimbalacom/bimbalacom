
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
  return (
    <Layout title={'Contact us - Bimbala.com'}>
      <section>
        <div class="row section-title justify-content-center text-center"><div class="col-md-9 col-lg-8 col-xl-7"><h3 class="display-4">Contact us</h3><div class="lead">Who dosn't love talking to the comunity? Just pick a way ...</div></div></div>
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-auto" data-aos={"fade-up"}>
              <div class="px-md-4 px-lg-5 mb-5 mb-md-0" data-aos-delay="0">
                <h5>Like us</h5>
                <a href="https://fb.com/bimbalacom">on Facebook.</a>
              </div>
            </div>
            <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                <h5>Tweet us</h5>
                <a href="https://twitter.com/bimbalacom"> on Twitter</a>
              </div>

            </div>
            <div class="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                <h5>Chat with us</h5>
              Yep, we are down on the right.<br />Someone will write you back asap.<br />
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-auto" data-aos="fade-up">
              <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                <h5>Email us </h5>
                <a href="mailto:contact@bimbala.com" class="lead">contact@bimbala.com</a><br />
              (You will receive an answer in <br />24 working hours max.)
            </div>
            </div>
            <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                <h5>Discord /Slack</h5>
                One more thing to take care of. <br />
              </div>
            </div>
            <div class="col-md-auto" data-aos="fade-up" data-aos-delay="200">
              <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                <h5>Support tickets</h5>
              Last but not least.
            </div>
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}
