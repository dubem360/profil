<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chidubem</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="">
                <a href="index.php" class="navbar-brand ml-5">Dubex <span class="font-weight-bold text-white">@</span></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar"
            aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navBar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3">
                        <a href="index.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="#" class="nav-link">About me</span></a>
                    </li>
                    <li class="nav-item mr-3">
                        <a href="#" class="nav-link">Blog</span></a>
                    </li>
                    <li class="nav-item mr-1">
                        <a href="#" class="nav-link text-white"><span class="fa fa-twitter"></span></a>
                    </li>
                    <li class="nav-item mr-1">
                        <a href="#" class="nav-link text-white"><span class="fa fa-github"></span></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a href="#" class="nav-link text-white"><span class="fa fa-linkedin"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="section-padding">
        <div class="background">&nbsp;</div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="img/dev-image-1.png"  class="w-100" alt="landing-img">
            </div>
            <div class="col-md-6 col-sm-12">
                <h1 class="text-white ml-3 pt-3">Hey</h1>
                <h2 class="text-dark ml-3" id="demo">I'm Chi<span class="text-white">dubem</span> Nwankwo</h2>
                <h4 class="text-white ml-3"><span>< </span>A web developer<span> / ></span></h4>
                <a href="#" class="btn btn-dark m-5 pl-4 pr-4">About Me <i class="fa fa-arrow-right ml-2"></i></a>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 col-sm-12">
                    <h5 class="border-bottom font-weight-bold">About Me</h5>
                    <div class="text-justified">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sint voluptatem,
                             quidem error unde quisquam vero sapiente voluptatibus qui ab voluptates minus 
                             blanditiis amet perspiciatis totam.
                             Eius cumque amet doloribus.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sint voluptatem,
                             quidem error unde quisquam vero sapiente voluptatibus qui ab voluptates minus 
                             blanditiis amet perspiciatis totam.
                             Eius cumque amet doloribus.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sint voluptatem,
                             quidem error unde quisquam vero sapiente voluptatibus qui ab voluptates minus 
                             blanditiis amet perspiciatis totam.
                             Eius cumque amet doloribus.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-5">
                            <h6 class="border-bottom font-weight-bold">Skills</h6>
                            <ul class="navbar-nav nav-column mt-2">
                                <li class="nav-item muted text-center text-dark border p-2 mb-1 ski"><i class="fa fa-php5"></i>PHP</li>
                                <li class="nav-item muted text-center text-dark border p-2 mb-1 ski"><i class="fa fa-javaScript"></i>JavaScript</li>
                                <li class="nav-item muted text-center text-white border p-2 mb-1 ski"><i class="fa fa-jquery"></i>Jquery</li>
                                <li class="nav-item muted text-center text-dark border p-2 mb-1 ski"><i class="fa fa-bootstrap"></i>Bootstrap</li>
                                <li class="nav-item muted text-center text-dark border p-2 mb-1 ski"><i class="fa fa-css3"></i> CSS</li>
                                <li class="nav-item muted text-center text-white border p-2 mb-1 ski"><i class="fa fa-html5"></i> HTML</li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <div class="pl-5">
                                <img src="img/admin.png" alt="profile-foto" class="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding2 bg-dark">
        <div class="text-center pt-0 mt-0">
            <h4 class="text-white pb-5">Get In Touch</h4>
        </div>
        <div class="container pb-5" style="width: 60%;">
            <form action="" method="post">
                <div class="row pb-5">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <textarea class="form-control" name="" id="" rows="3" col="4">message</textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-warning text-white">Connect</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="jumbotron mb-0">
        <div class="container">
        <div class="row" style="padding: 5em 0;">
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <img src="img/vue.jpg" alt="" style="height:150px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><p class="font-weight-bold text-info">Vue.js</p></div>
                            <div class="col"><p class="muted float-right">09.19</p></div>
                        </div>
                        <div class="card-title">
                            <h6>
                                <a href="" class="text-justify text-warning">How to create astoning design with bootstrap</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <img src="img/php.jpg" alt="" style="height:150px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><p class="font-weight-bold text-info">PHP</p></div>
                            <div class="col"><p class="muted float-right">09.19</p></div>
                        </div>
                        <div class="card-title">
                            <h6>
                                <a href="" class="text-justify">How to create astoning design with bootstrap</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <img src="img/lara.jpg" alt="" style="height:150px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><p class="font-weight-bold text-info">Laravel</p></div>
                            <div class="col"><p class="muted float-right">09.19</p></div>
                        </div>
                        <div class="card-title">
                            <h6>
                                <a href="" class="text-justify text-warning">How to create astoning design with bootstrap</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 bg-transparent">
                    <img src="img/vue.jpg" alt="" style="height:150px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col"><p class="font-weight-bold text-info">Bootstrap</p></div>
                            <div class="col"><p class="muted float-right">09.19</p></div>
                        </div>
                        <div class="card-title">
                            <h6>
                                <a href="" class="text-justify">How to create astoning design with bootstrap</a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <footer class="footer bg-secondary">
        <div class="p-2 text-center">
            <p class="text-center text-white pt-4">&COPY; 2019 <span>Designed By </span><a href="#" class="text-warning font-weight-bold">Dubem</a></p>
        </div>
    </footer>






    <script src="js/bootstrap.min.js"></script>
    <script>
        var i = 0;
var txt = 'Lorem ipsum typing effect!'; /* The text */
var speed = 50; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
    </script>
</body>
</html>