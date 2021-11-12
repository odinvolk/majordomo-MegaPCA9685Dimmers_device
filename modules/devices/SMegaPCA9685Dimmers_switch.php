<?php

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$Ext = $this->getProperty('Ext');

//Переключение диммируемого канала
if ($this->getProperty('Dimmable') == 1) {
$value = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext".$Ext."&cmd=get");

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
file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port."e".$Ext.":2");
$state = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext".$Ext."&cmd=get");

if ($state == "ON") {
  $this->setProperty('status', 1);
} else {
  $this->setProperty('status', 0);
}
