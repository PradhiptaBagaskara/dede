package com.dede.postmading.response;

import java.util.List;

public class ResponseBerita{
	private boolean msg;
	private List<DataItem> data;

	public void setMsg(boolean msg){
		this.msg = msg;
	}

	public boolean isMsg(){
		return msg;
	}

	public void setData(List<DataItem> data){
		this.data = data;
	}

	public List<DataItem> getData(){
		return data;
	}

	@Override
 	public String toString(){
		return 
			"ResponseBerita{" + 
			"msg = '" + msg + '\'' + 
			",data = '" + data + '\'' + 
			"}";
		}
}