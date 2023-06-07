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


$tp = new TampilPasien();
$proses = new ProsesPasien();
//button update href ke file edit.php dan otomatis akan masuk ke $tp->edit yang merujuk ke form.html untuk update
$data = $tp->edit($_GET['id_edit']);
if (isset($_POST['id_edit'])) { //jika data button merupakan id_edit maka user telah menekan tombol submit
    $proses->edit($_POST); //panggil proses edit yang ada di prosesPasien yg didalamnya memanggil tabel pasien yg berisi query update sql
}
