<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Buku;
use App\Models\Petugas;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota" => "12345",
            "nama_anggota" => "Sakhi Bahari",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "08123456789",
            "alamat_anggota" => "Condet",
        ]);

        Anggota::create([
            "kode_anggota" => "987654321",
            "nama_anggota" => "Feris Maulagi",
            "jk_anggota" => "L",
            "jurusan_anggota" => "RP",
            "no_telp_anggota" => "08",
            "alamat_anggota" => "LA",
        ]);

        Petugas::create([
            "nama_petugas" => "Syaiful Bazar",
            "jabatan_petugas" => "Kepala",
            "no_telp_petugas" => "0812121212",
            "alamat_petugas" => "Condet",
        ]);

        Petugas::create([
            "nama_petugas" => "Maulagi Hapid",
            "jabatan_petugas" => "Petugas",
            "no_telp_petugas" => "0834343434",
            "alamat_petugas" => "Pulau Condet",
        ]);

        Buku::create([
            "kode_buku" => "111",
            "judul_buku" => "Kisah Pilu Ardiyan",
            "penulis_buku" => "Syarif Cowboy",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2020",
            "stok" => 30,
           ]);
    
           Buku::create([
            "kode_buku" => "222",
            "judul_buku" => "Kisah Pilu Ahmad",
            "penulis_buku" => "Farid Jarwo",
            "penerbit_buku" => "Gramedia",
            "tahun_penerbit" => "2020",
            "stok" => 25,
           ]);

           Rak::create([
            "nama_rak" => "Fantasi",
            "lokasi_rak" => "lt-2",
            "buku_id" => 1,
          ]);
   
        
          Rak::create([
           "nama_rak" => "Biologi",
           "lokasi_rak" => "lt-1",
           "buku_id" => 2,
            ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-02",
           "tanggal_kembali" => "2023-10-07",
           "buku_id" => 1,
           "anggota_id" => 1,
           "petugas_id" => 1,
         ]);
   
         Peminjaman::create([
           "tanggal_pinjam" => "2023-10-02",
           "tanggal_kembali" => "2023-10-07",
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2,
         ]);
   
         Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-08",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-04",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
        ]);
    }
}
