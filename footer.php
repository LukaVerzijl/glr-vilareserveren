<link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
/>
<!-- Google Fonts -->
<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
/>
<style id="applicationStylesheet" type="text/css">
    .container {
        font-family: Roboto;
    }
    .information {
        display: flex;
        justify-content: space-evenly;
    }
    .aboutme {
        height: 127px;
        width: 60vh;
      overflow: hidden;
    }
</style>

<footer style="background-color: rgba(26,34,45,1); font-family: Roboto; margin-top: 120px; ">
    <br/>
    <br/>
    <div class="container">
        <div class="information">
            <div class="links">
                <p style="font-size: 24px; color: #ffffff;">
                    <a href="index.php" style="color: #ffffff; text-decoration: none;" class="home">Home</a>
                </p>
                <br/>
                <p style="font-size: 24px; color: #ffffff.;">
                    <a href="contact.php" style="color: #ffffff; text-decoration: none;" class="contact">Contact</a>
                </p>
            </div>
            <div class="aboutme">
                <p style="font-size: 24px; color: #ffffff; text-align: center">About Us</p>
                <p style="font-size: 20px; color: #ffffff;">Betreed de betovering van luxe. Ontdek onze prachtige villa's voor een luxe levensstijl.</p>
            </div>
        </div>
        <br/>
        <div class="copyright">
            <p style="font-size: 18px; text-align: center; color: #ffffff;">
                &copy; <?php echo date('Y'); ?> Villa4U.  All rights reserved.
            </p>
        </div>
    </div>
</footer>
