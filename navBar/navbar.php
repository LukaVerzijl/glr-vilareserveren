
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
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
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
    <a href="#" >
    <svg class="Rectangle_2">
        <rect id="Rectangle_2" rx="10" ry="10" x="0" y="0"  >
        </rect>
    </svg>
    <div class="dropdown" id="Sign-In">
    <?php if (isset($user_data) && ($user_data!==null)){
        echo "<span class='dropbtn'>".$user_data['name']."</span>";
        echo "<div class='dropdown-content'>";
        echo "<a href='logout.php'>Logout</a>";
        if ($user_data['lvl'] == '2')
        {
            echo "<a href='admin.php'>Admin panel</a>";
        }
        echo "</div>";
    } else if ($url == "https://villareserveren.lukaverzijl.nl/login")
    {
        echo "<span><a href='signup.php'>Sign-up</a></span>";
    }
    else if ($url == "https://villareserveren.lukaverzijl.nl/signup")
    {
        echo "<span><a href='login.php'>Sign-in</a></span>";
    }
    else
    {
        echo "<span><a href='login.php'>Sign-in</a></span>";
    }
    ?>
    </div>
    <div id="Contact">
        <span><a href="contact.php" >Contact</a></span>
    </div>
    <div id="Home">
        <span><a href="index.php" >Home</a></span>
    </div>
</div>
</body>
</html>