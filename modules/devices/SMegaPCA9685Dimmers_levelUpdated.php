<?php

/*
 $tm=time();
 $this->setProperty('updated', $tm);
 $this->setProperty('updatedText', date('H:i', $tm));
*/

$level = $this->getProperty('level');
$minWork = $this->getProperty('minWork');
$maxWork = $this->getProperty('maxWork');

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$Ext = $this->getProperty('Ext');

$statusUpdated = 0;

if ($level > 0) {
    $this->setProperty('levelSaved', $level);
    if (!$this->getProperty('status')) {
        $statusUpdated = 1;
        $this->setProperty('status', 1, false);
    }
    if ($minWork != $maxWork) {
        DebMes("Level updated to " . $level ." ".$_SERVER['REQUEST_URI'], 'dimming');
        $levelWork = round($minWork + round(($maxWork - $minWork) * $level / 100));
        if ($this->getProperty('levelWork') != $levelWork) {
            DebMes("Setting new levelWork to " . (int)$levelWork, 'dimming');
            $this->setProperty('levelWork', (int)$levelWork);
        }
    $val = $this->getProperty('levelWork');
    file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port."e".$Ext.":".$val);
    $this->setProperty('levelSaved', $level);
    $this->callMethod('turnOn');
    }
} else {
    if ($this->getProperty('status')) {
        $statusUpdated = 1;
        $this->setProperty('status', 0);
    }
    $this->setProperty('levelWork', 0);
    $this->callMethod('turnOff');
}

if (!$statusUpdated) {
    $this->callMethod('logicAction');
    include_once(DIR_MODULES . 'devices/devices.class.php');
    $dv = new devices();
    $dv->checkLinkedDevicesAction($this->object_title, $level);
}
//Нижеследующая часть кода выполняется после перемещения ползунка слайдера
//$val = $this->getProperty('levelWork');
//If ($val == 0) {
//$this->callMethod('turnOff');
//return"";
//}
//$val = round($val/100*4095, 0);
//file_get_contents("http://".$this->getProperty('ipAddress')."/".$this->getProperty('Password')."/?cmd=".$this->getProperty('Port')."e".$this->getProperty('Ext').":".$val);
//$this->setProperty('levelSaved', $level);
//$this->callMethod('turnOn');
