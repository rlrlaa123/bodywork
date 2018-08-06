<script>
    $('.custom-nav').hover(function() {
        $('.nav-submenu').stop().fadeToggle(400);
    });

    $('.custom-nav-container').hover(function() {
        $(this).css('color', 'orange');
        $(this).css('border-bottom', '3px solid orange');
    }, function() {
        $(this).css('color', 'black');
        $(this).css('border-bottom', 'none');
    });

    $('.nav-submenu-box').hover(function(ele) {
        var element = ele.currentTarget.className;
        var className = element.substr(element.length - 1);
        var jclassName = $('.custom-nav-container')[parseInt(className)];

        jclassName.style.color = 'orange';
        jclassName.style.borderBottom = '3px solid orange';
    }, function(ele) {
        var element = ele.currentTarget.className;
        var className = element.substr(element.length - 1);
        var jclassName = $('.custom-nav-container')[parseInt(className)];

        jclassName.style.color = 'black';
        jclassName.style.borderBottom = 'none';
    });
</script>