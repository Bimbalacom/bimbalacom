import React from "react";

import { useState } from 'react'

const requestDemoForm = () => {
    let successDiv = React.createRef();
    let errorDiv = React.createRef();
    const [email, setEmail] = useState('')
    const [name, setName] = useState('')
    const [companyName, setCompanyName] = useState('')
    const [companySize, setCompanySize] = useState('')
    const fireAlert = (e) => {
        if (e === 'success') {
            successDiv.current.classList.remove('d-none');
            errorDiv.current.classList.add('d-none');
        } else {
            successDiv.current.classList.add('d-none');
            errorDiv.current.classList.remove('d-none');
        }
    }
    const request = async (e) => {
        e.preventDefault()
        try {
            const res = await fetch('./api/subscribe', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    emailAddress: email,
                    name: name,
                    company_name: companyName,
                    company_size: companySize
                })
            })

            if (res.status === 200) {
                fireAlert('success');
            } else {
                fireAlert('error');
            }
        } catch (err) {
            console.log(err);
            alert('Something went wrong. Please try again later');
        }
    }


    return (
        <div className="card card-body shadow-lg">
            <form>
                <div className="form-group">
                    <label htmlFor="demo-name">Your Name</label>
                    <input id="demo-name" name="contact-name" type="text" className="form-control"
                           placeholder="Type here"
                           required value={name} onChange={e => setName(e.target.value)}/>
                    <div className="invalid-feedback">
                        Please type your name.
                    </div>
                </div>
                <div className="form-group">
                    <label htmlFor="demo-email">Email Address</label>
                    <input id="demo-email" name="contact-email" type="email" className="form-control"
                           placeholder="you@yoursite.com" required value={email} onChange={e => setEmail(e.target.value)}/>
                    <div className="invalid-feedback">
                        Please provide your email address.
                    </div>
                </div>
                <div className="form-group">
                    <label htmlFor="demo-company-name">Company name</label>
                    <input id="demo-company-name" name="contact-company-name" type="email" className="form-control"
                          required value={companyName} onChange={e => setCompanyName(e.target.value)}/>
                    <div className="invalid-feedback">
                        Please provide your company name.
                    </div>
                </div>
                <div className="form-group">
                    <label htmlFor="demo-company-size">Company Size</label>
                    <div className="position-relative">
                        <select className="custom-select" id="demo-company-size" required onChange={e => setCompanySize(e.target.value)}>
                            <option selected={email ? 'false' : 'true'} value="">Select an option</option>
                            <option selected={email==='1-50' ? 'true' : 'false'} value="1-50">1-50</option>
                            <option selected={email==='50-500' ? 'true' : 'false'} value="50-500">50-500</option>
                            <option selected={email==='500+' ? 'true' : 'false'} value="500+">500+</option>
                        </select>
                        <img src={"img/icons/interface/icon-caret-down.svg"} loading="lazy" alt="Arrow Down"
                             className="icon icon-sm"/>
                        <div className="invalid-feedback">
                            Please provide your company size.
                        </div>
                    </div>
                </div>
                <div className="d-none alert alert-success w-100 my-md-3" role="alert" ref={successDiv}>
                    Thanks, a member of our team will be in touch shortly.
                </div>
                <div className="d-none alert alert-danger w-100 my-md-3" role="alert" ref={errorDiv}>
                    Please fill all fields correctly.
                </div>
                <button className="btn btn-primary btn-block btn-loading" type="submit"
                        data-loading-text="Requesting Demo" onClick={request}>
                    <span>Request Demo</span>
                </button>
            </form>

        </div>
    )
}

export default requestDemoForm