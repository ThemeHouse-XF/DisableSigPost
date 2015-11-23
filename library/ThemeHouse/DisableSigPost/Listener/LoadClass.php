<?php

class ThemeHouse_DisableSigPost_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_DisableSigPost' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Thread',
                    'XenForo_ControllerPublic_Post',
                    'XenForo_ControllerPublic_Forum'
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_DiscussionMessage_Post'
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_DisableSigPost' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_DisableSigPost_Listener_LoadClass', $class, $extend, 'controller');
    } /* END loadClassController */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $extend = self::createAndRun('ThemeHouse_DisableSigPost_Listener_LoadClass', $class, $extend, 'datawriter');
    } /* END loadClassDataWriter */
}