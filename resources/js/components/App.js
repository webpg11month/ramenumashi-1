import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';

import NavBar from './NavBar'
import About from './About'
import User from './User'
import Top from './Top'
import UserDetail from './UserDetail'

function App() {
    return (
    <Router>
        <div>
            <NavBar />
            <Switch>
                <Route path="/shop/index" exact component={Top} />
                <Route path="/shop/about" component={About} />
                <Route path="/shop/user" exact component={User} />
                <Route path="/shop/user/:id" component={UserDetail} />
            </Switch>
        </div>
    </Router>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}