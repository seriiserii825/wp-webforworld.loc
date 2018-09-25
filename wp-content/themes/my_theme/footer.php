  <footer class="t-center">
            <div class="wrap-footer">
                <div class="zerogrid">
                    <div class="row">
                        <span class="phone">PHONE: +1 800 559 6580</span>
                        <ul class="bottom-social">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul class="quick-link">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="zerogrid">
                    <div class="row">
                        <div class="copy-right">
                            <p>Copyright @ zTopModel - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- <script src="js/lightbox-plus-jquery.min.js"></script> -->
        <script type="text/javascript">
        $(function() {
            // if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
            //     $('li').has('ul').mouseover(function() {
            //         $(this).children('ul').css('visibility', 'visible');
            //     }).mouseout(function() {
            //         $(this).children('ul').css('visibility', 'hidden');
            //     })
            // }

            /* Mobile */
            $("#menu-trigger").on("click", function() {
                $("#menu").slideToggle();
            });

            // iPad
            var isiPad = navigator.userAgent.match(/iPad/i) != null;
            if (isiPad) $('#menu ul').addClass('no-transition');
        });
        </script>
    </div>
    <?php wp_footer(); ?>
</body>

<!-- </html -->