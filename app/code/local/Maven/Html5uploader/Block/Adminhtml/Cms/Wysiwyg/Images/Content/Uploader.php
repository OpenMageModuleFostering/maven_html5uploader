<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 31.08.16
 * Time: 10:47
 */ 
class Maven_Html5uploader_Block_Adminhtml_Cms_Wysiwyg_Images_Content_Uploader
    extends Mage_Adminhtml_Block_Cms_Wysiwyg_Images_Content_Uploader
{
    protected function _prepareLayout()
    {
        return $this;
    }

    public function getMaxFileSize()
    {
        $res = array(
            ini_get('post_max_size'),
            ini_get('upload_max_filesize'),
        );

        $min = min($res);
        return (int)$min * 1000000;
    }
}