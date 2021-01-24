
import React from 'react';
import { Link } from 'react-router-dom';

function NavBar() {
    return (
        <nav>
            <ul className="nav">
                <Link to="/shop/about">
                    <li>About</li>
                </Link>
                <Link to="/shop/user">
                    <li>User</li>
                </Link>
            </ul>
        </nav>
    )
}

export default NavBar;