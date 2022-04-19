<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <title>clone</title>
    <link rel="stylesheet" href="clone.css">
    <script src="clone.js"></script>
</head>

<body>
    <header id="nav-bar" style="position: fixed;top: 0;left: 0;width: 100%;">
        <div > <a href="clone.php" class="red href-none" >SimpleSite</a></div>
        <nav class="navbar">
            <ul class="nav-list1">
                <li class=""><a href="javascript:void(0);" class="href-none navlinker-color nav-text">Try it for
                        free</a></li>
                <li class=""><a href="customerservices.php" class="href-none navlinker-color nav-text">Customer
                        Service</a></li>
                <li class=""><a href="features.php" class="href-none navlinker-color nav-text">Features</a></li>
                <li class=""><a href="themes.php" class="href-none navlinker-color nav-text">Themes</a></li>
            </ul>
            <div class="sidebuttons">
                <div class="button">
                    <input type="button" value="LOG IN" id="sidebutton1">
                </div>
                <div class="language">
                    <div class="globleimg"> <img src="img/globe.png" alt="globe icon" id="language1"></div>
                    <div class="selector"><select name="language" id="lan">
                            <option value="">English</option>
                            <option value="">Español</option>
                            <option value="">Français</option>
                            <option value="">Dansk</option>
                        </select></div>
                </div>
            </div>
            <div class="mobile-nav">
                <div class="mobile-nav-list" id="burger-list">
                    <ul class="nav-list2">
                        <li class=""><a href="javascript:void(0);" class="href-none mobile-nav-color">Try it for
                                free</a></li>
                        <li class=""><a href="customerservices.php" class="href-none mobile-nav-color ">Customer
                                Service</a></li>
                        <li class=""><a href="features.php" class="href-none mobile-nav-color">Features</a></li>
                        <li class=""><a href="themes.php" class="href-none mobile-nav-color">Themes</a></li>
                    </ul>
                </div>
                <div class="mobile-nav-icon">
                    <span class="burger-icon" onclick="navslider('burger-list')"><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                            height="512" x="0" y="0" viewBox="0 0 384 384" style="enable-background:new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g transform="matrix(1,0,0,1,0,45)">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                                    data-original="#000000" class=""></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                                    data-original="#000000" class=""></path>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                                    data-original="#000000" class=""></path>
                            </g>
                        </svg></span><span class="globeimg">
                </div>
                <div class="mobile-langauge">
                    <img class="side-globe" src="img/globe.png" alt="">
                </div>

            </div>
        </nav>
    </header>