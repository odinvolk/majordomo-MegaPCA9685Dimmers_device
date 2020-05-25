<?php

//Выключение диммируемого канала
if ($this->getProperty('Dimmable') == 1) {
$stored_value = file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?pt=".$this->getProperty('Port')."&ext=".$this->getProperty('Ext')."&cmd=get");

file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":0");

$this->setProperty('status', 0);
$this->setProperty('level', 0);
$this->setProperty('Direction', Down);


If ($stored_value <> 0) {
$this->setProperty('levelS', $stored_value);
}
return "";
    
}

//Стандартное выключение выхода
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":0");
$this->setProperty('status', 0);
