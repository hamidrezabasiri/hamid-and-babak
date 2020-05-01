<?php require 'pages_intersections/PHP/header.php'; ?>
<?php require 'pages_intersections/PHP/footer.php'; ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cced6ca7a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/font_imports.css">
    <link rel="stylesheet" href="./CSS/swiper.min.css">
    <link rel="stylesheet" href="./CSS/forosh.css">
    <title>فروش</title>
</head>
<body class="iranSans" style="background: url(./img/bgc2.jpg); background-repeat: no-repeat; background-attachment: fixed;">
<?php generate_header(); ?>
        <style>
          body {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
          }
          .swiper-container {
            width: 100%;
            height: 300px;
            margin: 20px 0;
          }
          .swiper-slide {
            text-align: center;
            font-size: 18px;
            background-image: linear-gradient(rgb(32, 13, 204), rgb(194, 19, 179));
            opacity: 0.7;
      
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
          }
        </style>
      </head>
      <body>
        <h1 class="text-center">ابرنگ</h1>
        <!-- Swiper -->
        <div class="swiper-container swiper1">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination1"></div>
        </div>
      
        <!-- Swiper -->
        <div class="swiper-container swiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination2"></div>
        </div>
      
        <!-- Swiper -->
        <div class="swiper-container swiper3">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination swiper-pagination3"></div>
        </div>
      
        <!-- Swiper JS -->
        <script src="./js/swiper.min.js"></script>
      
        <!-- Initialize Swiper -->
        <script>
          var swiper1 = new Swiper('.swiper1', {
            spaceBetween: 30,
            pagination: {
              el: '.swiper-pagination1',
              clickable: true,
            },
          });
          var swiper2 = new Swiper('.swiper2', {
            spaceBetween: 30,
            pagination: {
              el: '.swiper-pagination2',
              clickable: true,
            },
          });
          var swiper3 = new Swiper('.swiper3', {
            spaceBetween: 30,
            pagination: {
              el: '.swiper-pagination3',
              clickable: true,
            },
          });
        </script>
  <div class="divo">
    <button class="btn btn-primary ئف-2" type="button">خرید</button>
  </div>
            <!-- Demo styles -->
            <style>
              body {
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color:#000;
                margin: 0;
                padding: 0;
              }
              .swiper-container {
                width: 100%;
                height: 300px;
                margin: 20px 0;
              }
              .swiper-slide {
                text-align: center;
                font-size: 18px;
                background-image: linear-gradient(rgb(32, 13, 204), rgb(194, 19, 179));
                opacity: 0.7;
          
                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
              }
            </style>
          </head>
          <body>
            <h1 class="text-center">طبیعت</h1>
            <!-- Swiper -->
            <div class="swiper-container swiper1">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination swiper-pagination1"></div>
            </div>
          
            <!-- Swiper -->
            <div class="swiper-container swiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination swiper-pagination2"></div>
            </div>
          
            <!-- Swiper -->
            <div class="swiper-container swiper3">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination swiper-pagination3"></div>
            </div>
          
            <!-- Swiper JS -->
            <script src="./js/swiper.min.js"></script>
          
            <!-- Initialize Swiper -->
            <script>
              var swiper1 = new Swiper('.swiper1', {
                spaceBetween: 30,
                pagination: {
                  el: '.swiper-pagination1',
                  clickable: true,
                },
              });
              var swiper2 = new Swiper('.swiper2', {
                spaceBetween: 30,
                pagination: {
                  el: '.swiper-pagination2',
                  clickable: true,
                },
              });
              var swiper3 = new Swiper('.swiper3', {
                spaceBetween: 30,
                pagination: {
                  el: '.swiper-pagination3',
                  clickable: true,
                },
              });
            </script>
  <div class="divo">
    <button class="btn btn-primary ئف-2" type="button">خرید</button>
  </div>
  <style>
    body {
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 300px;
      margin: 20px 0;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background-image: linear-gradient(rgb(32, 13, 204), rgb(194, 19, 179));
      opacity: 0.7;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <h1 class="text-center">چهره</h1>
  <!-- Swiper -->
  <div class="swiper-container swiper1">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination1"></div>
  </div>

  <!-- Swiper -->
  <div class="swiper-container swiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination2"></div>
  </div>

  <!-- Swiper -->
  <div class="swiper-container swiper3">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="./img/4.jpg" alt=""></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination3"></div>
  </div>

  <!-- Swiper JS -->
  <script src="./js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper1 = new Swiper('.swiper1', {
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination1',
        clickable: true,
      },
    });
    var swiper2 = new Swiper('.swiper2', {
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination2',
        clickable: true,
      },
    });
    var swiper3 = new Swiper('.swiper3', {
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination3',
        clickable: true,
      },
    });
  </script>
  <div class="divo">
    <button class="btn btn-primary ئف-2" type="button">خرید</button>
  </div>
  <?php generate_footer(); ?>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/forosh.js"></script>
</body>
</html>