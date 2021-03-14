
import Link from 'next/link'
import Layout from "../components/layout";

export default function FirstPost() {
  return (
    <Layout title={'Security'}>
      <section>
        <div className="row section-title justify-content-center text-center"><div className="col-md-9 col-lg-8 col-xl-7"><h3 className="display-4">Security</h3><div className="lead">Yep, we do that too ...</div></div></div>
          <div class="container">
            <div class="row">
              <div class="col-sm">
              <h3>Encryption</h3><br />
                  Data is always encrypted, both while on transit and at rest. In transit using strong, modern TLS. And at rest we use one of the strongest block chipers available, 256-bit Advanced Encryption Standard (AES-256). Additionally, all secret keys are automatically rotated on a regular basis.
              </div>
              <div class="col-sm">
              <h3>Threat detection</h3><br />
                Our infrastructure has automated vulnerability scanning, threat detection, and bot protection. Our partners Cloudflare and Amazon Web Services, are industry leaders in security.
              </div>
              <div class="col-sm">
              <h3>Data location</h3><br />
                All data is safely stored within the European Union, currently in Germany. This facilitates compliance with privacy regulations and leverages the EU’s strong standards for data protection.
              </div>
            </div>
            <div class="row">
              <div class="col-sm">
              <h3>Site reliability</h3><br />
                Our systems continuously monitor for failures and escalate to our team as needed to minimize downtime and prevent issues for our users. We strive for 99.95% uptime at least.
              </div>
              <div class="col-sm">
              <h3>Application security</h3><br />
                Our web application is designed and frequently tested with OWASP Top 10 in mind. This accounts for the most common types of attacks such as injection, broken authentication, XSS, CSRF, and several others.
              </div>
              <div class="col-sm">
              <h3>Security best practices</h3><br />
                We use two-factor authentication on all accounts with access to our infrastructure. All secrets are encrypted, and keys rotated regularly. All development equipment uses disk encryption. We follow the Principle of Least Privilege at all levels of our infrastructure.
              </div>
            </div>
          </div>
      </section>
    </Layout>
  )
}
