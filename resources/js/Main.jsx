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
                            <li><Link to="/">telegramBot</Link></li>
                            <li><Link to="/spotify">spotifyBot</Link></li>
                           <li><Link to="/chat">chatBot</Link></li>
                        
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