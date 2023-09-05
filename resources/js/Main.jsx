import React, { Component } from "react";
import {
    BrowserRouter,
  Routes,
  Route,
  Link
  } from "react-router-dom";
import Home from "./content/Home";
import TelegramBot from "./content/TelegramBot";

 
class Main extends Component {
  render() {
    return (
        <BrowserRouter>
            <div>
                <div className="row">
                    <div className="header-common">
                        <h1 className="logo">Integrator</h1>
                        <ul className="header">
                            <li><Link to="/">Empower your business</Link></li>
                            <li><Link to="/guige">Your guide</Link></li>
                            <li><Link to="/contact">Contact us</Link></li>
                            <li><Link to="/about">About SPY</Link></li>
                            
                        
                        </ul>
                       
                    </div>
                </div>
                <div className="content">
                    <Routes>
                        <Route exact path="/" element={<TelegramBot/>}/>
    
                    </Routes>
                </div>
            </div>
        
      </BrowserRouter>
    );
  }
}
 
export default Main;