package com.dede.postmading.api;

import com.dede.postmading.response.ResponseBerita;

import retrofit2.Call;
import retrofit2.http.GET;

public interface ApiServices {

    @GET("api")
    Call<ResponseBerita> getResponse();
}
