<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/Pasien.class.php");
include_once("model/TabelPasien.class.php");
include_once("view/TampilPasien.php");
include_once("presenter/ProsesPasien.php");
//halaman utama

$tp = new TampilPasien();
$proses = new ProsesPasien();

//jika data button merupakan id_dele atau user menekan tombol delete maka 
if (isset($_GET['id_delete'])) { //user menekan tombol delete -> data button menjadi 'id_delete'
    $proses->delete($_GET['id_delete']); //memanggil proses delete pada prosespasien yang berisi query delete sql
} else { //untuk load otomatis 
    $tp->tampil(); //jika tidak menekan atau setelah menekan tombol delete maka tampilkan isi tabel(untuk load otomatis)
}
