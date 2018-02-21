<?php include('./config/config.php')?>
<?php include('./inc/header.php');?>

<!-- Slider Section-->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/img1.jpg" width=100% height=460px alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Let's get Started</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, corporis provident iure accusamus at quaerat? Nisi reprehenderit quod cum officiis optio. Modi, nisi illo dolores quis nihil enim cupiditate ad?</p>
            <button class="btn btn-default">Get Started</button>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide1.png"  width=100% height=460px  alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Let's get Started</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, corporis provident iure accusamus at quaerat? Nisi reprehenderit quod cum officiis optio. Modi, nisi illo dolores quis nihil enim cupiditate ad?</p>
            <button class="btn btn-default">Get Started</button>
        </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/slide.png" width=100% height=460px alt="Third slide">
        </div> <!--
        <div class="carousel-item">
            <img src="..." alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
            </div>
        </div> -->

  </div>
  </div>
</div>

<?php include('inc/footer.php');?>