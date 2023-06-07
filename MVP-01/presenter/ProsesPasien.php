<?php

include_once("kontrak/KontrakPasien.php");

class ProsesPasien implements KontrakPasienPresenter
{
	private $tabelpasien;
	private $data = [];

	function __construct()
	{
		//konstruktor
		try {
			$db_host = "localhost"; // host 
			$db_user = "root"; // user
			$db_password = ""; // password
			$db_name = "pasien"; // nama basis data
			$this->tabelpasien = new TabelPasien($db_host, $db_user, $db_password, $db_name); //instansi TabelPasien
			$this->data = array(); //instansi list untuk data Pasien
			//data = new ArrayList<Pasien>;//instansi list untuk data Pasien
		} catch (Exception $e) {
			echo "wiw error" . $e->getMessage();
		}
	}

	function prosesDataPasien()
	{
		try {
			$this->tabelpasien->open();
			$this->tabelpasien->getPasien();
			while ($row = $this->tabelpasien->getResult()) {
				$pasien = new Pasien();
				$pasien->setId($row['id']);
				$pasien->setNik($row['nik']);
				$pasien->setNama($row['nama']);
				$pasien->setTempat($row['tempat']);
				$pasien->setTl($row['tl']);
				$pasien->setGender($row['gender']);
				$pasien->setemail($row['email']);
				$pasien->setnotelp($row['telp']);
				$this->data[] = $row; //tambahkan data pasien ke dalam list
			}
			//tutup koneksi
			$this->tabelpasien->close();
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
	}

	function selectdata($id)
	{
		try {
			//mengambil data di tabel pasien
			$this->tabelpasien->open();
			$this->tabelpasien->getPasienById($id);
			$data = $this->tabelpasien->getResult();
			$pasien = new Pasien();
			$pasien->setId($data['id']); //mengisi id
			$pasien->setNik($data['nik']); //mengisi nik
			$pasien->setNama($data['nama']); //mengisi nama
			$pasien->setTempat($data['tempat']); //mengisi tempat
			$pasien->setTl($data['tl']); //mengisi tl
			$pasien->setGender($data['gender']); //mengisi gender
			$pasien->setemail($data['email']); //mengisi gender
			$pasien->setnotelp($data['telp']);
			$this->data[] = $data;
			$this->tabelpasien->close();
		} catch (Exception $e) {
			//memproses error
			echo "wiw error part 2" . $e->getMessage();
		}
	}
	function add($data)
	{
		$this->tabelpasien->open();
		$this->tabelpasien->addPasien($data);
		$this->tabelpasien->close();
		header("location:index.php");
	}
	function delete($data)
	{
		$this->tabelpasien->open();
		$this->tabelpasien->deletePasien($data);
		$this->tabelpasien->close();
		header("location:index.php");
	}
	function edit($data)
	{
		$this->tabelpasien->open();
		$this->tabelpasien->updatePasien($data);
		$this->tabelpasien->close();
		header("location:index.php");
	}
	function getId($i)
	{
		//mengembalikan id Pasien dengan indeks ke i
		return $this->data[$i]['id'];
	}
	function getNik($i)
	{
		//mengembalikan nik Pasien dengan indeks ke i
		return $this->data[$i]['nik'];
	}
	function getNama($i)
	{
		//mengembalikan nama Pasien dengan indeks ke i
		return $this->data[$i]['nama'];
	}
	function getTempat($i)
	{
		//mengembalikan tempat Pasien dengan indeks ke i
		return $this->data[$i]['tempat'];
	}
	function getTl($i)
	{
		//mengembalikan tanggal lahir(TL) Pasien dengan indeks ke i
		return $this->data[$i]['tl'];
	}
	function getGender($i)
	{
		//mengembalikan gender Pasien dengan indeks ke i
		return $this->data[$i]['gender'];
	}
	function getemail($i)
	{
		//mengembalikan gender Pasien dengan indeks ke i
		return $this->data[$i]['email'];
	}
	function getnotelp($i)
	{
		//mengembalikan gender Pasien dengan indeks ke i
		return $this->data[$i]['telp'];
	}
	function getSize()
	{
		return sizeof($this->data);
	}
}
