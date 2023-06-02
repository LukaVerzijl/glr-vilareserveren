<style id="applicationStylesheet" type="text/css">
    .body {
        font-family: Roboto;
    }
    .information {
        display: flex;
        justify-content: space-evenly;
    }
    .copyright {
        margin-top: -2vh;
        background-color: #000000;
    }
    .aboutme {
        height: 127px;
        width: 60vh;
    }
</style>

<footer style="background-color: rgba(26,34,45,1);; font-family: Roboto;">
    <div class="container">
        <div class="information">
            <div class="links">
                <p style="font-size: 24px; color: #ffffff.;">
                    <a href="contact.php" style="color: #ffffff; text-decoration: none;" class="contact">Contact</a>
                </p>
                <p style="font-size: 24px; color: #ffffff;">
                    <a href="index.php" style="color: #ffffff; text-decoration: none;" class="home">Home</a>
                </p>
            </div>
            <div class="aboutme">
                <p style="font-size: 24px; color: #ffffff; text-align: center">About Us</p>
                <p style="font-size: 20px; color: #ffffff;">Lorem ipsum dolor sit amet. Qui incidunt assumenda aut consequuntur perferendis ad ipsam porro aut ipsam natus et beatae alias.</p>
            </div>
        </div>
        <hr style="border: none; border-top: 1px solid #ffffff; margin: 20px 0;">
        <div class="copyright">
            <p style="font-size: 18px; text-align: center; color: #ffffff;">
                &copy; <?php echo date('Y'); ?> Villa4U.  All rights reserved.
            </p>
        </div>
    </div>
</footer>
