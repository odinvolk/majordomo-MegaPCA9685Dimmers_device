<?php

$level = $this->getProperty('level');
$step = $this->getProperty('step');
if ($level > 5) {
$level-=$step;
$this->setProperty('level', $level);
$this->setProperty('memory', $level);
}
else { 
$this->setProperty('level', 0);
}
$this->callMethod('levelUpdated'); //dimming
$this->callMethod('dimming');
