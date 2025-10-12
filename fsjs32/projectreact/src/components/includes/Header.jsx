import { Link } from 'react-router-dom';

export default function Header(props) {
  return (
    <div>
  <nav className="navbar navbar-expand-lg navbar-dark bg-purple shadow-sm py-3">
        <div className="container">
          <Link className="navbar-brand fw-bold text-warning d-flex align-items-center" to="/">
            <i className="fa fa-car text-warning me-2"></i> {props.title}
          </Link>

          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>

          <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav ms-auto text-center">
              <li className="nav-item">
                <Link className="nav-link active text-uppercase" to="/">
                  <i className="fa fa-home me-1"></i> Home
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link text-uppercase" to="/about">
                  <i className="fa fa-info-circle me-1"></i> About
                </Link>
              </li>
              <li className="nav-item">
                <Link className="nav-link text-uppercase" to="/users">
                  <i className="fa fa-user-circle me-1"></i> User
                </Link>
              </li>
               <li className="nav-item">
                <Link className="nav-link text-uppercase" to="/contact">
                  <i className="fa fa-handshake-o me-1"></i> Contact
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  );
}