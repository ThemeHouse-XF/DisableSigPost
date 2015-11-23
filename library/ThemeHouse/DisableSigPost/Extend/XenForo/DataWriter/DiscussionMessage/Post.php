<?php

/**
 *
 * @see XenForo_DataWriter_DiscussionMessage_Post
 */
class ThemeHouse_DisableSigPost_Extend_XenForo_DataWriter_DiscussionMessage_Post extends XFCP_ThemeHouse_DisableSigPost_Extend_XenForo_DataWriter_DiscussionMessage_Post
{

    /**
     *
     * @see XenForo_DataWriter_Discussion_Thread::_getFields()
     */
    protected function _getFields()
    {
        $fields = parent::_getFields();
        
        $fields['xf_post']['hide_signature_th'] = array(
            'type' => self::TYPE_BOOLEAN,
            'default' => '0'
        );
        
        return $fields;
    } /* END _getFields */

    /**
     *
     * @see XenForo_DataWriter_DiscussionMessage_Post::_messagePreSave()
     */
    protected function _messagePreSave()
    {
        if ($this->isDiscussionFirstMessage() && isset($GLOBALS['XenForo_ControllerPublic_Forum'])) {
            /* @var $controller XenForo_ControllerPublic_Forum */
            $controller = $GLOBALS['XenForo_ControllerPublic_Forum'];
            $this->set('hide_signature_th', $controller->getInput()
                ->filterSingle('hide_signature_th', XenForo_Input::BOOLEAN));
        }
        else if (isset($GLOBALS['XenForo_ControllerPublic_Thread'])) {
            /* @var $controller XenForo_ControllerPublic_Thread */
            $controller = $GLOBALS['XenForo_ControllerPublic_Thread'];
            $this->set('hide_signature_th', $controller->getInput()
                ->filterSingle('hide_signature_th', XenForo_Input::BOOLEAN));
        }
        else if (isset($GLOBALS['XenForo_ControllerPublic_Post'])) {
            /* @var $controller XenForo_ControllerPublic_Post */
            $controller = $GLOBALS['XenForo_ControllerPublic_Post'];
            $this->set('hide_signature_th', $controller->getInput()
                ->filterSingle('hide_signature_th', XenForo_Input::BOOLEAN));
        }
        parent::_messagePreSave();
    } /* END _messagePreSave */
}