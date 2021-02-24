<?php 
include "config.php";

		$sdt = isset($_POST['sdt']) ? mysqli_real_escape_string($conn,$_POST['sdt']) : null;
		$contact = isset($_POST['diachi']) ? mysqli_real_escape_string($conn,$_POST['diachi']) : null;
		$content = isset($_POST['content']) ? mysqli_real_escape_string($conn,$_POST['content']) : null;
		$resInfo = isset($_POST['res-info']) ? mysqli_real_escape_string($conn,$_POST['res-info']) : null;
		$d=strtotime("+7 Hours");
		$time=date("Y-m-d H:i:s", $d);
		// create sql
		$sql = "INSERT INTO khachhang_thuong (sdt,diachi,dichvudangky,content,status,createddate) VALUES ('$sdt', '$contact', '$resInfo','$content',1,timestamp '$time' )";
		
		//save to db
		if (mysqli_query($conn,$sql)) {
			//success
			//header("Location: 404.php");
		}else {
			//error
			echo $sql;
			echo "query error" . mysqli_error($conn);
			
		}
?>		
