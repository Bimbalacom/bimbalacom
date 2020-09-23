import Document, { Html, Head, Main, NextScript } from 'next/document'
import React from "react";

class Loader extends Document {
    static async getInitialProps(ctx) {
        const initialProps = await Document.getInitialProps(ctx)
        return { ...initialProps }
    }

    render() {
        return (
            <Html lang={'en'}>
                <Head />
                <body>
                <div className="loader">
                    <div className="loading-animation"/>
                </div>
                <Main />
                <NextScript />
                </body>
            </Html>
        )
    }
}

export default Loader