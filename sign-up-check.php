<?php 
    include "config.php";

    if ($_POST['password'] == $_POST['recon-password']){
    	$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = $_POST['email'];
		$password = strip_tags($_POST['password']);
		$password = sha1($password);

	    $cek_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'"));
	    $no_id = mysqli_num_rows(mysqli_query($conn, "SELECT userid FROM user")) + 1;
	    if ($cek_user > 0) {
	        echo '<script language="javascript">
	              alert ("Username sudah ada yang menggunakan");
	              window.location="sign-up.php";
	              </script>';
	              exit();
	    }
	    else {
	        $sql = "INSERT INTO user(userid, username, email, password) VALUES ('$no_id','$username','$email','$password')";
	        if (mysqli_query($conn, $sql)){
				echo($no_id);
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
			alert("Password dan Konfirmasi Password tidak sama!\nMohon isi kembali");
			window.location="sign-up.php";
			</script>';
		exit();
	}
?>