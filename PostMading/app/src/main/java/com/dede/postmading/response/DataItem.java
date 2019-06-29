package com.dede.postmading.response;

public class DataItem{
	private String img;
	private String tgl;
	private String id;
	private String judul;
	private String isi;

	public void setImg(String img){
		this.img = img;
	}

	public String getImg(){
		return img;
	}

	public void setTgl(String tgl){
		this.tgl = tgl;
	}

	public String getTgl(){
		return tgl;
	}

	public void setId(String id){
		this.id = id;
	}

	public String getId(){
		return id;
	}

	public void setJudul(String judul){
		this.judul = judul;
	}

	public String getJudul(){
		return judul;
	}

	public void setIsi(String isi){
		this.isi = isi;
	}

	public String getIsi(){
		return isi;
	}

	@Override
 	public String toString(){
		return 
			"DataItem{" + 
			"img = '" + img + '\'' + 
			",tgl = '" + tgl + '\'' + 
			",id = '" + id + '\'' + 
			",judul = '" + judul + '\'' + 
			",isi = '" + isi + '\'' + 
			"}";
		}
}
