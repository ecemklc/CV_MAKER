<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="<?=$tanimlama?>" />
        <meta name="keyword" content="<?=$key?>" />
        <meta name="author" content="" />
        <title><?php echo $sayfa ?> | ÖZGEÇMİŞ </title>
        <link rel="icon" type="image/x-icon" href="foto/logo.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="js/jquery.min.js"></script>
        <!--jquery ekleme için -->
        <link rel='stylesheet' href='css/bootstrap.min.css' />
        <!-- dynamic add/remove -->

        
    <style>

body {
  background-image: url('foto/daktilolambakopy.jpg');
  background-attachment: fixed;
  background-repeat: no-repeat;
  width: 100%;
  height: auto;
  -webkit-backgroun-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.side {
  margin-top: 120px;
}

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 20px 10px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

#bilgiler.tr {
    color:white;
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<!--background-attachment: fixed;  style bodyden çıkardım-->
<!--bodyden size coveri çıkarıp contain ekledim responsive olsun diye -->


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="position: fixed; top:0; left: 0; right: 0; z-index: 2;" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="anasayfa"><img src="foto/logokopy.png" alt="logo" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if($sayfa=="Anasayfa") echo "active" ?> " href="anasayfa">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if($sayfa=="Başlangıç") echo "active" ?> " href="baslangic">Başlangıç</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if($sayfa=="Hakkımda") echo "active" ?> " href="hakkimda">Hakkımda</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if($sayfa=="İletişim") echo "active" ?> " href="iletisim">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>