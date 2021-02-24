<?php
    include "lib/database.php";
    include "helpers/format.php"
?>

<?php

    class khachhangthuong
    {
        private $db;
        private $fm;

        public function __construct(){
            $this->db = new Database();
            $this->fm = new Format();
        }

        public function insert_khachhangthuong($sdt,$diachi,$dichvudangky,$content){
            $sdt = $this->fm->validation($sdt);
            $diachi = $this->fm->validation($diachi);
            $dichvudangky = $this->fm->validation($dichvudangky);
            $content = $this->fm->validation($content);

    
            $sdt = mysqli_real_escape_string($this->db->link, $sdt);
            $diachi = mysqli_real_escape_string($this->db->link, $diachi);
            $dichvudangky = mysqli_real_escape_string($this->db->link, $dichvudangky);
            $content = mysqli_real_escape_string($this->db->link, $content);
    
            if(empty($sdt) || empty($diachi) || empty($dichvudangky)){
                $alert = "sdt and pass and dichvudangky must be not empty";
                return $alert;
            }else{
                $query = "INSERT INTO khachhang_thuong (sdt,diachi,dichvudangky,content,status) VALUES ('$sdt', '$contact', '$resInfo','$content',1)";
                $result = $this->db->select($query);
                
            }
        }
        public function show_khachhangthuong(){
            $query = "SELECT * FROM khachhang_thuong order by id ";
            $result = $this->db->select($query);
            return $result;
        }
        public function delete_khachhangthuong($id){
            $query = "DELETE FROM khachhang_thuong WHERE id = '$id' ";
            $result = $this->db->delete($query);
            return $result;
        }
        public function update_khachhangthuong($id,$status,$modifiedby){
            $query = "UPDATE khachhang_thuong
            SET status =$status , modifiedby = '$modifiedby'
            WHERE id = $id";
            $result = $this->db->update($query);
            return $result;
        }
    }
?>