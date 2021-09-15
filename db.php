<?php

    $conn = mysqli_connect("localhost","root","","anita");
    if (mysqli_connect_errno()) {
        printf("conexion fallida %s\n",mysqli_connect_errno());
        exit();
    }



?>