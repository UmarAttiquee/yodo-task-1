<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&display=swap">




  <!-- Include Owl Carousel CSS and JS files -->
<!-- Include Owl Carousel CSS and JS files -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
   $(document).ready(function() {
      // Slider 1
      $("#slider-1-carousal").owlCarousel({
         items: 1,
         margin: 5,
         loop: true,
         autoplay: true,
         autoplayTimeout: 2000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 4, nav: true },
            700: { items: 6, nav: true },
            1000: { items: 8, nav: true }
         }
      });

      // Slider 2
      $("#slider-2-news").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: false,
         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 1, nav: true },
            700: { items: 2, nav: true },
            1000: { items: 3, nav: true }
         }
      });

      // Slider 3
      $("#slider-3-hero1").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: true,
         autoplayTimeout: 3500,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 1, nav: true },
            700: { items: 1, nav: true },
            1000: { items: 1, nav: true }
         }
      });

      // Slider 4
      $("#slider-4-exp").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         dots:false,
         nav:false,
         autoplay: true,
         autoplayTimeout: 3000,

         autoplayHoverPause: false,
         responsive: {
            0: { items: 2, nav: true },
            700: { items: 3, nav: true },
            1000: { items: 4, nav: true }
         }
      });

      // Slider 5
      $("#slider-5-product").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: true,
         navText: ["<i class='fa fa-chevron-left owl-prev'></i>","<i class='fa fa-chevron-right owl-next'></i>"], // Custom navigation icons

         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 2, nav: true },
            700: { items: 3, nav: true },
            1000: { items: 4, nav: true }
         }
      });

      // Slider 6
      $("#slider-6-product").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,

         autoplay: false,
         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 1, nav: true },
            700: { items: 1, nav: true },
            1000: { items: 1, nav: true }
         }
      });
      $('.owl-dot').click(function(){
        var dotIndex = $(this).index();
        $('#slider-6-product').trigger('to.owl.carousel', [dotIndex, 300]);
    });
    $('.owl-dot').click(function(){
        var dotIndex = $(this).index();
        $('#slider-6-product').trigger('to.owl.carousel', [dotIndex, 300]);
    });
   });
   
</script>



  <title>Hello, world!</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php

//  font-family: 'Archivo', sans-serif;


  get_template_part('template-parts/top-header');
  get_template_part('template-parts/bottom-header');

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>