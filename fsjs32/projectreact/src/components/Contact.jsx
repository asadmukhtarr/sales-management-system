import React from "react";
import { useState } from "react";

const Contact = () => {
  const [name,setName] = useState();
  const [email,setEmail] = useState();
  const [subject,setSubject] = useState();
  const [message,setMessage] = useState();
  function messageGet(){
    const contact = {
        name:name,
        email:email,
        subject:subject,
        message:message
    }
    console.log(contact);
  }
  return (
    <div className="container py-5">
      <div className="row justify-content-center">
        <div className="col-md-6">
          <form className="border p-4 rounded shadow-sm bg-light">
            <div className="mb-3">
              <label htmlFor="name" className="form-label fw-semibold">
                Full Name
              </label>
              <input
                type="text"
                className="form-control"
                id="name"
                placeholder="Enter your full name"
                onKeyUp={e => setName(e.target.value)}
                required
              />
            </div>

            <div className="mb-3">
              <label htmlFor="email" className="form-label fw-semibold">
                Email address
              </label>
              <input
                type="email"
                className="form-control"
                id="email"
                onKeyUp={e => setEmail(e.target.value)}
                placeholder="Enter your email"
                required
              />
            </div>

            <div className="mb-3">
              <label htmlFor="subject" className="form-label fw-semibold">
                Subject
              </label>
              <input
                type="text"
                className="form-control"
                id="subject"
                onKeyUp={e => setSubject(e.target.value)}
                placeholder="Subject"
              />
            </div>

            <div className="mb-3">
              <label htmlFor="message" className="form-label fw-semibold">
                Message
              </label>
              <textarea
                className="form-control"
                id="message"
                rows="4"
                onKeyUp={e => setMessage(e.target.value)}
                placeholder="Type your message..."
                required
              ></textarea>
            </div>

            <div className="text-center">
              <button type="button" onClick={messageGet} className="btn btn-warning px-4 fw-semibold">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
};

export default Contact;
