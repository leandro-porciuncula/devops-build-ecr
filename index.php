<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
   <HEAD>
      <TITLE>
         Cloud Treinamentos
      </TITLE>
        <style>
        h1 {
                margin-top: 100px;
            color: rgb(245, 125, 32);
        }
        body {
            background: black;
            font: normal 18pt arial;
            color: white;
            text-align: center;

        }
        </style>
   </HEAD>
<BODY>
<?php

  $ip = "http://169.254.169.254/latest/meta-data/public-ipv4";
  $url = "http://169.254.169.254/latest/meta-data/instance-id";
  $instance_id = file_get_contents($url);
  $public_ip = file_get_contents($ip);
  echo " <h1>  ID da instância: <b>" . $instance_id . "</b><br/></font> </h1> ";
  echo " <h1>  IP Publico da instância: <b>" . $public_ip . "</b><br/></font> </h1> ";
?>


</BODY>
