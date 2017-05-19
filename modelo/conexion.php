<?php
    $serverName = "serverName\DESKTOP-8BR5T06\JOSEMANUEL"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"eventlog", "UID"=>"", "PWD"=>"");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
         echo "Conexión establecida.<br />";
    }else{
         echo "Conexión no se pudo establecer.<br />";
         die( print_r( sqlsrv_errors(), true));
    }
?>