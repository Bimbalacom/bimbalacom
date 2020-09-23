import Link from 'next/link'
import Layout from "../components/layout";
import ComingSoon from "../components/comingSoon";
import React from "react";

export default function FirstPost() {
    return (
        <Layout title={'Partners'}>
        <section class="bg-light">
      <div class="container">
        <div class="row section-title justify-content-center text-center">
          <div class="col-md-9 col-lg-8 col-xl-7">
            <h3 class="display-4">Our partners</h3>
            <div class="lead">Be a part of the team changing the support work all over the world.</div>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-sm-8 col-md-4 mb-5 mb-lg-0">
            <div class="card card-body bg-secondary mb-4">
              <img src="img/logos/brand/kyan.svg" alt="Kyan company logo" class="opacity-50 my-4 my-lg-5"/>
            </div>
            <div class="px-xl-4">
              “A polished product from a solid performer in the brutal and ever-changing SaaS landscape.”
            </div>
          </div>
          <div class="col-sm-8 col-md-4 mb-5 mb-lg-0">
            <div class="card card-body bg-secondary mb-4">
              <img src="img/logos/brand/goldline.svg" alt="Goldline company logo" class="opacity-50 my-4 my-lg-5"/>
            </div>
            <div class="px-xl-4">
              “It's clear that the team at Jumpstart have been listening to their customers.”
            </div>
          </div>
          <div class="col-sm-8 col-md-4 mb-5 mb-lg-0">
            <div class="card card-body bg-secondary mb-4">
              <img src="img/logos/brand/aven.svg" alt="Aven company logo" class="opacity-50 my-4 my-lg-5"/>
            </div>
            <div class="px-xl-4">
              “The future is looking bright for this punky young startup. One to watch for sure.”
            </div>
          </div>
          <div class="col-sm-8 col-md-4 mb-5 mb-lg-0">
            <div class="card card-body bg-secondary mb-4">
              <img src="img/logos/brand/kyan.svg" alt="Kyan company logo" class="opacity-50 my-4 my-lg-5"/>
            </div>
            <div class="px-xl-4">
              “A polished product from a solid performer in the brutal and ever-changing SaaS landscape.”
            </div>
          </div>
          <div class="col-sm-8 col-md-4 mb-5 mb-lg-0">
            <div class="card card-body bg-secondary mb-4">
              <img src="img/logos/brand/goldline.svg" alt="Goldline company logo" class="opacity-50 my-4 my-lg-5"/>
            </div>
            <div class="px-xl-4">
              “It's clear that the team at Jumpstart have been listening to their customers.”
            </div>
          </div>
          <div class="col-sm-8 col-md-4 mb-5 mb-lg-0">
            <div class="card card-body bg-secondary mb-4">
              <img src="img/logos/brand/aven.svg" alt="Aven company logo" class="opacity-50 my-4 my-lg-5"/>
            </div>
            <div class="px-xl-4">
              “The future is looking bright for this punky young startup. One to watch for sure.”
            </div>
          </div>
        </div>
      </div>
    </section>
    </Layout>
  )
}