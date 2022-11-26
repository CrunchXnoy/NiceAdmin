<?php  
        session_start();
        require "../koneksi.php";
        $email =$_POST['email'];
        $password = md5( $_POST['password']);

        $hasil = mysqli_query($conn,"SELECT * from umkm WHERE email='$email' and password='$password'");
        $row = mysqli_fetch_array($hasil);
        if ($hasil){
                if (isset($row['email']) && isset($row['password']) && $row['email'] == $email && $row['password'] == $password) {
                $_SESSION['email']=$row['email'];
                echo "<script>window.location='../index.php';</script>";
                // header("Location: ../index.php");
                }
                else{ 
                        echo "<script>alert ('Mohon maaf email atau password yang anda masukkan salah')</script>";
                        echo "<script>window.location='../pages-login.php';</script>";
                }
        }
                else{
                        echo "Terjadi kesalahan";
                }
?>
