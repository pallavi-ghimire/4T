<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="myFunction.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Meroshikshya</title>
</head>
<body>
<style>
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    body {

        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }
    .container {
        position: relative;
        margin: 0 auto;
        width: 94%;
        max-width: 1100px;
        font-family: helvetica, sans-serif;
    }
    .content {
        position: relative;
        padding-top: 80px;
    }
    .content p {
        margin-bottom: 10px;
    }

    /*For the middle header */
    #header {
        z-index: 2;
        position: sticky;
        top:0;
        padding-top: 1px;
        width: 100%;
        height:40px;
        line-height: 38px;
        background: #3d3d3d;

        color: white;
    }
    #nav ul li a{
        /*background-color: #222222;*/
        height: 38px;
        margin: 2px;
    }
    #header h1 {
        top: 0px;
        margin: 0px;
        text-transform: uppercase;
        font-size: 1.2em;
    }
    #nav {
        /*display: none;*/
        position: absolute;
        right: 0;
        top: -4px;
        height: 42px;
        padding: 2px;
    }
    #nav ul li {
        float: left;
        list-style: none;
    }
    #nav ul li a {
        display: block;
        color: white;
        text-decoration: none;
        padding: 0 10px;
    }
    .icon {
        display: none;
    }
    @media (max-width: 599px) {
        #nav-ul1 {
            display: none;
        }

        .icon {
            display: block;
            float: right;
            color: white;
        }
        #header .container {
            width: 100%;
        }
        #header h1 {
            padding-left: 3%;
        }
        #nav {
            width: 100%;
            /*top: 34px;*/
            display: block;
        }
        /*#nav:before {*/
            /*content: '\2630';*/
            /*display: block;*/
            /*position: absolute;*/
            /*right: 3%;*/
            /*top: -40px;*/
            /*line-height: 40px;*/
            /*font-size: 1.4em;*/
            /*cursor: pointer;*/
        /*}*/
        #nav ul {
            background: #404040;
            width: 100%;
            margin: 0px;
        }
        #nav ul li {
            float: none;
        }

        #nav ul li a {
            padding: 10px 3%;
            line-height: 20px;
            border-top: 1px solid #333;
        }
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }
        .sticky + .content {
            padding-top: 60px;
        }
    }
    #nav ul.social li{
        padding: 3px 0;
        }
        #header ul.social li a i {
                    margin-right: 5px;
                     font-size:15px;
                    -webkit-transition: .5s all ease;
                    -moz-transition: .5s all ease;
                    transition: .5s all ease;
                }
      #header ul.social li:hover a i {
                    font-size:20px;
                }
        #header ul.social li a,
       #header ul.quick-links li a{
                    color:#ffffff;
                }
        #header ul.social li a:hover{
                    color:#eeeeee;
                }
    .upper-header{
        background-color: #42717e;
    }
    .navigation-below {
        top:0;
        padding-top: 4px;
        width: 100%;
        /*height: 46px;*/
        /*line-height: 38px;*/
        background: #373737;

        color: white;
    }
    .navigation-below input[type=text]{
        padding-left: 20px;
        height: 30px;
        position: center;
        left: 0;
        outline: none;
        background-color: #4c4c4c;
        border: 1px solid #cdcdcd;
        border-color: rgba(0,0,0,.15);
        font-size: 12px;
        color: white;
    }
    @media (max-width: 600px) {
        section {
            -webkit-flex-direction: column;
            flex-direction: column;
        }
    }
    }

</style>

    <meta charset="UTF-8">
    <title>
        Meroshikshya
    </title>
</head>
<body>
    <div class = "upper-header" style="color: white; font-weight: lighter; font-size: 11px; padding: 4px 20%">
        <span style = "color: yellow"> NOTICES | </span>KATHMANDU UNIVERSITY published II year BDS practical routine 2018/2019
    </div>
</header>
<header id="header">
    <div class="container">
<!--        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">-->

                          <ul class="list-unstyled list-inline social" style="width: 150px; float: left">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
<!--        </div>-->
        <nav id="nav">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="float: right">
                <i class="fa fa-bars"></i>
            </a>
            <ul id = "nav-ul1" style="font-weight: bold; float: left">
                <li>
                    <a href="#" style="background-color: #ffffff; color: #333333">REGISTER</a>
                </li>
                <li>
                    <a href="#" style="background-color: #2E86C1; color: white">PROGRAM TYPES</a>
                </li>
                <li>
                    <a href="#" style="background-color: #6B8E23; color: white">RESULTS</a>
                </li>
                <li>
                    <a href="#" style="background-color: #3CB371">LOGIN</a>
                </li>
            </ul>

        </nav>
    </div>
</header>
    <style>
        .image-header{
            float: left;
            width: 20%;
            padding: 10px;
            z-index: 2;
            /*height: 200px;*/
        }
        .form-header{
            float: left;
            width: 60%;
            padding: 10px;
            /*height: 200px;*/
        }
        .header-advert1{
            float: left;
            width: 20%;
            padding: 10px;
            z-index: 2;
            /*height: 200px;*/
        }
        /*.navigation-below:after {*/
            /*content: "";*/
            /*display: table;*/
            /*clear: both;*/
        /*}*/
    </style>
    <div class="entire-header">
    <div class = "navigation-below" style="padding-left: 30px; padding-right: 10px; padding-top: 30px; height: 125px">
        <div class = "image-header">
            <img src="logo_edited.png" style="width: 200px; height: auto; padding-top: 10px; padding-left: 10px">
        </div>
        <div class="form-header">
        <form class="study-abroad">
            <span style="font-weight: bold; font-size: small"> Study Abroad &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            <input type = "text" name="country" placeholder="CHOOSE A COUNTRY">&nbsp;
            <input type = "text" name="level-a" placeholder="CHOOSE A LEVEL">&nbsp;
            <input type = "text" name="course" placeholder="CHOOSE A COURSE">&nbsp;&nbsp;&nbsp;
            <input type="submit" class="btn btn-danger" id="abroad-submit" value="SEARCH" style="height: 30px; font-size: small">
        </form><br>
        <form class="study-in-nepal">
            <span style="font-weight: bold; font-size: small"> Study in Nepal &nbsp;</span>&nbsp;&nbsp;
            <input type = "text" name="university" placeholder="CHOOSE A UNIVERSITY">&nbsp;
            <input type = "text" name="level-n" placeholder="CHOOSE A LEVEL">&nbsp;
            <input type = "text" name="faculty" placeholder="CHOOSE A FACULTY">&nbsp;&nbsp;&nbsp;
            <input type="submit" class="btn btn-danger" id="nepal-submit" value="SEARCH" style="height: 30px; font-size: small">
        </form>
    </div>

        <div class="header-advert1">
            <img src="adv_bangladesh.jpg" style="width: 80%; height: auto">
        </div>
    </div>
        <style>
            .header-in-header{
                width: 100%;
                /*height: 55px;*/
                background-color: #404040;
                padding-left: 30%;
                font-size: small;
                color: #cccccc;
            }
            .header-in-header a{
                color: #cccccc;

            }
        </style>

        <div class = "header-in-header" style="width: 100%; position: relative; top: -34px; width: 100%; overflow: hidden; z-index: -1; padding-top: 15px; padding-bottom: 10px">
<!--            <ul class="list-unstyled list-inline" style="width: 500px; float: left; padding-top: 20px">-->
<!--                <li class="list-inline-item"><a href="#">text1</a></li>-->
<!--                <li class="list-inline-item"><a href="#">text2</a></li>-->
<!--                <li class="list-inline-item"><a href="#">text3</a></li>-->
<!--                <li class="list-inline-item"><a href="#">text4</a></li>-->
<!--            </ul>-->
            <span style="font-weight: bold"> Popular Courses</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Engineering</a>&nbsp;&nbsp;<a href = "#">Medicine</a>&nbsp;&nbsp;<a href="#">Aviation</a>&nbsp;&nbsp;<a href = "#">Business</a>&nbsp;&nbsp;<a href = "#">Nursing</a>&nbsp;&nbsp;<a href = "#">Accountancy</a><br><br>
            <span style="font-weight: bold">Popular Country</span> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Australia</a>&nbsp;&nbsp;<a href = "#">New Zealand</a>&nbsp;&nbsp;<a href="#">India</a>&nbsp;&nbsp;<a href = "#">USA</a>&nbsp;&nbsp;<a href = "#">Japan</a>&nbsp;&nbsp;<a href = "#">China</a>
        </div>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("nav-ul1");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</body>
</html>

