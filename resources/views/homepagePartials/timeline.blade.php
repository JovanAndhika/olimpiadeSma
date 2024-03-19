<h3>Timeline</h3>
<div class="MainTimeline">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>

    <div class="timeline">
        <div class="box left">
            <div class="content">
                <h2>18 dec 2023</h2>
                <div class="kerstbal-container">
                    <div class="ring"></div>
                    <div class="top"></div>
                    <div class="kerstbal">

                        <div class="bal bal1">
                        </div>

                        <!-----------END KERSTBAL-------------------------------->
                    </div>
                    <span>The kitten guards the gifts.</span>
                    <!-----------END CONTAINER-------------------------------->
                </div>
            </div>
        </div>

        <div class="box right">
            <div class="content">
                <h2>9 dec 2023</h2>
                <div class="kerstbal-container">
                    <div class="ring"></div>
                    <div class="top"></div>
                    <div class="kerstbal">

                        <div class="bal bal2">
                        </div>

                        <!-----------END KERSTBAL-------------------------------->
                    </div>
                    <span>Christmas wreath on the door.</span>
                    <!-----------END CONTAINER-------------------------------->
                </div>
            </div>
        </div>


        <div class="box left">
            <div class="content">
                <h2>7 oct 2023</h2>
                <div class="kerstbal-container">
                    <div class="ring"></div>
                    <div class="top"></div>
                    <div class="kerstbal">

                        <div class="bal bal11">
                        </div>

                        <!-----------END KERSTBAL-------------------------------->
                    </div>
                    <span>Snow and ice in October.</span>
                    <!-----------END CONTAINER-------------------------------->
                </div>
            </div>
        </div>
        <!---------------END TIMELINE---------------------->
    </div>
</div>

<style>
    span {
        font-family: "Dancing Script", cursive;
        font-size: 20px;
        margin-top: 10px;
        color: rgb(238, 235, 235);
        text-shadow: 2px 2px 0px rgb(0, 0, 0);
    }

    .snowflake::before {
        content: "\2744";
        /* Unicode code point for snowflake */
        position: absolute;
        font-size: 24px;
        width: 10px;
        height: 10px;

        /* Workaround for Chromium's selective color inversion */
        border-radius: 50%;
        filter: drop-shadow(0 0 10px white);
    }

    /* The actual timeline (the vertical ruler) */
    .timeline {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* The actual timeline (the vertical ruler) */
    .timeline::after {
        content: "";
        position: absolute;
        width: 2px;
        background-color: antiquewhite;
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -3px;
    }

    /* Container around content */
    .box {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
    }

    /* The circles on the timeline */
    .box::after {
        content: "\2744";
        /* Unicode for snowflake character */
        position: absolute;
        width: 25px;
        height: 25px;
        right: -2px;
        color: antiquewhite;
        border-radius: 50%;
        z-index: 1;
        font-size: 48px;
        top: 15px;
    }

    /* Place the container to the left */
    .left {
        left: 0;
    }

    /* Place the container to the right */
    .right {
        left: 50%;
    }

    /* Add arrows to the left container (pointing right) */
    .left::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        right: 30px;
        border: medium solid white;
        border-width: 10px 0 10px 10px;
        border-color: transparent transparent transparent white;
    }

    /* Add arrows to the right container (pointing left) */
    .right::before {
        content: " ";
        height: 0;
        position: absolute;
        top: 22px;
        width: 0;
        z-index: 1;
        left: 30px;
        border: medium solid white;
        border-width: 10px 10px 10px 0;
        border-color: transparent white transparent transparent;
    }

    /* Fix the circle for containers on the right side */
    .right::after {
        left: -22px;
    }

    /* The actual content */
    .content {
        padding: 20px 30px;
        background: rgb(24, 23, 22);
        background: linear-gradient(184deg,
                rgba(159, 15, 26, 1) 14%,
                rgb(71, 2, 2) 42%,
                rgb(60, 25, 124) 93%);
        position: relative;
        border-radius: 6px;
        border: 1px solid white;
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .kerstbal-container {
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 250px;
        height: 250px;
    }

    .kerstbal {
        width: 200px;
        height: 200px;
    }

    .ring {
        width: 15px;
        height: 10px;
        border: 2px solid black;
        border-radius: 50%;
    }

    .top {
        width: 25px;
        height: 10px;
        background-color: rgb(240, 5, 5);
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .bal {
        width: 200px;
        height: 200px;
        border: 1px solid white;
        border-radius: 50%;
        background-size: 100% 100%;
        background-repeat: no-repeat;
    }

    .bal1 {
        background-image: url("https://iili.io/JAfZ8In.jpg");
    }

    .bal2 {
        background-image: url("https://iili.io/JAfZrBf.jpg");
    }

    .bal3 {
        background-image: url("https://iili.io/JAfZULG.jpg");
    }

    .bal4 {
        background-image: url("https://iili.io/JAfZh1R.jpg");
    }

    .bal5 {
        background-image: url("https://iili.io/JAfZ414.jpg");
    }

    .bal6 {
        background-image: url("https://iili.io/JAfZO7I.jpg");
    }

    .bal7 {
        background-image: url("https://iili.io/JAfZkmX.jpg");
    }

    .bal8 {
        background-image: url("https://iili.io/JAfZXqv.jpg");
    }

    .bal9 {
        background-image: url("https://iili.io/JAfZNdN.jpg");
    }

    .bal10 {
        background-image: url("https://iili.io/JAfZeet.jpg");
    }

    .bal11 {
        background-image: url("https://iili.io/JAfZSXs.jpg");
    }

    .bal12 {
        background-image: url("https://iili.io/JAfZjgp.jpg");
    }

    /* Media queries - Responsive timeline on screens less than 600px wide */
    @media screen and (max-width: 600px) {

        /* Place the timelime to the left */
        .timeline::after {
            left: 31px;
        }

        /* Full-width containers */
        .box {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        /* Make sure that all arrows are pointing leftwards */
        .box::before {
            left: 60px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Make sure all circles are at the same spot */
        .left::after,
        .right::after {
            left: 8px;
        }

        /* Make all right containers behave like the left ones */
        .right {
            left: 0%;
        }
    }
</style>

<script>
    let bodyHeightPx = null;
    let pageHeightVh = null;

    function setHeightVariables() {
        bodyHeightPx = document.body.offsetHeight;
        pageHeightVh = (100 * bodyHeightPx) / window.innerHeight;
    }

    // Load the rules and execute after the DOM loads
    createSnow = function() {
        setHeightVariables();
        spawnSnowCSS(snowflakesCount);
        spawnSnow(snowflakesCount);
    };

    // Initialize ScrollReveal
    ScrollReveal().reveal(".box", {
        delay: 500
    });
    // Initialize ScrollReveal for left element
    ScrollReveal().reveal(".left", {
        distance: "250px",
        origin: "left",
        delay: 500
    });

    // Initialize ScrollReveal for right element
    ScrollReveal().reveal(".right", {
        distance: "250px",
        origin: "right",
        delay: 500
    });
</script>