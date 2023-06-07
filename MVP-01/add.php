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
//pada button Add di halaman index, akan href ke file add.php dan langsung masuk ke $tp->add
//yang merujuk ke form.html dan proses input
$data = $tp->add();
if (isset($_POST['add'])) { //jika data button telah 'add' alias user telah menekan tombol submit
    $proses->add($_POST); //maka panggil proses add yang berisi create query sql pada tabelpasien
}
