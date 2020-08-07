import '../components/css/loaders/loader-pulse.css';
import '../components/css/theme.css';
import SEO from '../next-seo.config';
import {DefaultSeo} from "next-seo";
import TagManager from 'react-gtm-module'
import React from 'react'

export default class MyApp extends React.Component {
    tagManagerArgs = {
        gtmId: 'GTM-5PHBJG2'
    }
    componentDidMount(){
        TagManager.initialize(this.tagManagerArgs);
    }
    render() {
        const { Component, pageProps } = this.props
        return <React.Fragment>
            <DefaultSeo {...SEO} />
            <Component {...pageProps} />
        </React.Fragment>
    }
}