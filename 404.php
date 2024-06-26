 <style id="applicationStylesheet" type="text/css">

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border: none;
        }

        #Rectangle_1 {
            fill: rgba(55,74,103,1);
        }
        .Rectangle_1 {
            position: absolute;
            overflow: visible;
            width: 100vh;
            height: 100vh;
            left: 0px;
            top: 0px;
        }
        #Rectangle_2 {
            fill: rgba(53,86,145,1);
        }
        .Rectangle_2 {
            position: fixed;
            left: 50%;
            top: 80%;
            transform: translate(-50%, -50%);
            overflow: visible;
            width: 335px;
            height: 121px;

        }
        .Go_back {
            position: fixed;
            left: 50%;
            top: 80%;
            transform: translate(-50%, -50%);
            overflow: visible;
            width: 281px;
            white-space: nowrap;
            text-align: left;
            font-family: Arial;
            font-style: normal;
            font-weight: bold;
            font-size: 71px;
            color: #FFFFFF;
            text-decoration: none;

        }
        .Go_back a {
            color: #FFFFFF;
            text-decoration: none;
        }
        #foto {
            position: fixed;
            left: 50%;
            top: 35%;
            transform: translate(-50%, -50%);
            overflow: visible;
        }
    </style>
</head>
<body>
<div>
    <svg class="Rectangle_1">
        <rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1920" height="1080">
        </rect>
    </svg>
    <a href="index.php">
    <svg class="Rectangle_2">
        <rect id="Rectangle_2" rx="30" ry="30" x="0" y="0" width="335" height="121">
        </rect>
    </svg>
    <div class="Go_back">
        <span>Go back</span>
    </div>
    </a>
    <img id="foto" src="./img/404.png">

</div>
</body>
</html>