<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanaat Beladi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/marketplace.css">

</head>

<body>
   
<?php
include ("includes/header.php");

?>

    <div class="container-fluid">
        <div class="row ">
            <button class="btn btn-dark d-md-none" id="sidebarToggle">
                <i class="fas fa-store"></i>
            </button>

            <!-- Sidebar -->
            <nav id="sidebar" for="sidebarToggle" class=" col-md-3 col-lg-2 bg-light sidebar  position-sticky p-0 m-0">


                <h3>Shop by</h3>
                <div class="position-sticky ">
                    <div class="categorie">
                        <h6>CATEGORY</h6>
                        <form>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Cuir</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Poterie & céramique</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Tapis et moquettes</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Métal</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Sculpture sur bois</label>
                            </div>
                        </form>
                    </div>

                    <div class="prices">
                        <h6>Prices</h6>
                        <form>
                            <div class="mb-3">
                                <input type="text" name="" id="">
                                <input type="text" name="" id="">
                                <button>search</button>
                            </div>

                        </form>
                    </div>
                    <div class="manufactures">
                        <h6>Manufactures</h6>
                        <form>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Vintage</label>
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">Modern</label>
                            </div>

                        </form>
                    </div>
                    <div class="color">
                        <h6>Color</h6>
                        <form>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">red</label>
                                <input type="checkbox" name="" id="">
                                <label for="">blue</label>
                            </div>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">green</label>
                                <input type="checkbox" name="" id="">
                                <label for="">yellow</label>
                            </div>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">orange</label>
                                <input type="checkbox" name="" id="">
                                <label for="">gray</label>
                            </div>
                            <div class="colors mb-3">
                                <input type="checkbox" name="" id="">
                                <label for="">black</label>
                                <input type="checkbox" name="" id="">
                                <label for="">purple</label>
                            </div>

                        </form>
                    </div>


                </div>
            </nav>
            <!-- /Sidebar -->

            <!-- Main Content -->
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
                <div class=" sort col-lg-9">
                    <div class=" sort-show">
                        <div class="sort-se">
                            <span>Sort by</span>
                            <select name="" id="">
                                <option value="">all</option>
                            </select>
                        </div>
                        <div class="show-se">
                            <span>Show</span>
                            <select name="" id="">
                                <option value="">15</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="categories col-lg-9">
                    <div class="categorie">Morrocan chairs</div>
                    <div class="more">
                        <p>browse more</p>
                        <img src="img/next.png" alt="" srcset="">
                    </div>
                </div>

                <div class="cards-products">
                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/handbag.png" alt="">
                        </div>
                        <div class="description">
                            <h6>leather handbag</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/handbag2.png" alt="">
                        </div>
                        <div class="description">
                            <h6>leather handbag</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/handbag3.png" alt="">
                        </div>
                        <div class="description">
                            <h6>leather handbag</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>
                </div>


                <!-- cards 2 -->
                <div class="categories col-lg-9">
                    <div class="categorie">Moroccan lamps</div>
                    <div class="more">
                        <p>browse more</p>
                        <img src="img/next.png" alt="" srcset="">
                    </div>
                </div>

                <div class="cards-products">
                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/lamp1.png" alt="">
                        </div>
                        <div class="description">
                            <h6>Moroccan lamps</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/lamp2.png" alt="">
                        </div>
                        <div class="description">
                            <h6>Moroccan lamps</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/lamp3.png" alt="">
                        </div>
                        <div class="description">
                            <h6>Moroccan lamps</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>
                </div>

                <!-- card3 -->
                <div class="categories col-lg-9">
                    <div class="categorie">Morrocan chairs</div>
                    <div class="more">
                        <p>browse more</p>
                        <img src="img/next.png" alt="" srcset="">
                    </div>
                </div>

                <div class="cards-products">
                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/chair1.png" alt="">
                        </div>
                        <div class="description">
                            <h6>berber rugs</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/chair2.png" alt="">
                        </div>
                        <div class="description">
                            <h6>berber rugs</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/chair3.png" alt="">
                        </div>
                        <div class="description">
                            <h6>berber rugs</h6>
                            <span>$ 25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="categories col-lg-9">
                    <div class="categorie">berber rugs</div>
                    <div class="more">
                        <p>browse more</p>
                        <img src="img/next.png" alt="" srcset="">
                    </div>
                </div>

                <div class="cards-products">
                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/rug1.png" alt="">
                        </div>
                        <div class="description">
                            <h6>berber rugs</h6>
                            <span>&25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/rug2.png" alt="">
                        </div>
                        <div class="description">
                            <h6>berber rugs</h6>
                            <span>&25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>

                    <div class="card-product">
                        <div class="image-product">
                            <img src="img/rug3.png" alt="">
                        </div>
                        <div class="description">
                            <h6>berber rugs</h6>
                            <span>&25</span>
                            <div class="stars-icons">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star-co.png" alt="" srcset="">
                                <img src="img/star.png" alt="" srcset="">

                            </div>
                        </div>
                        <div class="share">

                            <img src="img/share.png" alt="" srcset="">
                            <a href="#">add to cart</a>
                            <img src="img/like.png" alt="" srcset="">
                        </div>
                    </div>
                </div>


            </div>
            <!-- /Main Content -->
        </div>
    </div>

<?php
include ("includes/footer.php");

?>

    
    <script src="../assets/js/marketplace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>