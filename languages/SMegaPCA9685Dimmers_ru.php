<?php

$dictionary=array(
   'DEVICES_LINK_SENSOR_PASS_BATTERY' => 'Пересылка данных',
   'DEVICES_LINK_SENSOR_PASS_BATTERY_DESCRIPTION' => 'Выставляет свойства в связанном объекте и посылает данные в HomeKit',
   'SMegaPCA9685Dimmers_PATTERN_BRIGHTNESS' => 'ярк|ярч|яркость',
   'SMegaPCA9685Dimmers_PATTERN_COLORTEMPERATURE' => 'температур|температура'
);

foreach ($dictionary as $k=>$v) {
 if (!defined('LANG_'.$k)) {
  define('LANG_'.$k, $v);
 }
}

?>
