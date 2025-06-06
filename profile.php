<?php
include ("connection.php");
$username = $_COOKIE['username'] ?? '';
$email = $_COOKIE['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="./pinterest.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Pinterest Clone</title>
</head>
<body>
    
<div class="w-full min-h-screen">
        <div class="navigation relative z-[333] w-full px-5 py-4 flex items-center gap-5 font-['Gilroy']">
            <div class="logo">
                <a href="index.php"><svg fill="#e60023" class="w-10" height="30" width="30" viewBox="0 0 24 24" aria-hidden="true"
                    aria-label="" role="img">
                    <path
                        d="M0 12a12 12 0 0 0 7.73 11.22 12 12 0 0 1 .03-3.57l1.4-5.94S8.8 13 8.8 11.94c0-1.66.96-2.9 2.16-2.9 1.02 0 1.51.77 1.51 1.68 0 1.03-.65 2.56-.99 3.98-.28 1.19.6 2.16 1.77 2.16 2.12 0 3.76-2.24 3.76-5.47 0-2.86-2.06-4.86-5-4.86a5.17 5.17 0 0 0-5.39 5.18c0 1.03.4 2.13.9 2.73q.12.17.08.34l-.34 1.36q-.06.31-.4.16c-1.49-.7-2.42-2.88-2.42-4.63 0-3.77 2.74-7.23 7.9-7.23 4.14 0 7.36 2.95 7.36 6.9 0 4.12-2.6 7.43-6.2 7.43-1.21 0-2.35-.63-2.74-1.37l-.74 2.84a14 14 0 0 1-1.55 3.23A12 12 0 1 0 0 12"></path>
                </svg></a>
            </div>
            <div class="links flex gap-5">
                <a id="home" class="whitespace-nowrap font-semibold" href="welcome.php">Home</a>  
                <a class="whitespace-nowrap font-semibold"
                    id="explore" href="#">Explore</a><a class="whitespace-nowrap font-semibold" href="#">Create</a>
            </div>
            <div class="inputcontainer flex w-full rounded-full bg-zinc-200">
                <div class="input w-full relative group">
                    <div class="hidden searchdata w-[98%] min-h-20 bg-white absolute top-full left-1/2 -translate-x-1/2 rounded-md py-3"></div>
                    <div id="search_box">
                        <input id="input" class="bg-zinc-200 outline-none px-5 \ w-full py-3 rounded-full" type="text" placeholder="Search Pizza, 3d Designs and what not..."><i id="search" class=""></i>
                      </div>
                </div>
                <button class="whitespace-nowrap px-5 rounded-full font-semibold hover:bg-zinc-300 text-sm border-l-2 border-zinc-300"><i class="fas fa-search"></i></button>
            </div>

            <div class="iconsnpic flex gap-6 items-center">
                <i class="text-2xl text-zinc-500 ri-notification-3-fill"></i>
                <i class="text-2xl text-zinc-500 ri-message-3-fill"></i>
                <div class="pic flex items-center gap-4">
                    <div class="w-8 h-8 bg-zinc-400 rounded-full overflow-hidden">
                        <a href="./profile.php"><img class="w-full h-full object-cover"
                            src="./profile.png" alt=""></a>
                    </div>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
            </div>
        </div>
        <section class="flex items-center justify-center flex-col">
        <div class="overlay hidden fixed w-full h-screen bg-black/80"></div>
            <div class="profile">
                <img class="profileimg h-52 w-52 mt-7" src="./profile.png" alt="">
            </div>
            <h2 class="font-['Gilroy'] mt-5 text-4xl font-bold"><?php echo $username; ?></h2>
            <h3 class="font-['Gilroy'] mt-1 text-slate-500 text-base"> <?php echo $email; ?></h3>
        </section>
  </div>
</body>
</html>