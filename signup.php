<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
    }
?>
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
        
        $sql="select * from signup where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from signup where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            if($password==$cpassword){
                $sql = "INSERT INTO signup(username, email, password, date) VALUES('$username', '$email', '$password', '$date')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: index.php");
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signup.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="signup.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="signup.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pinterest Signup</title>
    <link rel="icon" href="pinterest.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
  <body>
    <div id="form" class="font-['Gilroy']">
        <div class="formfill w-3/12 p-10 h-max flex flex-col justify-center items-center">
    <svg class="mb-3" fill="#e60023" class="signup_logo" height="35" width="35" viewBox="0 0 24 24" aria-hidden="true"
                    aria-label="" role="img">
                    <path
                        d="M0 12a12 12 0 0 0 7.73 11.22 12 12 0 0 1 .03-3.57l1.4-5.94S8.8 13 8.8 11.94c0-1.66.96-2.9 2.16-2.9 1.02 0 1.51.77 1.51 1.68 0 1.03-.65 2.56-.99 3.98-.28 1.19.6 2.16 1.77 2.16 2.12 0 3.76-2.24 3.76-5.47 0-2.86-2.06-4.86-5-4.86a5.17 5.17 0 0 0-5.39 5.18c0 1.03.4 2.13.9 2.73q.12.17.08.34l-.34 1.36q-.06.31-.4.16c-1.49-.7-2.42-2.88-2.42-4.63 0-3.77 2.74-7.23 7.9-7.23 4.14 0 7.36 2.95 7.36 6.9 0 4.12-2.6 7.43-6.2 7.43-1.21 0-2.35-.63-2.74-1.37l-.74 2.84a14 14 0 0 1-1.55 3.23A12 12 0 1 0 0 12"></path>
                </svg>
        <h1 class="text-3xl font-medium">Welcome to Pinterest</h1><br>
        <form name="form" action="signup.php" method="POST" required>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Username </label>
            <input class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="text" id="user" name="user" placeholder="Username" required>
            </div>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Email </label>
            <input  class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Date of Birth </label>
            <input class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="date" id="user" name="date" required>
            </div>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Password </label>
            <input class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="password" id="pass" name="pass" placeholder="Create a Password" required>
            </div>
            <div class="flex flex-col">
            <label class="text-sm text-slate-600">Retype Password</label>
            <input class="block w-64 mb-2 px-2 py-1.5 bg-white border-1 rounded-lg dark:border-grey-600 dark:bg-zinc-800 dark:text-black-200 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-opacity-50 focus:outline-none focus:ring focus:ring-blue-400" type="password" id="cpass" name="cpass" placeholder="Retype the Password" required>
            </div>
            <input class="btn w-64 mt-2 text-white px-20 py-1.5 font-medium rounded-full bg-red-600 hover:bg-red-700 focus:outline-none focus:ring active:bg-red-700" type="submit" id="btn" value="SignUp" name = "submit"/>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>