<?php
//ARRAY 1 DIMENSI
//$nama1 = array=("aly","irfan","gilang");
//versi lama
//$nama2= array=["winal","bagas","riza"];
//versi baru

//print_r ($nama1); //menampilkan seluruh string aray
//echo "<br/>";

//print_r ($nama2);
//echo "<br/>";
//echo "nama saya:" . $nama1 [2];

//$siswa = [
   // "nama"=> "IRFANMZ",
   // "jk"=> "LAKI-LAKI",
   // "kelas"=> "XI RPL 1"
//];

 //echo "Nama Saya: ". $siswa ["nama"];
 //echo "<br>";
 //echo "Jenis Kelamin: ". $siswa ["jk"];
 //echo "<br>";
 //echo "Kelas Saya: ". $siswa ["kelas"];
 //echo "<br>";
 


 //ARRAY 2 DIMENSI

$siswa = array(
    array(
        "nama"=> "aly",
        "jk"=> "laki-laki",
        "kelas"=> "xi rpl 1"
    ),
    array(
        "nama"=> "aina",
        "jk"=> "perempuan",
        "kelas"=> "xi rpl 1"
    ),
    array(
        "nama"=> "nivia",
        "jk"=> "perempuan",
        "kelas"=> "xi rpl 1"
    ),
    array(
        "nama"=> "ezard",
        "jk"=> "laki-laki",
        "kelas"=> "xi rpl 1"
    ),
    array(
        "nama"=> "gilang",
        "jk"=> "laki-laki",
        "kelas"=> "xi rpl 1"
    )
    );
    //echo $siswa [0]["jk"];

    foreach($siswa as $row){
        echo "nama: ". $row["nama"]. "<br>";
        echo "jenis kelamin: ". $row["jk"]. "<br>";
        echo "kelas: ". $row["kelas"]. "<br>";
    }

?>
