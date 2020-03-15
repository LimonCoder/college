<?php
    require "../class/config.php";
    $config = new config();
    $user = "CREATE TABLE `teacher_ms`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `phone` INT(15) NOT NULL , `permission` INT NOT NULL , `pass` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    echo $config->db()->query($user);

?>