<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanaat Beladi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
<?php
include ("pages/includes/header.php");

?>



  <section class="container-fluid text-white sliderParent">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item w-100 active p-5 allSliders" style="background-image: url(img/swipImg.jpg);">
          <div class="d-flex flex-column align-items-center">
            <span class="w-50 mt-5">Découvrez l'essence du Maroc</span>
            <h1 class="display-1 w-50 mb-5">Bienvenue à Sanaat Beladi - Là où la tradition rencontre l'art</h1>
          </div>
        </div>
        <div class=" carousel-item w-100 p-5 allSliders" style="background-image: url(img/swapImg2.jpg);">
          <div class="d-flex flex-column align-items-center">
            <span class="w-50 mt-5">Découvrez l'essence du Maroc</span>
            <h1 class="display-1 w-50 mb-5">Bienvenue à Sanaat Beladi - Là où la tradition rencontre l'art</h1>
          </div>
        </div>
        <div class="ms-0 w-100 p-5 allSliders" style="background-image: url(img/swapImg3.jpg);">
          <div class="d-flex flex-column align-items-center">
            <span class="w-50 mt-5">Découvrez l'essence du Maroc</span>
            <h1 class="display-1 w-50 mb-5">Bienvenue à Sanaat Beladi - Là où la tradition rencontre l'art</h1>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section id="allBlogs">
    <div class="container d-flex flex-column align-items-center card p-5 mt-5">
      <div>
        <h2 class="display-1 text-center pb-2">Découvrez l'essence du Maroc</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 col-sm-12 d-flex align-content-center justify-content-center">
          <p class="w-100 p-5 text_for_section1">Plongez dans le monde vibrant de l'artisanat marocain. Chez Sanaat Beladi, nous vous proposons une sélection de trésors authentiques, fabriqués à la main. Des souks animés au seuil de votre porte, découvrez le riche patrimoine et l'artisanat exquis du Maroc.</p>
        </div>
        <div class="col-lg-6 col-sm-12">
          <img src="img/Image1BlogIndex.png" class="w-100" alt="">
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row  mb-5">
        <div class="col-lg-6 col-sm-12 card p-5">
          <div>
            <img src="img/Image2BlogIndex.png" class="w-100" alt="">
          </div>
          <div>
            <h3>Parer de mystère marocain</h3>
            <p>Des pièces d'inspiration berbère aux créations contemporaines, notre sélection de bijoux incarne l'élégance et le patrimoine.</p>
          </div>
        </div>
        <div class="col-lg-6  col-sm-12 card p-5">
          <div>
            <img src="img/Image3BlogIndex.png" class="w-100" alt="">
          </div>
          <div>
            <h3>Découvrez l'élégance</h3>
            <p>Plongez dans notre collection de céramiques peintes à la main, où chaque pièce raconte une histoire de tradition et d'art.</p>
          </div>
        </div>
      </div>
      <div id="our_Shop_Here" class="d-flex justify-content-end mt-5">
        <a class="btn btn-lg btn-dark rounded-5 display-1">Our Shop Here</a>
      </div>
    </div>
  </section>
  <section class="container text-white mt-5 mb-5 p-5" style="background-image: url(img/AuthenticitéImg.png);">
    <h2 class="text-center display-6 pb-5">Authenticité et qualité</h2>
    <div class="d-flex justify-content-center w-100 pt-3">
      <p class="w-75 h3">Chez Sanaat Beladi , nous nous engageons à ne proposer que les meilleurs produits artisanaux marocains. Chaque article est trié sur le volet, ce qui garantit son authenticité et sa qualité.</p>
    </div>
  </section>
  <section id="meet_The_Makers" class="container">
    <div class="d-flex justify-content-center p-5">
      <h2>Meet the Makers: The Soul of Moroccan Artistry</h2>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <img class="w-100" src="img/meetThemakersImg1.png" alt="">
      </div>
      <div class="col-lg-6 col-sm-12 p-5">
        <p class="text_for_section">Each handcrafted piece in our collection tells a story of tradition, passion, and unparalleled skill. In our 'Artisan Spotlight', we take you behind the scenes to meet the remarkable individuals whose hands and hearts bring Moroccan artisanate to life. Discover their stories, their inspirations, and the heritage that shapes their work.</p>
      </div>
    </div>
  </section>
  <section id="meet_One_Of_our_team" class="container bg-dark text-white">
    <div class="text-center mt-5 pt-5">
      <h3 class="display-3">Meet one of our team</h3>
    </div>
    <div class="row">
      <div class="col-lg-6 col-sm-12 p-5">
        <img class="w-100" src="img/ourteamimg1.png" alt="">
      </div>
      <div class="col-lg-6 col-sm-12 p-5">
        <h4 class="display-4">Her Story</h4>
        <p class="display-6">Amina El Fassi, a master ceramicist from Fes, carries on a family tradition steeped in over 25 years of history. From a young age, she watched her father transform clay into beautiful art, instilling in her a deep passion for Moroccan ceramics. Today, Amina skillfully blends this inherited expertise with her own artistic vision, creating pieces that not only reflect the rich heritage of Fes but also tell the story of her family's enduring legacy in the world of artisanal craft.</p>
        <span>Craft : Master Ceramicist</span>
        <br>
        <span>Location: Fes, Morocco</span>
      </div>
    </div>
  </section>
  <section id="faq_Section" class="container">
    <div class="mt-5 mb-5 text-center">
      <h2 class="display-1">frequently asked question</h2>
    </div>
    <div class="container faqSection">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn ">What is Senaat-Beladi?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
    <div class="container">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">What kind of products does Senaat-Beladi offer?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
    <div class="container faqSection">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">Are all the products sold on Senaat-Beladi authentic?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
    <div class="container faqSection">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">Do you offer international shipping?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
    <div class="container faqSection">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">What payment methods are accepted on Senaat-Beladi?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
    <div class="container faqSection">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">How long does it take to receive my order?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
    <div class="container faqSection">
      <span class="btn text-white pt-2 pb-2 text-start bg-dark faqbtn">Can I return or exchange a product?</span>
      <div class="active_toggle">
        <p class="text-center">Senaat-Beladi is an online store that specializes in selling authentic Moroccan handcrafted products.</p>
      </div>
    </div>
  </section>


  <?php
  include("pages/includes/footer.php");

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/index.js"></script>
</body>

</html>