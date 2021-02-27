<?php
    include 'konek.php'; //Mengambil file dari konek.php agar bisa melakukan koneksi ke database
     
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    //Berfungsi memeriksa apakah data sesuai atau tidak
    $query = mysqli_query($koneksi, "SELECT * FROM admin where username='$username' and password='$password'");
    $cek = mysqli_num_rows($query);
    
    //Jika data sesuai maka akan masuk ke crud.php , jika salah akan tampil peringatan Data Salah!!!!
    if($cek==1){
        header("location:crud.php");
    }
    else{
    ?>
        <script language="JavaScript">
            alert('Data Salah!!!!');
            document.location='./';
        </script>
    <?php
    }
?>