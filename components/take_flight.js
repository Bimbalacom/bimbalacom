import Link from "next/link";
import Strengths from "./strengths";

export default function TakeFlight() {
    return (
        <section className="bg-primary-3 text-white">
        <div className="container">
            <div className="row section-title justify-content-center text-center">
                <div className="col-md-9 col-lg-8 col-xl-7">
                    <h3 className="display-4">How are we different?</h3>
                </div>
            </div>
            <Strengths/>
        </div>
    </section>
      
    )
}