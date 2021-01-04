
import React from 'react';
//import Routes from './routes';
import {BrowserRouter, Route, Switch} from 'react-router-dom';
import Login from '././components/Login';

function App() {
  return (
    <div className="container">
    
  
    <BrowserRouter >
      <Switch>
        <Route path="/login" component={Login}/>
      </Switch>
    </BrowserRouter>  
    
    </div>
   
  );
}

export default App;
