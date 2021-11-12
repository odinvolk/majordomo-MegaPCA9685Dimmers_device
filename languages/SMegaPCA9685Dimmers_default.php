<?php

$dictionary=array(
   'SMegaPCA9685Dimmers_SENSOR_PASS_BATTERY' => 'Пересылка данных',
   'SMegaPCA9685Dimmers_SENSOR_PASS_BATTERY_DESCRIPTION' => 'Выставляет свойства в связанном объекте и посылает данные в HomeKit',
   'SMegaPCA9685Dimmers_PATTERN_BRIGHTNESS' => 'brighness',
   'SMegaPCA9685Dimmers_PATTERN_COLORTEMPERATURE' => 'color temperature'
);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>
