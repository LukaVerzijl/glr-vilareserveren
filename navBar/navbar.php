
<div class="Navbar">
    <div class="navCompContainer">
        <div class="container">
            <div class="navComp">
                <p><a href="#">Contact</a></p>
            </div>
            <div class="navComp">
                <img class="icons" src="../img/contactIcon.png">
            </div>
        </div>

        <div class="container">
            <div class="navComp">
                <p><a href="#">R/L</a></p>
            </div>
            <div class="navComp">
                <img class="icons" src="../img/userIcon.png">
            </div>
        </div>

        <div class="logo">
            <img class="logoIcon" src="../img/logovilla4u.png">
        </div>
    </div>
</div>
<style>
    /*Navbar container */

.navbar{
    height: 100px;
    width: 100%;
    background-color: #1a222d;
    position: absolute;
    -webkit-box-shadow: 1px 8px 8px 2px rgba(0,0,0,0.65);
    box-shadow: 1px 8px 8px 2px rgba(0,0,0,0.65);
}
.navCompContainer{
    margin-right: 30%;
    height: auto;
    width: auto;
}
/*Navbar component*/
.navComp{
    font-size: 20px;
    float: right;
    margin-right: 25px;
    margin-top: 7%;
}
.container{
    float: right;
    transition: .2s;
    height: 100px;
    width: 200px;
}
.container:hover{
    background-color: #2e4350;
    -webkit-box-shadow: 0px 0px 17px 9px rgba(255,255,255,0.51);
    box-shadow: 0px 0px 17px 9px rgba(255,255,255,0.51);
}
.icons{
    height: 60px;
    width: auto;
    filter: invert(100%);
}
/*Navbar text*/
.navComp a{
    text-decoration: none;
    color: white;
}
.logo{

    margin-left: 35%;
}
.logoIcon{
    -webkit-box-shadow: 0px 0px 17px 9px rgba(255,255,255,0.51);
    box-shadow: 0px 0px 17px 9px rgba(255,255,255,0.51);
    height: 100px;
    width: 100px;
}
body{
    margin: 0;
    padding: 0;
}
</style>
