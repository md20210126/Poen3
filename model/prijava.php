<?php 
    class Prijava {
        public $id;
        public $predmet;
        public $katedra;
        public $sala;
        public $datum;

        public function __construct($id = null, $predmet = null, $katedra = null, $sala = null, $datum = null)
        {
            $this->id = $id;
            $this->predmet = $predmet;
            $this->katedra = $katedra;
            $this->sala = $sala;
            $this->datum = $datum;
        }

        public static function getAll(mysqli $conn) {
            $query_string = "SELECT * FROM prijave";
            return $conn->query($query_string);
        }

        public static function deleteById($id, mysqli $conn)
        {
            $query_string = "DELETE FROM prijave WHERE id=$id";
            return $conn->query($query_string);
        }

        
        public static function getbyId($id, mysqli $conn) {
            $query_string = "SELECT * FROM prijave WHERE id=$id";
            return $conn->query($query_string);
        }

        public static function update(Prijava $prijava, mysqli $conn) {
            $query = "
            UPDATE prijave 
            SET predmet = '{$_POST['predmet']}', 
                katedra = '{$_POST['katedra']}', 
                sala = '{$_POST['sala']}', 
                datum = '{$_POST['datum']}' 
            WHERE id = {$_POST['id_predmeta']}
    ";
        
            return $conn->query($query);
        }


        public static function add(Prijava $prijava, mysqli $conn)
        {
            $query_string = "INSERT INTO prijave(predmet, katedra, sala, datum) VALUES ('$prijava->predmet', '$prijava->katedra', '$prijava->sala', '$prijava->datum')";
            return $conn->query($query_string);
        }


}


?>