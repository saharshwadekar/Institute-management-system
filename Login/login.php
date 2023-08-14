<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS | Sign in</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="background"></div>

    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bxs-book-reader'></i>IMS</h2>
            <div class="text-sci">
                <h2>Welcome Back!</h2>
                <p>One-stop solution administration and academic management!</p>
                
            </div>
        </div>
         
        <div class="logreg-box">
            <div class="form-box login">
                <form action="../includes/logincheck.php" method="POST">
                    <h2>Sign In</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <input type="email" name="useremail" required spellcheck="false" autocomplete="off">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="userpass" required>
                        <label>Password</label>
                    </div>
                    <button type="submit" name="login" class="btn">Login</button>
                    <div style="text-align:center; margin-top: 4%;">
                        <?php
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        echo $_SESSION['loginMessage'];
                        ?>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="srcipt.js"></script>
</body>
</html>