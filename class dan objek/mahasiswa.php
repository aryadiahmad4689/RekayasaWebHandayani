<?php
class Mahasiswa{
    private $nim;
    private $nama;
    private $jurusan;

    public function setNim($in_nim){
        $this->nim = $in_nim;
    }

    public function setNama($in_nama){
        $this->nama = $in_nama;
    }

    public function getNim(){
        $this->nim;
    }

    public function getNama(){
        $this->nama;
    }


    public function setJurusan($in_jurusan){
        $this->jurusan = $in_jurusan;
    }

    public function getJurusan(){
        $this->jurusan;
    }
}


?>