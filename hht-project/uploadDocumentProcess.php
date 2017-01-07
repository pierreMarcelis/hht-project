
<?php
session_start();
echo "coucou1";
 if(isset($_POST["btn-upload"])) {   
	   echo "coucou2";
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;  
	// new file size in KB
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	// make file name in lower case
	
	$final_file=str_replace(' ','-',$new_file_name);
	echo'Coucou';
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		
		// connect to the database
		$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
		$stmt = $mysqli->prepare("insert into HHT_DOCUMENT(filename, filetype, filesize, filedownloadlink) VALUES (?, ?, ?, ?)");
		$stmt->bind_param("ssss", $final_file, $file_type, $file_size, $folder.$final_file);
		$stmt->execute();
		echo 'The user has been inserted into the database.';
		echo 'Upload effectué avec succès pour le fichier '.$fichier['name'] . "<br/>";
		$stmt->close();
		$mysqli->close();
		 header("location:uploadDocument.php?success");
	}
	else
	{
		echo '<font color="red">Echec de l\'upload pour le fichier <f/ont>'.$fichier['name']. "<br/><br/>"; 
		header("location:uploadDocument.php?failed");
	}
 }
?>