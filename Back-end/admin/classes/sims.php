<?php

    class sims
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_sim($sdt,$gianhap,$giaban,$idloaisim,$idkho){
            $sdt = $this->fm->validation($sdt);
            $gianhap = $this->fm->validation($gianhap);
            $giaban = $this->fm->validation($giaban);
            $idloaisim = $this->fm->validation($idloaisim);
            $idkho = $this->fm->validation($idkho);
            
            $sdt = mysqli_real_escape_string($this->db->link, $sdt);
            $gianhap = mysqli_real_escape_string($this->db->link, $gianhap);
            $giaban = mysqli_real_escape_string($this->db->link, $giaban);
            $idloaisim = mysqli_real_escape_string($this->db->link, $idloaisim);
            $idkho = mysqli_real_escape_string($this->db->link, $idkho);
            $d=strtotime("+7 Hours");
            $time=date("Y-m-d H:i:s", $d);
            if(empty($sdt)){
                $alert = "sdt must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO sim (sdt,gianhap,giaban,status,idloaisim,idkho,createddate) VALUES ('$sdt','$gianhap','$giaban',1,'$idloaisim','$idkho',timestamp '$time')";
                $result = $this->db->select($query);
            }
        }
        public function show_sim(){
            $query = "SELECT sim.id,sdt,gianhap,giaban,tenkho,tenloaisim,createddate FROM sim,loaisim,kho 
            WHERE sim.idloaisim = loaisim.id AND sim.idkho = kho.id order by sim.id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_simchuaban(){
            $query = "SELECT * FROM sim 
            WHERE status=1 order by sim.id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_simById($idloaisim){
            $query = "SELECT sim.id,sdt,giaban FROM sim,loaisim 
            WHERE sim.idloaisim = loaisim.id AND loaisim.id = $idloaisim order by sim.id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_sim($id){
            $query = "DELETE FROM sim WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_sim($sdt,$gianhap,$giaban,$idloaisim,$idkho,$id){
            $query = "UPDATE sim
            SET sdt ='$sdt', gianhap ='$gianhap', giaban ='$giaban', idloaisim =$idloaisim, idkho =$idkho
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>