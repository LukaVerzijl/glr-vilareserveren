<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style id="applicationStylesheet" type="text/css">

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }
        #page{
            width: 100%;
        }

        .Rectangle_1 {
            /*position: absolute;*/
            overflow: hidden;
            width: 100%;
            height: 120px;

            background-color: rgba(26,34,45,1);

            -webkit-box-shadow: 0px 0px 17px 7px rgba(0,0,0,0.34);
            -moz-box-shadow: 0px 0px 17px 7px rgba(0,0,0,0.34);
            box-shadow: 0px 0px 17px 7px rgba(0,0,0,0.34);
        }
        #logovilla4u {
            position: absolute;
            width: 186px;
            height: 110px;
            left: 50px;
            top: 8px;
        }

        .Rectangle_2 {
            position: absolute;
            width: 149px;
            height: 60px;
            left: 84%;
            top: 42px;
            border-radius: 20px;
            background-color: rgba(17,75,95,1);

        }
        #Sign-In {
            left: 85%;
            top: 48px;
            position: absolute;
            width: 118px;
            white-space: nowrap;
            text-align: left;
            font-family: Arial;
            font-style: normal;
            font-weight: normal;
            font-size: 37px;
        }
        #Contact {
            left: 30%;
            top: 48px;
            position: absolute;
            white-space: nowrap;
            text-align: left;
            font-family: Arial;
            font-style: normal;
            font-weight: normal;
            font-size: 30px;
        }
        #Home {
            left: 20%;
            top: 48px;
            position: absolute;
            white-space: nowrap;
            text-align: left;
            font-family: Arial;
            font-style: normal;
            font-weight: normal;
            font-size: 30px;
        }
        body a {
            text-decoration: none;
            color: rgba(255,255,255,1);
        }
    </style>

</head>
<body>
<div id="page">
    <svg class="Rectangle_1">
        <rect id="Rectangle_1" rx="0" ry="0" x="0" y="0">
        </rect>
    </svg>
    <img id="logovilla4u" src="../img/logovilla4u-trans.png" srcset="../img/logovilla4u-trans.png 1x, ../img/logovilla4u-trans.png 2x">
    <a href="#" >
    <svg class="Rectangle_2">
        <rect id="Rectangle_2" rx="10" ry="10" x="0" y="0"  >
        </rect>
    </svg>
    <div id="Sign-In">
        <span>Sign-In</a></span>
    </div>
    <div id="Contact">
        <span><a href="#" >Contact</a></span>
    </div>
    <div id="Home">
        <span><a href="#" >Home</a></span>
    </div>
</div>
</body>
</html>