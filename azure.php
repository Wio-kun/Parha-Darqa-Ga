<?php

                                                                                                                                                                                                                                                                                    $passord ="Bjarnepus56";

$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "SSL/DigiCertGlobalRootCA.crt.pem", NULL, NULL); mysqli_real_connect($con, "wio.mysql.database.azure.com", "wiozai", "$passord", "elden_ring_db", 3306, MYSQLI_CLIENT_SSL);


?>