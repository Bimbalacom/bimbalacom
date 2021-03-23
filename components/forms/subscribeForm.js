import React from 'react';
import { useState } from 'react'

const subscribeForm = () => {
    let successDiv = React.createRef();
    let errorDiv = React.createRef();
    const [input, setInput] = useState('')
    const fireAlert = (e) => {
        if(e==='success'){
            successDiv.current.classList.remove('d-none');
            errorDiv.current.classList.add('d-none');
        } else {
            successDiv.current.classList.add('d-none');
            errorDiv.current.classList.remove('d-none');
        }
    }
    const subscribe = async (e) => {
        e.preventDefault()
        try {
            const res = await fetch('./api/subscribe', {
                method: 'post',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    emailAddress: input
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
        <div className="col-lg mt-2 mt-md-5 mt-lg-0 order-lg-3 order-xl-4">
            <h5>Newsletter</h5>
            <div className="card card-body bg-white">
                <p>Get a bi-weekly digest of great articles</p>
                <form>
                    <div className="d-flex flex-column flex-sm-row form-group">
                        <input className="form-control mr-sm-2 mb-2 mb-sm-0 w-auto flex-grow-1" name="email"
                               placeholder="Email Address" type="email" value={input} onChange={e => setInput(e.target.value)} required/>
                        <button type="submit" className="btn btn-primary btn-loading" data-loading-text="Sending" onClick={subscribe}>
                            <span>Go</span>
                        </button>
                    </div>
                    <div className="d-none alert alert-success w-100" role="alert" ref={successDiv}>
                        Thanks, stay tuned for our mail updates.
                    </div>
                    <div className="d-none alert alert-danger w-100" role="alert" ref={errorDiv}>
                        Please fill all fields correctly.
                    </div>
                    <div className="text-small text-muted">We'll never share your email address</div>
                </form>
            </div>
        </div>
    )
}

export default subscribeForm

