/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';


import React from 'react';
import ReactDOM from 'react-dom/client'; // Použijeme 'react-dom/client' pro React 18
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './components/Home';
import About from './components/About';
import Contact from './components/Contact';

// Vytvoření kořene aplikace
const root = ReactDOM.createRoot(document.getElementById('app'));

root.render(
    <React.StrictMode>
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/o-mne" element={<About />} />
                <Route path="/kontakt" element={<Contact />} />
            </Routes>
        </BrowserRouter>
    </React.StrictMode>
);