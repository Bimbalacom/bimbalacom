import Link from "next/link";

export default function Share(){
    return (
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
                <img src="img/logos/brand/aven.svg" alt="Aven company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/asgardia.svg" alt="Asgardia company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/kanba.svg" alt="Kanba company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/treva.svg" alt="Treva company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
              <li class="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/ztos.svg" alt="Ztos company logo" class="bg-white opacity-50" data-inject-svg/>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="divider divider-bottom bg-primary-3"></div>
    </section>

        )
    }