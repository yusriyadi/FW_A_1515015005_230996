<?php


use App\pengguna;


Route::get('/', function () {
    return view('yusriyadi');
});
Route::get('/master', function () {
    return view('master');
});
Route::auth();
// Route::get('/public', function () {
//     return "Nama : yusriyadi <br> Nim : 1515015005";
// });
// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "<h1>Hallo sayang dari $pengguna <h1>";
// });
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/lihat/{ruangan}','ruangancontroller@lihat');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('mahasiswa/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');


Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');
Route::get('dosen/edit/{upil}','dosenController@edit');
Route::post('dosen/edit/{upil}','dosenController@update');
Route::get('dosen/{upil}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{upil}','dosenController@edit');
Route::get('dosen/hapus/{upil}','dosenController@hapus');



Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','dosen_matakuliahcontroller@lihat');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahcontroller@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahcontroller@hapus');

Route::get('jadwal_matkul','jadwal_matkulController@awal');
Route::get('jadwal_matkul/tambah','jadwal_matkulController@tambah');
Route::get('jadwal_matkul/lihat/{ii}','jadwal_matkulController@lihat');
Route::get('jadwal_matkul/edit/{ii}','jadwal_matkulController@edit');
Route::get('jadwal_matkul/hapus/{ii}','jadwal_matkulController@hapus');
Route::post('jadwal_matkul/simpan','jadwal_matkulController@simpan');

#modul 6
Route::get('mahasiswa/{mahasiswa}',"mahasiswaController@lihat");
Route::post('mahasiswa/simpan',"mahasiswaController@simpan");
Route::get('mahasiswa/edit/{mahasiswa}',"mahasiswaController@edit");
Route::post('mahasiswa/edit/simpan',"mahasiswaController@update");
Route::get('mahasiswa/hapus/{mahasiswa}',"mahasiswaController@hapus");






// Route::get('pengguna/simpan','PenggunaController@simpan');
