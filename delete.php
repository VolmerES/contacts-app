<?php
require "database.php";

session_start();
if (!isset($_SESSION["user"]))
{
	header("Location: login.php");
	return;
}

$id = $_GET["id"];

$statement = $conn->prepare("SELECT * FROM contacts WHERE id = :id LIMIT 1");
$statement->bindParam(":id", $id);
$statement->execute();

if ($statement->rowCount() == 0)
{
	http_response_code(404);
	echo("HTTP 404 NOT FOUND");
	return;
}

$contact = $statement->fetch(PDO::FETCH_ASSOC);

IF ($contact["USER_ID"] !== $_SESSION["useer"]["id"])
{
	http_response_code(403);
	echo("HTTP 403 UNAUTHORIZED");
	return;
}

$conn->prepare("DELETE FROM contacts WHERE id = :id")->execute([":id" => $id]);

header("Location: home.php");
?>