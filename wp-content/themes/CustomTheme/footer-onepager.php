
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/split.js/1.6.0/split.min.js"></script>
    <script>
        Split(['#split-0', '#split-1'], {
            minSize: 0,
            snapOffset: 0,
        });
        Split(['#split-2', '#split-3'], {
            minSize: 0,
            snapOffset: 0,
        });
        Split(['#split-4', '#split-5'], {
            minSize: 0,
            snapOffset: 0,
        });
        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            $("#overonsimg").css({
                width: (100 + (scroll-$(window).height())/15) + "%",
            });
        });
    </script>
<script src="https://unpkg.com/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="/wp-content/themes/CustomTheme//bootstrap/js/bootstrap.min.js"></script>
<script>
    var items = document.querySelectorAll('.carousel .carousel-item')
</script>
</body>
</html>