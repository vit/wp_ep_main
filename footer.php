
<!-- footer start -->
            </main>

            <footer class="page-footer blue darken-3">
                <div class="container">

                </div>
                <div class="footer-copyright">
                    <div class="container">
                        © 2018 ЦНИИ &laquo;Электроприбор&raquo;
                        <!--a class="grey-text text-lighten-4 right" href="#!">More Links</a-->
                        <!--b class="grey-text text-lighten-4 right">&nbsp; : <?php echo $GLOBALS['my_theme'] ?></b-->
                        <span class="right">&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fab fa-vk rright"></i>&nbsp;
                        <i class="fab fa-facebook-f rright"></i>&nbsp;
                        <i class="fab fa-linkedin-in rright"></i>&nbsp;
                        <i class="fab fa-twitter rright"></i>&nbsp;
                        <i class="fab fa-google-plus-g rright"></i>&nbsp;
                        <i class="fab fa-telegram-plane rright"></i>&nbsp;
                        </span>

                        <a class="grey-text text-lighten-4 right" href="?set_theme=b">b</a>&nbsp;
                        <a class="grey-text text-lighten-4 right" href="?set_theme=a">a</a>&nbsp;
                    </div>
                </div>
            </footer>

        <!--/div-->


        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!--JavaScript at end of body for optimized loading-->
        <!--script type="text/javascript" src="js/materialize.min.js"></script-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
        <!--script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script-->
        <script>
            $(document).ready(function () {
                $(".sidenav").sidenav();
                $(".button-collapse").sidenav();
                $('.parallax').parallax();
                $(".dropdown-trigger").dropdown({hover: true});
                $('.collapsible').collapsible();
            });
        </script>
    </body>
</html>
<?php if( $GLOBALS['REPLACE_CANONICAL_HOST'] ) ob_end_flush(); ?>