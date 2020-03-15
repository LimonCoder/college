<?php
    require "config.php";
    class app extends config {
        function insert($query)
        {
            $result = $this->db()->query($query);


        }
        function count($query){
            return mysqli_num_rows(mysqli_query($this->db(),$query));
        }
        function view($query)
        {

            $c = mysqli_query($this->db(),$query);
            $rows = array();
            while($row= mysqli_fetch_assoc($c))
            {
                array_push($rows,$row);
            }
            return $rows;
        }
        function view_single($query)
        {
            $this->db()->query($query);

            $c = mysqli_query($this->db(),$query);
            $row = mysqli_fetch_assoc($c);
            return $row;

        }
    }

?>