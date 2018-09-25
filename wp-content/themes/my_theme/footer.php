  <footer class="t-center">
            <div class="wrap-footer">
                <div class="zerogrid">
                    <div class="row">
                        <span class="phone">Телефон: +373 60 562 168 </span>
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