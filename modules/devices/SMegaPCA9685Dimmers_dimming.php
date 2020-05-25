<?php

//Действия при срабатывании кнопки
if (isset($_GET['pt'])) {
$ot = $this->object_title;

//Если произошло длинное нажатие (m="2")
if ($_GET['m'] == "2") {
if ($this->getProperty('Direction') <> "Down") {
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":v7");
$this->setProperty('Direction', "Down");
} else {
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":^7");
$this->setProperty('Direction', "Up");
}
}

//Если произошло нажатие (click="1"), выполним включение или выключение
if ($_GET['click'] == "1") {
$value = file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?pt=".$this->getProperty('Port')."&ext".$this->getProperty('Ext')."&cmd=get");
if ($value <> "0") {
callMethod($ot.".turnOff");
} else {
callMethod($ot.".turnOn");
}
}

// Действие при отпускании кнопки ("m=1") после длинного нажатия ("m=2")
if ($_GET['m'] == "1") {
//"m=1" приходит после длинного нажатия (m=2)
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port').":x");
$stored_value = file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?pt=".$this->getProperty('Port')."&ext".$this->getProperty('Ext')."&cmd=get");
If ($stored_value <> 0) {
$this->setProperty('levelSaved', $stored_value);
}
}

$value = file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?pt=".$this->getProperty('Port')."&ext".$this->getProperty('Ext')."&cmd=get");
$value = round($value/4095*100, 0);
$this->setProperty('level', $value);
If ($value == 0 || $value == "") {
$this->setProperty('status', 0);
} else {
$this->setProperty('status', 1);
}
return "";
}


//Нижеследующая часть кода выполняется после перемещения ползунка слайдера
$val = $this->getProperty('level');
If ($val == 0) {
$this->callMethod('turnOff');
return"";
}
$val = round($val/100*4095, 0);
file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":".$val);
$this->setProperty('levelSaved', $val);
$this->callMethod('turnOn');
