<?php

$level = $this->getProperty('level');
$step = $this->getProperty('step');
if ($level < 95) {
$level+=$step;
$this->setProperty('level', $level);
$this->setProperty('memory', $level);
}
else { 
$this->setProperty('level', 100); //100
}
$this->callMethod('levelUpdated'); //dimming
$this->callMethod('dimming');
