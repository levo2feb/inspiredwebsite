<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./pinterest.png">
    <link rel="stylesheet" href="style.css">
    <title>Pinterest Clone</title>
</head>
<body>
    
    <div class="w-full min-h-screen">
        <div class="navigation relative z-[333] w-full px-6 py-5 flex items-center gap-6 justify-between font-['Gilroy']">
            <div class="logo flex">
                <svg fill="#e60023" class="w-10" height="33" width="33" viewBox="0 0 24 24" aria-hidden="true"
                    aria-label="" role="img">
                    <path
                        d="M0 12a12 12 0 0 0 7.73 11.22 12 12 0 0 1 .03-3.57l1.4-5.94S8.8 13 8.8 11.94c0-1.66.96-2.9 2.16-2.9 1.02 0 1.51.77 1.51 1.68 0 1.03-.65 2.56-.99 3.98-.28 1.19.6 2.16 1.77 2.16 2.12 0 3.76-2.24 3.76-5.47 0-2.86-2.06-4.86-5-4.86a5.17 5.17 0 0 0-5.39 5.18c0 1.03.4 2.13.9 2.73q.12.17.08.34l-.34 1.36q-.06.31-.4.16c-1.49-.7-2.42-2.88-2.42-4.63 0-3.77 2.74-7.23 7.9-7.23 4.14 0 7.36 2.95 7.36 6.9 0 4.12-2.6 7.43-6.2 7.43-1.21 0-2.35-.63-2.74-1.37l-.74 2.84a14 14 0 0 1-1.55 3.23A12 12 0 1 0 0 12"></path>
                </svg>
                <p class="mt-0.5 caption text-red-600 align-middle font-['Gilroy'] font-semibold">Pinterest</p> 
                <div class="flex mt-1 align-middle font-['Gilroy'] font-semibold gap-5">
                    <a class="ml-7 whitespace-nowrap font-semibold" href="welcome.php">Today</a>  
                    <a class="ml-2 whitespace-nowrap font-semibold" href="#">Watch</a>
                    <a class="ml-2 whitespace-nowrap font-semibold" href="welcome.php">Explore</a>
                </div>
            </div>
            <div class="links flex space-x-4 align-middle">
                <div class="links flex gap-5">
                    <a class="whitespace-nowrap font-semibold" href="https://help.pinterest.com/en/guide/all-about-pinterest">About</a>  
                    <a class="ml-2 whitespace-nowrap font-semibold" href="#">Business</a>
                    <a class="ml-2 mr-2 whitespace-nowrap font-semibold" href="https://newsroom.pinterest.com/">Blog</a>
                </div>
            <form class="d-flex">
                <a class="btn text-white px-4 py-2 font-semibold rounded-full bg-red-600 hover:bg-red-200 focus:outline-none focus:ring active:bg-red-200" type="submit" href="login.php">Login</a>
                <a class="btn px-4 py-2 ml-1 rounded-full bg-gray-100 font-semibold hover:bg-gray-200 focus:outline-none focus:ring active:bg-red-200" type="submit" href="signup.php">Signup</a>
            </form>
        </div>
    </div>
        
        <div class="w-full flex-col min-h-screen flex justify-center text-6xl">
            <h1 class="font-['Gilroy'] z-10 font-semibold m-auto">Discover recipes, style <br>
            and other ideas to try.</h1>
            <section class="z-0">
                <div class="container">
                  <div id="grid"></div>
                </div>
            </section>
        </div>


    </div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
  randomfeed();
});

randomfeed = () => {
  const unsplashURL = "https://source.unsplash.com/random/";
  for(let i=0; i<10;i++){
    let imageContainer = document.createElement("div");
    imageContainer.className = "box";
    let image = document.createElement("img");
    image.src = `${unsplashURL}${getRandomSize()}`;
    imageContainer.appendChild(image);
    document.querySelector("#grid").appendChild(imageContainer);
    image.addEventListener("dblclick", function(){
      window.open(image.src, '_blank');
    });
  }
}

function getRandomSize(){
  return `${getRandomWd()}x${getRandomHt()}`;
}


function getRandomWd(){
  return Math.floor(Math.random()*10)+1024;
}

function getRandomHt(){
  return Math.floor(Math.random()*10)+720;
}


</script>
</body>
</html>