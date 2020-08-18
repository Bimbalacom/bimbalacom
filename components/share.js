import Link from "next/link";

export default function Share() {
    return (
        <div class="my-4 my-sm-5 card card-body flex-sm-row justify-content-between align-items-center">
            <div class="h5 mb-sm-0">Share us:</div>
            <div class="d-flex">
                <a href="https://www.facebook.com/sharer/sharer.php?u={props.location.pathname}" class="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src={"img/icons/social/facebook.svg"} alt="Facebook" class="icon icons-m bg-white" />
                </a>
                <a href="http://twitter.com/share?text={props.location.pathname}" class="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src={"img/icons/social/twitter.svg"} alt="Twitter" class="icon icons-m bg-white" />
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={props.location.pathname}&title={articleTitle}" class="btn btn-sm btn-primary rounded-circle mx-1">
                    <img src={"img/icons/social/linkedin.svg"} alt="LinkedIn" class="icon icons-m bg-white" />
                </a>
            </div>
        </div>
    )
}