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
        background-color: #c6c6c6;
    }
</style>

<footer style="background-color: #e0e0e0; font-family: Roboto;">
    <div class="container">
        <div class="information">
            <div class="links">
                <p style="font-size: 24px; color: #333333;">
                    <a href="contact.php" style="color: #333333; text-decoration: none;" class="contact">Contact</a>
                </p>
                <p style="font-size: 24px; color: #333333;">
                    <a href="home.php" style="color: #333333; text-decoration: none;" class="home">Home</a>
                </p>
            </div>
            <div class="aboutme">
                <p style="font-size: 24px; color: #333333;">About Me</p>
                <p style="font-size: 20px; color: #333333;">Test</p>
            </div>
        </div>
        <hr style="border: none; border-top: 1px solid #333333; margin: 20px 0;">
        <div class="copyright">
            <p style="font-size: 18px; text-align: center; color: #333333;">
                &copy; <?php echo date('Y'); ?> Villa4U.  All rights reserved.
            </p>
        </div>
    </div>
</footer>
