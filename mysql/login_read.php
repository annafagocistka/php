<?php
include "db.php";
include "functions.php";
// CRUD read
?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-12">
        <pre>
            <?php readRows() ?>
        </pre>
    </div>
<?php include "includes/footer.php";