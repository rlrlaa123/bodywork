<style>
    body {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
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

    .header-image {
        width: 80px;
        height: 80px;
        border-radius: 50px;
        margin-right: 10px;
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
        -ms-grid-columns: 1fr 0 1fr 0 1fr 0 1fr 0 1fr 0 1fr 0 1fr;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        width: 100%;
        position: relative;
        height: 50px;
    }

    .custom-nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        height: 90%;
    }

    .custom-nav-container:nth-child(2) {
        -ms-grid-column: 5;
    }

    .custom-nav-container:nth-child(3) {
        -ms-grid-column: 7;
    }

    .custom-nav-container:nth-child(4) {
        -ms-grid-column: 9;
    }

    .custom-nav-container:nth-child(5) {
        -ms-grid-column: 11;
    }

    .custom-nav-container-empty:nth-child(2) {
        -ms-grid-column: 13;
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
        justify-content: center;
        align-items: flex-start;
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

    .nav-submneu-container:nth-child(2) {
        -ms-grid-column: 3;
    }

    .nav-submneu-container:nth-child(3) {
        -ms-grid-column: 5;
    }

    .nav-submneu-container:nth-child(4) {
        -ms-grid-column: 7;
    }

    .nav-submneu-container:nth-child(5) {
        -ms-grid-column: 9;
    }

    .nav-submneu-container:nth-child(6) {
        -ms-grid-column: 11;
    }

    .nav-submneu-container:nth-child(7) {
        -ms-grid-column: 13;
    }

    .custom-nav-container:hover {
        color: orange;
        border-bottom: 3px solid orange;
    }

    .nav-submneu-container {
        display: flex;
        justify-content: center;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 1.25vw;
    }

    .nav-submneu-container:hover {
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

    footer div:nth-child(2) {
        -ms-grid-column: 3;
    }

    .footer-image {
        width: 100px;
        height: 100px;
        border-radius: 50px;
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
        color: grey;
    }

    @media (orientation: portrait) {
        body {
            font-family: 'Avenir', Helvetica, Arial, sans-serif;
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
            -ms-grid-columns: 25% 75%;
        }

        footer div:nth-child(2) {
            padding: 0 10px;
        }

        .footer-image {
            width: 50px;
            height: 50px;
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
            justify-content: space-between;
            align-items: center;
            height: 100%;
        }

        .home {
            background-color: #f0f0f0;
            font-size: 15px;
            display: flex;
            justify-content: center;
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
            justify-content: space-between;
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