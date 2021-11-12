<?php

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$Ext = $this->getProperty('Ext');

//Включение диммируемого канала
if ($this->getProperty('Dimmable') == 1) {
    
$value = $this->getProperty('levelWork');
if ($value == 0 || $value == "") {
$value = $this->getProperty('maxWork');
}
//http://192.168.10.101/sec/?pt=34&ext=13&epwm=4095  levelSaved levelWork
//http://192.168.10.101/sec/?pt=34&ext=1&epwm=4
//file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext=".$Ext."&epwm=".$value);
file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port."e".$Ext.":".$value);

$this->setProperty('status', 1);
$value = round($value/4095*100, 0);
$this->setProperty('levelSaved', $value);
$this->setProperty('Direction', 'Up');

return "";
}

//Стандартное включение выхода
//file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port."e".$Ext.":4095");
file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext=".$Ext."&epwm=4095");
$this->setProperty('status', 1);

//$this->setProperty('status', 1);
//$levelSaved=$this->getProperty('levelSaved');

//if ($levelSaved>0) {
//  $this->setProperty('level', $levelSaved);
//} else {
//  $this->setProperty('level', 100);
//}
