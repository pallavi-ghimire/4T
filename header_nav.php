<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
        padding-top: 4px;
        width: 100%;
        height: 46px;
        line-height: 38px;
        background: #4c4c4c;

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
    @media (max-width: 599px) {
        #header .container {
            width: 100%;
        }
        #header h1 {
            padding-left: 3%;
        }
        #nav {
            width: 100%;
            top: 34px;
        }
        #nav:before {
            content: '\2630';
            display: block;
            position: absolute;
            right: 3%;
            top: -40px;
            line-height: 40px;
            font-size: 1.4em;
            cursor: pointer;
        }
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

                          <ul class="list-unstyled list-inline social">
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                          </ul>
<!--        </div>-->
        <nav id="nav">
            <ul style="font-weight: bold">
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
<div class="content">
    <div class="container">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing
            elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis
            nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat
            cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.
        </p>
        <p>
            Nulla efficitur pharetra leo. In convallis lobortis
            nisl, ut pretium purus aliquam eget. Maecenas
            vestibulum venenatis eros, a volutpat mi malesuada eu.
            Cum sociis natoque penatibus et magnis dis parturient
            montes, nascetur ridiculus mus. Nam mollis vitae eros
            quis congue. Ut eget massa semper, cursus ligula et,
            euismod lacus. Sed neque metus, tristique eget
            scelerisque vitae, luctus at metus. Proin vel
            ullamcorper arcu. Praesent dapibus eleifend turpis et
            euismod. Sed tincidunt lobortis erat, nec elementum
            libero molestie sed. Phasellus eget tristique lorem.
        </p>
        <p>
            Maecenas dictum molestie nisi, eu ornare mauris posuere
            a. Proin tempus est ligula, ut varius risus faucibus
            nec. Morbi ultrices leo et vulputate facilisis. Nunc
            congue, leo a facilisis dictum, metus neque tempus
            arcu, ac aliquet nulla mi a felis. Maecenas quis
            euismod velit. Curabitur dapibus ipsum vitae
            ullamcorper auctor. Nullam nec ultricies urna.
            Curabitur lacinia nec ipsum a condimentum. Quisque
            lacinia faucibus augue, sed efficitur enim mollis eget.
            In et metus non ante interdum varius nec in sem.
        </p>
    </div>
</div>

</body>
</html>
</body>
</html>
