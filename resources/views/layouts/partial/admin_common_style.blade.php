<style>
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
        font-size:1.5vw;
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
        -ms-grid-columns: 1fr 0 1fr 0 1fr 0 1fr 0 1fr 0 1fr;
        text-align: center;
        grid-template-columns: 16.6% 16.6% 16.6% 16.6% 16.6% 16.6%;
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
</style>