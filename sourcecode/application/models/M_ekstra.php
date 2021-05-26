<?php 
class M_ekstra extends CI_Model{

	function get_all_ekstra(){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstra");
		return $hsl;
	}

	function simpan_ekstra($nama,$jenis,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_ekstra (ekstra_nama,ekstra_jenis,ekstra_photo) VALUES ('$nama','$jenis','$photo')");
		return $hsl;
	}
	function simpan_ekstra_tanpa_img($nama,$jenis,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_ekstra (ekstra_nama,ekstra_jenis,ekstra_photo) VALUES ('$nama','$jenis','$photo')");
		return $hsl;
	}

	function update_ekstra($kode,$nama,$jenis,$photo){
		$hsl=$this->db->query("UPDATE tbl_ekstra SET ekstra_nama='$nama',ekstra_jenis='$jenis',ekstra_photo='$photo' WHERE ekstra_id='$kode'");
		return $hsl;
	}
	function update_ekstra_tanpa_img($kode,$nama,$jenis){
		$hsl=$this->db->query("UPDATE tbl_ekstra SET ekstra_nama='$nama',ekstra_jenis='$jenis' WHERE ekstra_id='$kode'");
		return $hsl;
	}
	function hapus_ekstra($kode){
		$hsl=$this->db->query("DELETE FROM tbl_ekstra WHERE ekstra_id='$kode'");
		return $hsl;
	}

	//front-end
	function ekstra(){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstra");
		return $hsl;
	}
	function ekstra_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_ekstra limit $offset,$limit");
		return $hsl;
	}

}