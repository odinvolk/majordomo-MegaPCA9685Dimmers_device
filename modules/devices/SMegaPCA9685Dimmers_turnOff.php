<?php

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$Ext = $this->getProperty('Ext');

//Выключение диммируемого канала
if ($this->getProperty('Dimmable') == 1) {
$stored_value = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext".$Ext."&cmd=get");

//http://192.168.10.101/sec/?pt=34&ext=1&epwm=4
file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext=".$Ext."&epwm=0");
    
$this->setProperty('status', 0);
$this->setProperty('level', 0);
$this->setProperty('Direction', Down);


If ($stored_value <> 0) {
$this->setProperty('levelS', $stored_value);
}
return "";
    
}

//Стандартное выключение выхода
//file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port."e".$Ext.":0");
file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext=".$Ext."&epwm=0");
$this->setProperty('status', 0);
