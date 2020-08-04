import Head from "next/head"
import Navbar from "../components/navbar"
import Footer from '../components/footer'
import React, {useEffect} from "react";


export default function Layout({
    children,
    title = 'Bimbala',
}) {

    {/* Removes page load animation when window is finished loading */}
    useEffect(() => {
        window.addEventListener("load",function(){
            document.querySelector('body').classList.add('loaded');
        });
    }, []);

    return <React.Fragment>
            <Head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>{title}</title>
                <link rel="icon" href="/favicon.ico" />
                <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet" />
            </Head>
            <Navbar/>
            {children}
            <Footer/>
            <a href="#top" className="btn btn-primary rounded-circle btn-back-to-top" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
                <img src="/img/icons/interface/icon-arrow-up.svg" alt="Icon" className="icon bg-white" data-inject-svg />
            </a>

            {/* Required vendor scripts (Do not remove) */}
            <script type="text/javascript" src="/js/jquery.min.js" />
            <script type="text/javascript" src="/js/popper.min.js" />
            <script type="text/javascript" src="/js/bootstrap.js" />

            {/* Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) */}

            {/* AOS (Animate On Scroll - animates elements into view while scrolling down) */}
            <script type="text/javascript" src="/js/aos.js" async/>
            {/* Clipboard (copies content from browser into OS clipboard) */}
            <script type="text/javascript" src="/js/clipboard.min.js" async/>
            {/* Fancybox (handles image and video lightbox and galleries) */}
            <script type="text/javascript" src="/js/jquery.fancybox.min.js" async/>
            {/* Flatpickr (calendar/date/time picker UI) */}
            <script type="text/javascript" src="/js/flatpickr.min.js" async/>
            {/* Flickity (handles touch enabled carousels and sliders) */}
            <script type="text/javascript" src="/js/flickity.pkgd.min.js" async/>
            {/* Ion rangeSlider (flexible and pretty range slider elements) */}
            <script type="text/javascript" src="/js/ion.rangeSlider.min.js" async/>
            {/* Isotope (masonry layouts and filtering) */}
            <script type="text/javascript" src="/js/isotope.pkgd.min.js" async/>
            {/* jarallax (parallax effect and video backgrounds) */}
            <script type="text/javascript" src="/js/jarallax.min.js" async/>
            <script type="text/javascript" src="/js/jarallax-video.min.js" async/>
            <script type="text/javascript" src="/js/jarallax-element.min.js" async/>
            {/* jQuery Countdown (displays countdown text to a specified date) */}
            <script type="text/javascript" src="/js/jquery.countdown.min.js" />
            {/* jQuery smartWizard facilitates steppable wizard content */}
            <script type="text/javascript" src="/js/jquery.smartWizard.min.js" async/>
            {/* Plyr (unified player for Video, Audio, Vimeo and Youtube) */}
            <script type="text/javascript" src="/js/plyr.polyfilled.min.js" async/>
            {/* Prism (displays formatted code boxes) */}
            <script type="text/javascript" src="/js/prism.js" async/>
            {/* ScrollMonitor (manages events for elements scrolling in and out of view) */}
            <script type="text/javascript" src="/js/scrollMonitor.js" async/>
            {/* Smooth scroll (animation to links in-page)*/}
            <script type="text/javascript" src="/js/smooth-scroll.polyfills.min.js" async/>
            {/* SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)*/}
            <script type="text/javascript" src="/js/svg-injector.umd.production.js" async/>
            {/* TwitterFetcher (displays a feed of tweets from a specified account)*/}
            <script type="text/javascript" src="/js/twitterFetcher_min.js" async/>
            {/* Typed text (animated typing effect)*/}
            <script type="text/javascript" src="/js/typed.min.js" />
            {/* Required theme scripts (Do not remove) */}
            <script type="text/javascript" src="/js/theme.js" />
    </React.Fragment>
}
