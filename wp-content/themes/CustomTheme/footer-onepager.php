
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            $("#overonsimg").css({
                width: (100 + (scroll-$(window).height())/15) + "%",
            });
        });
    </script>
<script src="https://unpkg.com/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="/wp-content/themes/CustomTheme//bootstrap/js/bootstrap.min.js"></script>
</body>
</html>