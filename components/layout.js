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
            <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet" />
        </Head>
        <Navbar/>
        {this.props.children}
        <Footer/>
        <a href="#top" className="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
            <img src="/img/icons/interface/icon-arrow-up.svg" alt="Icon" className="icon bg-white"  />
        </a>

        {/* Required vendor scripts (Do not remove) */}
        <script type="text/javascript" src="/js/jquery.min.js" />
        <script type="text/javascript" src="/js/popper.min.js" />
        <script type="text/javascript" src="/js/bootstrap.js" />

        {/* Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) */}

        {/* AOS (Animate On Scroll - animates elements into view while scrolling down) */}
        <script type="text/javascript" src="/js/aos.js" />
        {/* Clipboard (copies content from browser into OS clipboard) */}
        <script type="text/javascript" src="/js/clipboard.min.js" />
        {/* Fancybox (handles image and video lightbox and galleries) */}
        <script type="text/javascript" src="/js/jquery.fancybox.min.js" />
        {/* Flatpickr (calendar/date/time picker UI) */}
        <script type="text/javascript" src="/js/flatpickr.min.js" />
        {/* Flickity (handles touch enabled carousels and sliders) */}
        <script type="text/javascript" src="/js/flickity.pkgd.min.js" />
        {/* Ion rangeSlider (flexible and pretty range slider elements) */}
        <script type="text/javascript" src="/js/ion.rangeSlider.min.js" />
        {/* Isotope (masonry layouts and filtering) */}
        <script type="text/javascript" src="/js/isotope.pkgd.min.js" />
        {/* jarallax (parallax effect and video backgrounds) */}
        <script type="text/javascript" src="/js/jarallax.min.js" />
        <script type="text/javascript" src="/js/jarallax-video.min.js" />
        <script type="text/javascript" src="/js/jarallax-element.min.js" />
        {/* jQuery Countdown (displays countdown text to a specified date) */}
        <script type="text/javascript" src="/js/jquery.countdown.min.js" />
        {/* jQuery smartWizard facilitates steppable wizard content */}
        <script type="text/javascript" src="/js/jquery.smartWizard.min.js" />
        {/* Plyr (unified player for Video, Audio, Vimeo and Youtube) */}
        <script type="text/javascript" src="/js/plyr.polyfilled.min.js" />
        {/* Prism (displays formatted code boxes) */}
        <script type="text/javascript" src="/js/prism.js"/>
        {/* ScrollMonitor (manages events for elements scrolling in and out of view) */}
        <script type="text/javascript" src="/js/scrollMonitor.js" />
        {/* Smooth scroll (animation to links in-page)*/}
        <script type="text/javascript" src="/js/smooth-scroll.polyfills.min.js" />
        {/* SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)*/}
        <script type="text/javascript" src="/js/svg-injector.umd.production.js" />
        {/* TwitterFetcher (displays a feed of tweets from a specified account)*/}
        <script type="text/javascript" src="/js/twitterFetcher_min.js" />
        {/* Typed text (animated typing effect)*/}
        <script type="text/javascript" src="/js/typed.min.js" />
        {/* Required theme scripts (Do not remove) */}
        <script type="text/javascript" src="/js/theme.js" async/>
    </React.Fragment>
    }
}
