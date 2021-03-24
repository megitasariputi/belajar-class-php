<?php
    class pesawat_terbang{
        public $warna_pesawat;

        // method/func yang akan dijalankan pertama ketika objek dibuat
        public function __construct($warna_awal)
        {
            $this->warna_pesawat = $warna_awal;
        }

        // diberikan dan ditampilkan didalam 1 fungsi.
        public function ganti_warna($warna_baru){
            $this->warna_pesawat=$warna_baru;
            return $this->warna_pesawat;
        }

        // untuk memberikan warna 
        public function set_warna($warna_baru){
            $this -> warna_pesawat = $warna_baru;
        }

        // untuk menampilkan yang sudah diberikan
        public function get_warna(){
            return $this -> warna_pesawat;
        }
        
    }

    class mobil{
        protected $warna_mobil;
        protected $kecepatan_mobil;

        public function __construct($warna_awal_mobil){
            $this -> warna_mobil = $warna_awal_mobil;
            $this -> kecepatan_mobil = 0;
        }
        
        public function tambah_kecepatan($kecepatan_baru){
            $this -> kecepatan_mobil = $kecepatan_baru
            + $this -> kecepatan_mobil;
        }

        public function set_warna($warna_baru){
            $this -> warna_mobil = $warna_baru;
        }

        public function get_warna(){
            return $this -> warna_mobil;
        }

        public function get_kecepatan()
        {
            return $this->kecepatan_mobil;
        }
    }
    
    class mobil_balap extends mobil{
        public function tambah_kecepatan($kecepatan_baru){
            $this -> kecepatan_mobil = (2*$kecepatan_baru)
            + $this -> kecepatan_mobil;
        }
    }

    class lingkaran{ 
        protected $r;
        protected $keliling;
        protected $luas;

        public function __construct($jari)
        {
            $this -> r = $jari;
        }

        public function get_keliling(){
            $this -> keliling = 2 * 3.14 * $this -> r;
            return $this -> keliling;
        }

        public function get_luas(){
            $this -> luas = 3.14 * ($this -> r * $this -> r);
            return $this -> luas;
        }
    }

    class segitiga{
        protected $alas;
        protected $tinggi;
        protected $sisi_a;
        protected $sisi_b;
        protected $sisi_c;
        protected $keliling;
        protected $luas;

        public function __construct($alas, $tinggi, $sisi_a, $sisi_b, $sisi_c)
        {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->sisi_a = $sisi_a;
            $this->sisi_b = $sisi_b;
            $this->sisi_c = $sisi_c;
        }

        public function get_keliling()
        {
            $this->keliling = $this->sisi_a + $this->sisi_b + $this->sisi_c;
            return $this->keliling;
        }

        public function get_luas()
        {
            $this->luas = $this->alas * $this->tinggi / 2;
            return $this->luas;
        }
    }

    class jajar_genjang{
        protected $alas;
        protected $tinggi;
        protected $sisi_a;
        protected $sisi_b;
        protected $keliling;
        protected $luas;

        public function __construct($alas, $tinggi, $sisi_a, $sisi_b)
        {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->sisi_a = $sisi_a;
            $this->sisi_b = $sisi_b;
        }

        public function get_keliling()
        {
            $this->keliling = 2*($this->sisi_a + $this->sisi_b);
            return $this->keliling;
        }

        public function get_luas()
        {
            $this->luas = $this->alas * $this->tinggi;
            return $this->luas;
        }
    }
?>