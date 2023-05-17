<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coca Cola Journey</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/other.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <script src="http://www.x3dom.org/release/x3dom.js"></script>
    <link rel="stylesheet" href="http://www.x3dom.org/release/x3dom.css">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar_coca_cola sticky-top">
    <div class="logo">
        <a class="navbar-brand" href="javascript:swap('home')">
            <h1>1</h1>
            <h1>oca</h1>
            <h2>Cola</h2>
            <h3>Journey</h3>
            <p>Refreshing the world, one story at a time</p>
        </a>
    </div>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link active nav-a-home" href="javascript:swap('home')">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-a-about" href="javascript:swap('about')">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-a-models" href="javascript:swap('gallery')">Models</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-a-drinks" href="#" id="navbardrop" data-bs-toggle="dropdown">Drinks</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">Coca Cola</a>
                    <a class="dropdown-item" href="https://www.coca-cola.co.uk/brands/sprite">Sprite</a>
                    <a class="dropdown-item" href="https://www.coca-cola.co.uk/brands/dr-pepper">Dr Pepper</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid main_contents swap-home">
    <div class="row row-splash">
        <div class="col-sm-12">
            <div id="main_3d_image">
                <div id="main_text" class="col-xs-12 col-sm-4">
                    <h2>Coca Cola Great Britain</h2>
                    <h3>Founded by Dr John S Pemberton</h3>
                    <p>The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">
                    <img class="card-img-top img-fluid" src="Assets/img/coca_cola.jpg" alt="Coca Cola">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Coca Cola</h3>
                    <p class="card-text">It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs' Pharmacy...
                    </p>
                    <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste" class="btn btn-primary">Find out more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <a href="https://www.coca-cola.co.uk/brands/sprite">
                    <img class="card-img-top img-fluid" src="Assets/img/sprite.jpg" alt="Sprite">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Sprite</h3>
                    <p class="card-text">First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries.
                        Sprite Zero, part of our no sugar Zero range, offers the...
                    </p>
                    <a href="https://www.coca-cola.co.uk/brands/sprite" class="btn btn-primary">Find out more</a>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <a href="https://www.coca-cola.co.uk/brands/dr-pepper">
                    <img class="card-img-top img-fluid" src="Assets/img/dr_pepper.jpg" alt="Dr Pepper">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Dr Pepper</h3>
                    <p class="card-text">Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on.
                        It was created by Texas pharmacist Charles Alderton in 1885.
                    </p>
                    <a href="https://www.coca-cola.co.uk/brands/dr-pepper" class="btn btn-primary">Find out more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid main_contents swap-about">
    <div class="row render-gallery-wrapper">
        <div class="another-wrapper">
            <div class="carousel slide" id="image-gallery" data-bs-ride="carousel">
                <div class="carousel-indicators">

                </div>
                <div class="carousel-inner">

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#image-gallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#image-gallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid main_contents swap-gallery">
    <div class="row model-display-wrapper">
        <div class="col-lg-8">
            <div class="model-selection-wrapper">
                <ul class="nav nav-pills justify-content-center bg-white">
                    <li class="nav-item">
                        <button class="nav-link rounded-5 disabled nav-label">The Models</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link active rounded-5 btn_diet" onclick="switchModel('dietcoke')">Diet Cola</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-5 btn_dr" onclick="switchModel('drpepper')">Dr Pepper</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-5 btn_spr" onclick="switchModel('sprite')">Sprite</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-5 btn_fanta" onclick="switchModel('fanta')">Fanta</button>
                    </li>
                </ul>
            </div>
            <div class="x3d-wrapper bg-white">
                <x3d class="x3d-app" showStat="true" max-height="600px">
                    <scene>
                        <inline nameSpaceName="Model" mapDEFToID="true" url="models/dietcoke.x3d"></inline>
                    </scene>
                </x3d>
            </div>
            <div class="description-text-wrapper bg-white">
                <div class="model-description-title">
                    <h2>Diet Cola</h2>
                </div>
                <div class="model-description-subtitle">
                    <h3>World's Diet Favourite</h3>
                </div>
                <div class="model-description-text">
                    <p>Diet Cola Zero is the healthier version of the Coca Cola brand, and is a sugar free beverage that comes in bottles and cans of all sizes.</p>
                </div>
                <div class="model-description-method">
                    <p>This X3D model of the Diet Coke Can has been created in Blender and exported to VRML97, and then using transcoders for display.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="model-controls-wrapper bg-white">
                <div class="model-controls-title">
                    <h2>Controls</h2>
                </div>
                <div class="model-controls-buttons">
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Camera</button>
                        <button class="btn btn-outline-secondary btn-camera-reset" onclick="cameraSet('Main')">Default</button>
                        <button class="btn btn-outline-secondary btn-camera-side" onclick="cameraSet('Side')">Side</button>
                        <button class="btn btn-outline-secondary btn-camera-top" onclick="cameraSet('Top')">Top</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Animation</button>
                        <button class="btn btn-success btn-anim-status" onclick="toggleAnimation()">Playing</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Render</button>
                        <button class="btn btn-outline-secondary btn-render-shaded" onclick="setRender()">Toggle</button>
                        <button class="btn btn-outline-success btn-render-wire disabled">Shaded</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Light</button>
                        <button class="btn btn-outline-secondary active btn-light-scene" onclick="toggleLights('scene')">Scene Lights</button>
                        <button class="btn btn-outline-secondary active btn-light-head" onclick="toggleLights('headlight')">Headlight</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-sm footer">
    <div class="container">
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline">230911 Web Application</span></p>
        </div>

    </div>
</nav>


<script src="https://kit.fontawesome.com/f313f6e042.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="Jscript/home.js"></script>
<script src="Jscript/model_controls.js"></script>
<script src="Jscript/carousel.js"></script>
</body>
</html>