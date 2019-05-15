<?php 
include 'Admin/db.php';
require 'Admin/session.php';
Session::start();
$select = $db->query('SELECT id_item, name_item, bref_des, description, image_item, prix, eta FROM items');
$items = $select->fetchAll();
$first_order = 2;
$seconde_order = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Commerce</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
   <style type="text/css">
       .row{
        margin:7rem 7rem 7rem 7rem;
        font-size: 10px;
       }
       .imag{
        width: auto;
       }

   </style>   

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">E-commerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(E-commerce)</span></a>
                    </li>
                    </ul>
                <form class="form-inline mt-2 mt-md-0">
                    
                    <a href="login.php"> Sign In / Up</a>
                </form>
            </div>

        </nav>
        

    </header>

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php foreach($items as $item):?>
                <div class="carousel-item <?=$item['eta']; ?>">
                    <img class="second-slide" src="images/<?=$item['image_item']; ?>">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?=$item['name_item']; ?>.</h1>
                            <p><?=$item['bref_des']; ?>.</p>
                            
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="row">
           <?php foreach($items as $item):?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 " style="margin-right: 90px; margin-top: 10px;">
                <div class="imag">
              <a href="#"><img class="card-img-top" src="images/<?=$item['image_item']; ?>" alt=""></a></div>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?=$item['name_item']; ?>.</a>
                </h4>
                <h5>Prix :  <?=$item['prix']; ?> DH</h5>
                <p class="card-text"><?=$item['description']; ?>.</p>
                

              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
           <?php 
            if($first_order == 2 && $seconde_order == 1){
                $first_order = 1;
                $seconde_order = 2;
            }else{
                $first_order = 2;
                $seconde_order = 1;
            }
            endforeach;?>

        </div>



          <!-----------
           <?php foreach($items as $item):?>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-<?=$first_order; ?>">
                    <h2 class="featurette-heading"><?=$item['name_item']; ?>. <span class="text-muted">Prix :
                            <?=$item['prix']; ?> DH.</span></h2>
                    <p class="lead"><?=$item['description']; ?>.</p>
                </div>
                <div class="col-md-5 order-md-<?=$seconde_order; ?>">
                    <img class="featurette-image img-fluid mx-auto" src="images/<?=$item['image_item']; ?>"
                        alt="Generic placeholder image">
                </div>
            </div> 
            <?php 
            if($first_order == 2 && $seconde_order == 1){
                $first_order = 1;
                $seconde_order = 2;
            }else{
                $first_order = 2;
                $seconde_order = 1;
            }
            endforeach;?>

            </div> ------->

            <!-- /END THE FEATURETTES -->

        <!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            
            <p>&copy; 2018-2019 &middot; </p>
        </footer>
    </main>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>