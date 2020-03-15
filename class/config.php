<?php
    class config{
        function db(){
            $connect = mysqli_connect('localhost','root','','teacher_ms');
            return $connect;
        }
    }
?>