import "./bootstrap";
import React from "react";
import ReactDOM from "react-dom/client";

// Impor komponen observer Anda. Pastikan nama file dan path-nya benar.
// Saya asumsikan nama filenya adalah Navbar.jsx di dalam folder components.
import NavbarObserver from "./components/NavbarObserver"; 

// Buat sebuah div "tak terlihat" untuk menjadi rumah bagi komponen logika kita
const observerContainer = document.createElement("div");
observerContainer.id = "navbar-observer-container";
document.body.appendChild(observerContainer);

// Render komponen observer kita di dalam div tersebut. HANYA INI.
ReactDOM.createRoot(observerContainer).render(
    <React.StrictMode>
        <NavbarObserver />
    </React.StrictMode>
);