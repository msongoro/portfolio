<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'profile_page' }}</title>
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
        <!-- Swiper JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
         <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js" defer></script>
        @vite('resources/css/app.css')
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
         <div class="container flex flex-col max-w-5xl gap-4 mx-auto mt-8 sm:max-w-xl md:max-w-5xl lg:max-w-5xl">

            <!--------start of personal info---------->
            <div class="flex sm:flex-col sm:justify-center sm:gap-2 lg:flex-row lg:justify-normal md:flex gap-4 shadow-sm border-[1px] border-gray-200">
              <div class="p-4 shadow-ms">
                <img src="{{ asset('images/Idriss_image.jpg') }}" class="rounded-full w-36 h-36 border-[1px] border-gray-200" alt="">
              </div>
              <div class="flex flex-col mt-2">
                  <h4 class="w-48 pl-2 mx-2 mt-2 font-semibold bg-[#5169B5] rounded-full text-white ">Available for hire.</h4>
                  <h2 class="px-4 mt-2 text-3xl font-bold">{{ $user->name }}</h2>
                  <h3 class="px-4 mt-2 font-semibold text-gray-400 text-md">{{ $user->title }}</h3>

                   <div class="flex gap-2 px-4 mt-8">
                    <div class="flex gap-2">
                        <span class="text-gray-400 mdi mdi-email-outline text-[15px] font-semibold"></span>
                        <p class="text-sm font-semibold text-gray-400">{{ $user->email }}</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="text-gray-400 mdi mdi-phone-outline text-[15px] font-semibold"></span>
                        <p class="text-sm font-semibold text-gray-400">{{ $user->phone }}</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="mdi mdi-map-marker-radius-outline text-[15px] font-semibold"></span>
                        <p class="text-sm font-semibold text-gray-400">{{ $user->city }}</p>
                    </div>
                   </div>
              </div>
            </div>
            <!--------end of personal info---------->

            <!-------start of About me --------------->
         <div class="flex flex-col shadow-sm border-[1px] border-gray-200 mt-4">
              <h2 class="px-4 py-2 text-lg font-bold text-gray-950">About Me</h2>
              <p class="px-4 py-4 text-[14px] font-semibold text-gray-500 text-pretty">
                Motivated junior Laravel developer with a solid foundation in MySQL, Laravel, and PHP. competent in constructing secure, scalable,
                and reliable web applications; designing RESTful APIs; and leveraging Blade and Tailwind CSS to create dynamic user interfaces.
                practical experience in debugging Laravel applications, database design, and authentication (Passport/Sanctum).
                competent with GIT version control, willing to learn new technologies to enhance functionality and user experience,
                and able to work in Agile teams. I want to improve my abilities so that I may work on creative projects and become a fully
              </p>
         </div>
              <!-----------end about me--------->

              <!------experience------>
              <h class="px-4 text-lg font-bold text-gray-950">Experience</h>
              <div class="flex flex-col shadow-sm border-[1px] border-gray-200">
                <div class="flex gap-4 px-4">
                    <span class="text-[50px] text-[#5169B5] mdi mdi-gift-outline"></span>
                    <div class="flex flex-col gap-1">
                        <h3 class="pt-1 mt-6 font-bold text-gray-950 text-md">Assistant System Administrator</h3>
                        <p class="font-semibold text-gray-400 text-md">TEMESA-Tanzania. 2024-Present</p>
                        <p class="pb-2 text-[14px] font-semibold text-gray-500 text-pretty">
                         Assist system administrator with daily tasks such as troubleshooting and maintaining computer systems and software
                        •   Install and configure computer hardware and software
                        •	Monitor system performance and network connectivity
                        •	Perform backups and data recovery procedures
                        •	Create and maintain documentation on systems and procedures
                        •	Assist in planning and implementing system upgrades and migrations
                        •	Collaborate with other IT professionals to ensure seamless integration of systems
                        </p>
                    </div>
                </div>

                <div class="flex gap-4 px-4 mb-4">
                    <span class="text-[50px] text-[#5169B5] mdi mdi-gift-outline"></span>
                    <div class="flex flex-col gap-1">
                        <h3 class="pt-1 mt-6 font-bold text-gray-950 text-md">Junior Software Developer</h3>
                        <p class="font-semibold text-gray-400 text-md">NSSF, Tanzania. 2020-2021</p>
                        <p class="pb-2 text-[14px] font-semibold text-gray-500 text-pretty">
                            Developed and maintained web applications using Laravel framework.
                            Integrated RESTful APIs and third-party services for dynamic functionality.
                            Assisted in database design and optimized SQL queries for performance.
                            Used Blade templating engine to create dynamic, responsive UI components.
                            Worked with authentication and authorization mechanisms (Laravel Passport/Sanctum).
                            Debugged and fixed application issues using Laravel debugging tools.
                            Collaborated with senior developers to improve project structure and best practices.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4 px-4 mb-4">
                    <span class="text-[50px] text-[#5169B5] mdi mdi-gift-outline"></span>
                    <div class="flex flex-col gap-1">
                        <h3 class="pt-1 mt-6 font-bold text-gray-950 text-md">Junior Web Developer & Design (Field)</h3>
                        <p class="font-semibold text-gray-400 text-md">UDOM, Tanzania. 2019-2020</p>
                        <p class="pb-2 text-[14px] font-semibold text-gray-500 text-pretty">
                            Built responsive and user-friendly web pages using HTML5, CSS3, and JavaScript.
                            Used CSS frameworks like Bootstrap or Tailwind CSS to improve UI design.
                            Developed interactive web elements using JavaScript (DOM manipulation, events, etc.).
                            Optimized website performance with lazy loading and media queries.
                            Collaborated with senior developers to implement cross-browser compatibility fixes.
                            Used Git and GitHub for version control and teamwork.
                        </p>
                    </div>
                </div>
            </div>
            <!--------end of Experience--------->

         <!---------Skills----->
         <h class="px-4 mt-4 text-lg font-bold text-gray-950">Skills</h>
         <div class="flex justify-between sm:justify-between sm:flex-row py-8 px-4 shadow-sm border-[1px] border-gray-200 mb-8">
           <div class="flex gap-1">
            <span class="mdi mdi-laravel text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md">Laravel</p>
          </div>

           <div class="flex gap-1">
            <span class="mdi mdi-react text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md">ReactJs</p>
          </div>
           <div class="flex gap-1">
            <span class="mdi mdi-language-javascript text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md">Javascript</p>
          </div>
          <div class="flex gap-1">
            <span class="mdi mdi-language-php text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md">Php</p>
          </div>

          <div class="flex gap-1">
            <span class="mdi mdi-database text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md">Mysql</p>
          </div>

          <div class="flex gap-1">
            <span class="mdi mdi-nodejs text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md ">NodeJs</p>
          </div>

          <div class="flex gap-1">
            <span class="mdi mdi-language-python text-[30px] text-[#5169B5]"></span>
            <p class="mt-3 font-bold text-gray-800 text-md">Python</p>
          </div>
        </div>
        <!------------end of skills---------->

        <!------------enducation background---->
        <h class="px-4 text-lg font-bold text-gray-950">Education Background</h>
        <div class="flex flex-col shadow-sm border-[1px] border-gray-200 mb-4 pb-2">
            <div class="flex gap-4 px-4">
                <span class="text-[30px] text-[#5169B5] mdi mdi-school-outline"></span>
                <div class="flex flex-col gap-1">
                    <h3 class="pt-1 mt-4 font-bold text-gray-950 text-md">Bachelor of Science In information system (IT)</h3>
                    <p class="font-semibold text-gray-400 text-md">University Of Dodoma(UDOM). 2019-2022</p>
                    <p class="font-semibold text-gray-400 text-md">Dodoma, Tanzania.</p>
                </div>
            </div>

            <div class="flex gap-4 px-4">
                <span class="text-[30px] text-[#5169B5] mdi mdi-school-outline"></span>
                <div class="flex flex-col gap-1">
                    <h3 class="pt-1 mt-4 font-bold text-gray-950 text-md">Advanced Education(A-LEVEL)</h3>
                    <p class="font-semibold text-gray-400 text-md">Kwemaramba High School(PCB). 2017-2019</p>
                    <p class="font-semibold text-gray-400 text-md">Tanga, Tanzania.</p>
                </div>
            </div>

            <div class="flex gap-4 px-4">
                <span class="text-[30px] text-[#5169B5] mdi mdi-school-outline"></span>
                <div class="flex flex-col gap-1">
                    <h3 class="pt-1 mt-4 font-bold text-gray-950 text-md">O-Level Education(O-LEVEL)</h3>
                    <p class="font-semibold text-gray-400 text-md">Kikaro Secondary School. 2013-2016</p>
                    <p class="font-semibold text-gray-400 text-md">Pwani, Tanzania.</p>
                </div>
            </div>
        </div>
        <!------referees------------>
        <h class="px-4 text-lg font-bold text-gray-950">Referees</h>
        <div class="max-w-5xl mx-auto shadow-sm border-[1px] border-gray-200 mb-6">
            <!-- Swiper Container -->
            <div class="swiper">
              <div class="flex justify-between gap-4 swiper-wrapper">

                <!-- Referee 1 -->
                <div class="flex flex-col items-center p-4 text-center bg-white rounded-lg shadow-sm swiper-slide">
                  <img src="{{ asset('images/ben.jpeg') }}" alt="Referee 1" class="mb-4 rounded-full w-28 h-28">
                  <h3 class="text-xl font-semibold">Benedicto Luhatanisa</h3>
                  <p class="text-gray-600">System Administrator-TEMESA</p>
                  <p class="mt-2"><strong>Email:</strong>benedicto.luhatanisa@temesa.go.tz</p>
                  <p><strong>Phone:</strong> +255629575629</p>
                </div>

                <!-- Referee 2 -->
                <div class="flex flex-col items-center p-4 text-center bg-white rounded-lg shadow-sm swiper-slide">
                  <img src="{{ asset('images/patric_bija.jpeg') }}" alt="Referee 2" alt="referee 2" class="w-24 h-24 mb-4 rounded-full">
                  <h3 class="text-xl font-semibold">Patric Bijampola</h3>
                  <p class="text-gray-600">Software Developer</p>
                  <p class="mt-2"><strong>Email:</strong>patrickbijampola@gmail.com</p>
                  <p><strong>Phone:</strong>+255694230173</p>
                </div>
             
                <!-- Referee 3 -->
                <div class="flex flex-col items-center p-4 text-center bg-white rounded-lg shadow-sm swiper-slide">
                    <img src="{{ asset('images/patric_bija.jpeg') }}" alt="Referee 2" alt="referee 2" class="w-24 h-24 mb-4 rounded-full">
                    <h3 class="text-xl font-semibold">Patric Bijampola</h3>
                    <p class="text-gray-600">Software Developer</p>
                    <p class="mt-2"><strong>Email:</strong>patrickbijampola@gmail.com</p>
                    <p><strong>Phone:</strong>+255694230173</p>
                  </div>

                <!-- Add more referees as needed -->
              </div>
              <!-- Navigation Buttons -->
              <div class="flex justify-center mt-4">
                {{-- <button class="px-6 py-2 text-white bg-gray-700 rounded-full swiper-button-prev">←</button> --}}
                {{-- <span class="px-6 py-2 text-white bg-gray-700 rounded-full swiper-button-prev mdi mdi-chevron-right"></span> --}}
                 <span class="swiper-button-prev mdi mdi-chevron-left text-[#5169B5] text-[20px] px-6 py-2 rounded-full ml-4"></span>
                 <span class="swiper-button-next mdi mdi-chevron-right text-[#5169B5] px-6 py-2 rounded-full"></span>
              </div>

              <!-- Pagination -->
              <div class="mt-4 swiper-pagination"></div>
            </div>
          </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
              new Swiper('.swiper', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,
                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },
                pagination: {
                  el: '.swiper-pagination',
                  clickable: true,
                },
              });
            });
          </script>
    </body>
</html>
