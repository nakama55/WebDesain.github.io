<?php
session_start();
// require 'login.php';

if (!isset($_SESSION["login"])) {
  header("location: login.php");
  exit;
}


require 'function.php';

$mahasiswa = query("SELECT * FROM datamahasiswa");

// tombol cari di tekan

if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Dryan
  </title>
  <link rel="icon" type="image/png" href="img/logo-1.png">

</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Telivigala&family=Krona+One&family=Montserrat+Alternates&family=Russo+One&family=Saira:wght@600&family=Ysabeau+SC:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krona+One&family=Montserrat+Alternates&family=Russo+One&family=Saira:wght@600&family=Ysabeau+SC:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Saira:wght@600&family=Ysabeau+SC:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Ysabeau+SC:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Russo+One&family=Ysabeau+SC:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Project/all/css.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&family=Russo+One&family=Saira:wght@600&family=Ysabeau+SC:wght@300&display=swap" rel="stylesheet">

<body>
  <nav class="luar">
    <!-- navigasi -->
    <section class="nav" id="nav">
      <div class="atas">
        <div class="i">
          <img src="img/logo.png" alt="" class="imgbar">

          <h2 class="h2bar">DRAYN</h2>
        </div>
      </div>
    </section>
    <!-- tombol navigasi -->
    <div class="buton" id="butonid">
      <button class="tab" onclick="openPage('Home', this, 'white', 'black')"><svg class="svgbar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z" />
        </svg><span> HOME</span></span></button>
      <button class="tab" onclick="openPage('News', this, 'white', 'black')"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
          <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
        </svg><span> GALLERY</span></button>
      <button class="tab" onclick="openPage('Contact', this, 'white', 'black')" id="defaultOpen"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
          <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
        </svg><span> ABOUT</span></button>
      <button class="tab" id="cont1" onclick="openPage('About', this, 'white', 'black')"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
          <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
          <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z" />
        </svg><span> CONTACT</span></button>
    </div>
    <span id="open"><svg class="opensetting" id="open" onclick="opensetting()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
        <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z" />
      </svg>
    </span>
    </div>
    <!-- nafigasi di kiri -->
    <section class="navkiri" id="navkiriid">
      <div class="garis" id="garisid">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>
    </section>
    <!-- bagian contact -->
    <section class="con" id="conid">
      <h3 class="closeiden" id="closeiden">X</h3>
      <div>
        <img src="img/logo.png" alt="">
        <br>
        <h3 class="iden">DIKAARYA</h3>
        <h3 class="iden">XII</h3>
        <h3 class="iden">0858-8425-8854</h3>
        <h3 class="iden">Drayn_12</h3>
        <h3 class="iden">Dray</h3>
        <h3 class="iden">Drayn_Akamazu</h3>
      </div>
    </section>
  </nav>


  <!-- tembat isi home -->
  <div class="countener" id="count">

    <div id="Home" class="isi home">


      <h1 class="h1home">GAMES COMPETITION</h1>
      <!-- tes img -->
      <!-- <img src=""img/1(1).jpg" alt=""> -->
      <!-- slider img home-->
      <section class="slider">
        <div class="listimg">
          <div class="img full">
          </div>
          <div class="img">
            <img src="img/1(1).jpg" alt="">
          </div>
          <div class="img">
            <img src="img/3 (1).jpg" alt="">
          </div>
          <div class="img">
            <img src="img/piala.jpg" alt="">
          </div>
        </div>

        <div class="tombol">
          <button id="sebelum">
            << /button>
              <button id="selanjut">></button>
        </div>
        <ul class="tO">
          <li class="active"></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </section>
      <section class="sec2home">
        <div id="sec2" class="sec2">
          <h2 class="h2sec2">LORE</h2>

          <p class="p1sec2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et incidunt aperiam, amet
            voluptates non repudiandae dolorem dolor soluta modi vitae, cumque necessitatibus est iste quas expedita
            ipsum quo quod accusamus vel quis! Maxime, assumenda obcaecati? Temporibus obcaecati aliquid dolore dolor
            praesentium corrupti? Tenetur expedita officia porro harum similique consequatur, possimus minus in
            voluptate sequi, veritatis vitae laudantium beatae illum omnis modi eveniet eligendi fuga a eius earum ad!
            Voluptatem est a ducimus esse? Nihil facere tenetur vero in? Nostrum perspiciatis voluptatum soluta ratione
            sint fugiat, aut harum distinctio, eius possimus incidunt, animi maxime dignissimos dolor dolorem? Assumenda
            explicabo ad eum?</p>
          <p class="p2sec2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde atque voluptatum nihil.
            Dolorem, ipsa inventore. Consequatur voluptatibus deleniti in maiores quod adipisci necessitatibus laborum
            accusamus, voluptates quaerat impedit tempore sitlorem. Lorem ipsum dolor sit amet consectetur, adipisicing
            elit. Tempora nulla cum consectetur pariatur maxime, ab odio veritatis ratione quas accusamus fugiat
            perspiciatis, impedit accusantium voluptas soluta quia vero. Hic, recusandae.</p>
        </div>
        <img src="img/shape.png" alt="" class="shape1">
        <img src="img/shape.png" alt="" class="shape2">

      </section>

      <!-- bagian card -->

      <!-- ISI DARI REVIEW CARD -->
      <div id="myDIV1" class="myDIV">
        <img src="img/ps.jpg" class="viewimg">
        <span class="closeButton">X</span>
      </div>
      <div id="myDIV2" class="myDIV">
        <img src="img/vr.jpg" class="viewimg">
        <span class="closeButton">X</span>
      </div>
      <div id="myDIV3" class="myDIV">
        <img src="img/str.jpg" class="viewimg">
        <span class="closeButton">X</span>
      </div>
      <div id="myDIV4" class="myDIV">
        <img src="img/tgn.jpg" class="viewimg">
        <span class="closeButton">X</span>
      </div>




      <img src="img/background poster.jpg" alt="" id="bgposter">
      <img src="img/bg-3.jpg" alt="" id="bgposter-3">
      <section class="poster">
        <div class="isi1 kiri1">
          <h1><span id="spposter">C</span>ode
            On <br> Off the Box </h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, ex!</p>
        </div>
        <div class="kanan1">
          <!-- <p>Drayn_12</p> -->
        </div>
        <div class="kiri2">
          <button class="regis1 ">Registration <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg></button>
        </div>
        <div class="kiri3">
          <div class="po ster1">
            <div class="ad ster2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-playstation" viewBox="0 0 16 16">
                <path d="M15.858 11.451c-.313.395-1.079.676-1.079.676l-5.696 2.046v-1.509l4.192-1.493c.476-.17.549-.412.162-.538-.386-.127-1.085-.09-1.56.08l-2.794.984v-1.566l.161-.054s.807-.286 1.942-.412c1.135-.125 2.525.017 3.616.43 1.23.39 1.368.962 1.056 1.356ZM9.625 8.883v-3.86c0-.453-.083-.87-.508-.988-.326-.105-.528.198-.528.65v9.664l-2.606-.827V2c1.108.206 2.722.692 3.59.985 2.207.757 2.955 1.7 2.955 3.825 0 2.071-1.278 2.856-2.903 2.072Zm-8.424 3.625C-.061 12.15-.271 11.41.304 10.984c.532-.394 1.436-.69 1.436-.69l3.737-1.33v1.515l-2.69.963c-.474.17-.547.411-.161.538.386.126 1.085.09 1.56-.08l1.29-.469v1.356l-.257.043a8.454 8.454 0 0 1-4.018-.323Z" />
              </svg></div>
            <div class="ad ster3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-steam" viewBox="0 0 16 16">
                <path d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.198 2.198 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.217 2.217 0 0 1-1.312-1.568L.33 10.333Z" />
                <path d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.705 1.705 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027Zm2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048Z" />
              </svg></div>
            <div class="ad ster4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-xbox" viewBox="0 0 16 16">
                <path d="M7.202 15.967a7.987 7.987 0 0 1-3.552-1.26c-.898-.585-1.101-.826-1.101-1.306 0-.965 1.062-2.656 2.879-4.583C6.459 7.723 7.897 6.44 8.052 6.475c.302.068 2.718 2.423 3.622 3.531 1.43 1.753 2.088 3.189 1.754 3.829-.254.486-1.83 1.437-2.987 1.802-.954.301-2.207.429-3.239.33Zm-5.866-3.57C.589 11.253.212 10.127.03 8.497c-.06-.539-.038-.846.137-1.95.218-1.377 1.002-2.97 1.945-3.95.401-.417.437-.427.926-.263.595.2 1.23.638 2.213 1.528l.574.519-.313.385C4.056 6.553 2.52 9.086 1.94 10.653c-.315.852-.442 1.707-.306 2.063.091.24.007.15-.3-.319Zm13.101.195c.074-.36-.019-1.02-.238-1.687-.473-1.443-2.055-4.128-3.508-5.953l-.457-.575.494-.454c.646-.593 1.095-.948 1.58-1.25.381-.237.927-.448 1.161-.448.145 0 .654.528 1.065 1.104a8.372 8.372 0 0 1 1.343 3.102c.153.728.166 2.286.024 3.012a9.495 9.495 0 0 1-.6 1.893c-.179.393-.624 1.156-.82 1.404-.1.128-.1.127-.043-.148ZM7.335 1.952c-.67-.34-1.704-.705-2.276-.803a4.171 4.171 0 0 0-.759-.043c-.471.024-.45 0 .306-.358A7.778 7.778 0 0 1 6.47.128c.8-.169 2.306-.17 3.094-.005.85.18 1.853.552 2.418.9l.168.103-.385-.02c-.766-.038-1.88.27-3.078.853-.361.176-.676.316-.699.312a12.246 12.246 0 0 1-.654-.319Z" />
              </svg></div>
            <div class="ad ster5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-unity" viewBox="0 0 16 16">
                <path d="M15 11.2V3.733L8.61 0v2.867l2.503 1.466c.099.067.099.2 0 .234L8.148 6.3c-.099.067-.197.033-.263 0L4.92 4.567c-.099-.034-.099-.2 0-.234l2.504-1.466V0L1 3.733V11.2v-.033.033l2.438-1.433V6.833c0-.1.131-.166.197-.133L6.6 8.433c.099.067.132.134.132.234v3.466c0 .1-.132.167-.198.134L4.031 10.8l-2.438 1.433L7.983 16l6.391-3.733-2.438-1.434L9.434 12.3c-.099.067-.198 0-.198-.133V8.7c0-.1.066-.2.132-.233l2.965-1.734c.099-.066.197 0 .197.134V9.8L15 11.2Z" />
              </svg></div>
            <!-- <img src="img/pspos.jpg" alt="" class="iconposter"> -->

          </div>
        </div>
        <div class="kiri4">
          <section id="cardslide">
            <ul class="carousel">
              <li class="items main-pos licard" id="1">
                <div class="clmcard" id="card1">
                  <div class="editimg">
                    <img src="img/ps.jpg" alt="" class="imgcard1">
                  </div>
                  <button class="tombolcard" id="button1">REVIEW</button>
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </li>

              <li class="items right-pos licard" id="2">
                <div class="clmcard" id="card2">
                  <div class="editimg">
                    <img src="img/vr.jpg" alt="" class="imgcard1">
                  </div>
                  <button class="tombolcard" id="button2">REVIEW</button>

                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </li>

              <li class="items back-pos licard" id="3">
                <div class="clmcard" id="card3">
                  <div class="editimg">
                    <img src="img/str.jpg" alt="" class="imgcard1">
                  </div>
                  <button class="tombolcard" id="button3">REVIEW</button>

                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </li>

              <li class="items back-pos licard" id="4">
                <div class="clmcard" id="card4">
                  <div class="editimg">
                    <img src="img/tgn.jpg" alt="" class="imgcard1">
                  </div>
                  <button class="tombolcard" id="button4">REVIEW</button>

                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                </div>
              </li>
            </ul>
          </section>
        </div>
        <div class="isi2 kanan2">
          <h2>Let's join to get A Champion</h2>
          <p id="isih2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, dolores doloremque. Saepe
            aliquam
            adipisci earum praesentium asperiores Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur
            quaerat mollitia at aperiam nostrum tempora fuga, temporibus nulla dolorem modi. odit quae tempora!</p>
        </div>
        <div class="kiri5">
          <div class="isi3">
            <h2>Cokolate</h2>
            <p>Lorem ipsum d
              Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, nobis?
              olor sit amet consectetur adipisicing elit. Dolorem, dolores doloremque. Saepe aliquam adipisci earum
              praesentium asperiores odit quae tempora!</p>
          </div>
        </div>
        <div class="kanan3">
        </div>
        <div class="kiri6">
          <div class="h1">
            <h1>Gamevice</h1>
            <p>We made fresh and Healthy food</p>
          </div>
          <div class="icon">
            <div class="icon1 ic"><svg class="svgicon1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z" />
              </svg>

              <svg class="small1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-angry-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5z" />
              </svg>
            </div>
            <div class="icon2 ic"><svg class="svgicon2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
              </svg>

              <svg class="small2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5c0 .501-.164.396-.415.235C6.42 6.629 6.218 6.5 6 6.5c-.218 0-.42.13-.585.235C5.164 6.896 5 7 5 6.5 5 5.672 5.448 5 6 5s1 .672 1 1.5zm5.331 3a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zm-1.746-2.765C10.42 6.629 10.218 6.5 10 6.5c-.218 0-.42.13-.585.235C9.164 6.896 9 7 9 6.5c0-.828.448-1.5 1-1.5s1 .672 1 1.5c0 .501-.164.396-.415.235z" />
              </svg>
            </div>
            <div class="icon3 ic"><svg class="svgicon3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z" />
              </svg>

              <svg class="small3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
              </svg>
            </div>
            <div class="icon4 ic"><svg class="svgicon4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-wink" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z" />
              </svg>

              <svg class="small4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-expressionless-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.5 6h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm5 0h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm-5 4h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1z" />
            </div>
            </svg>
          </div>
          <div class="contentkiri6">
            <div class="content1">
              <img src="img/earphone.jpg" alt="">
            </div>
            <h3>Earphone</h3>
            <p>Lorem,ipsum dolor.</p>
            <span>$ 12.00</span>
            <div class="borderlove1">
              <svg class="love2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
              </svg>

              <svg class="loveactive" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
              </svg>

            </div>
          </div>
          <div class="contentkiri7">
            <div class="content2">
              <img src="img/kamera.jpg" alt="">
            </div>
            <h3>Camera</h3>
            <p>Lorem,ipsum dolor.</p>
            <span>$ 12.00</span>
            <div class="borderlove3">
              <svg class="love3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
              </svg>

              <svg class="loveactive3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
              </svg>

            </div>
          </div>
          <div class="footerkiri6">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
              <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-club" viewBox="0 0 16 16">
              <path d="M8 1a3.25 3.25 0 0 0-3.25 3.25c0 .186 0 .29.016.41.014.12.045.27.12.527l.19.665-.692-.028a3.25 3.25 0 1 0 2.357 5.334.5.5 0 0 1 .844.518l-.003.005-.006.015-.024.055a21.893 21.893 0 0 1-.438.92 22.38 22.38 0 0 1-1.266 2.197c-.013.018-.02.05.001.09.01.02.021.03.03.036A.036.036 0 0 0 5.9 15h4.2c.01 0 .016-.002.022-.006a.092.092 0 0 0 .029-.035c.02-.04.014-.073.001-.091a22.875 22.875 0 0 1-1.704-3.117l-.024-.054-.006-.015-.002-.004a.5.5 0 0 1 .838-.524c.601.7 1.516 1.168 2.496 1.168a3.25 3.25 0 1 0-.139-6.498l-.699.03.199-.671c.14-.47.14-.745.139-.927V4.25A3.25 3.25 0 0 0 8 1zm2.207 12.024c.225.405.487.848.78 1.294C11.437 15 10.975 16 10.1 16H5.9c-.876 0-1.338-1-.887-1.683.291-.442.552-.88.776-1.283a4.25 4.25 0 1 1-2.007-8.187 2.79 2.79 0 0 1-.009-.064c-.023-.187-.023-.348-.023-.52V4.25a4.25 4.25 0 0 1 8.5 0c0 .14 0 .333-.04.596a4.25 4.25 0 0 1-.46 8.476 4.186 4.186 0 0 1-1.543-.298z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
              <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-plus" viewBox="0 0 16 16">
              <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM4 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
              <path d="M0 4a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v4a.5.5 0 0 1-1 0V7H1v5a1 1 0 0 0 1 1h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-2V4Zm1 2h13V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2Z" />
              <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
            </svg>
          </div>
        </div>
        <div class="kiri7">
          <div class="imgpo">
            <img src="img/stick.webp" alt="">
          </div>
          <div class="pposter">
            <h1>Games curry</h1>
            <p class="pposter1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
              </svg> 25 Mins.</p>
            <p class="pposter2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, unde.</p>
            <span class="price">Price Games</span>
            <p class="sold1">$ 15.00</p>
            <div class="borderlove">
              <svg class="love1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
              </svg>

              <svg class="loveactive1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
              </svg>

            </div>
            <div class="regisposter">
              <button class="regis1 ">Registration <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                </svg></button>
            </div>
          </div>
        </div>
        <!-- <div class="kanan4"> -->
        <div class="kanan4">
          <h1>App is Available</h1>
          <p>Download our app is available on App Store Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Cupiditate, dolorem soluta! Quod, aliquam praesentium. Dolores et ullam ducimus in deserunt.</p>
          <div class="tkanan4">
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
                <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z" />
              </svg> App Store</button>
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google-play" viewBox="0 0 16 16">
                <path d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96 2.694-1.586Zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055l7.294-4.295ZM1 13.396V2.603L6.846 8 1 13.396ZM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27Z" />
              </svg> Google Play</button>
          </div>
        </div>
        <!-- </div> -->
        <div class="footer">
          <div class="headerfooter footer-1">
            <span>LET'S TALK.</span>
            <h1>Want to Reserve a table</h1>
          </div>
          <div class="headerfooter footer-2">
            <!-- <button>Contact us Now</button> -->
            <div id="tombol_start_registration">
              <button class="learn-more">
                <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                </span>
                <span class="button-text">Contact</span>
              </button>
            </div>
          </div>
          <div class="footer-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis temporibus omnis quisquam fugit, voluptas
            neque. Nisi accusamus omnis similique ut.
          </div>
          <div class="footer-and">
            <div class="footer-and-1">
              <h1>Taste</h1>
              <p>Compotition & Games</p>
            </div>
            <div class="footer-and-2">
              <h1>Our service</h1>
              <p>Pricing</p>
              <p>Tracing</p>
              <p>Report a Bug</p>
              <p>Terms of services</p>
            </div>
            <div class="footer-and-3">
              <h1>Our Company</h1>
              <p>Reporting</p>
              <p>Get in Touch</p>
              <p>Management</p>
            </div>
            <div class="footer-and-4">
              <h1>Address</h1>
              <p>98 sagulung,</p>
              <p>KAV kamboja, batam</p>
              <p>0858-3482-3824</p>
              <p>Drayn_12@gmail.com</p>
            </div>
          </div>
        </div>
      </section>

    </div>

    <section id="News" class="isi newsisis">
      <!-- header gallery top -->
      <div class="headergallery">
        <div class="startregisgallery">
          <span>Whisper Offset Running</span>
          <h1>BEST BEAUTY ITEMS</h1>
          <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A quas facere dolorum eius accusamus sunt magnam
            ad ipsa iusto sequi! Lorem ipsum dolor</P>
          <div id="tombol_start_registration">
            <button class="learn-more">
              <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
              </span>
              <span class="button-text">Registration</span>
            </button>
          </div>
        </div>
      </div>
      <!-- isi dari gallery -->
      <div class="isigallery">

        <div class="hisigallery">
          <h1>RECENT GAMES</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, incidunt.</p>
        </div>
        <div class="slidergallery">
          <div class="iisigallery isiimg">
            <div class="gallery-1 gallery start">
              <img src="img/gallery-1.jpeg" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 16.7</span>
              </div>

              <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-1.jpeg" data-product-description="  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni commodi quibusdam autem explicabo! Laboriosam repudiandae Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum,  nostrum modi in ad Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, fuga! cupiditate ad et dolorem beatae quas sunt? Cumque, nisi? Sint." data-product-price="$16.7">SOLD</button>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-2.png" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 21.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-2.png" data-product-description="    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$21.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-3.jpeg" alt="">
              <div class="description">
                <h2>Gray astro</h2>
                <p>Product in 21</p>
                <span>$ 15.7</span>
                <button type="" class="buy-btn" data-product-name="Gray astro" data-product-image="img/gallery-3.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$15.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-4.png" alt="">
              <div class="description">
                <h2>Green astro</h2>
                <p>Product in 21</p>
                <span>$ 13.7</span>
                <button type="" class="buy-btn" data-product-name="Green astro" data-product-image="img/gallery-4.png" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$13.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-5.png" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 11.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-5.png" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$11.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-6.png" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 17.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-6.png" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$17.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-7.png" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 13.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-7.png" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$13.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-8.jpeg" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 20.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-8.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$20.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-9.jpeg" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 13.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-9.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$13.7">SOLD</button>
              </div>
            </div>

            <div class="gallery-1 gallery">
              <img src="img/gallery-3.jpeg" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 15.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-3.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$15.7">SOLD</button>
              </div>
            </div>
            <div class="gallery-1 gallery">
              <img src="img/gallery-10.png" alt="">
              <div class="description">
                <h2>Blue astro</h2>
                <p>Product in 21</p>
                <span>$ 18.7</span>
                <button type="" class="buy-btn" data-product-name="Blue astro" data-product-image="img/gallery-10.png" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$18.7">SOLD</button>
              </div>
            </div>
          </div>

          <div class="tombolslider">
            <button id="prev">
              << /button>
                <button id="next">></button>
          </div>


        </div>
        <div class="dekorasi-kanan">
          <div class="dekorasi">
            <div class="slide-poster">
              <img src="img/poter-1-transformed.png" alt="">
            </div>

            <div class="slide-poster">
              <img src="img/poster-2-transformed.png" alt="">
            </div>

            <div class="slide-poster">
              <img src="img/poster-3-transformed.png" alt="">
            </div>
          </div>
        </div>
        <div class="text">
          <h1>FINISHED LN.</h1>
          <P>Lorem, ipsum dolor sit amet odio pariatur earum ea beatae. Delectus!</P>
        </div>
        <div class="fisigal-1">

          <div class="fisigallery">
            <!-- <span>lsakd</span> -->
            <div class="foto-1">
              <div>
                <h2>UP TO <span>30% OFF</span> IN SKIN</h2>
              </div>
              <img src="img/poster-1.png" alt="">

            </div>
            <div class="foto-2">
              <div>
                <h2>UP TO <span>50% OFF</span> IN SKIN</h2>
              </div>
              <img src="img/poster-2.jpeg" alt="">
            </div>
            <div class="foto-3">
              <div>
                <h2>UP TO <span>40% OFF</span> IN SKIN</h2>
              </div>
              <img src="img/poster-3.jpeg" alt="">
            </div>

          </div>
        </div>
        <!-- filtergallery -->
        <div class="filtergallery">
          <div class="mygallery">
            <h1> <span>MY</span> GALLERY LIST</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum accusamus iure, earum nesciunt aliquam
              laudantium.</p>
          </div>
          <div class="bungkus">

            <div id="myBTN_filter">
              <button class="btn_filter active-1" onclick="filterSelection('all')">all</button>
              <button class="btn_filter" onclick="filterSelection('games')">games</button>
              <button class="btn_filter" onclick="filterSelection('sains')">sains</button>
              <button class="btn_filter" onclick="filterSelection('sosial')">sosial</button>
              <button class="btn_filter" onclick="filterSelection('gym')">gym</button>
            </div>
            <div class="daftargambar">
              <!-- gambar sains -->
              <div class="column sains buy-btn" data-product-name="SAINS-1" data-product-image="img/sains-1.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$18.7">
                <div>
                  <img src="img/sains-1.jpeg" alt="">
                </div>
                <h4>SAINS-1</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sains buy-btn" data-product-name="SAINS-2" data-product-image="img/sains-2.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$23.7">
                <div>
                  <img src="img/sains-2.jpeg" alt="">
                </div>
                <h4>SAINS-2</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sains buy-btn" data-product-name="SAINS-3" data-product-image="img/sains-3.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$15.7">
                <div>
                  <img src="img/sains-3.jpeg" alt="">
                </div>
                <h4>SAINS-3</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sains buy-btn" data-product-name="SAINS-4" data-product-image="img/sains-4.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$22.7">
                <div>
                  <img src="img/sains-4.jpeg" alt="">
                </div>
                <h4>SAINS-4</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <!-- games -->
              <div class="column games buy-btn" data-product-name="GAMES-1" data-product-image="img/games-1.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$15.7">
                <div>
                  <img src="img/games-1.jpeg" alt="">
                </div>
                <h4>GAMES-1</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column games buy-btn" data-product-name="GAMES-2" data-product-image="img/games-2.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$12.7">
                <div>
                  <img src="img/games-2.jpeg" alt="">
                </div>
                <h4>GAMES-2</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column games buy-btn" data-product-name="GAMES-3" data-product-image="img/games-3.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$20.7">
                <div>
                  <img src="img/games-3.jpeg" alt="">
                </div>
                <h4>GAMES-3</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column games buy-btn" data-product-name="GAMES-4" data-product-image="img/games-4.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$15.7">
                <div>
                  <img src="img/games-4.jpeg" alt="">
                </div>
                <h4>GAMES-4</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column games buy-btn" data-product-name="GAMES-5" data-product-image="img/games-5.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$11.7">
                <div>
                  <img src="img/games-5.jpeg" alt="">
                </div>
                <h4>GAMES-5</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <!-- sosial -->
              <div class="column sosial buy-btn" data-product-name="SOSIAL-1" data-product-image="img/sosial-1.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$20.7">
                <div>
                  <img src="img/sosial-1.jpeg" alt="">
                </div>
                <h4>SOSIAL-1</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sosial buy-btn" data-product-name="SOSIAL-2" data-product-image="img/sosial-2.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$25.7">
                <div>
                  <img src="img/sosial-2.jpeg" alt="">
                </div>
                <h4>SOSIAL-2</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sosial buy-btn" data-product-name="SOSIAL-3" data-product-image="img/sosial-3.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$15.9">
                <div>
                  <img src="img/sosial-3.jpeg" alt="">
                </div>
                <h4>SOSIAL-3</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sosial buy-btn" data-product-name="SOSIAL-4" data-product-image="img/sosial-4.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$22.8">
                <div>
                  <img src="img/sosial-4.jpeg" alt="">
                </div>
                <h4>SOSIAL-4</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sosial buy-btn" data-product-name="SOSIAL-5" data-product-image="img/sosial-5.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$16.8">
                <div>
                  <img src="img/sosial-5.jpeg" alt="">
                </div>
                <h4>SOSIAL-5</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column sosial buy-btn" data-product-name="SOSIAL-6" data-product-image="img/sosial-6.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$25.9">
                <div>
                  <img src="img/sosial-6.jpeg" alt="">
                </div>
                <h4>SOSIAL-6</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <!-- gym  -->
              <div class="column gym buy-btn" data-product-name="GYM-1" data-product-image="img/gym-1.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$18.9">
                <div>
                  <img src="img/gym-1.jpeg" alt="">
                </div>
                <h4>GYM-1</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column gym buy-btn" data-product-name="GYM-2" data-product-image="img/gym-2.png" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$13.9">
                <div>
                  <img src="img/gym-2.png" alt="">
                </div>
                <h4>GYM-2</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column gym buy-btn" data-product-name="GYM-3" data-product-image="img/gym-3.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$28.9">
                <div>
                  <img src="img/gym-3.jpeg" alt="">
                </div>
                <h4>GYM-3</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column gym buy-btn" data-product-name="GYM-4" data-product-image="img/gym-4.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$22.9">
                <div>
                  <img src="img/gym-4.jpeg" alt="">
                </div>
                <h4>GYM-4</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <div class="column gym buy-btn" data-product-name="GYM-5" data-product-image="img/gym-5.jpeg" data-product-description="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam dolore, dolor ad et dolorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nihil cupiditate nostrum reprehenderit quisquam fugit aspernatur repellat, alias necessitatibus at. beatae quas sunt? Cumque, nisi? Sint. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores praesentium delectus consequuntur blanditiis excepturi aspernatur ex, distinctio est eveniet animi, deleniti quaerat pariatur. Doloremque quibusdam sunt, quaerat accusamus tempore cupiditate incidunt, sequi totam tempora asperiores aliquid. Harum asperiores consectetur sed animi officiis necessitatibus libero molestias, consequuntur quidem ducimus aliquid at maiores? Ut incidunt ipsa aperiam laudantium ex ab ipsum. Delectus unde eum eaque et, tenetur eveniet hic expedita dolores tempora pariatur inventore maiores enim fugit repudiandae? Vitae quae aperiam temporibus delectus! Quaerat, at illo quidem neque autem illum quos molestiae consequuntur, explicabo adipisci amet dicta possimus quibusdam voluptatibus nulla nihil!" data-product-price="$18.9">
                <div>
                  <img src="img/gym-5.jpeg" alt="">
                </div>
                <h4>GYM-5</h4>
                <p>Lorem, ipsum dolor.</p>
              </div>
              <!-- <div class="column gym">
              <div>
                <img src="img/gym-6.jpeg" alt="">
              </div>
              <h4>GYM-6</h4>
              <p>Lorem, ipsum dolor.</p>
            </div> -->


            </div>
          </div>

        </div>

        <!-- navigasi kiri gallery -->
        <div class="navgallery">

          <!-- <div class="sosmed_1">
          <div class="sosmed-dalam">
            <div class="sd-1">
              <img src="img/astro-2.png" alt="">
            </div>
            <div class="dis">
              <h2>Astro</h2>
              <p>Lorem, ipsum dolor.</p>
              <span>$ 12.99</span>
              <div class="svg1">
                <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </div>
              <button><div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>SOLD</div></button>
            </div>
          </div>

          <div class="sosmed-dalam-1">
            <div class="sd-1">
              <img src="img/astro-1.jpeg" alt="">
            </div>
            <div class="dis">
              <h2>Astro</h2>
              <p>Lorem, ipsum dolor.</p>
              <span>$ 12.99</span>
              <div class="svg1">
                <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </div>
              <button><div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>SOLD</div></button>
            </div>
          </div>

          <div class="sosmed-dalam-2">
            <div class="sd-1">
              <img src="img/astro-3.png" alt="">
            </div>
            <div class="dis">
              <h2>Astro</h2>
              <p>Lorem, ipsum dolor.</p>
              <span>$ 12.99</span>
              <div class="svg1">
                <svg id="svg1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </div>
              <button><div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
              </svg>SOLD</div></button>
            </div>
          </div>

        </div>
        <button class="TombolS">Sebelumnya</button>
        <button class="TombolL">Selanjutnya</button>
      </div> -->
        </div>

        <!-- footer gallery -->
        <div class="footergallery">
          <div class="myfooter">
            <h1> <span>JOIN</span> OUR MAILING LIST</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum accusamus iure, earum nesciunt aliquam
              laudantium.</p>
          </div>

          <form action="" class="form-footergallery">
            <input type="text" placeholder="Your Opinion..">
            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg></button>
          </form>

          <div class="icon_sosmed_myfooter">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
              <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pinterest" viewBox="0 0 16 16">
              <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z" />
            </svg>
          </div>
          <div class="tag_footer">
            <span>@ 2024 Drayn, In light sometime</span>
          </div>
        </div>



        <div class="overlay">
          <div class="popup">
            <!-- INI UNTUK ALL POP UP-->



            <!-- INI YG BUTUH DATA KLICK -->
            <div class="icon-popup">

              <span class="close-btn-popup bundar-icon">X</span>
              <div>
                <div>
                  <svg class="svg-1 bundar-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                  </svg>
                </div>
                <div>
                  <svg class="svg-2 bundar-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                  </svg>
                </div>
                <div>
                  <svg class="svg-3 bundar-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                  </svg>
                </div>
              </div>

            </div>
            <div class="sale-1">
              <!-- <img src="img/sale.png" alt=""> -->
            </div>
            <div class="sampul-img">
              <img src="" alt="Gambar Produk" class="product-image style-img-popup">
            </div>
            <div class="des-1">
              <h3 class="product-title"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                </svg> Ini nama product Lorem, ipsum dolor.</h3>

              <p class="product-price">INI HARGA Rp.34,000</p>
              <div class="ranting">
                <div class="star">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                    <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z" />
                  </svg>
                  <span>4,8</span>
                </div>

                <div class="terjual">
                  <span>2,7RB Terjual <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                      <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z" />
                      <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                    </svg></span>
                </div>

                <div class="iconshare">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                  </svg>

                  <svg class="svgshare" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply" viewBox="0 0 16 16">
                    <path d="M6.598 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L7.3 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L2.614 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.499.499 0 0 0 .042-.028l3.984-2.933zM7.8 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="des-3">
              <div class="des-3-1">
                <div>
                  <img src="img/cod.png" alt="">
                  <p>COD - Cek Dulu</p>
                  <span>Buka dulu, baru bayar!</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
              </div>

            </div>
            <div class="des-4">
              <div class="des-4-1">

                <div>
                  <p>Spesifikasi</p>
                </div>

                <div>
                  <p> Stok, Dikirim Dari</p>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                  </svg>
                </div>

              </div>
            </div>
            <div class="des-5">
              <span>Deskripsi</span>
              <p class="product-description"></p>
            </div>
            <!-- <button class="confirm-btn">Konfirmasi Pembelian</button> -->
            <div class="button_shop confirm-btn">
              <p class="btnText">SOLD?</p>
              <div class="btnTwo">
                <svg clas="btnText2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                  <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z" />
                  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                </svg>
                <!-- <p class="btnText2">X</p> -->
              </div>
            </div>
          </div>
        </div>

    </section>


    <div id="Contact" class="isi">
      <div class="contener_about">
        <div class="header_about">
          <div class="text_parallax_about">
            <h2>HALLO</h2>
            <p>I am <span>Drayn</span></p>
          </div>
        </div>
        <!-- about me -->
        <div class="bagian-1_about">
          <div class="bagian-1_1_about">
            <div class="bagian0">
              <h4>About me</h4>
              <p>Drayn</p>
            </div>
            <div class="pemisah">
              <div class="bagian1_2_about">
                <p>Aku Drayn, jadi yaa ini adalah project yang aku buat selama pkl, cuma mungkin belum sempurna karna
                  tidak ada waktu lagi (waktu deadline), tapi di samping itu aku mendapatkan banyak pengalaman dari
                  pembuatan project ini, dan ada berbagai project yang aku buat cuma semuanya belum sempurna, jadi yaa
                  sorry to say kalau tidak siap sesuai deadline</p>
              </div>

              <div class="bagian1_3_about">
                <p>Di halaman ini aku cuma menampilkan project yang aku buat saja jadi kalau ada gambar random yang ada
                  di web ini atau yang ada di halaman ini itu di abaikan saja yang terpenting hanya tampilannya dan
                  tujuan aku membuat semua ini, mana tau dari kalian ada yang terinspirasi agar nambah wawasan gitu, and
                  thank you yang sudah mau ngunjungi web ini walaupun belum sempurna tapi kalian tetap mau melihatnya
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- my software -->
        <div class="bagian-2_about">
          <div class="bagian-2-1-2 bagian-2-1">
            <h4>My Software</h4>
            <p>Lorem, ipsum dolor.</p>
          </div>
          <div class="bagian-2-2">
            <div class="app-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#29b6f6" d="M44,11.11v25.78c0,1.27-0.79,2.4-1.98,2.82l-8.82,4.14L34,33V15L33.2,4.15l8.82,4.14 C43.21,8.71,44,9.84,44,11.11z">
                </path>
                <path fill="#0277bd" d="M9,33.896L34,15V5.353c0-1.198-1.482-1.758-2.275-0.86L4.658,29.239 c-0.9,0.83-0.849,2.267,0.107,3.032c0,0,1.324,1.232,1.803,1.574C7.304,34.37,8.271,34.43,9,33.896z">
                </path>
                <path fill="#0288d1" d="M9,14.104L34,33v9.647c0,1.198-1.482,1.758-2.275,0.86L4.658,18.761 c-0.9-0.83-0.849-2.267,0.107-3.032c0,0,1.324-1.232,1.803-1.574C7.304,13.63,8.271,13.57,9,14.104z">
                </path>
              </svg>

              <h4>Visual Code</h4>
              <p>Visual Code, apk yang aku gunakan untuk membuat web ini dan mebuat project AI-Vtuber, cuma karna
                kurang-nya jam terbang jadi cuma segini saja yang mampu aku buat untuk sekarang</p>
            </div>


            <div class="app-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#01579B" d="M34.932,22.478C33.769,21.56,32.206,21.001,30.5,21c-1.706,0.001-3.27,0.56-4.433,1.478 c-1.184,0.935-1.969,2.252-2.059,3.747c-0.091,1.536,0.57,2.965,1.732,4.023C26.925,31.324,28.613,32,30.501,32 c1.887,0,3.574-0.676,4.757-1.753c1.162-1.057,1.824-2.486,1.734-4.023C36.902,24.731,36.116,23.413,34.932,22.478z">
                </path>
                <path fill="#FF6D00" d="M45.871,25.932c-0.259-1.823-0.891-3.535-1.861-5.095c-0.891-1.433-2.035-2.688-3.397-3.745l0.002-0.002 l-0.037-0.012c-0.028-0.025-0.05-0.054-0.079-0.078L26.249,6.438c-0.86-0.689-2.12-0.552-2.811,0.313 c-0.69,0.862-0.551,2.121,0.313,2.811L29.739,14H10.5C9.125,14,8,15.125,8,16.5S9.125,19,10.5,19h7.154L2.873,31.602 c-1.048,0.898-1.17,2.478-0.271,3.525C3.097,35.704,3.797,36,4.501,36c0.576,0,1.154-0.198,1.626-0.602l8.954-7.675 c-0.022,0.807-0.039,1.538-0.035,1.761C15.046,33,19,42,30.682,42c8.318,0,15.28-5,15.28-13.261 C46.034,27.805,46.003,26.867,45.871,25.932z M39.525,29.153c-0.401,1.087-1.05,2.104-1.935,2.992 c-1.81,1.82-4.343,2.85-7.088,2.854c-2.745,0.005-5.28-1.017-7.091-2.832c-0.885-0.885-1.535-1.901-1.937-2.986 c-0.392-1.065-0.545-2.195-0.444-3.335c0.098-1.116,0.432-2.179,0.971-3.141c0.529-0.946,1.257-1.8,2.154-2.524 c1.76-1.414,3.999-2.179,6.345-2.182c2.346-0.003,4.584,0.756,6.345,2.164c0.897,0.72,1.624,1.571,2.152,2.515 c0.539,0.961,0.874,2.023,0.973,3.138C40.07,26.958,39.918,28.087,39.525,29.153z">
                </path>
              </svg>

              <h4>Blender</h4>
              <p>Blender adalah apalikasi yang aku gunakan untuk membuat desaign 3D, aplikasi ini banyak fitur yang
                mendukung untuk membuat model 3D yaa walaupun karna 3D aku masih belum sempurna tapi tak usahakan untuk
                improve lebih baik =_=</p>
            </div>


            <div class="app-1 Ibis">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#01579b" d="M34.45,5h-20.9C8.827,5,5,8.827,5,13.55v2.006v11.611v7.283C5,39.171,8.827,43,13.55,43h20.9	c4.723,0,8.55-3.829,8.55-8.55v-7.283V15.556V13.55C43,8.827,39.173,5,34.45,5z">
                </path>
                <path fill="#fdfcef" d="M20,19.999c-1.103,0-2,0.897-2,2V35c0,1.103,0.897,2,2,2c1.102,0,2-0.897,2-2V21.999	C22,20.896,21.103,19.999,20,19.999z">
                </path>
                <path fill="#d82745" d="M33.5,12.84l-3,5.2c-0.59-0.34-1.27-0.54-2-0.54v-6c0.87,0,1.74,0.11,2.59,0.34	C31.93,12.07,32.74,12.4,33.5,12.84z">
                </path>
                <path fill="#dd583a" d="M28.5,11.5l0.002,6.003c-0.681,0.001-1.37,0.167-2.002,0.532l-3-5.196	c0.753-0.435,1.562-0.775,2.413-1.001C26.755,11.618,27.622,11.499,28.5,11.5z">
                </path>
                <path fill="#f47c22" d="M23.5,12.84l3.003,5.198c-0.589,0.341-1.103,0.83-1.468,1.462l-5.196-3	c0.435-0.753,0.965-1.452,1.589-2.073C22.048,13.815,22.739,13.278,23.5,12.84z">
                </path>
                <path fill="#fcc938" d="M19.84,16.5l5.2,3c-0.34,0.59-0.54,1.27-0.54,2h-6c0-0.87,0.11-1.74,0.34-2.59	C19.07,18.07,19.4,17.26,19.84,16.5z">
                </path>
                <path fill="#daea7f" d="M18.5,21.5l6.003-0.002c0.001,0.681,0.167,1.37,0.532,2.002l-5.196,3	c-0.435-0.753-0.775-1.562-1.001-2.413C18.618,23.245,18.499,22.378,18.5,21.5z">
                </path>
                <path fill="#93bc39" d="M19.84,26.5l5.198-3.003c0.341,0.589,0.83,1.103,1.462,1.468l-3,5.196	c-0.753-0.435-1.452-0.965-2.073-1.589C20.815,27.952,20.278,27.261,19.84,26.5z">
                </path>
                <path fill="#6f913d" d="M23.5,30.16l3-5.2c0.59,0.34,1.27,0.54,2,0.54v6c-0.87,0-1.74-0.11-2.59-0.34	C25.07,30.93,24.26,30.6,23.5,30.16z">
                </path>
                <path fill="#18c9c4" d="M28.5,31.5l-0.002-6.003c0.681-0.001,1.37-0.167,2.002-0.532l3,5.196	c-0.753,0.435-1.562,0.775-2.413,1.001C30.245,31.382,29.378,31.501,28.5,31.5z">
                </path>
                <path fill="#55a7f9" d="M33.5,30.16l-3.003-5.198c0.589-0.341,1.103-0.83,1.468-1.462l5.196,3	c-0.435,0.753-0.965,1.452-1.589,2.073C34.952,29.185,34.261,29.722,33.5,30.16z">
                </path>
                <path fill="#2d80d3" d="M37.16,26.5l-5.2-3c0.34-0.59,0.54-1.27,0.54-2h6c0,0.87-0.11,1.74-0.34,2.59	C37.93,24.93,37.6,25.74,37.16,26.5z">
                </path>
                <path fill="#666aad" d="M38.5,21.5l-6.003,0.002c-0.001-0.681-0.167-1.37-0.532-2.002l5.196-3	c0.435,0.753,0.775,1.562,1.001,2.413C38.382,19.755,38.501,20.622,38.5,21.5z">
                </path>
                <path fill="#ef657d" d="M37.16,16.5l-5.198,3.003c-0.341-0.589-0.83-1.103-1.462-1.468l3-5.196	c0.753,0.435,1.452,0.965,2.073,1.589C36.185,15.048,36.722,15.739,37.16,16.5z">
                </path>
                <path fill="#fdfcef" d="M13,19.999c-1.103,0-2,0.897-2,2V35c0,1.103,0.897,2,2,2c1.102,0,2-0.897,2-2V21.999 C15,20.896,14.103,19.999,13,19.999z">
                </path>
                <circle cx="13" cy="16" r="2.25" fill="#fdfcef"></circle>
                <path fill="#fdfcef" d="M28.5,26c-1.254,0-2.169-0.496-2.717-0.912l0,0C24.65,24.228,24,22.919,24,21.5	c0-2.481,2.019-4.5,4.5-4.5s4.5,2.019,4.5,4.5S30.981,26,28.5,26z M26.388,24.292C26.813,24.615,27.525,25,28.5,25	c1.93,0,3.5-1.57,3.5-3.5S30.43,18,28.5,18S25,19.57,25,21.5C25,22.604,25.505,23.622,26.388,24.292L26.388,24.292z">
                </path>
                <path fill="#fdfcef" d="M28.5,32c-2.313,0-4.507-0.738-6.345-2.134C19.514,27.861,18,24.812,18,21.5	C18,15.71,22.71,11,28.5,11S39,15.71,39,21.5S34.29,32,28.5,32z M28.5,12c-5.238,0-9.5,4.262-9.5,9.5c0,2.997,1.37,5.756,3.761,7.57	l0,0C24.422,30.333,26.407,31,28.5,31c5.238,0,9.5-4.262,9.5-9.5S33.738,12,28.5,12z">
                </path>
                <path fill="#fdfcef" d="M28.5,18c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6	C29,17.776,28.776,18,28.5,18z">
                </path>
                <path fill="#fdfcef" d="M26.5,18.536c-0.172,0-0.341-0.089-0.433-0.25l-3-5.196c-0.139-0.239-0.057-0.545,0.183-0.683	c0.239-0.138,0.545-0.058,0.683,0.183l3,5.196c0.139,0.239,0.057,0.545-0.183,0.683C26.67,18.515,26.585,18.536,26.5,18.536z">
                </path>
                <path fill="#fdfcef" d="M25.036,20c-0.085,0-0.171-0.021-0.25-0.067l-5.196-3c-0.239-0.138-0.321-0.444-0.183-0.683	s0.444-0.32,0.683-0.183l5.196,3c0.239,0.138,0.321,0.444,0.183,0.683C25.376,19.91,25.208,20,25.036,20z">
                </path>
                <path fill="#fdfcef" d="M24.5,22h-6c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h6c0.276,0,0.5,0.224,0.5,0.5	S24.776,22,24.5,22z">
                </path>
                <path fill="#fdfcef" d="M19.839,27c-0.172,0-0.341-0.089-0.433-0.25c-0.139-0.239-0.057-0.545,0.183-0.683l5.196-3	c0.238-0.138,0.545-0.058,0.683,0.183c0.139,0.239,0.057,0.545-0.183,0.683l-5.196,3C20.01,26.979,19.924,27,19.839,27z">
                </path>
                <path fill="#fdfcef" d="M23.5,30.66c-0.085,0-0.171-0.021-0.25-0.067c-0.239-0.138-0.321-0.444-0.183-0.683l3-5.196	c0.138-0.239,0.444-0.32,0.683-0.183c0.239,0.138,0.321,0.444,0.183,0.683l-3,5.196C23.84,30.57,23.671,30.66,23.5,30.66z">
                </path>
                <path fill="#fdfcef" d="M28.5,32c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6	C29,31.776,28.776,32,28.5,32z">
                </path>
                <path fill="#fdfcef" d="M33.5,30.66c-0.172,0-0.341-0.089-0.433-0.25l-3-5.196c-0.139-0.239-0.057-0.545,0.183-0.683	c0.238-0.139,0.545-0.057,0.683,0.183l3,5.196c0.139,0.239,0.057,0.545-0.183,0.683C33.67,30.639,33.585,30.66,33.5,30.66z">
                </path>
                <path fill="#fdfcef" d="M37.161,27c-0.085,0-0.171-0.021-0.25-0.067l-5.196-3c-0.239-0.138-0.321-0.444-0.183-0.683	s0.444-0.319,0.683-0.183l5.196,3c0.239,0.138,0.321,0.444,0.183,0.683C37.501,26.91,37.333,27,37.161,27z">
                </path>
                <path fill="#fdfcef" d="M38.5,22h-6c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h6c0.276,0,0.5,0.224,0.5,0.5	S38.776,22,38.5,22z">
                </path>
                <path fill="#fdfcef" d="M31.964,20c-0.172,0-0.341-0.089-0.433-0.25c-0.139-0.239-0.057-0.545,0.183-0.683l5.196-3	c0.239-0.139,0.546-0.057,0.683,0.183c0.139,0.239,0.057,0.545-0.183,0.683l-5.196,3C32.135,19.979,32.049,20,31.964,20z">
                </path>
                <path fill="#fdfcef" d="M30.5,18.536c-0.085,0-0.171-0.021-0.25-0.067c-0.239-0.138-0.321-0.444-0.183-0.683l3-5.196	c0.138-0.239,0.444-0.319,0.683-0.183c0.239,0.138,0.321,0.444,0.183,0.683l-3,5.196C30.84,18.446,30.671,18.536,30.5,18.536z">
                </path>
              </svg>

              <h4>Ibis PaintX</h4>
              <p>Ibis paint adalah aplikasi yang aku gunakan untuk membuat gambar, jadi sembelum membuat 3D model agar
                mempermudah pembuatan-nya alangkah baiknya membuat desaign 2D-nya dulu agar mempunyai gambaran</p>
            </div>
          </div>


        </div>
        <!-- my dokumentasi -->
        <div class="bagian-3_about">
          <div class="bagian-2-1 bagian-3">
            <h4>My Documentation</h4>
            <p>Lorem, ipsum dolor.</p>
          </div>

          <div class="bagian-3-2">
            <div><img src="img/astro-1.jpeg" alt=""></div>
            <div><img src="img/astro-1.jpeg" alt=""></div>
            <div><img src="img/astro-1.jpeg" alt=""></div>
            <div><img src="img/astro-1.jpeg" alt=""></div>
            <div><img src="img/astro-1.jpeg" alt=""></div>
            <div><img src="img/astro-1.jpeg" alt=""></div>
          </div>
        </div>
        <!-- Project Web desaign-->
        <div class="bagian-4_about">
          <div class="bagian-2-1 bagian-42">
            <h4>Project Web Desain</h4>
            <p>Lorem, ipsum dolor.</p>
          </div>

          <div class="bagian-4-2">
            <div class="bagian-4-2-1">
              <div class="img-4-2">
                <img src="img/program.png" alt="">
              </div>

              <div class="description-4-2">
                <h5>Pembuatan Web Desain</h5>
                <p>Di project Web desain ini, aku menggunakan Html, Css, Java-Script, Jqurey, dan php. dan aku tidak
                  menggunakan framework seperti sass, bootstrap, ataupun laravel untuk membuat-nya jadi ini bener-bener
                  membuat-nya mulai dari 0 dan membuat-nya secara manual.</p>
                <p>Hal yang paling merepotkan bagi saya dalam membuat-nya adalah di bagian responsive karna terkandang
                  elemen" yang ada di halaman, suka ngilang gitu dan itu sangat merepotkan di tambah tidak ada
                  pemberitahuan kalau elemen" tersebut hilang dari layar user, dan aku baru mengusai bahasa" tersebut
                  masih dasar jadi tak usahakan untuk improve untuk kedepannya.</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Desain Karakter 2D -->
        <div class="bagian-5_about">
          <div class="bagian-2-1 bagian-5-1">
            <h4>Gambaran 2d Karakter</h4>
            <p>Lorem, ipsum dolor.</p>
          </div>

          <div class="bagian-5-2">
            <div class="bagian-5-2-1">
              <div class="img-5-2">
                <img src="img/gambaran-1.jpg " alt="">
              </div>

              <div class="description-5-2">
                <h4>Gambaran..</h4>
                <p>Di project ini sebenernya lebih kearah hobi, karna aku lumayan pande gambar jadi sebagian waktu pkl
                  yang aku punya itu aku gunakan untuk gambar dan agar bisa menambah jam terbang\pengalaman untuk gambar
                </p>
                <p>Gambar di samping hanya perwakilan dari gambaran yang aku buat mungkin kurang sopan tapi yaa karna
                  ini konteks-nya lebih ke arah dewasa dan karakter kartun jadi tolong di maklumi yaa =_=.</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Project animasi -->
        <div class="bagian-6_about">
          <div class="bagian-2-1 bagian-5-1">
            <h4>Project Animasi</h4>
            <p>Lorem, ipsum dolor.</p>
          </div>

          <div class="bagian-6-2">
            <div class="bagian-6-2-1">
              <div class="img-6-2">
                <img src="img/astro-2.png " alt="">
              </div>

              <div class="description-6-2">
                <h4>Animasi</h4>
                <p>Animasi yang aku buat ini menggunakan miku-miku-dance, kalau ada yang bertanya kenapa pake
                  miku-miku-dance bukan pakai blender?, jawaban-nya simpel, rada berat membuat animasi menggunakan
                  blender jadi aku menggunakan apk alternativenya aja =_=</p>
                <p>Mungkin video yang diatas terlihat rada kaku, tapi yaa setidak-nya aku sudah berusaha untuk mencoba
                  membuat project-nya, dalam pembuatan sebenar-nya banyak kesulitan yang di dapat tapi itu semua karna
                  faktor baru mengenal apk, animasi, dan motion karakter, kalau udah terbiasa biasa-nya tidak ada
                  masalah kecuali waktu rendering, memang membutuhkan daya yang tinggi saat melakukan rendering jadi itu
                  wajar saja :).</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Project AI Vtuber -->
        <div class="bagian-7_about">
          <h2>AI Vtuber</h2>
        </div>
        <!-- lanjutan AI Vtuber -->
        <div class="bagian-8_about">
          <div class="bagian-8-1">
            <div id="b-81">
              <p>Di pembuatan AI-Vtuber ini aku menggunakan bahasa pemrograman python , sebenarnya java-script juga bisa
                untuk membuat nya cuma karna saya ingin mencoba bahasa pemrograman yang lain jadi saya mencoba untuk
                menggunakan bahasa python, ingatan AI-Vtuber ini tu aku menggunakan chat GPT, yakali aku ketik semua
                pengetahuan yang ada di google terus aku masukan ke project ini capek bnh :), dan aku menambahkan
                beberapa parameter untuk membuat jawaban AI-Vtuber ini lebih perhatian dan ini rada susah</p>
            </div>

            <div>
              <p>Walaupun ingatan-nya dari chat-GPT tapi aku masih bisa custom untuk menambahkan ingatan-nya, seperti
                kenal aku gak?, atau identitas dia, jadi seolah olah ini beneran AI-Vtuber, cuma ada beberapa kendala
                dari project ini, suka error :), dan yang hebat-nya error 1 malah yang lain error ( ini wajar ) yang gak
                wajarnya itu openai milik chat-GPT suka error saat pembuatan project-nya jadi harus besabar, untuk
                hasilnya ada di background, atau video berikut</p>
            </div>
          </div>

          <div class="bagian-8-2">
            <img src="img/astro-3.png" alt="">
          </div>

        </div>
        <!-- APK yg aku kuasai -->
        <div class="bagian-9_about">
          <!-- <button class="next_slider_about">></button>
        <button class="prev_slider_about"><</button> -->
          <div class="bagian-2-1 bagian-91">
            <h4>
              Which I Master
            </h4>
          </div>
          <div class="bagian-92">
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                </g>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(5.33333,5.33333)">
                    <path d="M41,5h-34l3,34l14,4l14,-4l3,-34z" fill="#e65100"></path>
                    <path d="M24,8v31.9l11.2,-3.2l2.5,-28.7z" fill="#ff6d00"></path>
                    <path d="M24,25v-4h8.6l-0.7,11.5l-7.9,2.6v-4.2l4.1,-1.4l0.3,-4.5zM32.9,17l0.3,-4h-9.2v4z" fill="#ffffff"></path>
                    <path d="M24,30.9v4.2l-7.9,-2.6l-0.4,-5.5h4l0.2,2.5zM19.1,17h4.9v-4h-9.1l0.7,12h8.4v-4h-4.6z" fill="#eeeeee"></path>
                  </g>
                </g>
              </svg>
              <h3>HTML</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                </g>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(5.33333,5.33333)">
                    <path d="M41,5h-34l3,34l14,4l14,-4l3,-34z" fill="#0277bd"></path>
                    <path d="M24,8v31.9l11.2,-3.2l2.5,-28.7z" fill="#039be5"></path>
                    <path d="M33.1,13h-9.1v4h4.9l-0.3,4h-4.6v4h4.4l-0.3,4.5l-4.1,1.4v4.2l7.9,-2.6l0.7,-11.5v0z" fill="#ffffff"></path>
                    <path d="M24,13v4h-8.9l-0.3,-4zM19.4,21l0.2,4h4.4v-4zM19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1,-1.4z" fill="#eeeeee"></path>
                  </g>
                </g>
              </svg>
              <h3>CSS</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                </g>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(5.33333,5.33333)">
                    <path d="M6,42v-36h36v36z" fill="#ffd600"></path>
                    <path d="M29.538,32.947c0.692,1.124 1.444,2.201 3.037,2.201c1.338,0 2.04,-0.665 2.04,-1.585c0,-1.101 -0.726,-1.492 -2.198,-2.133l-0.807,-0.344c-2.329,-0.988 -3.878,-2.226 -3.878,-4.841c0,-2.41 1.845,-4.244 4.728,-4.244c2.053,0 3.528,0.711 4.592,2.573l-2.514,1.607c-0.553,-0.988 -1.151,-1.377 -2.078,-1.377c-0.946,0 -1.545,0.597 -1.545,1.377c0,0.964 0.6,1.354 1.985,1.951l0.807,0.344c2.745,1.169 4.293,2.363 4.293,5.047c0,2.892 -2.284,4.477 -5.35,4.477c-2.999,0 -4.702,-1.505 -5.65,-3.368zM17.952,33.029c0.506,0.906 1.275,1.603 2.381,1.603c1.058,0 1.667,-0.418 1.667,-2.043v-10.589h3.333v11.101c0,3.367 -1.953,4.899 -4.805,4.899c-2.577,0 -4.437,-1.746 -5.195,-3.368z" fill="#000001"></path>
                  </g>
                </g>
              </svg>
              <h3>JAVA-SCRIPT</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                </g>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(3.2,3.2)">
                    <path d="M40,61.5c-21.78,0 -39.5,-9.645 -39.5,-21.5c0,-11.855 17.72,-21.5 39.5,-21.5c21.78,0 39.5,9.645 39.5,21.5c0,11.855 -17.72,21.5 -39.5,21.5z" fill="#dcd5f2"></path>
                    <path d="M40,19c21.505,0 39,9.421 39,21c0,11.579 -17.495,21 -39,21c-21.505,0 -39,-9.421 -39,-21c0,-11.579 17.495,-21 39,-21M40,18c-22.091,0 -40,9.85 -40,22c0,12.15 17.909,22 40,22c22.091,0 40,-9.85 40,-22c0,-12.15 -17.909,-22 -40,-22z" fill="#8b75a1"></path>
                    <path d="M25.112,34c1.725,0 3.214,0.622 4.084,1.706c0.749,0.934 0.981,2.171 0.668,3.577c-0.841,3.791 -2.469,4.717 -8.294,4.717h-4.14l1.75,-10h5.932M25.112,32h-7.612l-3.5,20h2l1.056,-6h4.515c5.863,0 9.053,-0.905 10.246,-6.284c1.025,-4.62 -2.381,-7.716 -6.705,-7.716zM61.112,34c1.725,0 3.214,0.622 4.084,1.706c0.749,0.934 0.981,2.171 0.668,3.577c-0.841,3.791 -2.469,4.717 -8.294,4.717h-4.14l1.75,-10h5.932M61.112,32h-7.612l-3.5,20h2l1.056,-6h4.515c5.863,0 9.053,-0.905 10.246,-6.284c1.025,-4.62 -2.381,-7.716 -6.705,-7.716z" fill="#36404d"></path>
                    <g fill="#36404d">
                      <path d="M49.072,33.212c-0.879,-0.864 -2.428,-1.212 -4.738,-1.212h-5.538l1.204,-6h-2.1l-3.9,20h1.99l2.388,-12h0.419h5.538c2.338,0 3.094,0.4 3.335,0.637c0.343,0.338 0.424,1.226 0.217,2.363l-1.767,9h2.106l1.626,-8.63c0.347,-1.908 0.084,-3.308 -0.78,-4.158z">
                      </path>
                    </g>
                  </g>
                </g>
              </svg>
              <h3>PHP</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                <path d="M 29.867188 3.007813 C 29.761719 3.023438 29.65625 3.054688 29.554688 3.101563 C 28.695313 3.527344 27.71875 4.792969 27.53125 5.042969 C 27.519531 5.058594 27.507813 5.074219 27.5 5.089844 C 26.535156 6.535156 26.019531 8.226563 26 9.988281 C 25.988281 11.308594 26.246094 12.617188 26.769531 13.878906 C 27.988281 16.804688 30.519531 19.226563 33.53125 20.359375 C 33.632813 20.394531 33.730469 20.429688 33.90625 20.492188 C 33.921875 20.5 34.070313 20.546875 34.09375 20.550781 L 34.203125 20.589844 C 34.359375 20.640625 34.519531 20.691406 34.675781 20.722656 C 35.46875 20.882813 36.242188 20.972656 36.96875 20.996094 C 37.09375 20.996094 37.21875 21 37.34375 21 C 42.824219 21 44.949219 17.132813 45.65625 15.84375 C 45.726563 15.71875 45.777344 15.617188 45.824219 15.554688 C 45.824219 15.550781 45.824219 15.550781 45.828125 15.546875 C 46.136719 15.089844 46.019531 14.46875 45.5625 14.15625 C 45.109375 13.847656 44.488281 13.964844 44.175781 14.421875 C 44.175781 14.421875 44.171875 14.421875 44.171875 14.421875 C 42.710938 16.574219 40.210938 17.226563 36.746094 16.367188 C 36.488281 16.304688 36.207031 16.207031 35.957031 16.113281 C 35.628906 15.996094 35.300781 15.859375 34.996094 15.710938 C 34.390625 15.410156 33.820313 15.050781 33.304688 14.652344 C 30.257813 12.289063 29.066406 7.371094 30.847656 4.53125 C 31.085938 4.152344 31.042969 3.660156 30.742188 3.328125 C 30.515625 3.078125 30.1875 2.964844 29.867188 3.007813 Z M 21.007813 5 C 20.78125 4.996094 20.550781 5.070313 20.363281 5.226563 C 18.851563 6.457031 17.304688 8.472656 17.238281 8.554688 C 17.230469 8.570313 17.222656 8.582031 17.210938 8.597656 C 14.476563 12.578125 14.269531 18.242188 16.6875 23.027344 C 17.066406 23.785156 17.496094 24.507813 17.953125 25.171875 L 18.089844 25.367188 C 18.476563 25.933594 18.910156 26.574219 19.464844 27.074219 C 19.65625 27.292969 19.863281 27.503906 20.066406 27.707031 L 20.164063 27.808594 L 20.246094 27.890625 C 20.453125 28.089844 20.664063 28.292969 20.882813 28.488281 C 20.882813 28.488281 20.886719 28.488281 20.886719 28.488281 C 20.902344 28.511719 20.925781 28.527344 20.945313 28.546875 C 21.191406 28.765625 21.441406 28.972656 21.773438 29.234375 L 21.863281 29.300781 C 22.121094 29.507813 22.382813 29.703125 22.652344 29.894531 C 22.679688 29.914063 22.707031 29.933594 22.734375 29.953125 C 22.828125 30.015625 22.921875 30.074219 23.015625 30.140625 L 23.109375 30.203125 L 23.21875 30.273438 C 23.417969 30.40625 23.613281 30.527344 23.890625 30.6875 C 24.070313 30.796875 24.261719 30.90625 24.386719 30.96875 C 24.441406 31 24.5 31.03125 24.636719 31.105469 L 24.941406 31.265625 C 24.957031 31.273438 25.027344 31.304688 25.042969 31.3125 C 25.242188 31.414063 25.449219 31.511719 25.65625 31.605469 L 25.972656 31.746094 C 26.179688 31.835938 26.390625 31.921875 26.648438 32.019531 L 26.765625 32.0625 C 26.773438 32.070313 26.871094 32.105469 26.878906 32.109375 C 27.066406 32.175781 27.257813 32.242188 27.449219 32.304688 L 27.886719 32.449219 C 28.105469 32.523438 28.359375 32.609375 28.636719 32.65625 C 30 32.882813 31.324219 33 32.578125 33 C 32.726563 33 32.875 32.996094 33.019531 32.996094 C 44.058594 32.753906 46.929688 23.375 46.957031 23.28125 C 47.09375 22.808594 46.871094 22.304688 46.425781 22.09375 C 45.980469 21.882813 45.449219 22.03125 45.171875 22.4375 C 42.375 26.523438 37.085938 28.25 31.699219 26.828125 C 31.449219 26.765625 31.207031 26.695313 30.90625 26.597656 C 30.855469 26.582031 30.8125 26.566406 30.730469 26.535156 C 30.554688 26.480469 30.382813 26.421875 30.1875 26.347656 L 29.910156 26.242188 C 29.75 26.179688 29.589844 26.117188 29.394531 26.03125 L 29.265625 25.972656 C 29.027344 25.871094 28.796875 25.757813 28.589844 25.65625 L 28.019531 25.359375 C 27.890625 25.296875 27.777344 25.226563 27.601563 25.121094 L 27.503906 25.066406 L 27.40625 25.007813 C 27.261719 24.921875 27.117188 24.832031 26.984375 24.738281 L 26.890625 24.679688 C 26.882813 24.675781 26.804688 24.621094 26.796875 24.613281 C 26.679688 24.539063 26.566406 24.464844 26.457031 24.394531 C 26.214844 24.222656 25.976563 24.042969 25.699219 23.824219 L 25.589844 23.734375 C 23.011719 21.675781 21.105469 18.925781 20.210938 15.976563 C 19.378906 13.269531 19.996094 9.726563 21.863281 6.5 C 22.105469 6.082031 22.015625 5.550781 21.644531 5.238281 C 21.460938 5.082031 21.234375 5 21.007813 5 Z M 10.003906 8 C 9.765625 8 9.523438 8.085938 9.332031 8.257813 C 7.421875 9.972656 5.992188 12.195313 5.835938 12.449219 C 1.75 18.398438 2.539063 27.644531 5.34375 33.296875 C 5.398438 33.414063 5.457031 33.527344 5.515625 33.640625 L 5.554688 33.703125 C 5.605469 33.816406 5.664063 33.933594 5.683594 33.957031 C 5.714844 34.03125 5.761719 34.113281 5.78125 34.136719 C 5.828125 34.234375 5.875 34.320313 5.960938 34.46875 L 6.28125 35.019531 C 6.328125 35.09375 6.375 35.171875 6.390625 35.199219 C 6.453125 35.300781 6.519531 35.40625 6.585938 35.511719 L 6.742188 35.761719 C 6.789063 35.835938 6.835938 35.902344 6.867188 35.941406 C 7.023438 36.183594 7.179688 36.425781 7.351563 36.65625 C 7.359375 36.667969 7.367188 36.675781 7.375 36.683594 L 7.4375 36.769531 C 7.578125 36.972656 7.722656 37.167969 7.851563 37.328125 L 8.421875 38.050781 C 8.429688 38.058594 8.492188 38.132813 8.496094 38.140625 L 8.578125 38.234375 C 8.75 38.445313 8.933594 38.65625 9.117188 38.859375 C 9.144531 38.890625 9.171875 38.917969 9.199219 38.949219 C 9.375 39.140625 9.554688 39.332031 9.742188 39.53125 L 9.921875 39.703125 C 10.070313 39.859375 10.21875 40.011719 10.375 40.15625 C 10.375 40.160156 10.449219 40.230469 10.449219 40.230469 L 10.605469 40.375 C 10.792969 40.554688 10.988281 40.734375 11.136719 40.859375 C 11.144531 40.871094 11.285156 40.992188 11.296875 41 C 11.480469 41.164063 11.664063 41.320313 11.851563 41.472656 L 12.808594 42.230469 C 12.96875 42.347656 13.132813 42.464844 13.320313 42.601563 C 13.382813 42.648438 13.449219 42.695313 13.515625 42.738281 C 13.542969 42.761719 13.574219 42.785156 13.59375 42.796875 L 14.3125 43.277344 C 14.574219 43.449219 14.835938 43.609375 15.15625 43.800781 L 15.328125 43.898438 C 15.527344 44.015625 15.730469 44.132813 15.921875 44.234375 C 16.035156 44.296875 16.148438 44.351563 16.246094 44.402344 C 16.382813 44.476563 16.53125 44.558594 16.757813 44.667969 C 16.777344 44.679688 16.9375 44.757813 16.957031 44.765625 C 17.183594 44.878906 17.414063 44.984375 17.703125 45.113281 C 17.703125 45.117188 17.796875 45.160156 17.796875 45.160156 C 18.0625 45.273438 18.320313 45.382813 18.660156 45.519531 C 18.714844 45.542969 18.769531 45.5625 18.78125 45.566406 C 19.023438 45.660156 19.277344 45.753906 19.484375 45.828125 C 19.503906 45.835938 19.609375 45.878906 19.628906 45.886719 C 19.90625 45.980469 20.179688 46.070313 20.53125 46.179688 C 20.589844 46.199219 20.652344 46.21875 20.660156 46.21875 L 20.859375 46.28125 C 21.101563 46.355469 21.34375 46.433594 21.605469 46.484375 C 23.464844 46.824219 25.28125 47 27 47 L 27.003906 47 C 41.328125 47 45.890625 35.472656 45.9375 35.355469 C 46.113281 34.890625 45.921875 34.367188 45.484375 34.125 C 45.054688 33.886719 44.507813 34 44.203125 34.394531 C 40.527344 39.234375 33.59375 41.03125 25.65625 39.207031 C 25.464844 39.160156 25.269531 39.105469 25.078125 39.046875 L 24.703125 38.933594 C 24.449219 38.855469 24.195313 38.769531 23.949219 38.683594 C 23.945313 38.683594 23.832031 38.640625 23.832031 38.640625 C 23.613281 38.566406 23.394531 38.480469 23.203125 38.40625 L 22.984375 38.320313 C 22.742188 38.222656 22.5 38.121094 22.265625 38.015625 L 22.128906 37.957031 C 21.917969 37.859375 21.714844 37.765625 21.511719 37.664063 C 21.496094 37.65625 21.335938 37.578125 21.320313 37.574219 C 21.179688 37.503906 21.039063 37.429688 20.859375 37.332031 L 20.042969 36.894531 C 19.960938 36.839844 19.875 36.789063 19.792969 36.746094 C 19.546875 36.59375 19.292969 36.441406 19.042969 36.28125 C 18.984375 36.246094 18.933594 36.207031 18.835938 36.140625 C 18.664063 36.03125 18.496094 35.917969 18.25 35.746094 L 18.152344 35.675781 C 17.984375 35.558594 17.820313 35.433594 17.683594 35.332031 C 17.597656 35.269531 17.511719 35.199219 17.371094 35.09375 C 17.246094 34.996094 17.121094 34.902344 17.003906 34.808594 L 16.785156 34.628906 C 16.601563 34.480469 16.429688 34.324219 16.25 34.171875 C 16.226563 34.148438 16.207031 34.132813 16.179688 34.113281 C 15.980469 33.929688 15.777344 33.746094 15.535156 33.515625 L 14.828125 32.8125 C 14.65625 32.636719 14.484375 32.457031 14.289063 32.242188 C 14.109375 32.042969 13.9375 31.84375 13.707031 31.570313 L 13.285156 31.054688 C 13.234375 30.980469 13.179688 30.90625 13.113281 30.828125 C 12.96875 30.632813 12.824219 30.441406 12.679688 30.238281 C 8.789063 24.878906 7.773438 13.691406 10.804688 9.59375 C 11.109375 9.183594 11.054688 8.605469 10.671875 8.257813 C 10.484375 8.085938 10.242188 8 10.003906 8 Z" fill="#0077a2"></path>
              </svg>
              <h3>JQUERY</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                </g>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(5.33333,5.33333)">
                    <path d="M24.047,5c-1.555,0.005 -2.633,0.142 -3.936,0.367c-3.848,0.67 -4.549,2.077 -4.549,4.67v3.963h9v2h-9.342h-4.35c-2.636,0 -4.943,1.242 -5.674,4.219c-0.826,3.417 -0.863,5.557 0,9.125c0.655,2.661 2.098,4.656 4.735,4.656h3.632v-5.104c0,-2.966 2.686,-5.896 5.764,-5.896h7.236c2.523,0 5,-1.862 5,-4.377v-8.586c0,-2.439 -1.759,-4.263 -4.218,-4.672c0.061,-0.006 -1.756,-0.371 -3.298,-0.365zM19.063,9c0.821,0 1.5,0.677 1.5,1.502c0,0.833 -0.679,1.498 -1.5,1.498c-0.837,0 -1.5,-0.664 -1.5,-1.498c0,-0.822 0.663,-1.502 1.5,-1.502z" fill="#0277bd"></path>
                    <path d="M23.078,43c1.555,-0.005 2.633,-0.142 3.936,-0.367c3.848,-0.67 4.549,-2.077 4.549,-4.67v-3.963h-9v-2h9.343h4.35c2.636,0 4.943,-1.242 5.674,-4.219c0.826,-3.417 0.863,-5.557 0,-9.125c-0.656,-2.661 -2.099,-4.656 -4.736,-4.656h-3.632v5.104c0,2.966 -2.686,5.896 -5.764,5.896h-7.236c-2.523,0 -5,1.862 -5,4.377v8.586c0,2.439 1.759,4.263 4.218,4.672c-0.061,0.006 1.756,0.371 3.298,0.365zM28.063,39c-0.821,0 -1.5,-0.677 -1.5,-1.502c0,-0.833 0.679,-1.498 1.5,-1.498c0.837,0 1.5,0.664 1.5,1.498c0,0.822 -0.664,1.502 -1.5,1.502z" fill="#ffc107"></path>
                  </g>
                </g>
              </svg>
              <h3>PYTHON</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
                <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
                </g>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <g transform="scale(5.33333,5.33333)">
                    <path d="M34.932,22.478c-1.163,-0.918 -2.726,-1.477 -4.432,-1.478c-1.706,0.001 -3.27,0.56 -4.433,1.478c-1.184,0.935 -1.969,2.252 -2.059,3.747c-0.091,1.536 0.57,2.965 1.732,4.023c1.185,1.076 2.873,1.752 4.761,1.752c1.887,0 3.574,-0.676 4.757,-1.753c1.162,-1.057 1.824,-2.486 1.734,-4.023c-0.09,-1.493 -0.876,-2.811 -2.06,-3.746z" fill="#01579b"></path>
                    <path d="M45.871,25.932c-0.259,-1.823 -0.891,-3.535 -1.861,-5.095c-0.891,-1.433 -2.035,-2.688 -3.397,-3.745l0.002,-0.002l-0.037,-0.012c-0.028,-0.025 -0.05,-0.054 -0.079,-0.078l-14.25,-10.562c-0.86,-0.689 -2.12,-0.552 -2.811,0.313c-0.69,0.862 -0.551,2.121 0.313,2.811l5.988,4.438h-19.239c-1.375,0 -2.5,1.125 -2.5,2.5c0,1.375 1.125,2.5 2.5,2.5h7.154l-14.781,12.602c-1.048,0.898 -1.17,2.478 -0.271,3.525c0.495,0.577 1.195,0.873 1.899,0.873c0.576,0 1.154,-0.198 1.626,-0.602l8.954,-7.675c-0.022,0.807 -0.039,1.538 -0.035,1.761c0,3.516 3.954,12.516 15.636,12.516c8.318,0 15.28,-5 15.28,-13.261c0.072,-0.934 0.041,-1.872 -0.091,-2.807zM39.525,29.153c-0.401,1.087 -1.05,2.104 -1.935,2.992c-1.81,1.82 -4.343,2.85 -7.088,2.854c-2.745,0.005 -5.28,-1.017 -7.091,-2.832c-0.885,-0.885 -1.535,-1.901 -1.937,-2.986c-0.392,-1.065 -0.545,-2.195 -0.444,-3.335c0.098,-1.116 0.432,-2.179 0.971,-3.141c0.529,-0.946 1.257,-1.8 2.154,-2.524c1.76,-1.414 3.999,-2.179 6.345,-2.182c2.346,-0.003 4.584,0.756 6.345,2.164c0.897,0.72 1.624,1.571 2.152,2.515c0.539,0.961 0.874,2.023 0.973,3.138c0.1,1.142 -0.052,2.271 -0.445,3.337z" fill="#ff6d00"></path>
                  </g>
                </g>
              </svg>
              <h3>BLENDER</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="bagian-9-1">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <path fill="#01579b" d="M34.45,5h-20.9C8.827,5,5,8.827,5,13.55v2.006v11.611v7.283C5,39.171,8.827,43,13.55,43h20.9	c4.723,0,8.55-3.829,8.55-8.55v-7.283V15.556V13.55C43,8.827,39.173,5,34.45,5z">
                </path>
                <path fill="#fdfcef" d="M20,19.999c-1.103,0-2,0.897-2,2V35c0,1.103,0.897,2,2,2c1.102,0,2-0.897,2-2V21.999	C22,20.896,21.103,19.999,20,19.999z">
                </path>
                <path fill="#d82745" d="M33.5,12.84l-3,5.2c-0.59-0.34-1.27-0.54-2-0.54v-6c0.87,0,1.74,0.11,2.59,0.34	C31.93,12.07,32.74,12.4,33.5,12.84z">
                </path>
                <path fill="#dd583a" d="M28.5,11.5l0.002,6.003c-0.681,0.001-1.37,0.167-2.002,0.532l-3-5.196	c0.753-0.435,1.562-0.775,2.413-1.001C26.755,11.618,27.622,11.499,28.5,11.5z">
                </path>
                <path fill="#f47c22" d="M23.5,12.84l3.003,5.198c-0.589,0.341-1.103,0.83-1.468,1.462l-5.196-3	c0.435-0.753,0.965-1.452,1.589-2.073C22.048,13.815,22.739,13.278,23.5,12.84z">
                </path>
                <path fill="#fcc938" d="M19.84,16.5l5.2,3c-0.34,0.59-0.54,1.27-0.54,2h-6c0-0.87,0.11-1.74,0.34-2.59	C19.07,18.07,19.4,17.26,19.84,16.5z">
                </path>
                <path fill="#daea7f" d="M18.5,21.5l6.003-0.002c0.001,0.681,0.167,1.37,0.532,2.002l-5.196,3	c-0.435-0.753-0.775-1.562-1.001-2.413C18.618,23.245,18.499,22.378,18.5,21.5z">
                </path>
                <path fill="#93bc39" d="M19.84,26.5l5.198-3.003c0.341,0.589,0.83,1.103,1.462,1.468l-3,5.196	c-0.753-0.435-1.452-0.965-2.073-1.589C20.815,27.952,20.278,27.261,19.84,26.5z">
                </path>
                <path fill="#6f913d" d="M23.5,30.16l3-5.2c0.59,0.34,1.27,0.54,2,0.54v6c-0.87,0-1.74-0.11-2.59-0.34	C25.07,30.93,24.26,30.6,23.5,30.16z">
                </path>
                <path fill="#18c9c4" d="M28.5,31.5l-0.002-6.003c0.681-0.001,1.37-0.167,2.002-0.532l3,5.196	c-0.753,0.435-1.562,0.775-2.413,1.001C30.245,31.382,29.378,31.501,28.5,31.5z">
                </path>
                <path fill="#55a7f9" d="M33.5,30.16l-3.003-5.198c0.589-0.341,1.103-0.83,1.468-1.462l5.196,3	c-0.435,0.753-0.965,1.452-1.589,2.073C34.952,29.185,34.261,29.722,33.5,30.16z">
                </path>
                <path fill="#2d80d3" d="M37.16,26.5l-5.2-3c0.34-0.59,0.54-1.27,0.54-2h6c0,0.87-0.11,1.74-0.34,2.59	C37.93,24.93,37.6,25.74,37.16,26.5z">
                </path>
                <path fill="#666aad" d="M38.5,21.5l-6.003,0.002c-0.001-0.681-0.167-1.37-0.532-2.002l5.196-3	c0.435,0.753,0.775,1.562,1.001,2.413C38.382,19.755,38.501,20.622,38.5,21.5z">
                </path>
                <path fill="#ef657d" d="M37.16,16.5l-5.198,3.003c-0.341-0.589-0.83-1.103-1.462-1.468l3-5.196	c0.753,0.435,1.452,0.965,2.073,1.589C36.185,15.048,36.722,15.739,37.16,16.5z">
                </path>
                <path fill="#fdfcef" d="M13,19.999c-1.103,0-2,0.897-2,2V35c0,1.103,0.897,2,2,2c1.102,0,2-0.897,2-2V21.999 C15,20.896,14.103,19.999,13,19.999z">
                </path>
                <circle cx="13" cy="16" r="2.25" fill="#fdfcef"></circle>
                <path fill="#fdfcef" d="M28.5,26c-1.254,0-2.169-0.496-2.717-0.912l0,0C24.65,24.228,24,22.919,24,21.5	c0-2.481,2.019-4.5,4.5-4.5s4.5,2.019,4.5,4.5S30.981,26,28.5,26z M26.388,24.292C26.813,24.615,27.525,25,28.5,25	c1.93,0,3.5-1.57,3.5-3.5S30.43,18,28.5,18S25,19.57,25,21.5C25,22.604,25.505,23.622,26.388,24.292L26.388,24.292z">
                </path>
                <path fill="#fdfcef" d="M28.5,32c-2.313,0-4.507-0.738-6.345-2.134C19.514,27.861,18,24.812,18,21.5	C18,15.71,22.71,11,28.5,11S39,15.71,39,21.5S34.29,32,28.5,32z M28.5,12c-5.238,0-9.5,4.262-9.5,9.5c0,2.997,1.37,5.756,3.761,7.57	l0,0C24.422,30.333,26.407,31,28.5,31c5.238,0,9.5-4.262,9.5-9.5S33.738,12,28.5,12z">
                </path>
                <path fill="#fdfcef" d="M28.5,18c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6	C29,17.776,28.776,18,28.5,18z">
                </path>
                <path fill="#fdfcef" d="M26.5,18.536c-0.172,0-0.341-0.089-0.433-0.25l-3-5.196c-0.139-0.239-0.057-0.545,0.183-0.683	c0.239-0.138,0.545-0.058,0.683,0.183l3,5.196c0.139,0.239,0.057,0.545-0.183,0.683C26.67,18.515,26.585,18.536,26.5,18.536z">
                </path>
                <path fill="#fdfcef" d="M25.036,20c-0.085,0-0.171-0.021-0.25-0.067l-5.196-3c-0.239-0.138-0.321-0.444-0.183-0.683	s0.444-0.32,0.683-0.183l5.196,3c0.239,0.138,0.321,0.444,0.183,0.683C25.376,19.91,25.208,20,25.036,20z">
                </path>
                <path fill="#fdfcef" d="M24.5,22h-6c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h6c0.276,0,0.5,0.224,0.5,0.5	S24.776,22,24.5,22z">
                </path>
                <path fill="#fdfcef" d="M19.839,27c-0.172,0-0.341-0.089-0.433-0.25c-0.139-0.239-0.057-0.545,0.183-0.683l5.196-3	c0.238-0.138,0.545-0.058,0.683,0.183c0.139,0.239,0.057,0.545-0.183,0.683l-5.196,3C20.01,26.979,19.924,27,19.839,27z">
                </path>
                <path fill="#fdfcef" d="M23.5,30.66c-0.085,0-0.171-0.021-0.25-0.067c-0.239-0.138-0.321-0.444-0.183-0.683l3-5.196	c0.138-0.239,0.444-0.32,0.683-0.183c0.239,0.138,0.321,0.444,0.183,0.683l-3,5.196C23.84,30.57,23.671,30.66,23.5,30.66z">
                </path>
                <path fill="#fdfcef" d="M28.5,32c-0.276,0-0.5-0.224-0.5-0.5v-6c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v6	C29,31.776,28.776,32,28.5,32z">
                </path>
                <path fill="#fdfcef" d="M33.5,30.66c-0.172,0-0.341-0.089-0.433-0.25l-3-5.196c-0.139-0.239-0.057-0.545,0.183-0.683	c0.238-0.139,0.545-0.057,0.683,0.183l3,5.196c0.139,0.239,0.057,0.545-0.183,0.683C33.67,30.639,33.585,30.66,33.5,30.66z">
                </path>
                <path fill="#fdfcef" d="M37.161,27c-0.085,0-0.171-0.021-0.25-0.067l-5.196-3c-0.239-0.138-0.321-0.444-0.183-0.683	s0.444-0.319,0.683-0.183l5.196,3c0.239,0.138,0.321,0.444,0.183,0.683C37.501,26.91,37.333,27,37.161,27z">
                </path>
                <path fill="#fdfcef" d="M38.5,22h-6c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h6c0.276,0,0.5,0.224,0.5,0.5	S38.776,22,38.5,22z">
                </path>
                <path fill="#fdfcef" d="M31.964,20c-0.172,0-0.341-0.089-0.433-0.25c-0.139-0.239-0.057-0.545,0.183-0.683l5.196-3	c0.239-0.139,0.546-0.057,0.683,0.183c0.139,0.239,0.057,0.545-0.183,0.683l-5.196,3C32.135,19.979,32.049,20,31.964,20z">
                </path>
                <path fill="#fdfcef" d="M30.5,18.536c-0.085,0-0.171-0.021-0.25-0.067c-0.239-0.138-0.321-0.444-0.183-0.683l3-5.196	c0.138-0.239,0.444-0.319,0.683-0.183c0.239,0.138,0.321,0.444,0.183,0.683l-3,5.196C30.84,18.446,30.671,18.536,30.5,18.536z">
                </path>
              </svg>
              <h3>IBIS PIANTX</h3>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>


        </div>
        <!-- thank you -->
        <div class="bagian-10_about">
          <div class="bagian-10-1">
            <h2> <span>T</span> HANK YOU</h2>
            <p>@Drayn akamazu, 2024 Feb 011JIIKA12. </p>
          </div>

          <div class="bagian-10-2">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
              <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
              </g>
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="none" stroke-linecap="none" stroke-linejoin="none" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(5.33333,5.33333)">
                  <path d="M41.67,13.48c-0.4,0.26 -0.97,0.5 -1.21,0.77c-0.09,0.09 -0.14,0.19 -0.12,0.29v1.03l-0.3,1.01l-0.3,1l-0.33,1.1l-0.68,2.25l-0.66,2.22l-0.5,1.67c0,0.26 -0.01,0.52 -0.03,0.77c-0.07,0.96 -0.27,1.88 -0.59,2.74c-0.19,0.53 -0.42,1.04 -0.7,1.52c-0.1,0.19 -0.22,0.38 -0.34,0.56c-0.4,0.63 -0.88,1.21 -1.41,1.72c-0.41,0.41 -0.86,0.79 -1.35,1.11c0,0 0,0 -0.01,0c-0.08,0.07 -0.17,0.13 -0.27,0.18c-0.31,0.21 -0.64,0.39 -0.98,0.55c-0.23,0.12 -0.46,0.22 -0.7,0.31c-0.05,0.03 -0.11,0.05 -0.16,0.07c-0.57,0.27 -1.23,0.45 -1.89,0.54c-0.04,0.01 -0.07,0.01 -0.11,0.02c-0.4,0.07 -0.79,0.13 -1.19,0.16c-0.18,0.02 -0.37,0.03 -0.55,0.03l-0.71,-0.04l-3.42,-0.18c0,-0.01 -0.01,0 -0.01,0l-1.72,-0.09c-0.13,0 -0.27,0 -0.4,-0.01c-0.54,-0.02 -1.06,-0.08 -1.58,-0.19c-0.01,0 -0.01,0 -0.01,0c-0.95,-0.18 -1.86,-0.5 -2.71,-0.93c-0.47,-0.24 -0.93,-0.51 -1.36,-0.82c-0.18,-0.13 -0.35,-0.27 -0.52,-0.42c-0.48,-0.4 -0.91,-0.83 -1.31,-1.27c-0.06,-0.06 -0.11,-0.12 -0.16,-0.18c-0.06,-0.06 -0.12,-0.13 -0.17,-0.19c-0.38,-0.48 -0.7,-0.97 -0.96,-1.49c-0.24,-0.46 -0.43,-0.95 -0.58,-1.49c-0.06,-0.19 -0.11,-0.37 -0.15,-0.57c-0.01,-0.01 -0.02,-0.03 -0.02,-0.05c-0.1,-0.41 -0.19,-0.84 -0.24,-1.27c-0.06,-0.33 -0.09,-0.66 -0.09,-1c-0.02,-0.13 -0.02,-0.27 -0.02,-0.4l1.91,-2.95l1.87,-2.88l0.85,-1.31l0.77,-1.18l0.26,-0.41v-1.03c0.02,-0.23 0.03,-0.47 0.02,-0.69c-0.01,-0.7 -0.15,-1.38 -0.38,-2.03c-0.22,-0.69 -0.53,-1.34 -0.85,-1.94c-0.38,-0.69 -0.78,-1.31 -1.11,-1.87c-0.49,-0.82 -0.83,-1.49 -0.74,-1.96c0.72,-0.17 1.48,-0.26 2.25,-0.26h16c4.18,0 7.78,2.6 9.27,6.26c0.16,0.39 0.3,0.8 0.4,1.22z" fill="#304ffe" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M42,16v0.27l-1.38,0.8l-0.88,0.51l-0.97,0.56l-1.94,1.13l-1.9,1.1l-1.94,1.12l-0.77,0.45c0,0.48 -0.12,0.92 -0.34,1.32c-0.31,0.58 -0.83,1.06 -1.49,1.47c-0.67,0.41 -1.49,0.74 -2.41,0.98c0,0 0,-0.01 -0.01,0c-3.56,0.92 -8.42,0.5 -10.78,-1.26c-0.66,-0.49 -1.12,-1.09 -1.32,-1.78c-0.06,-0.23 -0.09,-0.48 -0.09,-0.73v-7.19c0.01,-0.15 -0.09,-0.3 -0.27,-0.45c-0.54,-0.43 -1.81,-0.84 -3.23,-1.25c-1.11,-0.31 -2.3,-0.62 -3.3,-0.92c-0.79,-0.24 -1.46,-0.48 -1.86,-0.71c0.18,-0.35 0.39,-0.7 0.61,-1.03c1.4,-2.05 3.54,-3.56 6.02,-4.13c0.72,-0.17 1.48,-0.26 2.25,-0.26h10.8c5.37,0.94 10.32,3.13 14.47,6.26c0.16,0.39 0.3,0.8 0.4,1.22c0.18,0.66 0.29,1.34 0.32,2.05c0.01,0.15 0.01,0.31 0.01,0.47z" fill="#4928f4" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M42,16v4.41l-0.22,0.68l-0.75,2.33l-0.78,2.4l-0.41,1.28l-0.38,1.19l-0.37,1.13l-0.36,1.12l-0.19,0.59l-0.25,0.78c0,0.76 -0.02,1.43 -0.07,2c-0.01,0.06 -0.02,0.12 -0.02,0.18c-0.06,0.53 -0.14,0.98 -0.27,1.36c-0.01,0.06 -0.03,0.12 -0.05,0.17c-0.26,0.72 -0.65,1.18 -1.23,1.48c-0.14,0.08 -0.3,0.14 -0.47,0.2c-0.53,0.18 -1.2,0.27 -2.02,0.32c-0.6,0.04 -1.29,0.05 -2.07,0.05h-0.69l-1.19,-0.05l-0.21,-0.01l-2.17,-0.09l-2.2,-0.09l-7.25,-0.3l-1.88,-0.08h-0.26c-0.78,-0.01 -1.45,-0.06 -2.03,-0.14c-0.84,-0.13 -1.49,-0.35 -1.98,-0.68c-0.7,-0.45 -1.11,-1.11 -1.35,-2.03c-0.06,-0.22 -0.11,-0.45 -0.14,-0.7c-0.1,-0.58 -0.15,-1.25 -0.18,-2c0,-0.15 0,-0.3 -0.01,-0.46c-0.01,-0.01 0,-0.01 0,-0.01v-0.58c-0.01,-0.29 -0.01,-0.59 -0.01,-0.9l0.05,-1.61l0.03,-1.15l0.04,-1.34v-0.19l0.07,-2.46l0.07,-2.46l0.07,-2.31l0.06,-2.27l0.02,-0.6c0,-0.31 -1.05,-0.49 -2.22,-0.64c-0.93,-0.12 -1.95,-0.23 -2.56,-0.37c0.05,-0.23 0.1,-0.46 0.16,-0.68c0.18,-0.72 0.45,-1.4 0.79,-2.05c0.18,-0.35 0.39,-0.7 0.61,-1.03c2.16,-0.95 4.41,-1.69 6.76,-2.17c2.06,-0.43 4.21,-0.66 6.43,-0.66c7.36,0 14.16,2.49 19.54,6.69c0.52,0.4 1.03,0.83 1.53,1.28c0.01,0.15 0.01,0.31 0.01,0.47z" fill="#6200ea" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M42,18.37v4.54l-0.55,1.06l-1.05,2.05l-0.56,1.08l-0.51,0.99l-0.22,0.43c0,0.31 0,0.61 -0.02,0.9c0,0.43 -0.02,0.84 -0.05,1.22c-0.04,0.45 -0.1,0.86 -0.16,1.24c-0.15,0.79 -0.36,1.47 -0.66,2.03c-0.04,0.07 -0.08,0.14 -0.12,0.2c-0.11,0.18 -0.24,0.35 -0.38,0.51c-0.18,0.22 -0.38,0.41 -0.61,0.57c-0.34,0.26 -0.74,0.47 -1.2,0.63c-0.57,0.21 -1.23,0.35 -2.01,0.43c-0.51,0.05 -1.07,0.08 -1.68,0.08l-0.42,0.02l-2.08,0.12h-0.01l-2.21,0.13l-2.25,0.13l-3.1,0.18l-3.77,0.22l-0.55,0.03c-0.51,0 -0.99,-0.03 -1.45,-0.09c-0.05,-0.01 -0.09,-0.02 -0.14,-0.02c-0.68,-0.11 -1.3,-0.29 -1.86,-0.54c-0.68,-0.3 -1.27,-0.7 -1.77,-1.18c-0.44,-0.43 -0.82,-0.92 -1.13,-1.47c-0.07,-0.13 -0.14,-0.25 -0.2,-0.39c-0.3,-0.59 -0.54,-1.25 -0.72,-1.97c-0.03,-0.12 -0.06,-0.25 -0.08,-0.38c-0.06,-0.23 -0.11,-0.47 -0.14,-0.72c-0.11,-0.64 -0.17,-1.32 -0.2,-2.03v-0.01c-0.01,-0.29 -0.02,-0.57 -0.02,-0.87l-0.49,-1.17l-0.07,-0.18l-0.06,-0.15l-0.75,-1.79l-0.12,-0.29l-0.72,-1.73l-0.8,-1.93c0,0 0,0 -0.01,0l-0.81,-1.95l-0.29,-0.71v-1.59c0,-0.63 0.06,-1.25 0.17,-1.85c0.05,-0.23 0.1,-0.46 0.16,-0.68c0.85,-0.49 1.74,-0.94 2.65,-1.34c2.08,-0.93 4.31,-1.62 6.62,-2.04c1.72,-0.31 3.51,-0.48 5.32,-0.48c7.31,0 13.94,2.65 19.12,6.97c0.2,0.16 0.39,0.32 0.58,0.49c0.47,0.41 0.93,0.84 1.38,1.3z" fill="#673ab7" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M42,21.35v5.14l-0.57,1.19l-1.08,2.25l-0.01,0.03c0,0.43 -0.02,0.82 -0.05,1.17c-0.1,1.15 -0.38,1.88 -0.84,2.33c-0.33,0.34 -0.74,0.53 -1.25,0.63c-0.03,0.01 -0.07,0.01 -0.1,0.02c-0.16,0.03 -0.33,0.05 -0.51,0.05c-0.62,0.06 -1.35,0.02 -2.19,-0.04c-0.09,0 -0.19,-0.01 -0.29,-0.02c-0.61,-0.04 -1.26,-0.08 -1.98,-0.11c-0.39,-0.01 -0.8,-0.02 -1.22,-0.02h-0.02l-1.01,0.08h-0.01l-2.27,0.16l-2.59,0.2l-0.38,0.03l-3.03,0.22l-1.57,0.12l-1.55,0.11c-0.27,0 -0.53,0 -0.79,-0.01c0,0 -0.01,-0.01 -0.01,0c-1.13,-0.02 -2.14,-0.09 -3.04,-0.26c-0.83,-0.14 -1.56,-0.36 -2.18,-0.69c-0.64,-0.31 -1.17,-0.75 -1.6,-1.31c-0.41,-0.55 -0.71,-1.24 -0.9,-2.07c0,-0.01 0,-0.01 0,-0.01c-0.14,-0.67 -0.22,-1.45 -0.22,-2.33l-0.15,-0.27l-0.89,-1.59l-0.13,-0.22l-0.07,-0.14l-0.93,-1.65l-0.46,-0.83l-0.58,-1.03l-1,-1.79l-0.53,-0.94v-3.68c0.88,-0.58 1.79,-1.09 2.73,-1.55c1.14,-0.58 2.32,-1.07 3.55,-1.47c1.34,-0.44 2.74,-0.79 4.17,-1.02c1.45,-0.24 2.94,-0.36 4.47,-0.36c6.8,0 13.04,2.43 17.85,6.47c0.22,0.17 0.43,0.36 0.64,0.54c0.84,0.75 1.64,1.56 2.37,2.41c0.08,0.09 0.16,0.17 0.22,0.26z" fill="#8e24aa" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M42,24.71v7.23c-0.24,-0.14 -0.57,-0.31 -0.98,-0.49c-0.22,-0.11 -0.47,-0.22 -0.73,-0.32c-0.38,-0.17 -0.79,-0.33 -1.25,-0.49c-0.1,-0.04 -0.2,-0.07 -0.31,-0.1c-0.18,-0.07 -0.37,-0.13 -0.56,-0.19c-0.59,-0.18 -1.24,-0.35 -1.92,-0.5c-0.26,-0.05 -0.53,-0.1 -0.8,-0.14c-0.87,-0.15 -1.8,-0.24 -2.77,-0.25c-0.08,-0.01 -0.17,-0.01 -0.25,-0.01l-2.57,0.02l-3.5,0.02h-0.01l-7.49,0.06c-2.38,0 -3.84,0.57 -4.72,0.8c0,0 -0.01,0 -0.01,0.01c-0.93,0.24 -1.22,0.09 -1.3,-1.54c-0.02,-0.45 -0.03,-1.03 -0.03,-1.74l-0.56,-0.43l-0.98,-0.74l-0.6,-0.46l-0.12,-0.09l-1.66,-1.26l-0.25,-0.19l-0.52,-0.4l-0.96,-0.72l-1.15,-0.88v-3.4c0.1,-0.08 0.19,-0.15 0.29,-0.21c1.45,-1 3,-1.85 4.64,-2.54c1.46,-0.62 3,-1.11 4.58,-1.46c0.43,-0.09 0.87,-0.18 1.32,-0.24c1.33,-0.23 2.7,-0.34 4.09,-0.34c6.01,0 11.53,2.09 15.91,5.55c0.66,0.52 1.3,1.07 1.9,1.66c0.82,0.78 1.59,1.61 2.3,2.49c0.14,0.18 0.28,0.36 0.42,0.55c0.19,0.24 0.37,0.49 0.55,0.74z" fill="#c2185b" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M42,28.72v3.28c0,0.65 -0.06,1.29 -0.18,1.91c-0.18,0.92 -0.49,1.8 -0.91,2.62c-0.22,0.05 -0.47,0.05 -0.75,0.01c-0.63,-0.11 -1.37,-0.44 -2.17,-0.87c-0.04,-0.01 -0.08,-0.03 -0.11,-0.05c-0.25,-0.13 -0.51,-0.27 -0.77,-0.43c-0.53,-0.29 -1.09,-0.61 -1.65,-0.91c-0.12,-0.06 -0.24,-0.12 -0.35,-0.18c-0.64,-0.33 -1.3,-0.63 -1.96,-0.86c0,0 0,0 -0.01,0c-0.14,-0.05 -0.29,-0.1 -0.44,-0.14c-0.57,-0.16 -1.15,-0.26 -1.71,-0.26l-1.1,-0.32l-4.87,-1.41c0,0 0,0 -0.01,0l-2.99,-0.87h-0.01l-1.3,-0.38c-3.76,0 -6.07,1.6 -7.19,0.99c-0.44,-0.23 -0.7,-0.81 -0.79,-1.95c-0.03,-0.32 -0.04,-0.68 -0.04,-1.1l-1.17,-0.57l-0.05,-0.02h-0.01l-0.84,-0.42l-0.92,-0.44l-0.07,-0.03l-0.17,-0.09l-1.96,-0.95l-1.5,-0.73v-3.43c0.17,-0.15 0.35,-0.29 0.53,-0.43c0.19,-0.15 0.38,-0.29 0.57,-0.44c0.01,0 0.01,0 0.01,0c1.18,-0.85 2.43,-1.6 3.76,-2.22c1.55,-0.74 3.2,-1.31 4.91,-1.68c0.25,-0.06 0.51,-0.12 0.77,-0.16c1.42,-0.27 2.88,-0.41 4.37,-0.41c5.27,0 10.11,1.71 14.01,4.59c1.13,0.84 2.18,1.77 3.14,2.78c0.79,0.83 1.52,1.73 2.18,2.67c0.05,0.07 0.1,0.14 0.15,0.2c0.37,0.54 0.71,1.09 1.03,1.66c0.21,0.34 0.39,0.69 0.57,1.04z" fill="#d81b60" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M41.82,33.91c-0.18,0.92 -0.49,1.8 -0.91,2.62c-0.19,0.37 -0.4,0.72 -0.63,1.06c-0.14,0.21 -0.29,0.41 -0.44,0.6c-0.36,-0.14 -0.89,-0.34 -1.54,-0.56c0,0 0,0 0,-0.01c-0.49,-0.17 -1.05,-0.35 -1.65,-0.52c-0.17,-0.05 -0.34,-0.1 -0.52,-0.15c-0.71,-0.19 -1.45,-0.36 -2.17,-0.46c-0.6,-0.1 -1.19,-0.16 -1.74,-0.16l-0.46,-0.13h-0.01l-2.42,-0.7l-1.49,-0.43l-1.66,-0.48h-0.01l-0.54,-0.15l-6.53,-1.88l-1.88,-0.54l-1.4,-0.33l-2.28,-0.54l-0.28,-0.07c0,0 0,0 -0.01,0l-2.29,-0.53c0,-0.01 0,-0.01 0,-0.01l-0.41,-0.09l-0.21,-0.05l-1.67,-0.39l-0.19,-0.05l-1.42,-1.17l-1.06,-0.89v-4.08c0.37,-0.36 0.75,-0.7 1.15,-1.03c0.12,-0.11 0.25,-0.21 0.38,-0.31c0.12,-0.1 0.25,-0.2 0.38,-0.3c0.91,-0.69 1.87,-1.31 2.89,-1.84c1.3,-0.7 2.68,-1.26 4.13,-1.66c0.28,-0.09 0.56,-0.17 0.85,-0.23c1.64,-0.41 3.36,-0.62 5.14,-0.62c4.47,0 8.63,1.35 12.07,3.66c1.71,1.15 3.25,2.53 4.55,4.1c0.66,0.79 1.26,1.62 1.79,2.5c0.05,0.07 0.09,0.13 0.13,0.2c0.32,0.53 0.62,1.08 0.89,1.64c0.25,0.5 0.47,1 0.67,1.52c0.32,0.8 0.58,1.62 0.8,2.46z" fill="#f50057" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M40.28,37.59c-0.14,0.21 -0.29,0.41 -0.44,0.6c-0.44,0.55 -0.92,1.05 -1.46,1.49c-0.47,0.39 -0.97,0.74 -1.5,1.04c-0.2,-0.05 -0.4,-0.11 -0.61,-0.19c-0.66,-0.23 -1.35,-0.61 -1.99,-1.01c-0.96,-0.61 -1.79,-1.27 -2.16,-1.57c-0.14,-0.12 -0.21,-0.18 -0.21,-0.18l-1.7,-0.15l-0.21,-0.02l-2.2,-0.19l-2.28,-0.2l-3.37,-0.3l-5.34,-0.47l-0.02,-0.01l-1.88,-0.91l-1.9,-0.92l-1.53,-0.74l-0.33,-0.16l-0.41,-0.2l-1.42,-0.69l-1.89,-0.91l-0.59,-0.29l-0.84,-0.26v-4.47c0.47,-0.56 0.97,-1.09 1.5,-1.6c0.34,-0.32 0.7,-0.64 1.07,-0.94c0.06,-0.05 0.12,-0.1 0.18,-0.14c0.04,-0.05 0.09,-0.08 0.13,-0.1c0.59,-0.48 1.21,-0.91 1.85,-1.3c0.74,-0.47 1.52,-0.89 2.33,-1.24c0.87,-0.39 1.78,-0.72 2.72,-0.97c1.63,-0.46 3.36,-0.7 5.14,-0.7c4.08,0 7.85,1.24 10.96,3.37c1.99,1.36 3.71,3.08 5.07,5.07c0.45,0.64 0.85,1.32 1.22,2.02c0.13,0.26 0.26,0.52 0.37,0.78c0.12,0.25 0.23,0.5 0.34,0.75c0.21,0.52 0.4,1.04 0.57,1.58c0.32,1 0.56,2.02 0.71,3.08c0.05,0.35 0.09,0.7 0.12,1.05z" fill="#ff1744" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M38.39,39.42c0,0.08 0,0.17 -0.01,0.26c-0.47,0.39 -0.97,0.74 -1.5,1.04c-0.22,0.12 -0.44,0.24 -0.67,0.34c-0.23,0.11 -0.46,0.21 -0.7,0.3c-0.34,-0.18 -0.8,-0.4 -1.29,-0.61c-0.69,-0.31 -1.44,-0.59 -2.02,-0.68c-0.14,-0.03 -0.27,-0.04 -0.39,-0.04l-1.64,-0.21h-0.02l-2.04,-0.27l-2.06,-0.27l-0.96,-0.12l-7.56,-0.98c-0.49,0 -1.01,-0.03 -1.55,-0.1c-0.66,-0.06 -1.35,-0.16 -2.04,-0.3c-0.68,-0.12 -1.37,-0.28 -2.03,-0.45c-0.69,-0.16 -1.37,-0.35 -2,-0.53c-0.73,-0.22 -1.41,-0.43 -1.98,-0.62c-0.47,-0.15 -0.87,-0.29 -1.18,-0.4c-0.18,-0.43 -0.33,-0.88 -0.44,-1.34c-0.21,-0.78 -0.31,-1.6 -0.31,-2.44v-1.67c0.32,-0.53 0.67,-1.05 1.06,-1.54c0.71,-0.94 1.52,-1.8 2.4,-2.56c0.03,-0.04 0.07,-0.07 0.1,-0.09l0.01,-0.01c0.31,-0.28 0.63,-0.53 0.97,-0.77c0.04,-0.04 0.08,-0.07 0.12,-0.1c0.16,-0.12 0.33,-0.24 0.51,-0.35c1.43,-0.97 3.01,-1.73 4.7,-2.24c1.6,-0.48 3.29,-0.73 5.05,-0.73c3.49,0 6.75,1.03 9.47,2.79c2.01,1.29 3.74,2.99 5.06,4.98c0.16,0.23 0.31,0.46 0.46,0.7c0.69,1.17 1.26,2.43 1.68,3.75c0.05,0.15 0.09,0.3 0.13,0.46c0.08,0.27 0.15,0.55 0.21,0.83c0.02,0.07 0.04,0.14 0.06,0.22c0.14,0.63 0.24,1.29 0.31,1.95c0,0.01 0,0.01 0,0.01c0.06,0.59 0.09,1.19 0.09,1.79z" fill="#ff5722" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M36.33,39.42c0,0.35 -0.02,0.73 -0.06,1.11c-0.02,0.18 -0.04,0.36 -0.06,0.53c-0.23,0.11 -0.46,0.21 -0.7,0.3c-0.45,0.17 -0.91,0.31 -1.38,0.41c-0.32,0.07 -0.65,0.13 -0.98,0.16h-0.01c-0.31,-0.19 -0.67,-0.42 -1.04,-0.68c-0.67,-0.47 -1.37,-1 -1.93,-1.43c-0.01,-0.01 -0.01,-0.01 -0.02,-0.02c-0.59,-0.45 -1.01,-0.79 -1.01,-0.79l-1.06,0.04l-2.04,0.07l-0.95,0.04l-3.82,0.14l-3.23,0.12c-0.21,0.01 -0.46,0.01 -0.77,0h-0.01c-0.42,-0.01 -0.92,-0.04 -1.47,-0.09c-0.64,-0.05 -1.34,-0.11 -2.05,-0.18c-0.69,-0.08 -1.39,-0.16 -2.06,-0.24c-0.74,-0.08 -1.44,-0.17 -2.04,-0.25c-0.47,-0.06 -0.88,-0.11 -1.21,-0.15c-0.28,-0.32 -0.53,-0.65 -0.77,-1.01c-0.36,-0.54 -0.67,-1.11 -0.91,-1.72c-0.18,-0.43 -0.33,-0.88 -0.44,-1.34c0.29,-0.89 0.67,-1.73 1.12,-2.54c0.36,-0.66 0.78,-1.29 1.24,-1.89c0.45,-0.59 0.94,-1.14 1.47,-1.64v-0.01c0.15,-0.15 0.3,-0.29 0.45,-0.42c0.28,-0.26 0.57,-0.5 0.87,-0.73h0.01c0.01,-0.02 0.02,-0.02 0.03,-0.03c0.24,-0.19 0.49,-0.36 0.74,-0.53c1.48,-1.01 3.15,-1.76 4.95,-2.2c1.19,-0.29 2.44,-0.45 3.73,-0.45c2.54,0 4.94,0.61 7.05,1.71h0.01c1.81,0.93 3.41,2.21 4.7,3.75c0.71,0.82 1.32,1.72 1.82,2.67c0.35,0.64 0.65,1.31 0.9,1.99c0.02,0.06 0.04,0.11 0.06,0.16c0.17,0.5 0.32,1.02 0.45,1.54c0.09,0.37 0.16,0.75 0.22,1.13c0.02,0.12 0.04,0.23 0.05,0.35c0.1,0.69 0.15,1.4 0.15,2.12z" fill="#ff6f00" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M34.28,39.42v0.1c0,0.34 -0.03,0.77 -0.06,1.23c-0.03,0.34 -0.06,0.69 -0.09,1.02c-0.32,0.07 -0.65,0.13 -0.98,0.16h-0.01c-0.38,0.05 -0.75,0.07 -1.14,0.07h-1.75l-0.38,-0.11l-1.97,-0.6l-2,-0.6l-4.63,-1.39l-2,-0.6c0,0 -0.83,0.33 -2,0.72h-0.01c-0.45,0.15 -0.94,0.31 -1.46,0.47c-0.65,0.19 -1.34,0.38 -2.02,0.53c-0.7,0.16 -1.39,0.28 -2.01,0.33c-0.19,0.02 -0.38,0.03 -0.55,0.03c-0.56,-0.31 -1.1,-0.68 -1.59,-1.09c-0.43,-0.36 -0.83,-0.75 -1.2,-1.18c-0.28,-0.32 -0.53,-0.65 -0.77,-1.01c0.07,-0.45 0.15,-0.89 0.27,-1.32c0.3,-1.19 0.77,-2.33 1.39,-3.37c0.34,-0.59 0.72,-1.16 1.16,-1.69c0.01,-0.03 0.04,-0.06 0.07,-0.08c-0.01,-0.01 0,-0.01 0,-0.01c0.13,-0.17 0.27,-0.33 0.41,-0.48c0,-0.01 0,-0.01 0,-0.01c0.41,-0.44 0.83,-0.86 1.29,-1.25c0.16,-0.13 0.31,-0.26 0.48,-0.39c0.03,-0.03 0.06,-0.05 0.1,-0.08c2.25,-1.72 5.06,-2.76 8.09,-2.76c3.44,0 6.57,1.29 8.94,3.41c1.14,1.03 2.11,2.26 2.84,3.63c0.06,0.1 0.12,0.21 0.17,0.32c0.09,0.18 0.18,0.37 0.26,0.57c0.33,0.72 0.59,1.48 0.77,2.26c0.02,0.08 0.04,0.16 0.06,0.24c0.08,0.37 0.15,0.75 0.2,1.13c0.08,0.59 0.12,1.19 0.12,1.8z" fill="#ff9800" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M32.22,39.42c0,0.2 -0.01,0.42 -0.02,0.65c-0.02,0.37 -0.05,0.77 -0.1,1.18c-0.02,0.25 -0.06,0.5 -0.1,0.75h-5.48l-1.06,-0.17l-4.14,-0.66l-0.59,-0.09l-1.35,-0.22c-0.59,0 -1.87,0.26 -3.22,0.51c-0.71,0.13 -1.43,0.27 -2.08,0.36c-0.08,0.01 -0.16,0.02 -0.23,0.03h-0.01c-0.7,-0.15 -1.38,-0.38 -2.02,-0.68c-0.2,-0.09 -0.4,-0.19 -0.6,-0.3c-0.56,-0.31 -1.1,-0.68 -1.59,-1.09c-0.01,-0.12 -0.02,-0.22 -0.02,-0.27c0,-0.26 0.01,-0.51 0.03,-0.76c0.04,-0.64 0.13,-1.26 0.27,-1.86c0.22,-0.91 0.54,-1.79 0.97,-2.6c0.08,-0.17 0.17,-0.34 0.27,-0.5c0.04,-0.08 0.09,-0.15 0.13,-0.23c0.18,-0.29 0.38,-0.57 0.58,-0.85c0.42,-0.55 0.89,-1.07 1.39,-1.54c0.01,0 0.01,0 0.01,0c0.04,-0.04 0.08,-0.08 0.12,-0.11c0.05,-0.04 0.09,-0.09 0.14,-0.12c0.2,-0.18 0.4,-0.34 0.61,-0.49c0,-0.01 0.01,-0.01 0.01,-0.01c1.89,-1.41 4.23,-2.24 6.78,-2.24c1.98,0 3.82,0.5 5.43,1.38h0.01c1.38,0.76 2.58,1.79 3.53,3.03c0.37,0.48 0.7,0.99 0.98,1.53h0.01c0.05,0.1 0.1,0.2 0.15,0.3c0.3,0.59 0.54,1.21 0.72,1.85h0.01c0.01,0.05 0.03,0.1 0.04,0.15c0.12,0.43 0.22,0.87 0.29,1.32c0.01,0.09 0.02,0.19 0.03,0.28c0.07,0.48 0.1,0.97 0.1,1.47z" fill="#ffc107" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M30.17,39.31c0,0.16 0,0.33 -0.02,0.49v0.01c0,0.01 0,0.01 0,0.01c-0.02,0.72 -0.12,1.43 -0.28,2.07c0,0.04 -0.01,0.07 -0.03,0.11h-4.67l-3.85,-0.83l-0.51,-0.11l-0.08,0.02l-4.27,0.88l-0.19,0.04h-0.27c-0.64,0 -1.27,-0.06 -1.88,-0.18c-0.09,-0.02 -0.18,-0.04 -0.27,-0.06h-0.01c-0.7,-0.15 -1.38,-0.38 -2.02,-0.68c-0.02,-0.11 -0.04,-0.22 -0.05,-0.33c-0.07,-0.43 -0.1,-0.88 -0.1,-1.33c0,-0.17 0,-0.34 0.01,-0.51c0.03,-0.54 0.11,-1.07 0.23,-1.58c0.08,-0.38 0.19,-0.75 0.32,-1.1c0.11,-0.31 0.24,-0.61 0.38,-0.9c0.12,-0.25 0.26,-0.49 0.4,-0.73c0.14,-0.23 0.29,-0.45 0.45,-0.67c0.4,-0.55 0.87,-1.06 1.39,-1.51c0.3,-0.26 0.63,-0.51 0.97,-0.73c1.46,-0.96 3.21,-1.52 5.1,-1.52c0.37,0 0.73,0.02 1.08,0.07h0.02c1.07,0.12 2.07,0.42 2.99,0.87c0.01,0 0.01,0 0.01,0c1.45,0.71 2.68,1.78 3.58,3.1c0.15,0.22 0.3,0.46 0.43,0.7c0.11,0.19 0.21,0.39 0.3,0.59c0.14,0.31 0.27,0.64 0.38,0.97h0.01c0.11,0.37 0.21,0.74 0.28,1.13v0.01c0.11,0.55 0.17,1.12 0.17,1.7z" fill="#ffd54f" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M28.11,39.52v0.03c0,0.59 -0.07,1.17 -0.21,1.74c-0.05,0.24 -0.12,0.48 -0.21,0.71h-4.48l-2.29,-0.63l-2.29,0.63h-2.63c-0.64,0 -1.27,-0.06 -1.88,-0.18c-0.02,-0.03 -0.03,-0.06 -0.04,-0.09c-0.14,-0.43 -0.25,-0.86 -0.3,-1.31c-0.04,-0.29 -0.06,-0.59 -0.06,-0.9c0,-0.12 0,-0.25 0.02,-0.37c0.01,-0.47 0.08,-0.93 0.2,-1.37c0.06,-0.3 0.15,-0.59 0.27,-0.87c0.04,-0.14 0.1,-0.27 0.17,-0.4c0.15,-0.34 0.33,-0.67 0.53,-0.99c0.22,-0.32 0.46,-0.62 0.73,-0.9c0.32,-0.36 0.68,-0.69 1.09,-0.96c0.7,-0.51 1.5,-0.89 2.37,-1.1c0.58,-0.16 1.19,-0.24 1.82,-0.24c2,0 3.79,0.8 5.09,2.09c0.05,0.05 0.11,0.11 0.16,0.18h0.01c0.14,0.15 0.27,0.3 0.4,0.47c0.37,0.47 0.68,0.98 0.92,1.54c0.12,0.26 0.22,0.53 0.3,0.81c0.01,0.04 0.02,0.07 0.03,0.11c0.14,0.49 0.23,1 0.25,1.53c0.02,0.15 0.03,0.31 0.03,0.47z" fill="#ffe082" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <path d="M26.06,39.52c0,0.41 -0.05,0.8 -0.16,1.17c-0.1,0.4 -0.25,0.78 -0.44,1.14c-0.03,0.06 -0.1,0.17 -0.1,0.17h-8.88c-0.01,-0.01 -0.02,-0.03 -0.02,-0.04c-0.12,-0.19 -0.22,-0.38 -0.3,-0.59c-0.2,-0.46 -0.32,-0.96 -0.36,-1.48c-0.02,-0.12 -0.02,-0.25 -0.02,-0.37c0,-0.06 0,-0.13 0.01,-0.19c0.01,-0.44 0.07,-0.86 0.19,-1.25c0.1,-0.36 0.23,-0.69 0.4,-1.01c0,0 0.01,-0.01 0.01,-0.02c0.12,-0.21 0.25,-0.42 0.4,-0.62c0.49,-0.66 1.14,-1.2 1.89,-1.55c0.01,0 0.01,0 0.01,0c0.24,-0.12 0.49,-0.22 0.75,-0.29c0,0 0,0 0.01,0c0.46,-0.14 0.96,-0.21 1.47,-0.21c0.59,0 1.16,0.09 1.68,0.28c0.19,0.05 0.37,0.13 0.55,0.22c0,0 0,0 0.01,0c0.86,0.41 1.59,1.05 2.09,1.85c0.1,0.15 0.19,0.31 0.27,0.48c0.04,0.07 0.08,0.15 0.11,0.22c0.23,0.52 0.37,1.09 0.41,1.69c0.01,0.05 0.01,0.1 0.01,0.16c0.01,0.08 0.01,0.16 0.01,0.24z" fill="#ffecb3" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></path>
                  <g>
                    <path d="M30,11h-12c-3.9,0 -7,3.1 -7,7v12c0,3.9 3.1,7 7,7h12c3.9,0 7,-3.1 7,-7v-12c0,-3.9 -3.1,-7 -7,-7z" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                    <circle cx="31" cy="16" r="1" fill="#ffffff" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"></circle>
                  </g>
                  <g fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="24" cy="24" r="6"></circle>
                  </g>
                </g>
              </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
              <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
              </g>
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(5.33333,5.33333)">
                  <path d="M24,5c-10.49341,0 -19,8.50659 -19,19c0,10.49341 8.50659,19 19,19c10.49341,0 19,-8.50659 19,-19c0,-10.49341 -8.50659,-19 -19,-19z" fill="#039be5"></path>
                  <path d="M26.572,29.036h4.917l0.772,-4.995h-5.69v-2.73c0,-2.075 0.678,-3.915 2.619,-3.915h3.119v-4.359c-0.548,-0.074 -1.707,-0.236 -3.897,-0.236c-4.573,0 -7.254,2.415 -7.254,7.917v3.323h-4.701v4.995h4.701v13.729c0.931,0.14 1.874,0.235 2.842,0.235c0.875,0 1.729,-0.08 2.572,-0.194z" fill="#ffffff"></path>
                </g>
              </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
              <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
              </g>
              <g fill="#03a9f4" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(5.33333,5.33333)">
                  <path d="M42,12.429c-1.323,0.586 -2.746,0.977 -4.247,1.162c1.526,-0.906 2.7,-2.351 3.251,-4.058c-1.428,0.837 -3.01,1.452 -4.693,1.776c-1.344,-1.425 -3.261,-2.309 -5.385,-2.309c-4.08,0 -7.387,3.278 -7.387,7.32c0,0.572 0.067,1.129 0.193,1.67c-6.138,-0.308 -11.582,-3.226 -15.224,-7.654c-0.64,1.082 -1,2.349 -1,3.686c0,2.541 1.301,4.778 3.285,6.096c-1.211,-0.037 -2.351,-0.374 -3.349,-0.914c0,0.022 0,0.055 0,0.086c0,3.551 2.547,6.508 5.923,7.181c-0.617,0.169 -1.269,0.263 -1.941,0.263c-0.477,0 -0.942,-0.054 -1.392,-0.135c0.94,2.902 3.667,5.023 6.898,5.086c-2.528,1.96 -5.712,3.134 -9.174,3.134c-0.598,0 -1.183,-0.034 -1.761,-0.104c3.271,2.071 7.155,3.285 11.324,3.285c13.585,0 21.017,-11.156 21.017,-20.834c0,-0.317 -0.01,-0.633 -0.025,-0.945c1.45,-1.024 2.7,-2.316 3.687,-3.792">
                  </path>
                </g>
              </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
              <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
              </g>
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(5.33333,5.33333)">
                  <circle cx="24" cy="24" r="20" fill="#e60023"></circle>
                  <path d="M24.44391,11.41614c-8.63232,0 -13.21539,5.79462 -13.21539,12.10309c0,2.93384 1.56152,6.58539 4.06,7.74841c0.37842,0.17621 0.58154,0.10004 0.66846,-0.26691c0.06689,-0.27844 0.40381,-1.6369 0.55536,-2.26843c0.04846,-0.20154 0.02466,-0.37463 -0.13843,-0.57312c-0.82697,-1.00305 -1.48846,-2.84613 -1.48846,-4.56458c0,-4.41156 3.33997,-8.67999 9.02997,-8.67999c4.91309,0 8.35309,3.34845 8.35309,8.1369c0,5.40997 -2.7323,9.15845 -6.28693,9.15845c-1.96307,0 -3.43304,-1.62384 -2.96155,-3.61536c0.56543,-2.37695 1.65692,-4.94153 1.65692,-6.65845c0,-1.5354 -0.82306,-2.81696 -2.52997,-2.81696c-2.00696,0 -3.61847,2.07538 -3.61847,4.85693c0,1.77002 0.59845,2.96844 0.59845,2.96844c0,0 -1.9823,8.38153 -2.3454,9.94153c-0.40198,1.72229 -0.2453,4.1416 -0.07135,5.72339v0c0.45111,0.17688 0.9024,0.35376 1.36877,0.49811v0c0.81689,-1.32782 2.03497,-3.50568 2.48645,-5.24225c0.24384,-0.93616 1.24689,-4.75464 1.24689,-4.75464c0.65155,1.2439 2.55615,2.29694 4.58313,2.29694c6.03149,0 10.37842,-5.54694 10.37842,-12.44c0,-6.60846 -5.39154,-11.55151 -12.32996,-11.55151z" fill="#ffffff"></path>
                </g>
              </g>
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0,0,256,256">
              <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <path d="M0,256v-256h256v256z" id="bgRectangle"></path>
              </g>
              <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                <g transform="scale(5.33333,5.33333)">
                  <path d="M43.611,20.083h-1.611v-0.083h-18v8h11.303c-1.649,4.657 -6.08,8 -11.303,8c-6.627,0 -12,-5.373 -12,-12c0,-6.627 5.373,-12 12,-12c3.059,0 5.842,1.154 7.961,3.039l5.657,-5.657c-3.572,-3.329 -8.35,-5.382 -13.618,-5.382c-11.045,0 -20,8.955 -20,20c0,11.045 8.955,20 20,20c11.045,0 20,-8.955 20,-20c0,-1.341 -0.138,-2.65 -0.389,-3.917z" fill="#ffc107"></path>
                  <path d="M6.306,14.691l6.571,4.819c1.778,-4.402 6.084,-7.51 11.123,-7.51c3.059,0 5.842,1.154 7.961,3.039l5.657,-5.657c-3.572,-3.329 -8.35,-5.382 -13.618,-5.382c-7.682,0 -14.344,4.337 -17.694,10.691z" fill="#ff3d00"></path>
                  <path d="M24,44c5.166,0 9.86,-1.977 13.409,-5.192l-6.19,-5.238c-2.008,1.521 -4.504,2.43 -7.219,2.43c-5.202,0 -9.619,-3.317 -11.283,-7.946l-6.522,5.025c3.31,6.477 10.032,10.921 17.805,10.921z" fill="#4caf50"></path>
                  <path d="M43.611,20.083h-1.611v-0.083h-18v8h11.303c-0.792,2.237 -2.231,4.166 -4.087,5.571c0.001,-0.001 0.002,-0.001 0.003,-0.002l6.19,5.238c-0.438,0.398 6.591,-4.807 6.591,-14.807c0,-1.341 -0.138,-2.65 -0.389,-3.917z" fill="#1976d2"></path>
                </g>
              </g>
            </svg>
          </div>

          <div class="bagian-10-3">
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, quidem? Lorem ipsum dolor, sit amet
              consectetur adipisicing elit. Est deserunt quo soluta at reiciendis consequatur sint dolore incidunt vero!
              Placeat?</p>
          </div>
        </div>
      </div>
    </div>


  </div>



  <div id="About" class="isi">
    <h3>About</h3>
    <p>Who we are and what we do.</p>
  </div>


  <!-- seting -->
  <div class="ms" id="ms">
    <div class="cls">
      <a href="#1" class="colsebtn">X</a>
    </div>
    <div class="opsi12">
      <a href="#2" class="opsi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg> Whatsapp</a>
      <a href="#3" class="opsi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
        </svg> Telegram</a>
      <a href="#4" class="opsi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
          <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z" />
        </svg> Discord</a>
      <a href="#5" class="opsi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
          <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </svg> Mode</a>
      <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
          <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
        </svg> logout</a>

    </div>

  </div>
  <div class="bgcount">
  </div>
  </div>
  </div>


  <script src="Project/all/jquery.js"></script>
  <script src="Project/all/js.js">

  </script>
  <script>

  </script>
</body>

</html>