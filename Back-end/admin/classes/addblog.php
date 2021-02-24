
<?php 
	
	// connect to database
$db = mysqli_connect("localhost", "root", "", "dichvu");

	// retrieve posts from database
$result = mysqli_query($db, "SELECT * FROM news");
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// if 'upload image' buttton is clicked
if (isset($_POST['uploading_file'])) {
	// Get image name
	$image = $_FILES['post_image']['name'];

  	// image file directory
	$target = "images/" . basename($image);

	if (move_uploaded_file($_FILES['post_image']['tmp_name'], $target)) {
		echo "http://localhost/Support-For-Job/Back-end/admin/" . $target;
		exit();
	}else{
		echo "Failed to upload image";
		exit();
	}
}

// if form save button is clicked, save post in the database
if (isset($_POST['save-post'])) {

	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array ('jpg' , 'jpeg' ,'png', 'pdf');

	if(in_array($fileActualExt,$allowed)) {
		if($fileError === 0){
			if($fileSize < 1000000){
				// $fileNameNew = uniqid('',true).".".$fileActualExt;
				// $fileDestination = 'images/'.$fileNameNew;
				$fileDestination = 'images/'.$fileName;
				move_uploaded_file($fileTmpName,$fileDestination);
				header("location: blog.php");
			}else{
				echo "Your file is too big!";
			}
		}else{
			echo "There was an error upload your file!";
		}
	}else{
		echo "you cannot upload file of this type";
	}

	$title = mysqli_real_escape_string($db, $_POST['title']);
	$descripsion = mysqli_real_escape_string($db, $_POST['descripsion']);
	$status = mysqli_real_escape_string($db, $_POST['status']);
	$thumbnail = mysqli_real_escape_string($db, $fileName);
	// $content = htmlentities(mysqli_real_escape_string($db, $_POST['body']));
	$content = mysqli_real_escape_string($db, $_POST['body']);
	$d=strtotime("+7 Hours");
	$time=date("Y-m-d H:i:s", $d);
	$sql = "INSERT INTO news (title, descripsion, status, thumbnail, content,createddate) 
			VALUES ('$title','$descripsion','$status','$thumbnail', '$content',timestamp '$time')";
	mysqli_query($db, $sql);
	header("location: blog.php");
}

?>