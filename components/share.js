import Link from "next/link";
import {withRouter} from 'next/router';

function Share({router, frontmatter}) {
    return (
        <div className="my-4 my-sm-5 card card-body flex-sm-row justify-contentnex-between align-items-center">
            <div className="h5 mb-sm-0">Share us:</div>
            <div className="d-flex">
                <a href={`https://www.facebook.com/sharer/sharer.php?u=${process.env.WEBSITE_URL}${router.asPath}`} className="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src="/img/icons/social/facebook.svg" alt="Facebook share" className="icon icons-m" />
                </a>
                <a href={`http://twitter.com/share?text=${process.env.WEBSITE_URL}${router.asPath}`} className="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src="/img/icons/social/twitter.svg" alt="Twitter share" className="icon icons-m"/>
                </a>
                <a href={`https://www.linkedin.com/shareArticle?mini=true&url=${process.env.WEBSITE_URL}&title=${frontmatter.title}`} className="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src="/img/icons/social/linkedin.svg" alt="LinkedIn share" className="icon icons-m" />
                </a>
            </div>
        </div>
    )
}

export default withRouter(Share)