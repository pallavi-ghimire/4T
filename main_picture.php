<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Meroshikshya</title>
</head>
<body>
    <style type="text/css">
        .dis-pic{
            width: 100%;
            height:auto;
            background: url(picture.png) no-repeat;
            background-size: 100%;
            /*border:5px solid #000000;*/
        }
        .dis-pic .over-lay{
            position:relative;
            /*display: flex;*/
            top:0px;
            width:100%;
            /*height:50%;*/
            padding-left: 25%;
            padding-right: 25%;
            padding-top: 8%;
            padding-bottom: 10%;
            /*background: #333333;*/
            /*opacity:0.5;*/
            color: white;
            text-align: center;
            font-size: 100%;
        }
        .dis-pic:hover .over-lay
        {
            /*opacity:0.7;*/
        }
        input[type = "submit"]{
            font-size: 20px;
            /*font-weight: bold;*/
        }
    </style>

<div class="dis-pic">
    <div class="over-lay">
        <span style="font-size: 75px"><span style = "font-weight: bold"> MERO</span> SHIKSHYA<br></span>
        <span style = "font-size: 45px">Education Matters !</span><br><br>
        <form action = "#">
        <input type="submit" class="btn btn-danger" id="register" value="REGISTER" style="padding: 5px 45px; border-radius: 2px">
        </form>
    </div>
</div>
</body>
</html>