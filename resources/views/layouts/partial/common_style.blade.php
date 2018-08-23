<style>
    @font-face {
        font-family: 'Nanum Barun Gothic';
        font-style: normal;
        font-weight: 200;
        src: local('Nanum Barun Gothic UltraLight'), local('Nanum Barun Gothic-UltraLight'), local('NanumBarunGothic UltraLight');
        src: url(/font/NanumBarunGothicUltraLight.eot);
        src: url(/font/NanumBarunGothicUltraLight.eot?#iefix) format('embedded-opentype'),
        url(/font/NanumBarunGothicUltraLight.woff) format('woff'),
        url(/font/NanumBarunGothicUltraLight.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Nanum Barun Gothic';
        font-style: normal;
        font-weight: 300;
        src: local('Nanum Barun Gothic Light'), local('Nanum Barun Gothic-Light'), local('NanumBarunGothic Light');
        src: url(/font/NanumBarunGothicLight.eot);
        src: url(/font/NanumBarunGothicLight.eot?#iefix) format('embedded-opentype'),
        url(/font/NanumBarunGothicLight.woff) format('woff'),
        url(/font/NanumBarunGothicLight.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Nanum Barun Gothic';
        font-style: normal;
        font-weight: 400;
        src: local('Nanum Barun Gothic Regular'), local('Nanum Barun Gothic-Regular'), local('NanumBarunGothic Regular');
        src: url(/font/NanumBarunGothic.eot);
        src: url(/font/NanumBarunGothic.eot?#iefix) format('embedded-opentype'),
        url(/font/NanumBarunGothic.woff) format('woff'),
        url(/font/NanumBarunGothic.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Nanum Barun Gothic';
        font-style: normal;
        font-weight: 700;
        src: local('Nanum Barun Gothic Bold'), local('Nanum Barun Gothic-Bold'), local('NanumBarunGothic Bold');
        src: url(/font/NanumBarunGothicBold.eot);
        src: url(/font/NanumBarunGothicBold.eot?#iefix) format('embedded-opentype'),
        url(/font/NanumBarunGothicBold.woff) format('woff'),
        url(/font/NanumBarunGothicBold.ttf) format('truetype');
    }

    @media screen and (min-width: 1024px) and (max-width: 1440px) {
        .cover-image {
            width: 100%;
            height: 600px;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 1024px) {
        .cover-image {
            width: 100%;
            height: 400px;
        }
    }

    @media screen and (min-width: 1441px) {
        .cover-image {
            width: 100%;
            height: 800px;
        }
    }

    @media screen and (max-width: 768px) and (orientation: landscape) {
        .cover-image {
            width: 100%;
            height: 400px;
        }
    }

        body {
        font-family: 'NanumBarunGothic', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 1.5vw;
    }
    header {
        font-weight: bold;
        text-align: center;
        font-size: 25px;
        padding: 20px;
    }

    @media screen and (max-width: 768px) and (orientation: landscape) {
        .header-image {
            width: 120px;
            height: 120px;
            border-radius: 100%;
            margin-right: 10px;
        }

        .footer-image {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }
    }

    @media screen and (min-width: 1024px) and (max-width: 1440px) {
        .header-image {
            width: 120px;
            height: 120px;
            border-radius: 100%;
            margin-right: 10px;
        }

        .footer-image {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }
    }
.
    @media screen and (min-width: 768px) and (max-width: 1024px) {
        .header-image {
            width: 80px;
            height: 80px;
            border-radius: 100%;
            margin-right: 10px;
        }

        .footer-image {
            width: 60px;
            height: 60px;
            border-radius: 100%;
        }
    }

    @media screen and (min-width: 1441px) and (orientation: landscape) {
        .header-image {
            width: 150px;
            height: 150px;
            border-radius: 100%;
            margin-right: 10px;
        }

        .footer-image {
            width: 130px;
            height: 130px;
            border-radius: 100%;
        }
    }

    @media (orientation: portrait) {
        .header-image {
            width: 100px;
            height: 100px;
            border-radius: 100%;
        }
    }

    li {
        list-style: none;
    }

    a {
        color: inherit;
    }

    a:hover {
        color: inherit;
        text-decoration: none;
    }

    hr {
        margin: 0 50px;
    }

    .custom-nav {
        display: grid;
        display: -ms-grid;
        grid-template-columns: repeat(7, 14.5%);
        -ms-grid-columns: 14.5% 14.5% 14.5% 14.5% 14.5% 14.5% 14.5%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        font-weight: bold;
        width: 100%;
        position: relative;
        height: 50px;
        font-size: 1.5vw;
    }

    .custom-nav-container {
        display: flex;
        display: -ms-flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        cursor: pointer;
        height: 90%;
    }

    .custom-nav-container:nth-child(2) {
        -ms-grid-column: 2;
    }

    .custom-nav-container:nth-child(3) {
        -ms-grid-column: 3;
    }

    .custom-nav-container:nth-child(4) {
        -ms-grid-column: 4;
    }

    .custom-nav-container:nth-child(5) {
        -ms-grid-column: 5;
    }

    .custom-nav-container:nth-child(6) {
        -ms-grid-column: 6;
    }

    .custom-nav-container:nth-child(7) {
        -ms-grid-column: 7;
    }

    .custom-nav-container:nth-child(8) {
        -ms-grid-column: 8;
    }

    .custom-nav-container:hover {
        color: orange;
        border-bottom: 3px solid orange;
    }

    .nav-submenu {
        display: grid;
        display: -ms-grid;
        grid-template-columns: repeat(7, 14.5%);
        -ms-grid-columns: 1fr 0 1fr 0 1fr 0 1fr 0 1fr 0 1fr 0 1fr;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: start;
        width: 100%;
        color: grey;
        font-weight: bold;
        position: absolute;
        top: 50px;
        background-color: white;
        z-index: 1;
        padding: 15px 0;
        opacity: 0.9;
    }

    .nav-submenu-box:nth-child(2) {
        -ms-grid-column: 3;
    }

    .nav-submenu-box:nth-child(3) {
        -ms-grid-column: 5;
    }

    .nav-submenu-box:nth-child(4) {
        -ms-grid-column: 7;
    }

    .nav-submenu-box:nth-child(5) {
        -ms-grid-column: 9;
    }

    .nav-submenu-box:nth-child(6) {
        -ms-grid-column: 11;
    }

    .nav-submenu-box:nth-child(7) {
        -ms-grid-column: 13;
    }

    .custom-nav-container:hover {
        color: orange;
        border-bottom: 3px solid orange;
    }

    .nav-submenu-container {
        display: flex;
        display: -ms-flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 1.25vw;
    }

    .nav-submenu-container:hover {
        color: orange;
    }

    footer {
        margin: 0;
        padding: 20px 50px;
        display: grid;
        display: -ms-grid;
        grid-template-columns: 15% 85%;
        -ms-grid-columns: 15% 85%;
        background-color: #4b4b4b;
        color: white;
        text-align: left;
    }

    footer div:nth-child(1) {
        -ms-grid-column: 1;
    }

    footer div:nth-child(2) {
        -ms-grid-column: 2;
    }

    .hr {
        margin: 50px auto;
        height: 2px;
        width: 20%;
        border: 2px solid orange;
    }

    .custom-navbar {
        display: none;
    }

    .custom-navbar-wrapper {
        display: none;
    }

    .sidenav {
        display: none;
    }

    .help-block {
        text-align: left;
        color: red;
    }

    @media (orientation: portrait) {
        body {
            font-family: 'NanumBarunGothic', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-size: 2.5vw;
        }

        header {
            border-bottom: 1px solid #e3e3e3;
        }

        .header-image {
            width: 50px;
            height: 50px;
            border-radius: 50px;
            margin-right: 10px;
        }

        footer {
            padding: 20px;
            /*-ms-grid-columns: 25% 75%;*/
        }

        footer div:nth-child(2) {
            padding: 0 10px;
        }

        .footer-image {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        .sidenav {
            display: block;
        }

        .custom-nav {
            display: none;
        }

        .navbar-logo {
            width: 60px;
            height: 60px;
            border-radius: 50px;
            margin-bottom: 20px;
        }

        .navbar-menu {
            height: 50px;
            color: black;
            padding: 0 10px;
            margin: 10px 0;
            border-bottom: 1px solid #e3e3e3;
        }

        .navbar-menu-container {
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
        }

        .home {
            background-color: #f0f0f0;
            font-size: 15px;
            display: flex;
            display: -ms-flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        .closebtn {
            position: absolute;
            top: 0;
            right: 5px;
            font-size: 36px;
            color: grey;
            /*margin-left: 50px;*/
        }

        .custom-navbar {
            height: 15px;
            display: flex;
            display: -ms-flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 30px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a, .dropdown-btn {
            padding: 0 10px;
            margin: 10px 0;
            text-decoration: none;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width:100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            font-size: 13px;
            height: 50px;
            /*border-bottom: 1px solid #e3e3e3;*/
        }

        .down-arrow {
            display: flex;
            display: -ms-flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-bottom: 1px solid #e3e3e3;
        }

        /* Main content */
        .main {
            margin-left: 200px; /* Same as the width of the sidenav */
            /*font-size: 20px; !* Increased text to enable scrolling *!*/
            /*padding: 0px 10px;*/
        }

        /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
        .dropdown-container {
            display: none;
            background-color: white;
            padding-left: 8px;
            transition: visibility 0s, opacity 0.5s linear;
        }

        .dropdown-container a {
            height: 30px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
        }
    }
</style>