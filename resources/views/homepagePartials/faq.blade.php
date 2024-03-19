<div class="c">
    <input type="checkbox" id="faq-1">
    <h1><label for="faq-1">What Is This ?</label></h1>
    <div class="p">
        <p>This a very very simple accordion.</p>
    </div>
</div>
<div class="c">
    <input type="checkbox" id="faq-2">
    <h1><label for="faq-2">With Pure Css ?</label></h1>
    <div class="p">
        <p>Yes with pure CSS and HTML.</p>
    </div>
</div>
<div class="c">
    <input type="checkbox" id="faq-3">
    <h1><label for="faq-3">Where did you get inpiration ?</label></h1>
    <div class="p">
        <p>I was inpired by an article on css-tricks. <a href="https://css-tricks.com/the-checkbox-hack/">link to article</a>
        </p>
    </div>
</div>

<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,400i,700");

    div.c {
        position: relative;
        margin: 2em;
    }

    input {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        visibility: 0;
    }

    h1 {
        background: steelblue;
        color: white;
        padding: 1em;
        position: relative;
    }

    label::before {
        content: "";
        display: inline-block;
        border: 15px solid transparent;
        border-left: 20px solid white;
    }

    label {
        cursor: pointer;
        position: relative;
        display: flex;
        align-items: center;
    }

    div.p {
        max-height: 0px;
        overflow: hidden;
        transition: max-height 0.5s;
        background-color: white;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
    }

    div.p p {
        padding: 2em;
    }

    input:checked~h1 label::before {
        border-left: 15px solid transparent;
        border-top: 20px solid white;
        margin-top: 12px;
        margin-right: 10px;
    }

    input:checked~h1~div.p {
        max-height: 100px;
    }

    a {
        color: steelblue;
    }
</style>