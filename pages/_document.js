import Document, { Html, Head, Main, NextScript } from 'next/document'
import React from "react";


class Loader extends Document {
    static async getInitialProps(ctx) {
        const initialProps = await Document.getInitialProps(ctx);
        const { pathname } = ctx;
    const lang = pathname.startsWith("/bg") ? "bg" : "en";
        return { ...initialProps, lang }
    }

    render() {
        return (
            <Html>
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