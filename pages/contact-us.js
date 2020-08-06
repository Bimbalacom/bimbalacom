
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
    <Layout>
          <section>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-auto" data-aos="fade-up">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0"data-aos-delay="100">
              <h5>Like us</h5>
              <a href="#" class="lead">You can ask your <br/>questions on Facebook.</a>
            </div>
          </div>
          <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
              <h5>Tweet us</h5>
                <a href="#" >Don't worry. <br/>We will not tell on  you. <br/>(not every boss gives Twitter privilages)</a>

            </div>
          </div>
          <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
              <h5>Chat with us</h5>
              <a href="#" >Yep, we are down on the right. <br/> Someone will write you back asap.</a>
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
              <a href="#" class="lead">contact@bimbala.com</a><br/>
              (You will receive an answer in <br/>24 working hours max.)
            </div>
          </div>
          <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
              <h5>Discord /Slack</h5>
                One more thing to take care of. <br/>Duck my life.
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
