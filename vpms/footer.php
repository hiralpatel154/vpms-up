</body>

</html>
<script>
    $(document).ready(function() {
        $(".icon-link").click(function() {
            $(this).next('.sub-menu').toggleClass('showMenu');
            $(this).find('.arrow').toggleClass('rotate');
        });
        $('.menu-bar').on('click', function() {
            $(".sidebar").toggleClass('close');
        });

        // Get the current page's URL path
        var path = (window.location.pathname.split('/').pop() || 'index.php');
        // Set active classes based on the current path
        var target = $('.sub-menu li a[href="' + path + '"]').parent().addClass('active');
        $('.sub-menu li a[href="' + path + '"]').addClass('active');
        target.parent().addClass('showMenu');
        target.parent().siblings().addClass('bg-color')
        if (target.hasClass('sub-item')) {
            target.parent().addClass('showMenu').siblings().addClass('bg-color');
        }
        $('li a[href="' + path + '"]').parent().addClass('active')

        $('.nav-links li').click(function(){
            $(this).find('.link-item')[0].click(); // Use [0] to access the DOM element
        });

    });
</script>