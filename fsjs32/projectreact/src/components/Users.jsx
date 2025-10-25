import { useState,useEffect } from "react";
const Users = () => {
    const [name,setName] = useState();
    const [email,setEmail] = useState();
    const [password,setPassword] = useState();
    const [cpassword,setCpassword] = useState();
    const [error,setError] = useState();
    const [users,setUsers] = useState([]);
    const formHandle = async (e) => {
        e.preventDefault(); // ⛔ Prevent page reload
        if(cpassword === password){
            const user = {
                name:name,
                email:email,
                password:password
            }
            const response = await fetch("https://68fb7dc894ec9606602638e5.mockapi.io/users",{
                method:"POST",
                headers:{
                    "Content-Type":"application/json",
                },
                body:JSON.stringify(user)
            });
            const data = await response.json();
            console.log("User Created Succesfully",data);
            fetchUsers();
            setName(null);
            setEmail(null);
            setPassword(null);
            setCpassword(null);
        } else {
            setError("Password did not match");
        }
    }
    const fetchUsers = async () => {
        const response = await fetch("https://68fb7dc894ec9606602638e5.mockapi.io/users");   
        const data = await response.json();

        // Reverse the array to get descending order (if you want it in reverse order)
        const students = data.reverse(); 
        setUsers(students);
    }
    const deleteUser = async (id) => {
        if(window.confirm("Are you sure? you want to delete user.") === true){
             const response = await fetch("https://68fb7dc894ec9606602638e5.mockapi.io/users/"+id,{
                method:"DELETE",
            });
            const data = await response.json();
            console.log('user deleted',data);
            fetchUsers();
        }
    }
    useEffect(function(){
        fetchUsers();
    },[]);
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
                                    <input type="mail" onKeyUp={(e) => setEmail(e.target.value)} className="form-control" />
                                </div>
                                <div className="form-group">
                                    <label>Password</label>
                                    <input type="password" onKeyUp={(e) => setPassword(e.target.value)} className="form-control" />
                                </div>
                                <div className="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" className="form-control" onKeyUp={(e)=>setCpassword(e.target.value)} />
                                </div>
                            </div>
                            <div className="card-footer">
                                <button type="submit" className="btn btn-danger btn-sm float-end"><i className="fa fa-save"></i> Add Save </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div className="col-lg-8 col-md-8 col-sm-8">
                    <div className="card">
                        <div className="card-header">
                            <i className="fa fa-users"></i> All Users
                        </div>
                        <table className="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Index</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               { users.map((user,index) => (
                                    <tr key={user.id}>
                                        <td>{user.id}</td>
                                        <td>{index+1}</td>
                                        <td>{user.name}</td>
                                        <td>{user.email}</td>
                                        <td className="p-1">
                                            <a href={`user/edit/${user.id}`}>
                                                <button className="btn btn-sm btn-success m-2"><i className="fa fa-edit"></i></button>
                                            </a>
                                            <button className="btn btn-sm btn-danger" onClick={e => deleteUser(user.id)}><i className="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                               ))}
                            </tbody>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Users;