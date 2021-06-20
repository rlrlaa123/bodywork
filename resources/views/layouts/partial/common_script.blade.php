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

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            var dropdownContent = $(this).next();
            dropdownContent.stop(true, false, true).slideToggle(400);
        });
    }

    var kakaoBtn = document.getElementById("phone-button");
    var phoneBtn = document.getElementById("kakao-channel-button");

    // if (kakaoBtn !== undefined) {
    //     kakaoBtn.addEventListener("click", function() {

    //     });
    // }

    // if (phoneBtn !== undefined) {
    //     phoneBtn.addEventListener("click", function() {
    //     });
    // }
</script>