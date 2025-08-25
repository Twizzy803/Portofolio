<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>

    {{-- Semua link font Anda sudah benar, biarkan saja --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- HANYA DUA BARIS INI YANG DIPERLUKAN UNTUK VITE --}}
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body class="font-[Poppins]">
    {{-- Header --}}
    <section class="z-10 fixed w-full">
        <header class="flex text-white bg-secondary p-5">
            <div class="flex flex-row ml-5 items-center justify-between w-full">
                <h1 class="text-5xl font-bold">Portofolio</h1>
                <div class="ml-10">
                    <ul class="flex flex-row text-xl space-x-10 mr-100 font-semibold">
                        <li><a href="#beranda" id="nav-beranda" class="nav-link">Beranda</a></li>
                        <li><a href="#tentang" id="nav-tentang" class="nav-link">Tentang</a></li>
                        <li><a href="#proyek" id="nav-proyek" class="nav-link">Proyek</a></li>
                        <li><a href="#kontak" id="nav-kontak" class="nav-link">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </header>
    </section>
    {{-- Beranda --}}
    <section id="beranda" class="bg-primary">
        <div class="flex flex-row w-full h-screen">
            <div class="flex flex-col h-screen w-1/2 text-white justify-end items-end p-10">
                <h2 class="text-4xl font-semibold mb-4">Selamat Datang di Portofolio ,<span
                        class="text-tertinary">Saya</span></h2>
                <h1 class="text-5xl font-bold mb-4 bg-tertinary p-4 text-primary rounded-lg">Agil Gilang CS</h1>
                <p class="text-lg mb-4">Saya adalah seorang pengembang web dan mobile yang bersemangat.</p>
                <a href="#proyek"
                    class="bg-tertinary hover:bg-tertinary/50 text-primary font-bold py-2 px-4 rounded hover:text-white">Lihat
                    Proyek
                    Saya</a>
            </div>
            <div>
                <img src="{{ asset('images\img1.jpeg') }}" alt="cover" class="h-screen w-full object-cover">
            </div>
        </div>
    </section>
    {{-- Tentang --}}
    <section id="tentang">
        <div>
            <div class="flex flex-row items-center justify-center h-screen text-gray-900 bg-white space-x-20">
                <div>
                    <img src="{{ asset('images\img2.jpg') }}" alt="cover2"
                        class="h-240 w-full object-cover rounded-lg">
                </div>
                <div class="flex flex-col items-center justify-center text-center">
                    <h2 class="text-4xl font-semibold mb-4">Tentang Saya</h2>
                    <p class="text-lg mb-4 max-w-2xl text-justify">Saya adalah seorang pengembang web dan mobile yang
                        antusias dan memiliki semangat tinggi dalam menciptakan solusi digital. Dengan pengalaman dalam
                        membangun aplikasi yang responsif dan memiliki kualitas yang bagus, saya terbiasa mengerjakan
                        proyek yang berfokus pada tampilan yang menarik sekaligus fungsionalitas yang optimal, baik
                        untuk platform web maupun mobile.</p>
                    <p class="text-lg mb-4 max-w-2xl text-justify">Saya juga terus berupaya mengembangkan kemampuan
                        dengan mempelajari teknologi terbaru di dunia pemrograman. Bagi saya, dunia teknologi adalah
                        ruang belajar tanpa henti, dan saya selalu terbuka untuk tantangan baru yang dapat meningkatkan
                        keterampilan serta memberikan hasil kerja yang lebih baik ke depannya.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- Proyek --}}
    <section id="proyek" class="bg-white py-20">
        <div class="flex flex-col items-center justify-start h-screen text-gray-900 bg-white">
            <h2 class="text-4xl font-semibold mb-4 mt-xl mt-25">Proyek</h2>
            <hr class="w-1/4 mb-4 border-t-4 border-tertinary">
            <div class="w-full" id="project-grid-container">
            </div>
    </section>
    {{-- Kontak --}}
    <section id="kontak" class="bg-primary py-20 ">
        <footer>
            <div class="flex flex-col items-center justify-start h-screen text-white">
                <h2 class="text-9xl font-semibold mb-4 mt-50 text-primary text-shadow-lg text-shadow-tertinary">Kon<span
                        class="bg-tertinary px-5 rounded-lg">tak</span></h2>
                <hr class="w-1/3 mb-4 border-t-4 border-tertinary">
                <div class="grid grid-cols-2 gap-4 items-center mt-10 text-xl space-x-10 place-content-around">
                    <button onclick="window.open('https://wa.me/6287861801695', '_black')"
                        class="bg-primary text-secondary font-bold py-4 px-4 rounded-full hover:text-white hover:bg-secondary shadow-lg shadow-secondary hover:shadow-none w-100">
                        <i class="fa-brands fa-whatsapp"></i>
                        Whatsapp
                    </button>
                    <button
                        class="bg-primary text-secondary font-bold py-4 px-4 rounded-full hover:text-white hover:bg-secondary shadow-lg shadow-secondary hover:shadow-none w-100">
                        <i class="fa-regular fa-envelope"></i>
                        Email
                    </button>
                    <button onclick="window.open('https://github.com/Twizzy803', '_black')"
                        class="bg-primary text-secondary font-bold py-4 px-4 rounded-full hover:text-white hover:bg-secondary shadow-lg shadow-secondary hover:shadow-none w-100">
                        <i class="fa-brands fa-github"></i>
                        Github
                    </button>
                    <button onclick="window.open('https://www.linkedin.com/in/agilgilangcs/', '_black')"
                        class="bg-primary text-secondary font-bold py-4 px-4 rounded-full hover:text-white hover:bg-secondary shadow-lg shadow-secondary hover:shadow-none w-100">
                        <i class="fa-brands fa-linkedin"></i>
                        LinkedIn
                    </button>
                </div>
            </div>
        </footer>
        <div class="mt-10 text-center text-white">
            <p class="text-lg">Author: <span class="font-bold">Twizzy</span></p>
        </div>
    </section>
</body>

</html>
