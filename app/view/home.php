<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap 5 CSS -->
        <link href="assets\css\BS-5.3.3\bootstrap.min.css" rel="stylesheet" type='text/css'>

        <!-- Include X3DOM library and CSS -->
        <link rel='stylesheet' type='text/css' href='assets/css/x3dom.css'>
        </link>

        <!--Sprite CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/Sprite-Page.css">
        <!--Coke CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/Coke-Page.css">
        <!--Coke CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/Oasis-Page.css">
        <!--Main CSS-->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <!--Fonts-->
        
        <!--Page Title-->
        <title>Coca-Cola Journey</title>
    </head>

    <body id="body_id">
        <!--Logo and navbar-->
        <nav id="header" class="navbar navbar-expand-sm navbar_coca_cola">
            <div class="container-fluid">
                <!--Brand-->
                <div class="logo">
                    <a id="nav_brand" class="navbar-brand" href="#">
                        <h1>1</h1>
                        <h1>oca</h1>
                        <h2>Cola</h2>
                        <h3>Journey</h3>
                        <p>Refreshing the world, one story at a time</p>
                    </a>
                </div>


                <!--Collapsible NavBar-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--NavBar Links-->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--Links-->
                    <ul class="navbar-nav ms-auto">
                        <!--Dropdown-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Drinks</a>
                            <ul id="dM" class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="pageSwitch('Coke-Page')">Coca-Cola</a></li>
                                <li><a class="dropdown-item" href="#" onclick="pageSwitch('Sprite-Page')">Sprite</a></li>
                                <li><a class="dropdown-item" href="#" onclick="pageSwitch('Oasis-Page')">Oasis</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="pageSwitch('Home-Page')">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="popover" data-bs-placement="bottom"
                                data-bs-trigger="hover" data-bs-title="About Us" data-bs-content="Established in 1886 by Dr John S Pemberton.
                                Designed For Sussex Uni 3D Apps Module.">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-trigger="hover"
                                data-bs-target="#contactModal">Contact us</a>
                        </li>

                        <!--Contact Modal-->
                        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Coca-Cola Company</h6>
                                        <p>
                                            The Coca‑Cola Company<br>
                                            Address:<br>
                                            The Coca‑Cola Company<br>
                                            P.O. Box 1734<br>
                                            Atlanta, GA<br>
                                            30301<br>
                                            USA<br><br>
                                            Telephone: 001 404 676 2121
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="modal-btn" type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid" onchange='genGall();'>
            <!--Home Page-->
            <div class="main_contents" id="Home-Page">
                <!--Main 3D Image or Carousel-->
                <div class="row">
                    <div class="col-sm-12">
                        <div id="main_3d_image" class="main_3d_image">
                            <div id="main_text" class="col-xs-12 col-sm-4">
                                <div id="home_title"></div>
                                <div id="home_subtitle"></div>
                                <div id="home_des"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Row of Cards-->
                <div class="row">
                    <!--Coca-Cola Column-->
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid img-thumbnail" id="img_left" alt="Coke">
                            </a>
                            <div class="card-body">
                                <div id="title_left" class="card-title hTxt"></div>
                                <div id="txt_left" class="card-text hTxt"></div>
                                <div id="link_left" class="btn btn-primary fom"></div>
                            </div>
                        </div>
                    </div>

                    <!--Sprite Column-->
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid img-thumbnail" id="img_mid" alt="Sprite">
                            </a>
                            <div class="card-body">
                                <div id="title_mid" class="card-title hTxt"></div>
                                <div id="txt_mid" class="card-text hTxt"></div>
                                <div id="link_mid" class="btn btn-primary fom"></div>
                            </div>
                        </div>
                    </div>

                    <!--Oasis Column-->
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top img-fluid img-thumbnail" id="img_right" alt="Oasis">
                            </a>
                            <div class="card-body">
                                <div id="title_right" class="card-title hTxt"></div>
                                <div id="txt_right" class="card-text hTxt"></div>
                                <div id="link_right" class="btn btn-primary fom"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Coke Page-->
            <div class="main_contents Coke-Page" id="Coke-Page" style="display: none;">

                <!--Row for model and gallery -->
                <div class="row">
                    <!-- Model column-->
                    <div class="col-sm-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="C-c-Tab" #href="#" onclick="SwitchModels(0)">Coke</a>
                                    </li>
                                    <li class="nav-item"></li>
                                        <a class="nav-link deactivated" id="C-s-Tab" #href="#" onclick="SwitchModels(1)">Sprite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link deactivated" id="C-o-Tab" #href="#" onclick="SwitchModels(2)">Oasis</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <!-- X3DOM Model -->
                                <div class="x3dModel">
                                    <x3d class="x3dMod" id="model-c">
                                        <scene>
                                        <Switch whichChoice="0" id="switcher">
                                                <inline id="inline_c" nameSpaceName="model" mapDEFToID="true"url="assets\x3d\models\coke_can_v4.x3d"></inline> </inline>
                                            </Switch>
                                            <Switch whichChoice="1" id="switcher">
                                                <inline id="inline_c" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\sprite_v2.x3d"></inline>
                                            </Switch>
                                            <Switch whichChoice="2" id="switcher">
                                                <inline id="inline_c" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\oasisv2.x3d"></inline>
                                        </scene>
                                    </x3d>
                                </div>

                                <!--Model Info Card -->
                                <p class="card-text"></p>
                                <h5 class="Camera POVs"></h5>
                                <div class="camera-btns">
                                    <p class="card-text"></p>
                                    <div class="btn-group" id="btn function">
                                        <button type="button" class="btn btn-primary btn-responsive camera-front"
                                            id="b-front">Front</button>
                                        <a href="#" class="btn btn-primary btn-responsive camera-back" id="b-back">Back</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-left" id="b-left">Left</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-right"
                                            id="b-right">Right</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-off" id="b-off">Off</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery column-->
                    <div class="col-sm-3 gallery-col">
                        <div class="card text-center">
                            <div id="gallery_title" class="gallery-header"></div>
                            <div class="card-body gallery-bod">
                                <!--Generate Gallery-->
                                <div class="gallery" id="gallery"></div>
                                <div id="gallery_des" class="card-text cTxt"></div>
                            </div>
                        </div>
                    </div>

                    <!--Row for description txt-->
                    <div class="row">
                        <!--Coke info Card-->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="c_card_title" class="card-title cTxt"></div>
                                    <div id="c_card_txt" class="card-text cTxt"></div>
                                    <div id="c_card_link" class="btn btn-primary fom "></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--Sprite Page-->
            <div class="main_contents Sprite-Page" id="Sprite-Page" style="display: none;">

                <!--Row for model and gallery -->
                <div class="row">
                    <!-- Model column-->
                    <div class="col-sm-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a id="c-nav" class="nav-link deactivated">Coke</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="s-nav" class="nav-link active" href="#">Sprite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="o-nav"class="nav-link deactivated" href="#">Oasis</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <!-- X3DOM Model -->
                                <div class="x3dModel">
                                    <x3d class="x3dMod" id="model-s">
                                        <scene>
                                            <Switch whichChoice="0" id="switcher">
                                                <inline id="inline_s" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\sprite_v2.x3d"></inline>
                                            </Switch>
                                            <Switch whichChoice="1" id="switcher">
                                                <inline id="inline_s" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\coke_can_v4.x3d"></inline>
                                            </Switch>
                                            <Switch whichChoice="2" id="switcher">
                                                <inline id="inline_s" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\oasisv2.x3d"></inline>
                                            </Switch>
                                        </scene>
                                    </x3d>
                                </div>

                                <!--Model Info Card -->
                                <div id="model-cap"class="card-text"></div>
                                <div id="model-look" class="card-text"></div>
                                <div class="btn-group looks">
                                    <a href="#" class="btn btn-primary btn-responsive model-switch">Old</a></p>
                                    <a class="btn btn-primary btn-responsive model-wire" id="b-wire">Wireframe</a></p>
                                </div>
                                <h5 class="Camera POVs">Camera Views</h5>
                                <div class="camera-btns">
                                    <p class="card-text">Select a camera view:</p>
                                    <div class="btn-group" id="btn function">
                                        <button type="button" class="btn btn-primary btn-responsive camera-front"
                                            id="b-front">Front</button>
                                        <a href="#" class="btn btn-primary btn-responsive camera-back" id="b-back">Back</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-left" id="b-left">Left</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-right"
                                            id="b-right">Right</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-off" id="b-off">Off</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery column-->
                    <div class="col-sm-3 gallery-col">
                        <div class="card text-center">
                            <div id="gallery_title" class="gallery-header"></div>
                            <div class="card-body gallery-bod">
                                <!--Generate Gallery-->
                                <div class="gallery" id="gallery"></div>
                                <div id="gallery_des" class="card-text oTxt"></div>
                            </div>
                        </div>
                    </div>

                    <!--Row for description txt-->
                    <div class="row">
                        <!--sprite info Card-->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="s_card_title" class="card-title sTxt"></div>
                                    <div id="s_card_txt" class="card-text sTxt"></div>
                                    <div id="s_card_link" class="btn btn-primary fom"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <!--Oasis Page-->
            <div class="main_contents Oasis-Page" id="Oasis-Page" style="display: none;">
                <!--Row for model and gallery -->
                <div class="row">
                    <!-- Model column-->
                    <div class="col-sm-9">
                        <div class="card text-left">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a id="c-nav-o" class="nav-link deactivated">Coke</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="s-nav-o" class="nav-link deactivated" href="#">Sprite</a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="o-nav-o"class="nav-link active" href="#">Oasis</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <!-- X3DOM Model -->
                                <div class="x3dModel">
                                    <x3d class="x3dMod" id="model-o">
                                    <scene>
                                            <Switch whichChoice="2" id="switcher">
                                                <inline id="inline_s" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\sprite_v2.x3d"></inline>
                                            </Switch>
                                            <Switch whichChoice="1" id="switcher">
                                                <inline id="inline_s" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\coke_can_v4.x3d"></inline>
                                            </Switch>
                                            <Switch whichChoice="0" id="switcher">
                                                <inline id="inline_s" nameSpaceName="model" mapDEFToID="true" url="assets\x3d\models\oasisv2.x3d"></inline>
                                            </Switch>
                                        </scene>
                                    </x3d>
                                </div>

                                <!--Model Info Card -->
                                <div id="o_model-cap"class="card-text"></div>
                                <div id="o_model-look" class="card-text"></div>
                                <div class="btn-group looks">
                                    <a href="#" class="btn btn-primary btn-responsive model-switch">Old</a></p>
                                    <a class="btn btn-primary btn-responsive model-wire" id="b-wire">Wireframe</a></p>
                                </div>
                                <h5 class="Camera POVs">Camera Views</h5>
                                <div class="camera-btns">
                                    <p class="card-text">Select a camera view:</p>
                                    <div class="btn-group" id="btn function">
                                        <button type="button" class="btn btn-primary btn-responsive camera-front"
                                            id="b-front">Front</button>
                                        <a href="#" class="btn btn-primary btn-responsive camera-back" id="b-back">Back</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-left" id="b-left">Left</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-right"
                                            id="b-right">Right</a>
                                        <a href="#" class="btn btn-primary btn-responsive camera-off" id="b-off">Off</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Gallery column-->
                    <div class="col-sm-3 gallery-col">
                        <div class="card text-center">
                            <div id="o_gallery_title" class="gallery-header"></div>
                            <div class="card-body gallery-bod">
                                <!--Generate Gallery-->
                                <div class="gallery" id="gallery"></div>
                                <div id="o_gallery_des" class="card-text oTxt"></div>
                            </div>
                        </div>
                    </div>

                    <!--Row for description txt-->
                    <div class="row">
                        <!--oasis info Card-->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="o_card_title" class="card-title oTxt"></div>
                                    <div id="o_card_txt" class="card-text oTxt"></div>
                                    <div id="o_card_link" class="btn btn-primary fom"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <!-- App Footer-->
        <nav id="footer" class="navbar navbar-expand-sm footer">
            <div class="container-fluid">
                <div class="navbar-text float-left copyright">
                    <p>&copy; 2024 Mobile Web 3D Applications</p>
                </div>
                <div class="navbar-text float-middle">
                    <button type="button" id="us-btn" class="us" data-bs-toggle="popover" data-bs-trigger="hover"
                        title="SU Button" data-bs-content="These web pages are submitted as part requirement for the 
                        degree of Computer Science with Ai at the University of Sussex.  
                        They are the product of my own labour except where indicated in the web page content.
                        These web pages or contents may be freely copied and distributed provided the source 
                        is acknowledged">US</button>
                </div>
                <div class="navbar-text float-right social">
                    <a href="#"><i class="fab fa-facebook-square fa-2x" style="font-size: 20px; color: blue;"></i></a>
                    <a href="#"><i class="fab fa-twitter-square fa-2x" style="font-size: 20px; color: lightblue;"></i></a>
                    <a href="#"><i class="fab fa-google-plus-square fa-2x" style="font-size: 20px; color: yellow;"></i></a>
                    <a href="https://github.com/Duraggman/3DApps/tree/3d_lc"><i class="fab fa-github-square fa-2x"
                            style="font-size: 20px; color: black;"></i></a>
                </div>
            </div>
        </nav>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="scripts/js/jquery-3.7.1.js"></script>
         <!-- Bootstrap 5 JavaScript -->
        <script src="scripts/js/bootstrap.bundle.min.js"></script>
        <script type='text/javascript' src='scripts/js/x3dom.js'> </script>

        <!--Custom JS-->
        <script src="scripts/js/getJsonData.js"></script>
        <script src="scripts/js/GalleryGen.js"></script>
        <script src="scripts/js/CCJ.js"></script>
        <script src="scripts/js/x3dBtnCtrl.js"></script>
        <script src="scripts/js/switchModel.js"></script>
    </body>

</html>