<?php
	require "database.php";
	session_start();

	if (!isset($_SESSION["user"]))
		{
			header("Location: login.php");
			return;
		}

	if (!isset($_GET["id"]))
		{
			header("Location: home.php");
			return;
		}
	$error = null;
	// $_SERVER variable "superglobal" que contiene información del servidor y la petición.
	// Comprobamos si se ha enviado form mediante un POST
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if ((empty($_POST["address"])))
			$error = "Please fill the address.";
		else if (strlen($_POST["address"]) < 4)
			$error = "Addres can't be less than 4 characters.";
		else
		{
		$address = $_POST["address"];
		$userId = $_SESSION["user"]["id"];
		$contactId = $_GET["id"];

		$statement = $conn->prepare("INSERT INTO addresses (user_id, contact_id, address) VALUES (:userId, :contactId, :address)");
        $statement->bindParam(":userId", $userId);
        $statement->bindParam(":contactId", $contactId);
        $statement->bindParam(":address", $address);
		$statement->execute();


		$_SESSION["flash"] = ["message" => "Address {$_POST['address']} added."];

		// header -> envia comando http al navegador
		// location: index -> le dice al navegador que se redirija a home.php
		header("Location: home.php");
		return;
		}	
	}
?>

<?php require "partials/header.php" ?>


<div class="container pt-5">
	<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
		<div class="card-header">Add New Address</div>
		<div class="card-body">
			<?php
				if ($error) : ?>
				<p class="text-danger">
					<?= $error ?>
			<?php
				endif
			?>
			<form method="POST" action="newAddress.php?id=<?=$_GET['id'] ?>">
			<div class="mb-3 row">
				<label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

				<div class="col-md-6">
				<input id="address" type="text" class="form-control" name="address" autocomplete="address" autofocus>
				</div>
			</div>

			<div class="mb-3 row">
				<div class="col-md-6 offset-md-4">
				<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
			</form>
		</div>
		</div>
	</div>
	</div>
</div>


<?php require "partials/footer.php" ?>