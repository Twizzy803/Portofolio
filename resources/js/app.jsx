import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './components/App'; // Kita akan buat file ini selanjutnya

// Cari div dengan id 'app' di file Blade kita
const rootElement = document.getElementById('app');

// Render komponen utama React kita di dalam div tersebut
if (rootElement) {
    ReactDOM.createRoot(rootElement).render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}
