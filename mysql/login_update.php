<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<!-- // CRUD update -->

<?php
if (isset($_POST['submit'])) {} 
    updateTable();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-sm-12">
            <form action="login_update.php" method="POST">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control"></div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control"></div>

                <div class="form-group">
                    <select name="id" id="">

                        <?php
                        showAllData();
                        ?>
                    </select>
                </div>

                <input type="submit" value="update" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>