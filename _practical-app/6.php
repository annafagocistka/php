<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		// Step1: Make a form that submits one value to POST super global

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			if (!empty($name)) {
				echo 'name: ' . $name;
			} else {
				echo 'name is empty';
			}
		}

		?>

		<form action="6.php" method="POST">

			<input type="text" placeholder="name" name="name">
			<input type="password" placeholder="password">
			<input type="submit" name="submit">
		</form>
	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>