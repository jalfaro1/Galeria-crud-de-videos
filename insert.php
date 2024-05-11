<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO dataporn (thumbnail, title, description, content, category, image) 
			VALUES (:thumbnail, :title, :description, :content, :category, :image)
		");
		$result = $statement->execute(
			array(
			':thumbnail'	=>	$_POST["thumbnail"],
			':title'	=>	$_POST["title"],
				':description'	=>	$_POST["description"],
				':content'	=>	$_POST["content"],
				':category'	=>	$_POST["category"],
				
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Registro ingresado correctamente';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE dataporn 
			SET thumbnail = :thumbnail, title = :title, description = :description, content = :content, category = :category, image = :image  
			WHERE id = :id"
		);
		$result = $statement->execute(
			array(
				':thumbnail'	=>	$_POST["thumbnail"],
				':title'	=>	$_POST["title"],
				':description'	=>	$_POST["description"],
				':content'	=>	$_POST["content"],
				':category'	=>	$_POST["category"],
				':image'		=>	$image,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Registro '.$_POST["user_id"].' modificado correctamente';
		}
	}
}

?>