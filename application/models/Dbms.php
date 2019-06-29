<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dbms extends CI_Model {




	public function masukan($img='',$judul='', $isi='')
	{
		$data = array('img' => $img,
						'judul'=> $judul,
						'isi'=>$isi );
		$this->db->insert('artikel', $data);
	}
public function tampil()
{
	$this->db->order_by('date', 'desc');
	return $this->db->get('artikel');
}

public function delete($value='', $img)
{
	$this->db->where('id', $value);
	$this->db->delete('artikel');
	@unlink('uploads/'.$img);
}
function update($id, $judul='', $artikel='', $img=''){
	$data = array('isi' => $judul,
	 				'judul'=>$isi,
	 				'img'=>$img);
	$this->db->where('id', $id);
	$this->db->update('artikel', $data);
}

public function edit($id='')
{

	$this->db->where('id', $id);
	return $this->db->get('artikel');

}
public function tampilApi()
{
	$this->db->select("id, img, judul, isi, DATE_FORMAT(date, '%d %M %Y, %k:%i:%s') AS tgl");
	$this->db->order_by('date', 'desc');	
	return $this->db->get('artikel');
}

}
        



 