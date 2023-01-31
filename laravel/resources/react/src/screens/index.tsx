import React from "react";
import { Routes, Route, Link, BrowserRouter } from "react-router-dom";
import { Articles } from "./articles";

export const Screen = () => {
    return (
        <BrowserRouter>
            <div className="App">
                <Routes>
                    <Route path="/" element={<Articles />} />
                </Routes>
            </div>
        </BrowserRouter>
    );
};
