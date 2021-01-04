import React from 'react';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import Login from '././components/Login/Login';

const Routes = () => (
<BrowserRouter >
<Switch>
    <Route path="/login" component={Login}/>
</Switch>
</BrowserRouter>
);

export default Routes;