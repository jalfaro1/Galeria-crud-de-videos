<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM dataporn ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE id LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR title LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR description LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR category LIKE "%'.$_POST["search"]["value"].'%" ';
	
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id ASC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{

$thumbnail = '';
if($row["thumbnail"] != '')
	{

	
	$thumbnail = '<a href="#myModalV'.$row["id"].'" data-toggle="modal"><img src="'.$row["thumbnail"].'" class="img-thumbnail" width="120" height="100" /></a>';
	
	}
	else
	{
		$thumbnail = '<img src="upload/sinimagen.jpg" class="img-thumbnail" width="120" height="80" />';
	}
	
	
	
	
	
	$image = '';
	if($row["image"] != '')
	{
		$image = '<div  class="tooltip-container" onMouseOver="playVid'.$row["id"].'()" onMouseOut="pauseVid'.$row["id"].'()"> <span >
  <video class="tooltip-text" id="cartoonVideo'.$row["id"].'"  src="'.$row["content"].'"   playsinline  style="object-fit: cover;right: 0px;left: 100px;padding-left: 0px;margin-left: 90px;padding-right: 0px;"></video>
  </span>	 <a href="'.$row["content"].'"  data-fancybox="images" data-width="1500" data-height="1000" data-caption="'.$row["title"].'"><img src="upload/'.$row["image"].'"  class="vid'.$row["id"].' img-thumbnail" width="80" height="65" /></a></div>';
	}
	else
	{
		$image = '<img src="upload/default-avatar.png" class="img-thumbnail" width="80" height="65" />';
	}
	$sub_array = array();
	$sub_array[] = $row["id"];
	$sub_array[] = $image;
	$sub_array[] = $row["title"];
	$sub_array[] = $row["description"];
	$sub_array[] = $row["content"];
	$sub_array[] = $row["category"];
	$sub_array[] = $thumbnail;
	
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Editar</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Borrar</button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>

