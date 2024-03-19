<div class="container MainTimeline">

    <h3>Timeline</h3>

    <div class="vl">

        <div class="box left">
            <div class="content">
                <h2>18 dec 2023</h2>
                <div class="kerstbal-container d-flex justify-content-center">
                    <div class="image-container">
                        <img class="image" src="{{asset('storage/gambar_asset/Pendaftaran.jpg')}}">
                    </div>
                    <span style="padding: 0 0 0 5%;">Pendaftaran peserta dimulai pada babak ini</span>
                </div>
            </div>
        </div>

        <div class="box right">
            <div class="content">
                <h2>18 dec 2023</h2>
                <div class="kerstbal-container d-flex justify-content-center">
                    <div class="image-container">
                        <img class="image image-inherit" src="{{asset('storage/gambar_asset/Pendaftaran.jpg')}}">
                    </div>
                    <span style="padding: 0 0 0 5%;">Babak eliminasi pertama</span>
                </div>
            </div>
        </div>

        <div class="box left">
            <div class="content">
                <h2>18 dec 2023</h2>
                <div class="kerstbal-container d-flex justify-content-center">
                    <div class="image-container">
                        <img class="image image-inherit" src="{{asset('storage/gambar_asset/Pendaftaran.jpg')}}">
                    </div>
                    <span style="padding: 0 0 0 5%;">Babak eliminasi pertama</span>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    @media screen and (max-width: 1600px) {
        .MainTimeline{
            overflow-x: hidden;
        }

        .vl {
            position: relative;
            border-left: 6px solid green;
            height: 600px;
            left: 50%;
        }

        .image{
            height: 100px;
            width: 100px;
        }

        .box {
            margin: 0;
            width: 300px;
            height: 180px;
            background-color: burlywood;
            border-radius: 10px;
        }

        .left{
            position: relative;
            left: -30%;
        }

        .right{
            position: relative;
            left: 8%;
        }

    }


    /* ukuran smartphone */
    @media screen and (max-width: 600px) {
        .vl {
            position: static;
            left: 0%;
            border-left: 6px solid green;
            height: 680px;
        }

        .box {
            margin: 5% 0 16% 5%;
            max-width: 240px;
            max-height: 500px;
            background-color: burlywood;
            border-radius: 10px;
        }

        .left{
            position: static;
        }

        .right{
            position: static;
        }

        .image {
            max-width: 100px;
            max-height: 100px;
        }

        .image-inherit {
            margin: 0;
        }
    }
</style>

<script>
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