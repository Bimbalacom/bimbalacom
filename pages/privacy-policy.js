import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
    return (
    <Layout>
              <section class="bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9 col-md-11">
            <div class="card card-body shadow">
              <div class="d-flex flex-column justify-content-between align-items-start pb-4 mb-4 mb-md-5 border-bottom">
                <div class="mb-3">
                  <h1 class="mb-2">Privacy Policy</h1>
                  <div class="lead">Updated Feb 26, 20</div>
                </div>
                <a href="javascript:if(window.print)window.print()" class="btn btn-primary">Print Terms</a>
              </div>
              <article class="article">
                <h5>Introduction:</h5>
                <p>
                  Dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae enim lacinia semper. Cras nulla lectus, porttitor vitae urna iaculis, melisandre tincidunt lectus. Brienne nec tellus sit amet massa auctor imperdiet id vitae diam.
                </p>
                <p>
                  Aenean Gendry est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry
                  est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                </p>
                <p>
                  Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                </p>
                <h5>Terms:</h5>
                <p>
                  Turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.
                </p>
                <ul>
                  <li>Vivamus convallis mi sagittis eleifend laoreet.</li>
                  <li>Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est nec diam suscipit iaculis.</li>
                  <li>Velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi.</li>
                </ul>
              </article>
              <hr/>
              <h6>Fine Print</h6>
              <small>Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est nec diam suscipit iaculis.
                Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    </Layout>
  )
}