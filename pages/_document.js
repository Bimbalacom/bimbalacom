import Document, { Html, Head, Main, NextScript } from 'next/document'
import React from "react";

class MyDocument extends Document {
    static async getInitialProps(ctx) {
        const initialProps = await Document.getInitialProps(ctx)
        return { ...initialProps }
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

export default MyDocument