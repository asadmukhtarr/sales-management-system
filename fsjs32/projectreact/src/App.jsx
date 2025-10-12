import { BrowserRouter , Routes , Route } from "react-router-dom";
import Home from "./components/Home";
import About from "./components/About";
import Contact from "./components/Contact";
import Users from "./components/Users";
import Header from "./components/includes/Header";
const App = () => {
    let brand = "Daima Hamdan";
    return (
        <div>
            <BrowserRouter>
               <Header title={brand} />
                <Routes>
                    <Route path="/" element={<Home />} />
                    <Route path="/about" element={<About />} />
                    <Route path="/users" element={<Users />} />
                    <Route path="/contact" element={<Contact />} />
                </Routes>
            </BrowserRouter>
        </div>
    );
}
export default App;