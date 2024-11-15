<?php
if(empty($_POST["nama_lengkap"]) ||  empty($_POST["username"]) || empty($_POST["password"])){
    echo "Data Tidak Lengkap ";
}else {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);   
    $nama = htmlspecialchars($_POST["nama_lengkap"]);

    $encrypt_password = md5($password);

    if(strlen($username) < 6) {
        echo "Username Minimal 6 Karakter";
        echo" <br> <a href='register.html'>Kembali Ke Form</a>";
    }else if(strlen($password) < 8) {
        echo "Password Minimal 8 Karakter" ; 
        echo" <br> <a href='register.html'>Kembali Ke Form </a>";
    }else {
        echo "<h2>Hasil Registrasi</h2>";
        echo "<p>Nama Lengkap: " . $nama . "</p>";
        echo "<p>Username: " . $username . "</p>";
        echo "<p>Password (encrypted): " . $encrypt_password . "</p>";
    }
    

}
    




?>