
<?php
    include("conexion.php");
?>

<html>
	<head>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.1.js" ></script>
		<title>Registros</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
		
		 <link rel="stylesheet" type="text/css" href="https://fiddle.jshell.net/css/result-light.css">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		
		
		  <link rel="stylesheet" href="treme.css"> 
    
    <link href="http://localhost/fancybox-master/admin/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    

   
   
    <script src="http://localhost/fancybox-master/admin/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>	
	

   

     <link rel="stylesheet" href="jquery.fancybox.min.css">
  
		
		
		<style>
		
		
		
		body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
		
		
		
			
			.box
			{
				width:98%;
				padding:20px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
				margin-top:25px;
			}
			.line-container {
  width: 530px;
  height: 20px;
}
.single-line {
  text-overflow: ellipsis;
  white-space: pre;
  overflow: hidden;
  width: 530px;
}
		</style>
<style>
/*Flecha para hacer la pagina hacia arriba*/
.ir-arriba{
  display:none;
  background-repeat:no-repeat;
  font-size:20px;
  color:black;
  cursor:pointer;
  position:fixed;
  bottom:10px;
  right:10px;
  z-index:2;
}
</style>		
	
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <script>
  window.console = window.console || function(t) {};
</script>	
 <style id="">
.tooltip-container {
	position: relative; /*relative: los elementos se posicionan de forma relativa a su posición normal.*/
	display: inline-block;
	
}
.tooltip-text {
	visibility: hidden;
	width: 220px;
	background-color: #000;
	color: #fff;
	text-align: center;
	border-radius: 6px;
	padding: 5px;
	position: absolute;
	z-index: 1;
	top: 0%; /* Posiciona el tooltip bajo del elemento */
	left: 60px;
	padding-left:60px;
	transform: translateX(-50%);
	opacity: 0;
	transition: opacity 0.3s;
}
.tooltip-container:hover .tooltip-text {
	visibility: visible;
	opacity: 1;
}
</style>
	  

		
				
	</head>
	<body translate="no">
	
	
	






<div class="theme" id="theme">







</div>
	
	
	
	
	
	
	<a class="ir-arriba"  javascript:void(0) title="Volver arriba">
  <span class="fa-stack">
    <img src="flecha.png"  class="fa fa-circle fa-stack-2x">
    
  </span>
</a>
	

	  
		<div class="fondo container box" >







			<div  class="fondo2 table-responsive" style="margin-left:2px; margin-right:2px;">

				<div align="right">
											<?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<div class='line-container'>";
	echo "<p class='single-line'>";
	echo "<form method='POST'>	";
	
	echo "<h5 style='vertical-align: inherit;font-size: 17;'>Bienvenido: $usuarioingresado <input type='submit' value='Cerrar sesi&oacute;n' name='btncerrar' class='btn btn-primary btn-xs'/></h5>";
	echo "</form>";
	
echo "</p>";

echo "</div>";
}
else
{
	header('location: login/login.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: login/login.php');
}
?>

</div> 

 <span class="float-end" style="
    height: 0px;
    left: 1220px;
    /* right: 40px; */
    position: relative;
    top: 20px;
    ">

					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info">Add</button>
					
		 </span>			
			
	<span class="float-start" style="
    height: 0px;
    right: 50px;
    /* right: 40px; */
    position: relative;
    top: 20px;
    ">			
	<div class="btn-group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Ocultar Columnas  <span class="caret"></span></button>



   
   
    <ul class="dropdown-menu" role="menu">
	 <li><a href="#" class="btn" id="cp4">Change color <button
  class="dark-toggler"
  aria-label="Toggle color mode"
  title="Toggle color mode"
  data-theme-toggle
>
  <div class="toggler-icon"></div>
</button></a></li>
      <li><a href="#"><input type="checkbox" id="myCheck1" >    N&deg;</a></li>
       <li><a href="#"><input type="checkbox" id="myCheck2" >    Imagen</a></li>
	    <li><a href="#"><input type="checkbox" id="myCheck3" >    Titulo</a></li>
       <li><a href="#"><input type="checkbox" id="myCheck4" >    Descripcion</a></li>
       <li><a href="#"><input type="checkbox" id="myCheck5" >    Video</a></li>
       <li><a href="#"><input type="checkbox" id="myCheck6" >    Categoria</a></li>
       <li><a href="#"><input type="checkbox" id="myCheck7" >    Avatar</a></li>
	    <li><a href="#"><input type="checkbox" id="myCheck8">    Opciones</a></li>
    </ul>
  </div> 
 
       </span>	

        <p>&nbsp;</p>
				<br />
				<table id="user_data" class="display table-bordered table-striped" style="width:100%; overflow:hidden;">
					<thead>
						<tr>
                        <th width="5%">N&deg;</th>
							<th width="8%"  style="text-align:center">Avatar</th>
							<th width="17%">Titulo</th>
							<th width="25%">Descripci&oacute;n</th>
                            
                            <th width="20%">Video</th>
                            
<th width="5%">Categoria</th>                            
 <th width="10%" style="text-align:center">Imagen</th>                           
                            
                            
							<th width="5%">Editar</th>
							<th width="5%">Delete</th>
						</tr>
					</thead>
				</table>
			
	
		</div>
		</div>
			
				
			
        
    
  	 <script id="rendered-js" >
$(document).ready(function () {irArriba();}); //Hacia arriba

function irArriba() {
  $('.ir-arriba').click(function () {$('body,html').animate({ scrollTop: '0px' }, 1000);});
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {$('.ir-arriba').slideDown(600);} else {$('.ir-arriba').slideUp(600);}
  });
  $('.ir-abajo').click(function () {$('body,html').animate({ scrollTop: '1000px' }, 1000);});
}
//# sourceURL=pen.js
    </script> 
        
      <script id="rendered-js" >
var currentTheme = getDefaultTheme();
setTheme(currentTheme);

addButtonThemeListener();

/**
 * Listens for the click of the button and execute the theme change
**/
function addButtonThemeListener() {
  const buttonToggler = document.querySelector("[data-theme-toggle]");
  buttonToggler.addEventListener("click", () => {
    const newTheme = getNewTheme(currentTheme);
    setTheme(newTheme);
    currentTheme = newTheme;
    saveTheme(newTheme);
  });
}

/**
 * Get the default theme for the user
 * @return {String} theme - the theme of the user
 *
**/
function getDefaultTheme() {
  const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");
  const systemSettingTheme = systemSettingDark.matches ? "dark" : "light";
  const savedTheme = getSavedTheme();
  return savedTheme ? savedTheme : systemSettingTheme;
}


/**
 * Returns the new theme
 * @param {String} theme - the current app theme, dark or light
 *
**/
function getNewTheme(theme) {
  return theme === "dark" ? "light" : "dark";
}

/**
 * Sets the theme globally
 * @param {String} theme - dark or light
 *
**/
function setTheme(theme) {
  const html = document.querySelector("html");
  html.setAttribute("data-theme", theme);
}

/**
 * Returns the theme saved in memory
 * @return {String} theme - the saved theme
 *
**/
function getSavedTheme() {
  return localStorage.getItem("theme");
}

/**
 * Saves theme in memory
 * @return {String} theme - the theme to save
 *
**/
function saveTheme(theme) {
  localStorage.setItem("theme", theme);
}
//# sourceURL=pen.js
    </script>
     
	</body>
</html>


 <?php
		
		



			$query = mysqli_query($con,"SELECT * FROM dataporn WHERE id < '100'");
			
			
		
	while($row = mysqli_fetch_array($query))
	
		

		  
		{
		
		?>   

   	  
  <div id="myModalV<?php echo $row['id'];?>" class="modal fade">
        <div class="modal-dialog">
            <div class="theme modal-content">
                <div class="modal-header">
                    <h5 >Registro N&deg;&nbsp;<?php echo $row['id'];?></h5><?php echo $row['title'];?>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe allow="" id="cartoonVideo<?php echo $row['id'];?>"  class="embed-responsive-item" width="560" height="315" src="<?php echo $row['content'];?>" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
        </div>
    </div>



<script>
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo<?php echo $row['id'];?>").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModalV<?php echo $row['id'];?>").on('hide.bs.modal', function(){
        $("#cartoonVideo<?php echo $row['id'];?>").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModalV<?php echo $row['id'];?>").on('show.bs.modal', function(){
        $("#cartoonVideo<?php echo $row['id'];?>").attr('src', url);
    });
});
</script>


<script> 
var vid<?php echo $row['id'];?> = document.getElementById("myVideo<?php echo $row['id'];?>"); 

function playVid<?php echo $row['id'];?>() { 
  vid<?php echo $row['id'];?>.play(); 
} 

function pauseVid<?php echo $row['id']; ?>() { 
  vid<?php echo $row['id'];?>.pause(); 
} 
</script>

<?php


					

				}
		 mysqli_close($con);	
		 
			?>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="theme modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter Titulo</label>
					<input type="text" name="title" id="title" class="form-control" />
					<br />
					<label>Enter Descripcion</label>
					<input type="text" name="description" id="description" class="form-control" />
					<br />
                    <label>Enter Video</label>
					<input type="text" name="content" id="content" class="form-control" />
					<br />
                    <label>Enter Categoria</label>
  <?php
$mysqli = new mysqli('localhost', 'jalfaro', 'leny12', 'videodb');
?>                  
                    
  <select name="category" id="category" class="form-control"  >
		  <option value=""></option>
		  <?php
          $query = $mysqli -> query ("SELECT  DISTINCT category FROM dataporn ");
		  
		
          while ($valores = mysqli_fetch_array($query)) {
			  
			  $category= $valores["category"];
			 $id = $valores["id"];
			  
            echo '<option  value="'.$valores["category"].'">'.$valores["category"].'</option>';
          }
	
	  
        ?>
		  
		  
	    </select>
                  
                    
                    
                    
                    
				
					<br />
                    <label>Enter thumbnail</label>
					<input type="text" name="thumbnail" id="thumbnail" class="form-control" />
					<br />
                    
                    
                    
                    
                    
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>








<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 1, 6, 7, 8],
				"orderable":false,
			},
		],

	});



var dt2 = $('table').DataTable();

$('#myCheck1').change(function() {
  dt2.columns(0).visible(!$(this).is(':checked'))
});

$('#myCheck2').change(function() {
  dt2.columns(1).visible(!$(this).is(':checked'))
});

$('#myCheck3').change(function() {
  dt2.columns([2]).visible(!$(this).is(':checked'))
});
$('#myCheck4').change(function() {
  dt2.columns([3]).visible(!$(this).is(':checked'))
});

$('#myCheck5').change(function() {
  dt2.columns([4]).visible(!$(this).is(':checked'))
});
$('#myCheck6').change(function() {
  dt2.columns([5]).visible(!$(this).is(':checked'))
});
$('#myCheck7').change(function() {
  dt2.columns([6]).visible(!$(this).is(':checked'))
});
$('#myCheck8').change(function() {
  dt2.columns([7, 8]).visible(!$(this).is(':checked'))
});


	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var id = $('#id').val();
		var title = $('#title').val();
		var description = $('#description').val();
		var content = $('#content').val();
		var thumbnail = $('#thumbnail').val();
		var category = $('#category').val();
		
		
		var extension = $('#user_image').val().split('.').pop().toLowerCase();
		if(extension != '')
		{
			if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
			{
				alert("Invalid Image File");
				$('#user_image').val('');
				return false;
			}
		}	
		if(title != '' && category != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#title').val(data.title);
				$('#description').val(data.description);
				$('#content').val(data.content);
				$('#thumbnail').val(data.thumbnail);
				$('#category').val(data.category);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Estás seguro de que quieres eliminar esto?<br>No se podra recuperar"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>


  

 
 <script src="script.js"></script>

