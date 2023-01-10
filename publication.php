<?php 

$item = SelectWhere('t_posts_etd','Id_Post',$_GET['publication']);

publication($item['Id_Etd_Post'],$item['Image_Post'],$item['Date_Post'],$item['Titre_Post'],$item['Message_Post']);
?>