<?php

    class kho
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_kho($tenkho){
            $tenkho = $this->fm->validation($tenkho);
            
            $tenkho = mysqli_real_escape_string($this->db->link, $tenkho);
    
            if(empty($tenkho)){
                $alert = "loai kho must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO kho (tenkho) VALUES ('$tenkho')";
                $result = $this->db->select($query);
            }
        }
        public function show_kho(){
            $query = "SELECT * FROM kho order by id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_kho($id){
            $query = "DELETE FROM kho WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_kho($tenkho,$id){
            $query = "UPDATE kho
            SET tenkho ='$tenkho' 
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>