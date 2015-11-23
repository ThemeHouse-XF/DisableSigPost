<?php

class ThemeHouse_DisableSigPost_Install_Controller extends ThemeHouse_Install
{
    
    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/disable-signature-in-posts.3684/';
    
    /**
     * @see ThemeHouse_Install::_getTableChanges()
     */
    protected function _getTableChanges()
    {
    	return array(
    			'xf_post' => array(
    			    'hide_signature_th' => 'BOOLEAN NOT NULL DEFAULT 0', /* 'hide_signature_th */
    			), /* END 'xf_post' */
    	);
    } /* END _getTableChanges */


    protected function _postInstall()
    {
        $addOn = $this->getModelFromCache('XenForo_Model_AddOn')->getAddOnById('YoYo_');
        if ($addOn) {
            $db->query("
                UPDATE xf_post
                    SET hide_signature_th=hide_signature_waindigo");
        }
    }
}