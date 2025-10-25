import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom'; // ⬅️ Import useParams

export default function Edit() {
    
    const { id } = useParams(); // ⬅️ Get id from URL (e.g. /edit/5)
    const [name, setName] = useState();
    const [email, setEmail] = useState();
    const [password, setPassword] = useState();
    const [cpassword, setCpassword] = useState();
    const [error, setError] = useState();
    const fetcUser = async() => {
        const response = await fetch(`https://68fb7dc894ec9606602638e5.mockapi.io/users/${id}`,{});
        const data = await response.json();
       // console.log(data.email);
        setName(data.name);
        setEmail(data.email);
        setPassword(data.password);
        setCpassword(data.password);
    }
    const formHandle = async (e) => {
        e.preventDefault(); // ⛔ Prevent page reload
        
        if (cpassword === password) {
            const user = {
                name: name,
                email: email,
                password: password
            }
            
            const response = await fetch("https://68fb7dc894ec9606602638e5.mockapi.io/users", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(user)
            });

            const data = await response.json();
            console.log("User Created Successfully", data);
        } else {
            setError("Password did not match");
        }
    }
    useEffect(function(){
        fetcUser();
    });
    return (
        <div>
            <div className="row mt-3">
                <div className="col-lg-4 col-md-3 col-sm-4">
                    {error && (
                        <div className="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> {error}
                            <button
                                type="button"
                                className="btn-close"
                                data-bs-dismiss="alert"
                                aria-label="Close"
                                onClick={() => setError("")}
                            ></button>
                        </div>
                    )}
                    <form onSubmit={formHandle}>
                        <div className="card">
                            <div className="card-header">
                                <i className="fa fa-user-plus"></i> Add New User
                            </div>
                            <div className="card-body">
                                <div className="form-group">
                                    <label>Name</label>
                                    <input type="text" onKeyUp={(e) => setName(e.target.value)} className="form-control" />
                                </div>
                                <div className="form-group">
                                    <label>Email</label>
                                    <input type="email" onKeyUp={(e) => setEmail(e.target.value)} className="form-control" />
                                </div>
                                <div className="form-group">
                                    <label>Password</label>
                                    <input type="password" onKeyUp={(e) => setPassword(e.target.value)} className="form-control" />
                                </div>
                                <div className="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" className="form-control" onKeyUp={(e) => setCpassword(e.target.value)} />
                                </div>
                            </div>
                            <div className="card-footer">
                                <button type="submit" className="btn btn-danger btn-sm float-end"><i className="fa fa-save"></i> Add Save </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    );
}
