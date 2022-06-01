<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">
    <title>coffee shop</title>
    <!-- links for font-awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonts source -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lateef&family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <!-------------->
    <link rel="stylesheet" href="./coffee-shop/main.css">
</head>
<body>


    <div class="info">
        <!-- info on the left -->
        <div class="info-left">
            <section>
                <i class="fas fa-phone"></i> +216 50 803 771
            </section>

            <section>
                <i class="fas fa-envelope"></i> coffe.shop@gmail.com
            </section>
        </div>
            <!-- info on the right-->
        <div class="info-right">
            <div class="social">
                <a href="https://www.facebook.com/Coffeeshop204"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <button id="play-btn" onclick="playMyAudio();" style=" background-color: black; border-color: black;" > <i class="fa-solid fa-play" style="color:aliceblue">  </i></a>
                    <script type="text/javascript">
                        function playMyAudio(){
                            const audio = document.getElementById("myaudio");
                            const video = document.getElementById("myvideo");
                            audio.currentTime = video.currentTime;
                            audio.play();
                        }
                    </script>
                <button id="pause-btn" onclick="pauseMyAudio();" style="background-color:black; border-color:black" ><i class="fa-solid fa-pause" style="color:aliceblue"></i></button>
                <script type="text/javascript">
                    function pauseMyAudio(){
                        const audio = document.getElementById("myaudio");
                        audio.pause();
                    }
                </script>
            </div>
            <div class="info-link">
                <a href="#">shop now</a>
            </div>
        </div>

    </div>
    <div id="music">
        <audio loop autoplay id="myaudio">
            <source src="./pic/Golden Coffee.mp3" type="">
        </audio>
    </div>

<!--*************************************************************************************-->

    <!-- start header section  -->

    <header style="background:transparent">
        <div class="logo">
            <img src="pic/logo.png" alt="">
        </div>
        <nav class="navigation">
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#shop">shop</a></li>
            <li><a href="#menu">menu</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#contact">contact</a></li>
        </nav>
        <div class="bars">
            <img src="./pic/about2.jpg" alt="" class="bar">
        </div>
    </header>
    <!-- end header section  -->
<!--*************************************************************************************-->

    <!-- start home section  -->
    

    <div class="home-section" id="home">