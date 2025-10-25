import { BrowserRouter , Routes , Route } from "react-router-dom";
import Home from "./components/Home";
import About from "./components/About";
import Contact from "./components/Contact";
import Users from "./components/Users";
import Header from "./components/includes/Header";
import Edit from "./components/edit";
const App = () => {
    let brand = "Daima Hamdan";
    return (
        <div>
            <BrowserRouter>
               <Header title={brand} />
                <div className="container mt-2">
                    <Routes>
                        <Route path="/" element={<Home />} />
                        <Route path="/about" element={<About />} />
                        <Route path="/users" element={<Users />} />
                        <Route path="/user/edit/:id" element={<Edit />} />
                        <Route path="/contact" element={<Contact />} />
                    </Routes>
                </div>
            </BrowserRouter>
        </div>
    );
}
export default App;