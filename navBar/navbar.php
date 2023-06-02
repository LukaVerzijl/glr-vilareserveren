
<link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
/>
<!-- Google Fonts -->
<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
/>
<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";

$url.= $_SERVER['HTTP_HOST'];


$url.= $_SERVER['REQUEST_URI'];
?>
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
            font-family: Roboto;
        }
        h1 {
            font-weight: 500;
        }
        h2{

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
            background-color: rgba(17, 75, 95, 1);

        }
        #Contact {
            left: 30%;
            top: 44px;
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
            top: 44px;
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
        .dropdown2 {
            position: absolute;
            display: inline-block;
            top: 44px;
            font-family: Roboto;
            font-size: 30px;
            left: 75%;
            color:white

        }

        .dropdown2-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown2-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 20px;
        }

        .dropdown2-content a:hover {background-color: #f1f1f1}

        .dropdown2:hover .dropdown2-content {
            display: block;
        }

        #bottone5 {
            position: absolute;
            display: block;
            align-items: center;
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            color: rgba(0, 0, 0, 0.85);
            text-decoration: none;
            cursor: pointer;
            /*display: inline-flex;*/
            font-family: Roboto;
            font-size: 20px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            min-height: 3rem;
            padding: calc(.875rem - 1px) calc(1.5rem - 1px);
                transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: auto;
            top: 40px;
            left: 75%;
            z-index: 1;
        }

        #bottone5:hover,
        #bottone5:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }

        #bottone5:hover {
            transform: translateY(-1px);
        }

        #bottone5:active {
            background-color: #F0F0F1;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }
        #button2 {
            position: absolute;
            display: block;
            align-items: center;
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            color: rgba(0, 0, 0, 0.85);
            text-decoration: none;
            cursor: pointer;
            /*display: inline-flex;*/
            font-family: Roboto;
            font-size: 20px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            min-height: 3rem;
            padding: calc(.875rem - 1px) calc(1.5rem - 1px);
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: auto;
            top: 40px;
            left: 75%;
            z-index: 1;
        }

        #button2:hover,
        #button2:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }

        #button2:hover {
            transform: translateY(-1px);
        }

        #button2:active {
            background-color: #F0F0F1;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }
    </style>

</head>
<body>
<div id="page">
    <svg class="Rectangle_1">
        <rect id="Rectangle_1" rx="0" ry="0" x="0" y="0">
        </rect>
    </svg>
    <img id="logovilla4u" src="../img/logovilla4u-trans.png" srcset="img/logovilla4u-trans.png 1x, img/logovilla4u-trans.png 2x">


    <?php if (isset($user_data) && ($user_data!==null)) {
        echo "<button id='bottone5' onclick='location.href = `logout.php`'>Logout</button>";
        if ($user_data['lvl'] == '2') {
            echo "<div id='Contact' style='left: 40%'><a href='admin.php'>Admin</a></div>";
        }
    }else
    {
        echo "<button id='bottone5' class='shadow-2-strong' onclick='location.href = `login.php`'>Sign-in</button>";
    }
    ?>

    <div id="Contact">
        <span><a href="contact.php" >Contact</a></span>
    </div>
    <div id="Home">
        <span><a href="index.php" >Home</a></span>
    </div>
</div>
</body>
</html>