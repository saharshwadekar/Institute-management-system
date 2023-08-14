<?php include('../templates/header.php') ?>

<div class="card w-25 mt-3 pt-4 container">
    <form action="logincheck.php" method="POST">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="useremail" id="form2Example1" class="form-control" />
            <label class="form-label" for="form2Example1">Email address</label>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="userpass" id="form2Example2" class="form-control" />
            <label class="form-label" for="form2Example2">Password</label>
        </div>
        <!-- Submit button -->
        <button type="submit" name="login" class="btn btn-primary btn-block mb-4">Sign in</button>
        <span class="st-icon-pandora m-5 ">
            <?php
            error_reporting(0);
            session_start();
            session_destroy();
            echo $_SESSION['loginMessage'];
            ?>
        </span>
    </form>
</div>

<?php include('../templates/footer.php') ?>