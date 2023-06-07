<?php


include_once("kontrak/KontrakPasien.php");
include_once("presenter/ProsesPasien.php");

class TampilPasien implements KontrakPasienView
{
	private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
	private $tpl;


	function __construct()
	{
		$this->prosespasien = new ProsesPasien();
	}

	function tampil()
	{
		$this->prosespasien->prosesDataPasien();
		$data = null;
		for ($i = 0; $i < $this->prosespasien->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosespasien->getNik($i) . "</td>
			<td>" . $this->prosespasien->getNama($i) . "</td>
			<td>" . $this->prosespasien->getTempat($i) . "</td>
			<td>" . $this->prosespasien->getTl($i) . "</td>
			<td>" . $this->prosespasien->getGender($i) . "</td>
			<td>" . $this->prosespasien->getemail($i) . "</td>
			<td>" . $this->prosespasien->getnotelp($i) . "</td>
			<td>
			<a  href='edit.php?id_edit=" . $this->prosespasien->getId($i) . "'class ='btn btn-success'>Update</a>
			<a href='index.php?id_delete= " . $this->prosespasien->getId($i) . "'class ='btn btn-danger' >Delete</a>
			</td>";
		}
		$this->tpl = new Template("templates/skin.html");
		$this->tpl->replace("DATA_TABEL", $data);
		$this->tpl->write();
	}
	//semua yang menghasilkan tampilan disimpan di view 
	function edit($id)
	{
		$this->prosespasien->selectdata($id);
		$this->tpl = new Template("templates/form.html");
		$this->tpl->replace("DATA_TITLE", "Edit Data");
		$this->tpl->replace("DATA_BUTTON", 'id_edit');
		$this->tpl->replace("GET_ID", $id);
		$this->tpl->replace("DATA_NIK", $this->prosespasien->getNik(0));
		$this->tpl->replace("DATA_NAMA", $this->prosespasien->getNama(0));
		$this->tpl->replace("DATA_TEMPAT", $this->prosespasien->getTempat(0));
		$this->tpl->replace("DATA_TGL", $this->prosespasien->getTl(0));
		$this->tpl->replace("DATA_EMAIL", $this->prosespasien->getemail(0));
		$this->tpl->replace("DATA_GENDER", $this->prosespasien->getGender(0));
		$this->tpl->replace("DATA_TELP", $this->prosespasien->getnotelp(0));
		$this->tpl->write();
		// $this->prosespasien->add($id);
		// header("location:index.php");
	}
	function add()
	{
		$this->tpl = new Template("templates/form.html");
		$this->tpl->replace("DATA_TITLE", "Tambah Data");
		$this->tpl->replace("DATA_BUTTON", 'add');
		$this->tpl->write();
	}
}
