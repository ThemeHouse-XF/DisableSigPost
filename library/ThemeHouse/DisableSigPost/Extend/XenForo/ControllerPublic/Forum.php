<?php

/**
 *
 * @see XenForo_ControllerPublic_Forum
 */
class ThemeHouse_DisableSigPost_Extend_XenForo_ControllerPublic_Forum extends XFCP_ThemeHouse_DisableSigPost_Extend_XenForo_ControllerPublic_Forum
{
    
    /**
     *
     * @see XenForo_ControllerPublic_Forum::actionAddThread()
     */
    public function actionAddThread()
    {

        $GLOBALS['XenForo_ControllerPublic_Forum'] = $this;
        return parent::actionAddThread();
    } /* END actionAddThread */
}