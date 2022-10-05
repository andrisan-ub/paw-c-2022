<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://kit.fontawesome.com/3eeab2f4f4.js" crossorigin="anonymous"></script>
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />
    <title>Konversi | Kelompok 3</title>
  </head>
  <body class="text-gray-800 antialiased">
    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
    >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
            href="index.html"
            >Review code php</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="index.html"
                ><i class="fa-solid fa-house px-2"></i>
                Home</a
              >
            </li>
          </ul>
          <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Share</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-twitter text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="#pablo"
                ><i
                  class="lg:text-gray-300 text-gray-500 fab fa-github text-lg leading-lg "
                ></i
                ><span class="lg:hidden inline-block ml-2">Star</span></a
              >
            </li>
            <li class="flex items-center">
              <a href="register.php">
              <button
                class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                type="button"
                style="transition: all 0.15s ease 0s;"
              >
                <i class="fas fa-arrow-alt-circle-down"></i> Registrasi
              </button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main>
      <section class="absolute w-full h-full">
        <div
          class="absolute top-0 w-full h-full bg-gray-900"
          style="background-image: url(img/assets/img/register_bg_2.png); background-size: 100%; background-repeat: no-repeat;"
        ></div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0"
              >
                <div class="rounded-t mb-0 px-6 py-6" data-aos="zoom-out">
                  <div class="text-center mb-3">
                    <h6 class="text-gray-600 text-sm font-bold" data-aos="zoom-out">
                      PERHITUNGAN NILAI KONVERSI
                    </h6>
                  </div>
                  <div class="btn-wrapper text-center">
                    
                  </div>
                  <hr class="mt-6 border-b-1 border-gray-400" />
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                  <div class="text-gray-500 text-center mb-3 font-bold" data-aos="zoom-out">
                    <small>Masukkan nilai IPK anda!</small>
                  </div>
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase text-gray-700 text-xs font-bold mb-2"
                        for="nilai"
                        >Nilai</label
                      ><input data-aos="zoom-out"
                        type="text"
                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                        placeholder="nilai"
                        style="transition: all 0.15s ease 0s;" id="nilai" name ="nilai"
                        required
                      />
                    </div>

                    <?php

if (isset($_POST['register'])) {
    $nilai = $_POST ['nilai'];
    if($nilai >= 3.75 and $nilai <=4){
        echo "<h3>Nilai anda : A</h3>";
    }elseif ($nilai >= 3.24 and $nilai <= 3.74 ){
      echo "<h3>Nilai anda : B+</h3>";
    }elseif ($nilai >= 2.74 and $nilai <= 3.24 ){
        echo "<h3>Nilai anda : B</h3>";
    } elseif ($nilai >= 2.25 and $nilai <= 2.74 ){
        echo "<h3>Nilai anda : C+</h3>";
    } elseif ($nilai >= 1.75 and $nilai <= 2.24 ){
        echo "<h3>Nilai anda : C</h3>";
    } elseif ($nilai >= 1.25 and $nilai <= 1.74 ){
        echo "<h3>Nilai anda : D+</h3>";
    } elseif ($nilai >= 0.75 and $nilai <= 1.24 ){
        echo "<h3>Nilai anda : D</h3>";
    } elseif ($nilai <= 0.75 ){
        echo "<h3>Nilai anda : E</h3>";
    } else{
      echo "<h3>Silahkan input angka</h3>";
    } 
}

?>
                    
                    <div class="text-center mt-6">
                      <button
                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                        type="submit"
                        style="transition: all 0.15s ease 0s;" name="register"
                        data-aos="zoom-out"
                      >
                        Hasil
                      </button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="flex flex-wrap mt-6">
                <div class="w-1/2">
                  <a href="" class="text-gray-300"
                    ><small>Forgot password?</small></a
                  >
                </div>
                <div class="w-1/2 text-right">
                  <a href="" class="text-gray-300"
                    ><small>Create new account</small></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="absolute w-full bottom-0 bg-gray-900 pb-6">
          <div class="container mx-auto px-4">
            <hr class="mb-6 border-b-1 border-gray-700" />
            <div
              class="flex flex-wrap items-center md:justify-between justify-center"
            >
              <div class="w-full md:w-4/12 px-4">
                <div class="text-sm text-white font-semibold py-1">
                  Copyright © 2021
                  <a
                    href=""
                    class="text-white hover:text-gray-400 text-sm font-semibold py-1"
                    >Kelompok 3 PAW</a
                  >
                </div>
              </div>
              <div class="w-full md:w-8/12 px-4">
                <ul
                  class="flex flex-wrap list-none md:justify-end  justify-center"
                >
                  <li>
                    <a
                      href=""
                      class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                      >Creative Tim</a
                    >
                  </li>
                  <li>
                    <a
                      href=""
                      class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                      >About Us</a
                    >
                  </li>
                  <li>
                    <a
                      href=""
                      class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                      >Blog</a
                    >
                  </li>
                  <li>
                    <a
                      href=""
                      class="text-white hover:text-gray-400 text-sm font-semibold block py-1 px-3"
                      >MIT License</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </section>
    </main>
  </body>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
 




