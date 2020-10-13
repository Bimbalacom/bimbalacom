import '../components/css/loaders/loader-pulse.css';
import '../components/css/theme.css';
import SEO from '../next-seo.config';
import {DefaultSeo} from "next-seo";
import React from 'react'

export default class MyApp extends React.Component {
    componentDidMount(){
        import('react-gtm-module')
            .then(module => {
                let TagManager = module;
                const tagManagerArgs = {
                    gtmId: 'GTM-5PHBJG2'
                }
                TagManager.initialize(tagManagerArgs);

            });
    }
    render() {
        const { Component, pageProps } = this.props
        return <React.Fragment>
            <DefaultSeo {...SEO} />
            <Component {...pageProps} />
        </React.Fragment>
    }
}