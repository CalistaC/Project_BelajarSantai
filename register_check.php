<?php 
    include "config.php";

    if ($_POST['password'] == $_POST['confirm_password']){
    	$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = strip_tags($_POST['password']);
		$password = sha1($password);
		// $no_handphone = mysqli_real_escape_string($conn, $_POST['no_handphone']);

	    $cek_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'"));
	    $no_id = mysqli_num_rows(mysqli_query($conn, "SELECT userid FROM user")) + 1;
	    if ($cek_user > 0) {
			// Pop-up versi CSS
			header('Location: register.php#usernameusederror');
	        // echo '<script language="javascript">
	        //       alert ("Username sudah ada yang menggunakan");
	        //       window.location="register.php";
	        //       </script>';
	        //       exit();
	    }
	    else {
	        $sql = "INSERT INTO user(userid, username, email, password) VALUES ('$no_id','$username', '$password', '$no_handphone')";
	        if (mysqli_query($conn, $sql)){
				// Pop-up versi javascript
	        	echo '<script language="javascript">
	              alert ("Registrasi berhasil dilakukan!");
	              window.location="index.php";
	              </script>';
	              exit();
	        }       
	    }
    } else {
		// Pop-up versi javascript
		echo '<script language="javascript">
			alert("Password dan Konfirmasi Password tidak sama!\n Mohon isi kembali");
			window.location="register.php";
			</script>';
		exit();
	}
?>