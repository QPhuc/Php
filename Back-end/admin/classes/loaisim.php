<?php

    class loaisim
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_loaisim($tenloaisim,$content){
            $tenloaisim = $this->fm->validation($tenloaisim);
            $content = $this->fm->validation($content);
            
            $tenloaisim = mysqli_real_escape_string($this->db->link, $tenloaisim);
            $content = mysqli_real_escape_string($this->db->link, $content);
    
            if(empty($tenloaisim)){
                $alert = "loai sim must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO loaisim (tenloaisim,content) VALUES ('$tenloaisim','$content')";
                $result = $this->db->select($query);
            }
        }
        public function show_loaisim(){
            $query = "SELECT * FROM loaisim order by id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_loaisimExceptNamsinh(){
            $query = "SELECT * FROM loaisim EXCEPT SELECT * FROM loaisim where tenloaisim='Sim Năm Sinh' order by id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_loaisim($id){
            $query = "DELETE FROM loaisim WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_loaisim($tenloaisim,$content,$id){
            $query = "UPDATE loaisim
            SET tenloaisim ='$tenloaisim' ,content='$content'
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>