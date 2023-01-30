import React from "react";
import { Routes, Route, Link, BrowserRouter } from 'react-router-dom';
import { Articles } from "./articles";

export const Screen = () => {
  return (
    <BrowserRouter>
      <div className="App">
      <p>test screen</p>
      {/* <Articles /> */}
      <Routes>
        <Route path="/" element={<Articles />} />
      </Routes>
    </div>
    </BrowserRouter>
    
  )
}