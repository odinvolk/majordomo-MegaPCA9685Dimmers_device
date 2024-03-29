<?php

$this->device_links['dimmerpca']=array(
    array (
        'LINK_NAME'=>'switch_it_dimmersv',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS_BATTERY,
        'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SENSOR_PASS_BATTERY_DESCRIPTION,
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array(
            'LINK_NAME'=>'switch_timer',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SWITCH_TIMER,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SWITCH_TIMER_DESCRIPTION,
            'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'action_delay',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_TIMER_PARAM_ACTION_DELAY,
                    'PARAM_TYPE'=>'num'
                ),
                array(
                    'PARAM_NAME'=>'darktime',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_TIMER_PARAM_DARKTIME,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_NO,'VALUE'=>'0'),
                        array('TITLE'=>LANG_YES,'VALUE'=>'1')
                    )
                )
            )
        ),
        array(
            'LINK_NAME'=>'switch_it_dimmers',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SWITCH_IT_DESCRIPTION,
            'TARGET_CLASS'=>'SControllers,SDevices,SSensors',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'action_type_dimmers',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_ACTION_TYPE,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_ON,'VALUE'=>'turnon'),
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_OFF,'VALUE'=>'turnoff'),
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_SWITCH,'VALUE'=>'switch')
                        )
                ),
                array(
                    'PARAM_NAME'=>'action_delay_dimmers',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT_PARAM_ACTION_DELAY,
                    'PARAM_TYPE'=>'num'
                )
            )
            ),
            array(
            'LINK_NAME'=>'sensor_switch',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_SWITCH,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SENSOR_SWITCH_DESCRIPTION,
            'TARGET_CLASS'=>'SControllers',
            'PARAMS'=>array(
                array(
                    'PARAM_NAME'=>'condition_type',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SENSOR_SWITCH_PARAM_CONDITION,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_DEVICES_LINK_SENSOR_SWITCH_PARAM_CONDITION_ABOVE,'VALUE'=>'above'),
                        array('TITLE'=>LANG_DEVICES_LINK_SENSOR_SWITCH_PARAM_CONDITION_BELOW,'VALUE'=>'below')
                    )
                ),
                array(
                    'PARAM_NAME'=>'condition_value',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_SENSOR_SWITCH_PARAM_VALUE,
                    'PARAM_TYPE'=>'num'
                ),
                array(
                    'PARAM_NAME'=>'action_type',
                    'PARAM_TITLE'=>LANG_DEVICES_LINK_ACTION_TYPE,
                    'PARAM_TYPE'=>'select',
                    'PARAM_OPTIONS'=>array(
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_ON,'VALUE'=>'turnon'),
                        array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_OFF,'VALUE'=>'turnoff')
                    )
                )
            )
        ),
        array (
            'LINK_NAME'=>'sensor_pass',
            'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
            'LINK_DESCRIPTION'=>LANG_DEVICES_LINK_SENSOR_PASS_DESCRIPTION,
            'TARGET_CLASS'=>'SThermostats',
        ),
);
