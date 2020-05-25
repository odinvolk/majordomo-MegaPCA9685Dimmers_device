<?php

//Включение диммируемого канала
if ($this->getProperty('Dimmable') == 1) {
$value = $this->getProperty('levelWork');
//If ($value == 0 || $value == "") {
//$value = $this->getProperty('levelWork');
//}


file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":".$value);


$this->setProperty('status', 1);
//$value = round($value/4095*100, 0);
$this->setProperty('levelWork', $value);

return "";
}

//Стандартное включение выхода
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":1");
$this->setProperty('status', 1);

//$this->setProperty('status', 1);
//$levelSaved=$this->getProperty('levelSaved');

//if ($levelSaved>0) {
//  $this->setProperty('level', $levelSaved);
//} else {
//  $this->setProperty('level', 100);
//}
