<style>
    #wrapper {
        width: 100%;
        text-align: left;
        min-height: 650px;
        margin: 0 auto;
    }

    #container {
        padding: 20px;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }

    /*input {*/
        /*width: 80%;*/
    /*}*/

    button {
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        font-size: 13px;
    }

    button:active {
        background-color: #e3e3e3;
    }

    .create-btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80px;
        height: 20px;
        border-radius: 20px;
        padding: 0;
        cursor: pointer;
        font-size: 13px;
    }

    .active {
        background-color: #e1e1e1 !important;
        text-decoration: underline;
    }

    .navbar {
        display: grid;
        display:-ms-grid;
        grid-column-gap: 0;
        -ms-grid-columns: 1.5fr 1vw 5fr 1vw 1.5fr;
        text-align: center;
        grid-template-columns: 15% 70% 15%;
        background-color: #4b4b4b;

    }

    .navbar div {
        color: white;
        padding: 14px 16px;
        display: flex;
        align-items: center;
        font-size: 1.25vw;
    }

    .navbar div a {
        color: white;
        text-decoration: none;
        font-weight: lighter;
    }

    .navbar div a:hover {
        color: white;
    }

    .navsubbar {
        display: grid;
        display: -ms-grid;
        grid-column-gap: 0;
        -ms-grid-columns: 25% 25% 25% 25%;
        text-align: center;
        grid-template-columns: repeat(4, 25%);
        font-size: 1vw;
        border: 1px solid #e1e1e1;
    }

    .grid-item:nth-child(2) {
        -ms-grid-column: 3;
    }

    .grid-item:nth-child(3) {
        -ms-grid-column: 5;
    }

    .grid-item:nth-child(7) {
        -ms-grid-column: 9;
    }

    .grid-item:nth-child(9) {
        -ms-grid-column: 11;
    }

    .grid-item:nth-child(11) {
        -ms-grid-column: 13;
    }
    .grid-item:nth-child(13) {
        -ms-grid-column: 15;
    }

    .navsubbar div {
        background-color: white;
        padding: 14px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .navsubbar div:hover {
        background-color: #e1e1e1;
        text-decoration: underline;
        cursor: pointer;
    }

    .navsubbar div a {
        color: black;
        text-decoration: none;
    }
    /* NavLayout */

    .navlayout {
        display: grid;
        display:-ms-grid;
        grid-column-gap: 0;
        -ms-grid-columns: 1fr 1vw 4fr;
        text-align: center;
        grid-template-columns: 20% 80%;
        min-height: 550px;
    }

    .sidebar {
        border-right: 1px solid #ccc;
    }

    .sidebar div {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sidemenu {
        display: flex;
        justify-content: center;
        font-weight: bold;
        height: 66px;
    }

    .sideuser {
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        background-color: #FFFFF0;
        height: 66px;
    }

    .sidesubmenu {
        align-items: normal;
    }

    .sidesubmenu ul {
        list-style: none;
        margin: 0;
        width: 100%;
        padding: 0;
    }

    .sidesubmenu ul li:before {
        content: "\2023";
    }

    .sidesubmenu ul li {
        padding: 20px;
        cursor: pointer;
        color: black;
    }

    .sidesubmenu ul li:hover {
        background-color: #f5f5f5;
        text-decoration: underline;
    }

    .sidesubmenu ul li:last-child {
        border-bottom: 1px solid #ccc;
    }

    .active {
        background-color: #e1e1e1 !important;
        text-decoration: underline;
    }

    .liactive {
        background-color: #f5f5f5 !important;
        text-decoration: underline;
    }

    .hide {
        display: none;
    }

    .sidesubmenu li:hover {
        text-decoration: underline;
    }

    .infoput {
        width: 100%;
    }

    .infoput table, td {
        border: 1px solid #cccc;
    }

    .infoput table {
        border-collapse: collapse;
    }

    .container {
        text-align: center;
    }

    .infoputheader {
        font-weight: normal;
        font-size: 1.4em;
        text-align: left;
    }

    .datainput {
        font-size: 1vw;
        padding: 1vw 1vw 1vw 1vw;
        background-color: #FFFFF0;
    }

    .savebutton {
        text-align: center;
    }

    .selector a {
        text-underline: none;
        color: black;
    }


    .pagination {
        width: 80%;
        margin: 50px auto;
        justify-content: center;
    }

    .page-link {
        color: grey;
    }

    .page-link:hover {
        color: unset;
    }

    .delete {
        color: red !important;
        cursor: pointer;
    }

    h3 {
        margin-bottom: 0;
        text-align: left;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        border: 1px solid #ccc;
        padding: 10px;
    }

    td {
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 10px;
    }

    tr td:nth-child(2) input[type="text"] {
        width: 80%;
        background-color: #f7f7f7;
    }

    tr td:nth-child(2) input[type="email"] {
        width: 80%;
        background-color: #f7f7f7;
    }

    tr td:nth-child(2) input[type="password"] {
        width: 80%;
        background-color: #f7f7f7;
    }

    textarea {
        width: 80%;
    }

    .td-input {
        text-align: left;
    }

    .name-selector {
        font-weight: bold;
    }

    .image-name {
        font-weight: bold;
    }
</style>