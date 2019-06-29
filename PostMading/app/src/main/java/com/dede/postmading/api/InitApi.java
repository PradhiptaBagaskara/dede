package com.dede.postmading.api;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class InitApi {
    public static String API_URL = "http://192.168.2.4/dede/";

    public static Retrofit setInit() {
        return new Retrofit.Builder().baseUrl(API_URL)
                .addConverterFactory(GsonConverterFactory.create())
                .build();
    }

    public static ApiServices getInstance() {
        return setInit().create(ApiServices.class);
    }
}
