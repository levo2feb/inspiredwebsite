<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        setcookie("username", $username, time() + (86400 * 30), "/");
        $sql = "select * from signup where username = '$username'or email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        if($row){
            header("Location: welcome.php");
        }  
        else{  
            echo  '<script>
                        alert("Invalid username/email or password!!")
                        window.location.href = "login.php";
                    </script>';
        }     
    }
?>  
<html>
<head>
    <title>Pinterest Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="pinterest.png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div id="form" class="font-['Gilroy']">
        <div class="login_formfill w-3/12 p-10 h-max flex flex-col justify-center items-center">
    <svg class="mb-3" fill="#e60023" class="signup_logo" height="35" width="35" viewBox="0 0 24 24" aria-hidden="true"
                    aria-label="" role="img">
                    <path
                        d="M0 12a12 12 0 0 0 7.73 11.22 12 12 0 0 1 .03-3.57l1.4-5.94S8.8 13 8.8 11.94c0-1.66.96-2.9 2.16-2.9 1.02 0 1.51.77 1.51 1.68 0 1.03-.65 2.56-.99 3.98-.28 1.19.6 2.16 1.77 2.16 2.12 0 3.76-2.24 3.76-5.47 0-2.86-2.06-4.86-5-4.86a5.17 5.17 0 0 0-5.39 5.18c0 1.03.4 2.13.9 2.73q.12.17.08.34l-.34 1.36q-.06.31-.4.16c-1.49-.7-2.42-2.88-2.42-4.63 0-3.77 2.74-7.23 7.9-7.23 4.14 0 7.36 2.95 7.36 6.9 0 4.12-2.6 7.43-6.2 7.43-1.21 0-2.35-.63-2.74-1.37l-.74 2.84a14 14 0 0 1-1.55 3.23A12 12 0 1 0 0 12"></path>
                </svg>
        <h1 class="text-3xl font-medium">Welcome to Pinterest</h1><br>
        <form name="form" action="login.php" method="POST" onsubmit="return isvalid();" required>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Username/Email</label>
            <input class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="text" id="user" name="user" placeholder="Username" required>
            </div>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Password</label>
            <input class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="password" id="pass" name="pass" placeholder="Enter Password" required>
            </div>
            <input class="btn w-64 mt-2 text-white px-20 py-1.5 font-medium rounded-full bg-red-600 hover:bg-red-700 focus:outline-none focus:ring active:bg-red-700" type="submit" id="btn" value="Login" name = "submit"/>
        </form>

        <p class="text-xs font-medium text-center mt-2">By continuing, you agree to <br>Pinterest's Terms of Service</p>
        
        <p class="text-sm font-medium mt-2">Not on pinterest yet? <a href="signup.php" class="font-semibold">Sign up</a></p>
        </div>
    </div>
</body>
</html>
