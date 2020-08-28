import Link from "next/link";
// import { withRouter } from 'react-router-dom';

export default function Share() {
    return (
        <div className="my-4 my-sm-5 card card-body flex-sm-row justify-content-between align-items-center">
            <div className="h5 mb-sm-0">Share us:</div>
            <div className="d-flex">
                <a href="https://www.facebook.com/sharer/sharer.php?u={props.location.pathname}" className="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src="/img/icons/social/facebook.svg" alt="Facebook" className="icon icons-m" />
                </a>
                <a href="http://twitter.com/share?text={props.location.pathname}" className="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src="/img/icons/social/twitter.svg" alt="Twitter" className="icon icons-m"/>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={props.location.pathname}&title={props.frontmatter.title}" className="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src="/img/icons/social/linkedin.svg" alt="LinkedIn" className="icon icons-m" />
                </a>
            </div>
        </div>
    )
}