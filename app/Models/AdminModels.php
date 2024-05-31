<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModels extends Model
{
    public function allData2()
    {
        // return DB::table('tb_dosen')->get();
        $data = DB::select(
            'SELECT a.id_matakuliah as id_matakuliah, a.nidn as nidn, a.nama_dosen as nama_dosen, a.foto_dosen as foto_dosen,
            b.kode_matakuliah as kode_matakuliah, b.nama_matakuliah as nama_matakuliah, a.id_prodi as id_prodi, c.nama_prodi as nama_prodi,
            a.id_jurusan as id_jurusan, d.nama_jurusan as nama_jurusan FROM tb_dosen AS a,mata_kuliah AS b,prodi AS c, jurusan AS d
            WHERE a.id_matakuliah = b.id_matakuliah AND a.id_prodi = c.id_prodi AND a.id_jurusan = d.id_jurusan ORDER BY a.nama_dosen ASC'
        );
        return $data;
    }

    public function allData3(){
        return DB::table('mata_kuliah')->get();

    }

    public function detailData($id)
    {
        return DB::table('user')->where('id', $id)->first();
    }
    public function addData($data)
    {
        DB::table('user')->insert($data);
    }

    public function editData($id, $data)
    {
        DB::table('user')->where('id', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('user')->where('id', $id)->delete();
    }
}
