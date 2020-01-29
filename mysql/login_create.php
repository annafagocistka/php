<?php
include "db.php";
include "functions.php";
// CRUD create

createUser(); ?>

<?php include "includes/header.php"; ?>


<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">create</h1>
        <form action="login_create.php" method="POST">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control"></div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control"></div>
            <input type="submit" value="create" name="submit" class="btn btn-primary">
        </form>
    </div>
    <?php include "includes/footer.php";
