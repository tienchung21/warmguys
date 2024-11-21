<?php
    class connect_database{
        public function connect(){
            $con = mysqli_connect("localhost", "root", "", "warmguyss");
            if(!$con){
                echo 'Không kết nối được với Database';
                exit();
            }
            else{
                return $con;
            }
        }
    }
?>