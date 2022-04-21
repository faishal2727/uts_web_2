<?php

$hostDB = 'ec2-23-20-224-166.compute-1.amazonaws.com';
$portDB = '5432';
$nameDB = 'dfck7gjba85fbj';
$userDB = 'efrowscdzygdst';
$pwDB = '5f2fcec3c399891a60a2be25ad5eb5e6e649a9ab05544c8ac0979a671eac55b6';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");
session_start();
if($connection){
    
}else{
    
}