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
    <link rel="stylesheet" href="CSS/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/font_imports.css">
    <link rel="stylesheet" href="pages_intersections/CSS/header.css">
    <link rel="stylesheet" href="pages_intersections/CSS/body.css">
    <link rel="stylesheet" href="pages_intersections/CSS/footer.css">
    <link rel="stylesheet" href="CSS/mypaintings.css">
    <title>نقاشی های من</title>
</head>
<body class="iranSans">
<!-- header -->
<?php generate_header(); ?>

    <main>
        <h1 class="tabiyat text-center"> ابرنگ  </h1>
        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper bshodige">
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper('.swiper-container', {
            pagination: {
              el: '.swiper-pagination',
              type: 'fraction',
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
          });
        </script>
        <!-- Swiper JS -->
        <script src="js/swiper.min.js"></script>
  
          <!-- Initialize Swiper -->
          <script>
            var swiper = new Swiper('.swiper-container', {
              pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
          </script>

            <h1 class="tabiyat text-center">نقاشی های طبیعت</h1>
            <!-- Swiper -->
            <div class="swiper-container">
              <div class="swiper-wrapper bshodige">
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

            <h1 class="tabiyat text-center"> نقاشی های چهره </h1>

            <!-- Swiper -->
            <div class="swiper-container">
              <div class="swiper-wrapper bshodige eeee">
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
 
            <!-- Swiper JS -->
            <script src="js/swiper.min.js"></script>
 
            <!-- Initialize Swiper -->
            <script>
              var swiper = new Swiper('.swiper-container', {
                pagination: {
                  el: '.swiper-pagination',
                  type: 'fraction',
                },
                navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
                },
              });
            </script> 

            <!-- Footer -->
            <?php generate_footer(); ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="js/mypaintings.js" >
</body>
</html>