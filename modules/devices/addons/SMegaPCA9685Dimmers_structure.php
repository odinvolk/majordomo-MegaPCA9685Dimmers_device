<?php

$this->device_types['dimmerpca'] = array(
    'TITLE'=>'Диммер MegaPCA9685',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SMegaPCA9685Dimmers',
    'PROPERTIES'=>array(
        'level'=>array('DESCRIPTION'=>'Значение слайдера (в диапазоне от 0 – 100)','ONCHANGE'=>'levelUpdated','DATA_KEY'=>1),
        'ipAddress'=>array('DESCRIPTION'=>'IP-адрес Меги','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'Password'=>array('DESCRIPTION'=>'Пароль Меги','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'Port'=>array('DESCRIPTION'=>'Порт Меги (куда подключена цепь освещения)','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'Ext'=>array('DESCRIPTION'=>'Канал PCA9685','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'Dimmable'=>array('DESCRIPTION'=>'Диммируемый источник освещения','_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdIsActivity'),
        'Direction'=>array('DESCRIPTION'=>'Направление последнего изменения яркости («Down» или «Up»). Свойство является служебным'),
        'status'=>array('DESCRIPTION'=>'Состояния для интерфейсных элементов-выключателей (0 – свет выключен, 1 – включен)'),
        'levelSaved'=>array('DESCRIPTION'=>'Значение сигнала от ШИМ-порта Меги (в диапазоне от 0 – 4095). Свойство является служебным'),
        'levelWork'=>array('DESCRIPTION'=>'Brightness level (work)','ONCHANGE'=>'levelWorkUpdated'),
        'minWork'=>array('DESCRIPTION'=>LANG_DEVICES_DIMMER_MIN_WORK,'_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'maxWork'=>array('DESCRIPTION'=>LANG_DEVICES_DIMMER_MAX_WORK,'_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'setMaxTurnOn'=>array('DESCRIPTION'=>LANG_DEVICES_DIMMER_SET_MAX,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdDimmerSetMax'),
        'step'=>array('DESCRIPTION'=>'Шаг','_CONFIG_TYPE'=>'num'),
        'timer'=>array('DESCRIPTION'=>'Таймер выключения','_CONFIG_TYPE'=>'num')
    ),
    'METHODS'=>array(
        'statusUpdated'=>array('DESCRIPTION'=>'Status Updated'),
        'levelUpdated'=>array('DESCRIPTION'=>'Level Updated'),
        'levelWorkUpdated'=>array('DESCRIPTION'=>'Level Work Updated'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1),
        'switch'=>array('DESCRIPTION'=>'Переключить','_CONFIG_SHOW'=>1),
        'dimming'=>array('DESCRIPTION'=>'Яркость'),
        'plus'=>array('DESCRIPTION'=>'Увеличить яркость','_CONFIG_SHOW'=>1),
        'minus'=>array('DESCRIPTION'=>'Уменьшить яркость','_CONFIG_SHOW'=>1),
        'On'=>array('DESCRIPTION'=>'Вкл','_CONFIG_SHOW'=>1),
        'Off'=>array('DESCRIPTION'=>'Выкл','_CONFIG_SHOW'=>1)
    )
);

@include_once(ROOT . 'languages/SMegaPCA9685Dimmers_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SMegaPCA9685Dimmers_default' . '.php');
