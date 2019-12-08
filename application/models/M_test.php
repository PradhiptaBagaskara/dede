<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_test extends CI_Model {

	function orderId($id="")
{
	$id = "";
	$arrayName = array(
array("id_cerita" => 1,
					"id_kategori" => $id,
					"img" => "images.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 10,
					"id_kategori" => $id,
					"img" => "mieeee.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 9,
					"id_kategori" => $id,
					"img" => "images.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 6,
					"id_kategori" => $id,
					"img" => "pakan.png",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 8,
					"id_kategori" => $id,
					"img" => "images.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 7,
					"id_kategori" => $id,
					"img" => "pamflet.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 2,
					"id_kategori" => $id,
					"img" => "PANGSITONB.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 5,
					"id_kategori" => $id,
					"img" => "ppp.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 3,
					"id_kategori" => $id,
					"img" => "images.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 ),
array("id_cerita" => 4,
					"id_kategori" => $id,
					"img" => "ppp.jpg",
					"penulis" => "Santi",
					"judul" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
					
					"Diskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae nulla eget tellus egestas rutrum. Nunc quis lobortis ex. Proin. ",
					"isi" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the $id500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the $id960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum"
					 )
);
return $arrayName;
}

}

/* End of file M_test.php */
/* Location: ./application/models/M_test.php */ ?>