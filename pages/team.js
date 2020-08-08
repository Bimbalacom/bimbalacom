import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
    <Layout>
    <div class="o-hidden" data-overlay>
      <section class="pb-0">
        <div class="container">
          <div class="row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <div class="col-md-9 col-lg-6 col-xl-5 pl-lg-5 pl-xl-0 order-lg-2" data-aos="fade-left" data-aos-delay="250">
              <h1 class="display-3">A feisty group of <mark data-aos="highlight-text" data-aos-delay="500">change makers</mark></h1>
              <p class="lead">
                Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
              </p>
              <a href="#" class="lead">Meet the crew</a>
            </div>
            <div class="col-md-8 col-lg-6 mt-4 mt-md-5 mt-lg-0 order-lg-1" data-aos="fade-right">
              <img src="assets/img/about-1.jpg" alt="Image" class="rounded img-fluid shadow-lg"/>
            </div>
          </div>
        </div>
        <div class="position-absolute w-50 h-100 top right" data-jarallax-element="50">
          <div class="blob bg-primary opacity-20 w-100 h-100 top left"></div>
        </div>
        <div class="divider divider-bottom bg-primary-3"></div>
      </section>
    </div>
    <section class="bg-primary-3 text-white">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">What we’re about</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
      </div>
      <div class="o-hidden">
        <div class="highlight-selected" data-flickity='{ "imagesLoaded": true, "wrapAround":true }'>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets/img/blog/thumb-3.jpg" alt="blog.3.image"/>
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets/img/blog/thumb-4.jpg" alt="blog.4.image"/>
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets/img/blog/thumb-5.jpg" alt="blog.5.image"/>
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets/img/blog/thumb-8.jpg" alt="blog.6.image"/>
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets/img/blog/thumb-6.jpg" alt="blog.7.image"/>
          </div>
          <div class="carousel-cell text-center col-9 col-md-7 col-lg-5">
            <img class="img-fluid rounded" src="assets/img/blog/thumb-7.jpg" alt="blog.8.image"/>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-light">
<div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">We glow all the way up</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
            <br/><h5>The team in mostly alphabetical order</h5>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-11">
            <div class="row justify-content-center">
              <div class="col-xl-10">
                <div class="row">
                  <div class="col-sm-6 text-center mb-5">
                    <div class="d-flex flex-column align-items-center">
                      <img src="assets/img/avatars/male-1.jpg" alt="Gabriel Kanev profile image" class="avatar avatar-xl mb-4"/ >
                      <h5 class="mb-2">Gabriel Kanev</h5>
                      <div class="mb-3">Co-Founder & loves ducks</div>
                      <ul class="list-unstyled d-flex mb-0">
                        <li class="mx-2">
                          <a href="#" class="hover-fade-out">
                            <img src="assets/img/icons/social/dribbble.svg" alt="Dribbble" class="icon icon-xs" data-inject-svg/>
                          </a>
                        </li>
                        <li class="mx-2">
                          <a href="#" class="hover-fade-out">
                            <img src="assets/img/icons/social/twitter.svg" alt="Twitter" class="icon icon-xs" data-inject-svg />
                          </a>
                        </li>
                        <li class="mx-2">
                          <a href="#" class="hover-fade-out">
                            <img src="assets/img/icons/social/github.svg" alt="Github" class="icon icon-xs" data-inject-svg />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6 text-center mb-5">
                    <div class="d-flex flex-column align-items-center">
                      <img src="assets/img/avatars/1.jpg" alt="Lyuboslav Alexandrov profile image" class="avatar avatar-xl mb-4"/>
                      <h5 class="mb-2">Lyuboslav Alexandrov</h5>
                      <div class="mb-3">Co-Founder</div>
                      <ul class="list-unstyled d-flex mb-0">
                        <li class="mx-2">
                          <a href="#" class="hover-fade-out">
                            <img src="assets/img/icons/social/twitter.svg" alt="Twitter" class="icon icon-xs" data-inject-svg/>
                          </a>
                        </li>
                        <li class="mx-2">
                          <a href="#" class="hover-fade-out">
                            <img src="assets/img/icons/social/github.svg" alt="Github" class="icon icon-xs" data-inject-svg/>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3 mt-sm-4">
          <div class="col-auto">
            <div class="alert bg-secondary">We think you'll fit in here. <a href="/careers">Submit your r&eacute;sum&eacute;</a>
            </div>
          </div>
        </div>
      </div>
      </section>
 <section class="bg-primary pb-0 text-white">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">You’re in good company</h3>
            <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-auto">
            <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-0">
              <li class="my-3 mx-3 mx-lg-4">
                <img src="assets/img/logos/brand/aven.svg" alt="Aven company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="assets/img/logos/brand/asgardia.svg" alt="Asgardia company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="assets/img/logos/brand/kanba.svg" alt="Kanba company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="assets/img/logos/brand/treva.svg" alt="Treva company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="assets/img/logos/brand/ztos.svg" alt="Ztos company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="divider divider-bottom bg-primary-3"></div>
    </section>

    </Layout>
  )
}