<?php
//membuat konneksi php ke database
$db = new mysqli ("localhost", "root","", "11rpl_db");
if (mysqli_connect_errno()){
    echo "error: " . mysqli_connect_error();
}else{
    //echo "succes";
}

{
    echo $row ["nama_lengkap"] . "<br>";
}
    
?>
<table border="1" cellspading="10" cellspacing="0">
    <thead>
        <tr>
            <th>no</th>
            <th>nama_lengkap</th>
            <th>jk</th>
            <th>no_hp</th>
        </tr>
    </thead>
    <tbody>
        <?php
//pengambilan data dari data base mysql yang sudah terkoneksi 
$sql ="select * from siswa";// query sql
$result = $db->query ($sql);//execute query sql
$no=1;
while ($row = $result->fetch_assoc() )//menampilkan bentuk array
{
    echo "
        <tr>
            <td></td>
            <td>".$row["nama_lengkap"]."</td>
            <td>".$row["jk"]."</td>
            <td>".$row["no_hp"]."</td>
        </tr>
    ";
    $no++;
}
        ?>
        </tbody>
<table>
