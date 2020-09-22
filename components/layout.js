import Head from "next/head"
import Navbar from "../components/navbar"
import Footer from '../components/footer'
import React from "react";


export default class Layout extends React.Component {
    static propTypes() {
        return {
            children: React.PropTypes.object.isRequired
        }
    }


    componentDidMount(){
        document.querySelector('body').classList.add('loaded');
    }

    render() {
    return <React.Fragment>
        <Head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>{this.props.title || 'Bimbala'}</title>
            <link rel="icon" href="/favicon.ico" />
            <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" onLoad="this.onload=null;this.rel='stylesheet'" />
        </Head>
        <Navbar/>
        {/* Required vendor scripts (Do not remove) */}
        <script type="text/javascript" src="/js/jquery.min.js" defer/>
        <script type="text/javascript" src="/js/popper.min.js" defer/>
        <script type="text/javascript" src="/js/bootstrap.js" defer/>

        {/* Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) */}

        {/* AOS (Animate On Scroll - animates elements into view while scrolling down) */}
        <script type="text/javascript" src="/js/aos.js" defer/>
        {/* Fancybox (handles image and video lightbox and galleries) */}
        <script type="text/javascript" src="/js/jquery.fancybox.min.js" defer/>
        {/* Flickity (handles touch enabled carousels and sliders) */}
        <script type="text/javascript" src="/js/flickity.pkgd.min.js" defer/>
        {/* Isotope (masonry layouts and filtering) */}
        <script type="text/javascript" src="/js/isotope.pkgd.min.js" defer/>
        {/* jarallax (parallax effect and video backgrounds) */}
        <script type="text/javascript" src="/js/jarallax.min.js" defer/>
        <script type="text/javascript" src="/js/jarallax-video.min.js" defer/>
        <script type="text/javascript" src="/js/jarallax-element.min.js" defer/>
        {/* jQuery Countdown (displays countdown text to a specified date) */}
        <script type="text/javascript" src="/js/jquery.countdown.min.js" defer/>
        {/* jQuery smartWizard facilitates steppable wizard content */}
        <script type="text/javascript" src="/js/jquery.smartWizard.min.js" defer/>
        {/* ScrollMonitor (manages events for elements scrolling in and out of view) */}
        <script type="text/javascript" src="/js/scrollMonitor.js" defer/>
        {/* Smooth scroll (animation to links in-page)*/}
        <script type="text/javascript" src="/js/smooth-scroll.polyfills.min.js" defer/>
        {/* Typed text (animated typing effect)*/}
        <script type="text/javascript" src="/js/typed.min.js" defer/>
        {/* Required theme scripts (Do not remove) */}
        <script type="text/javascript" src="/js/theme.js" defer/>
        {/* Required theme scripts (Do not remove) */}
        <script type="text/javascript" src="/js/menu.js" defer/>
        {this.props.children}
        <Footer/>
        <a href="#top" className="btn btn-primary rounded-circle btn-back-to-top aos-init aos-animate" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
            <img src="/img/icons/interface/icon-arrow-up.svg" alt="Icon" className="icon"  />
        </a>
    </React.Fragment>
    }
}
