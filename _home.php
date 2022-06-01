<video autoplay loop calss="backgr" id="myvideo" muted width="1000000px" height="810px" style="justify-content: center;">
            <source src="./pic/Golden Coffe.mp4" type="">
        </video>


        <div class="home-content" style="left: -100%;">
            <h1> عيدكم مبروك </h1>
            <p>
                <br>...بمناسبة العيد، تمتع بتخفيضات توصل حتى %60 على القهوة الّي تحبها
            </p>

            <div class="home-links">
                <div class="first">
                    <a href="#menu">testy coffee</a>
                </div>
                <div class="second">
                    <a href="#about">read more</a>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------->
        <!------------------------------------------------------------------->
        <!-- login in page -->
        <div class="popup">
            <button id="close"><i class="fa-solid fa-circle-xmark"></i></button>
            <h1>Sign in</h1> 
            
            <form action=""  method="post"> <!-- on ne met rien dans action pour pouvoir envoyer les données-->
            <div class="input-field"><input placeholder="Email" class="validate" type="email" name="email" id="" required></div>
            <div class="input-field"><input placeholder="Password" class="validate" type="password" name="password" id="" required></div>
            <center><button type="submit" class="_submit" name="btn-valider">Sign In</button></center>
            <hr style="color:beige; font-weight: 300;">
            <p>Don't have an account?<a href="./register.php">Sign Up</a></p>
        </form>
        </div>
        <!-- script-->
        <script>
            /* the popup page is blocked for 1000 milliseconds then it pops up */
            window.addEventListener("load", function(){
                setTimeout(
                    function open(event){
                        document.querySelector(".popup").style.display = "block";
                    },10000)
                
            })
            //enable closing the popup page through display fct
            document.querySelector("#close").addEventListener("click",function(){
                document.querySelector(".popup").style.display = "none";})
        </script>
    </div>

    <!-- end home section  -->