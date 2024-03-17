<?php
class Mahasiswa_model{
    private $tabel='pendaftaran_mahasiswa';
    private $db;
    public function __construct(){
        $this->db=new Database;
    }

    public function getAllMhs(){
        $this->db->query('SELECT * FROM '. $this->tabel);
        return $this->db->resultAll();
    }
    public function cariDataMahasiswa(){
        $keyword = $_POST['keyword'];
        $this->db->query("SELECT * FROM mahasiswa WHERE nama LIKE :keyword");
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $this->db->query('SELECT * FROM '. $this->tabel .' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->resultSingle();
    }
    public function hapusDataMahasiswa($id){
        $this->db->query('DELETE FROM '. $this->tabel .' WHERE id=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function tambahDataMahasiswa($data){
        $query="INSERT INTO mahasiswa
                            VALUES 
                            ('',:nama,:asal_sekolah,:jenis_kelamin,:alamat)";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('asal_sekolah',$data['asal_sekolah']);
        $this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('agama',$data['agama']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data){
        $query="UPDATE mahasiswa SET
                        nama= :nama,
                        asal_sekolah= :asal_sekolah,
                        jenis_kelamin=:jenis_kelamin,
                        alamat=:alamat 
                        agama=:agama WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('asal_sekolah',$data['asal_sekolah']);
        $this->db->bind('jenis_kelamin',$data['jenis_kelamin']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('agama',$data['agama']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}