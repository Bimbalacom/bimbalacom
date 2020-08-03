import Head from "next/head"
import Navbar from "../components/navbar"
import Footer from '../components/footer'

export default function Layout({
    children,
    title = 'Bimbala',
}) {
    return (
        <div>
            <Head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>{title}</title>
                <link rel="icon" href="/favicon.ico" />
                <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700&display=swap" rel="stylesheet" />
            </Head>
            <div className="loader">
                <div className="loading-animation"></div>
            </div>
            <Navbar/>
            {children}
            <Footer/>
        </div>

    )
}
