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

    var video = document.getElementsByTagName("video")[0];
    var control = document.getElementById("video-control");

    if (video !== undefined) {
        video.addEventListener("click", function() {
            if(!video.paused){
                video.pause();
                control.src = '/img/play.png';
                control.style.transition = '0.1s all';
                control.style.opacity = 1;
            } else {
                video.play();
                control.style.transition = '1.5s all';
                control.style.opacity = 0;
            }
        });
    }

    var popups = {!! json_encode($popups) !!};
    popups.map(function(ele) {
        if(getCookie('popup-check' + ele.id) != 'Y') {
            document.getElementById('popup' + ele.id).style.display = 'block';
        }
    });

    function setCookie(name, value, expiredays) {
        var date = new Date();
        date.setDate(date.getDate() + expiredays);
        document.cookie = escape(name) + "=" + escape(value) + "; path=/; expires=" + date.toUTCString();
    }

    function getCookie(name) {
        var cookie = document.cookie;
        if (document.cookie != "") {
            var cookieArray = cookie.split("; ");
            for ( var index in cookieArray) {
                var cookieName = cookieArray[index].split("=");
                if (cookieName[0] == name) {
                    return cookieName[1];
                }
            }
        } return ;
    }

    function closePopUp(id, day) {
        var popupName = "popup-check" + id;
        if (document.getElementById(popupName).checked) {
            setCookie(popupName, "Y", day);
        }
        document.getElementById('popup' + id).style.display = 'none';
    }
</script>