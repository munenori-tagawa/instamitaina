<?php

$sql= "SELECT * FROM images ORDER BY create_date DESC";

$sth = $db->prepare($sql);
$sth->execute();
$data = $sth->fetchAll();

return $data;