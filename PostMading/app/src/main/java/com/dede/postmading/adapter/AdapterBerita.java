package com.dede.postmading.adapter;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.dede.postmading.R;
import com.dede.postmading.ScrollingActivity;
import com.dede.postmading.response.DataItem;
import com.squareup.picasso.Picasso;

import java.util.List;

public class AdapterBerita extends RecyclerView.Adapter<AdapterBerita.MyViewHolder> {

    Context context;
    List<DataItem> berita;
    public AdapterBerita(Context context, List<DataItem> data_berita) {
        // Inisialisasi
        this.context = context;
        this.berita = data_berita;
    }

    @Override
    public MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {
        // Layout inflater
        View view = LayoutInflater.from(context).inflate(R.layout.mading_item, parent, false);

        // Hubungkan dengan MyViewHolder
        MyViewHolder holder = new MyViewHolder(view);
        return holder;
    }

        @Override
    public void onBindViewHolder(MyViewHolder holder, final int position) {
        // Set widget
        holder.tvJudul.setText(berita.get(position).getJudul());
        holder.tvTglTerbit.setText(berita.get(position).getTgl());

        // Dapatkan url gambar
        final String urlGambarBerita = "http://192.168.2.4/dede/uploads/" + berita.get(position).getImg();
        // Set image ke widget dengna menggunakan Library Piccasso
        // krena imagenya dari internet
        Picasso.with(context).load(urlGambarBerita).into(holder.ivGambarBerita);

        // Event klik ketika item list nya di klik
        holder.itemView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // Mulai activity Detail
                Intent varIntent = new Intent(context, ScrollingActivity.class);
                // sisipkan data ke intent
                varIntent.putExtra("JDL_BERITA", berita.get(position).getJudul());
                varIntent.putExtra("TGL_BERITA", berita.get(position).getTgl());
                varIntent.putExtra("PNS_BERITA", "Admin");
                varIntent.putExtra("FTO_BERITA", urlGambarBerita);
                varIntent.putExtra("ISI_BERITA", berita.get(position).getIsi());

                // method startActivity cma bisa di pake di activity/fragment
                // jadi harus masuk ke context dulu
                context.startActivity(varIntent);
            }
        });
    }
    // Menentukan Jumlah item yang tampil
    @Override
    public int getItemCount() {
        return berita.size();
    }

    public class MyViewHolder extends RecyclerView.ViewHolder {
        // Deklarasi widget
        ImageView ivGambarBerita;
        TextView tvJudul, tvTglTerbit, tvPenulis;
        public MyViewHolder(View itemView) {
            super(itemView);
            // inisialisasi widget
            ivGambarBerita = (ImageView) itemView.findViewById(R.id.ivPosterBerita);
            tvJudul = (TextView) itemView.findViewById(R.id.tvJudulBerita);
            tvTglTerbit = (TextView) itemView.findViewById(R.id.tvTglTerbit);
            tvPenulis = (TextView) itemView.findViewById(R.id.tvPenulis);
        }
    }
}
