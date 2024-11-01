<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/styles.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
            font-family: 'Raleway', sans-serif;
        }

        .hamburger {
            cursor: pointer;
        }
        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }
        .sidebar.open {
            transform: translateX(0);
        }
    </style>
</head>
<body class="bg-[#ffffff] mt-[100px]">
    <nav class="bg-white/70 backdrop-blur-lg shadow-lg fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center font-bold py-4">
            <div class="flex items-center ml-[60px]">
                <img src="favicon.ico" class="w-[50px] h-[50px] mr-[15px]">
                <div>
                    <h1 class="text-xl text-[#2D3250]">PT. Hexagon</h1>
                    <h1 class="text-base text-[#000000]">Karyatama Indonesia</h1>
                </div>
            </div>
            {{-- List  --}}
            <div class="flex items-center mr-[50px]">
                <ul class="flex gap-6 text-[#000000] text-l font-bold">
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#about">About</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#service">Service</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#project">Project</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#partner">Partner</a></li>
                    <li><a class="p-3 rounded-full hover:text-[#2D3250]" href="#contact">Contact</a></li>
                    <li>
                        <a href="/login" class="p-3 px-5 bg-[#2D3250] text-white rounded-full border-2 border-transparent hover:bg-[#ffffff] hover:text-[#2D3250] transition hover:border-[#2D3250]">
                            Login
                        </a>                        
                    </li>
                </ul>
            </div>

            {{-- SIDEBAR --}}
            <div class="bg-white rounded-r-lg p-6 w-48 fixed top-0 left-0 h-auto sidebar">
                <ul class="space-y-4">
                    <li class="text-center text-lg font-semibold text-black">
                        About
                        <div class="border-t-2 border-gray-800 mt-1"></div>
                    </li>
                    <li class="text-center text-lg font-semibold text-black">
                        Project
                        <div class="border-t-2 border-gray-800 mt-1"></div>
                    </li>
                    <li class="text-center text-lg font-semibold text-black">
                        Partner
                        <div class="border-t-2 border-gray-800 mt-1"></div>
                    </li>
                    <li class="text-center text-lg font-semibold text-black">
                        Contact
                        <div class="border-t-2 border-gray-800 mt-1"></div>
                    </li>
                </ul>
                <div class="mt-6 flex justify-center">
                    <button class="bg-gray-800 text-white font-semibold py-2 px-6 rounded-full">
                        LOGIN
                    </button>
                </div>
            </div>

             <!-- Hamburger Menu -->
            <div class="p-4 fixed top-0 left-0">
                <i class="fas fa-bars text-white text-2xl hamburger"></i>
            </div>
            <script>
                // JavaScript to toggle the sidebar
                document.querySelector('.hamburger').addEventListener('click', function() {
                    document.querySelector('.sidebar').classList.toggle('open');
                });
            </script>

        </div>
    </nav>
    <div class="px-[95px]">
        {{-- 1st content --}}
         <div class="flex justify-between" id="about">
             <div class="justify-start">
                 <h1 class="text-4xl text-[#000000] font-bold">Welcome to the website</h1>
                 <div class="flex mb-[15px]">
                     <h1 class="text-4xl text-[#000000] font-bold pr-3">Hexagon </h1>
                     <h1 class="text-4xl text-[#2D3250] font-bold">Inc.</h1>
                 </div>
                 <div class="text-[#4A4A4A] text-[16px] mt-8 mb-8">
                     <p>Hexagon Inc. is the partner of choice for many leading</p>
                     <p>enterprises, SMEs and technology challengers.</p>
                     <p>We help businesses elevate their value through
                         <br>custom software development, product design,</p>
                     <p>QA and consultancy services.</p>
                 </div>
                 <div class="flex mb-[75px] my-[15px]">
                    <!-- Tombol Hubungi Kami dengan mailto -->
                    <a href="mailto:your-email@example.com">
                        <button class="bg-[#2D3250] text-white font-bold p-2 rounded-[10px] border-2 border-transparent hover:bg-[#ffffff] hover:text-[#2D3250] transition hover:border-[#2D3250] mr-8">Hubungi Kami</button>
                    </a>
                
                    <!-- SVG Play yang menuju video YouTube -->
                    <a href="https://www.youtube.com/watch?v=1YqAEVc2msg&list=PPSV" target="_blank">
                        <img src="/assets/play.svg" class="w-[50px] h-[50px] mr-2" alt="Play">
                    </a>
                    
                    <div>
                        <h1 class="text-[16px] text-[#000000]">Tonton video</h1>
                        <h1 class="text-[16px] text-[#000000]">pengantar profil kami</h1>
                    </div>
                </div>                
             </div>
             <div class="ml-auto flex items-center justify-end mb-[70px]">
                 <img src="/assets/webProfile.svg" class="w-[480px] h-[300px]">
             </div>
         </div>
     </div>     
        {{-- 2nd content --}}
        <div class="text-center mt-[40px]">
            <p class="text-1 text-[#2D3250] font-bold" id="service">WHAT WE SERVE</p>
            <p class="text-[40px] font-bold text-[#000000]">Top Values For You</p>
            <p class="text-[#4A4A4A]">The best service that will be with you every time</p>
        </div>
        <div class="w-full flex justify-center">
            <div class="bg-[#000000] w-[1150px] h-[200px] text-white flex justify-between items-center my-[60px] rounded-tl-[30px] rounded-tr-[30px]">
                <div class="group relative flex flex-col items-center justify-center text-center w-[200px] h-[200px] ml-[6%] transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-full bg-transparent rounded-tl-[30px] rounded-tr-[30px] transform translate-y-0 group-hover:translate-y-[-20px] group-hover:h-[220px] group-hover:bg-[#2D3250] transition-all duration-300 ease-in-out z-0"></div>
                    <img src="/assets/desktop-tower.svg" class="w-[50px] h-[50px] z-10">
                    <h1 class="text-[16px] font-bold z-10">IT Consultation</h1>
                    <p class="text-[12px] z-10">We provide best IT solutions<br>
                        suit for any type of business as<br>
                        strategy,managemenet, etc</p>
                </div>
                <div class="group relative flex flex-col items-center justify-center text-center w-[200px] h-[200px] transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-full bg-transparent rounded-tl-[30px] rounded-tr-[30px] transform translate-y-0 group-hover:translate-y-[-20px] group-hover:h-[220px] group-hover:bg-[#2D3250] transition-all duration-300 ease-in-out z-0"></div>
                    <img src="/assets/cpu.svg" class="w-[50px] h-[50px] z-10">
                    <h1 class="text-[16px] font-bold z-10">Advertising</h1>
                    <p class="text-[12px] z-10">We provide best solutions suit<br>
                        for any type of business<br>
                        as strategy,managemenet, etc</p>
                </div>
                <div class="group relative flex flex-col items-center justify-center text-center w-[200px] h-[200px] transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-full bg-transparent rounded-tl-[30px] rounded-tr-[30px] transform translate-y-0 group-hover:translate-y-[-20px] group-hover:h-[220px] group-hover:bg-[#2D3250] transition-all duration-300 ease-in-out z-0"></div>
                    <img src="/assets/circuitry.svg" class="w-[50px] h-[50px] z-10">
                    <h1 class="text-[16px] font-bold z-10">Easy Booking</h1>
                    <p class="text-[12px] z-10">We provide all services online<br>
                        which can be accessed easily<br>
                        through our website</p>
                </div>
                <div class="group relative flex flex-col items-center justify-center text-center w-[200px] h-[200px] mr-[6%] transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-full bg-transparent rounded-tl-[30px] rounded-tr-[30px] transform translate-y-0 group-hover:translate-y-[-20px] group-hover:h-[220px] group-hover:bg-[#2D3250] transition-all duration-300 ease-in-out z-0"></div>
                    <img src="/assets/windows-logo.svg" class="w-[50px] h-[50px] z-10">
                    <h1 class="text-[16px] font-bold z-10">Lot of Choices</h1>
                    <p class="text-[12px] z-10">We also provide lodging<br>
                        near the destination<br>
                        where you are visiting.</p>
                </div>
            </div>
        </div> 
        {{-- 3nd content --}} 
        <div class="text-center mt-[40px]" id="project">
            <p class="text-[40px] font-bold text-[#000000]">Our Project</p>
            <p class="text-[#4A4A4A]">Empowering businesses, one solution at a time</p>
        </div>
        <div class="">
            <div class="card__container swiper">
                <div class="card__content">
                   <div class="swiper-wrapper">
                      <article class="card__article swiper-slide">
                         <div class="card__image">
                            <img src="assets/avatar-1.png" alt="image" class="card__img">
                            <div class="card__shadow"></div>
                         </div>
          
                         <div class="card__data">
                            <h3 class="card__name">Kell Dawx</h3>
                            <p class="card__description">
                               Passionate about development and design, 
                               I carry out projects at the request of users.
                            </p>
          
                            <a href="#" class="card__button">View More</a>
                         </div>
                      </article>
          
                      <article class="card__article swiper-slide">
                         <div class="card__image">
                            <img src="assets/avatar-2.png" alt="image" class="card__img">
                            <div class="card__shadow"></div>
                         </div>
          
                         <div class="card__data">
                            <h3 class="card__name">Lotw Fox</h3>
                            <p class="card__description">
                               Passionate about development and design, 
                               I carry out projects at the request of users.
                            </p>
          
                            <a href="#" class="card__button">View More</a>
                         </div>
                      </article>
          
                      <article class="card__article swiper-slide">
                         <div class="card__image">
                            <img src="assets/avatar-3.png" alt="image" class="card__img">
                            <div class="card__shadow"></div>
                         </div>
          
                         <div class="card__data">
                            <h3 class="card__name">Sara Mit</h3>
                            <p class="card__description">
                               Passionate about development and design, 
                               I carry out projects at the request of users.
                            </p>
          
                            <a href="#" class="card__button">View More</a>
                         </div>
                      </article>
          
                      <article class="card__article swiper-slide">
                         <div class="card__image">
                            <img src="assets/avatar-4.png" alt="image" class="card__img">
                            <div class="card__shadow"></div>
                         </div>
          
                         <div class="card__data">
                            <h3 class="card__name">Jenny Wert</h3>
                            <p class="card__description">
                               Passionate about development and design, 
                               I carry out projects at the request of users.
                            </p>
          
                            <a href="#" class="card__button">View More</a>
                         </div>
                      </article>
    
                      <article class="card__article swiper-slide">
                         <div class="card__image">
                            <img src="assets/avatar-5.png" alt="image" class="card__img">
                            <div class="card__shadow"></div>
                         </div>
          
                         <div class="card__data">
                            <h3 class="card__name">Lexa Kin</h3>
                            <p class="card__description">
                               Passionate about development and design, 
                               I carry out projects at the request of users.
                            </p>
          
                            <a href="#" class="card__button">View More</a>
                         </div>
                      </article>
                   </div>
                </div>
    
                <!-- Navigation buttons -->
                <div class="swiper-button-next">
                   <i class="ri-arrow-right-s-line"></i>
                </div>
                
                <div class="swiper-button-prev">
                   <i class="ri-arrow-left-s-line"></i>
                </div>
    
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
             </div>
         
         <!--=============== SWIPER JS ===============-->
         <script src="/swiper-bundle.min.js"></script>
   
         <!--=============== MAIN JS ===============-->
         <script src="/main.js"></script>   
        </div>   

         {{-- 4th content --}} 
         <div class="text-center mt-[80px]" id="partner">
            <div class="flex justify-center">
                <p class="text-[40px] font-bold text-[#2D3250] mr-2">Mitra</p>
                <p class="text-[40px] font-bold text-[#000000]">Kerja</p>
            </div>
            <p class="text-[#4A4A4A]">ini merupakan daftar client yang telah menjalin kerjasama bersama<br>
                Dinas Kesehatan Kabupaten Nias Selatan</p>
        </div>        
        <div class="flex justify-center gap-6 mt-8 mb-[110px]">
            <img src="/assets/google.svg" class="h-[50px] mr-[15px]">
            <img src="/assets/airbnb.svg" class="h-[50px] mr-[15px]">
            <img src="/assets/amazon.svg" class="h-[50px] mr-[15px]">
            <img src="/assets/creative.svg" class="h-[50px] mr-[15px]">
            <img src="/assets/shopi.svg" class="h-[50px] mr-[15px]">
        </div>

          {{-- 5th content --}} 
          <footer class="bg-[#b6b3c5] text-[#2D3250] rounded-tl-[30px] rounded-tr-[30px] py-8">
            <div id="contact" class="container mx-auto grid grid-cols-4 gap-4">
        
                <!-- Kolom Pertama -->
                <div class="flex items-start ml-[60px]">
                    <img src="favicon.ico" class="w-[50px] h-[50px] mr-[15px] rounded-lg" alt="Logo PT Hexagon">
                    <div>
                        <h1 class="text-xl font-bold">PT. Hexagon</h1>
                        <h1 class="text-base font-semibold">Karyatama Indonesia</h1>
                        <p class="text-sm mt-3 font-semibold">Founded under the name PT. Hexagon Karyatama Indonesia.
                            Hexagon Inc. is a company that operates in the field of digital artwork and IT solutions.
                        </p>
                    </div>
                </div>
        
                <!-- Kolom Kedua -->
                <div class="ml-[90px]">
                    <p class="text-lg font-bold mb-4">Layanan</p>
                    <a href="/tentang-kami" class="text-md font-semibold mb-4 block">Tentang Kami</a>
                    <a href="/karir" class="text-md font-semibold mb-4 block">Karir</a>
                    <a href="/hubungi-kami" class="text-md font-semibold mb-4 block">Hubungi Kami</a>
                </div>
        
                <!-- Kolom Ketiga -->
                <div>
                    <p class="text-lg font-bold mb-4">Privasi & Kebijakan</p>
                    <a href="/syarat-ketentuan" class="text-md font-semibold mb-4 block">Syarat & Ketentuan</a>
                    <a href="/blog" class="text-md font-semibold mb-4 block">Blog</a>
                    <a href="/bantuan" class="text-md font-semibold mb-4 block">Bantuan</a>
                </div>
        
                <!-- Kolom Keempat (Follow Us) -->
                <div>
                    <p class="text-lg font-bold mb-4 ml-[30px]">Follow Us</p>
                    <div class="flex p-3">
                        <a href="https://www.instagram.com/" target="_blank">
                            <img src="/assets/instagram.svg" class="h-[30px] w-[30px] mr-[15px]" alt="Instagram">
                        </a>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="/assets/facebook.svg" class="h-[30px] w-[30px] mr-[15px]" alt="Facebook">
                        </a>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="/assets/youtube.svg" class="h-[30px] w-[30px] mr-[15px]" alt="YouTube">
                        </a>
                    </div>  
                </div>
            </div>
        </footer>        
    </div>
</body>
</html>
