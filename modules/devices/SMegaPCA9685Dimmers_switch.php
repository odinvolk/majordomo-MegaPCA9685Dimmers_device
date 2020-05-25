<?php

//Переключение диммируемого канала
if ($this->getProperty('Dimmable') == 1) {
$value = file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?pt=".$this->getProperty('Port')."&ext=".$this->getProperty('Ext')."&cmd=get");


If ($value == 0 || $value == "") {
$this->callMethod('turnOn');
} else {
$this->callMethod('turnOff');
}
return "";
}

//Отпускание клавиши выключателя игнорируем
if ($_GET['m'] == 1) {
return "";
}

//Стандартное переключение выхода
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":2");
$state = file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?pt=".$this->getProperty('Port')."&ext=".$this->getProperty('Ext')."&cmd=get");

if ($state == "ON") {
  $this->setProperty('status', 1);
} else {
  $this->setProperty('status', 0);
}
