import Link from "next/link";

export default function Share(){
    return (
        <section className="bg-primary pb-0 text-white">
      <div className="container">
        <div className="row section-title justify-content-center text-center">
          <div className="col-md-9 col-lg-8 col-xl-7">
            <h3 className="display-4">You’re in good company</h3>
            <div className="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</div>
          </div>
        </div>
        <div className="row justify-content-center">
          <div className="col-auto">
            <ul className="list-unstyled d-flex flex-wrap justify-content-center mb-0">
              <li className="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/aven.svg" alt="Aven company logo" className="bg-white opacity-50" />
              </li>
              <li className="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/asgardia.svg" alt="Asgardia company logo" className="bg-white opacity-50" />
              </li>
              <li className="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/kanba.svg" alt="Kanba company logo" className="bg-white opacity-50" />
              </li>
              <li className="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/treva.svg" alt="Treva company logo" className="bg-white opacity-50" />
              </li>
              <li className="my-3 mx-3 mx-lg-4">
                <img src="img/logos/brand/ztos.svg" alt="Ztos company logo" className="bg-white opacity-50" />
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div className="divider divider-bottom bg-primary-3"></div>
    </section>

        )
    }