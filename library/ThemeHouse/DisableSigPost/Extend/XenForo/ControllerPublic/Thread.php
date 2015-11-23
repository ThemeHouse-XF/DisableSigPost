<?php

/**
 *
 * @see XenForo_ControllerPublic_Thread
 */
class ThemeHouse_DisableSigPost_Extend_XenForo_ControllerPublic_Thread extends XFCP_ThemeHouse_DisableSigPost_Extend_XenForo_ControllerPublic_Thread
{
    
    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionSave()
     */
    public function actionSave()
    {
    	$GLOBALS['XenForo_ControllerPublic_Thread'] = $this;
    	return parent::actionSave();
    } /* END actionSave */
    
    /**
     *
     * @see XenForo_ControllerPublic_Thread::actionAddReply()
     */
    public function actionAddReply()
    {
    	$GLOBALS['XenForo_ControllerPublic_Thread'] = $this;
    	return parent::actionAddReply();
    } /* END actionAddReply */
}