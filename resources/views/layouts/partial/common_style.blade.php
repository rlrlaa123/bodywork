<style>
    body {
        font-size: 1.5vw;
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

    .custom-nav {
        display: grid;
        grid-template-columns: repeat(7, 14.5%);
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

    .custom-nav-container:hover {
        color: orange;
        border-bottom: 3px solid orange;
    }

    .nav-submenu {
        display: grid;
        grid-template-columns: repeat(7, 14.5%);
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
        grid-template-columns: 15% 85%;
        background-color: #4b4b4b;
        color: white;
        text-align: left;
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
</style>