<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * ImagePreview
 * 
 * @package ImagePreview 
 * @author 山顶洞洞人
 * @version 1.0.0
 * @link http://rootvip.cn
 */
class ImagePreview_Plugin implements Typecho_Plugin_Interface
{
        /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        //Typecho_Plugin::factory('rootvip.cn.ImagePreview')->ImagePreview = array('ImagePreview_Plugin', 'render');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('ImagePreview_Plugin', 'style');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('ImagePreview_Plugin', 'js');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}

    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {

    }
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    public static function style() {
        $cssUrl = Helper::options()->pluginUrl . '/ImagePreview/assets/viewer.min.css';
        echo '<link rel="stylesheet" type="text/css" href="' . $cssUrl . '" />';
    }
    public static function js() {
        $viewerUrl = Helper::options()->pluginUrl . '/ImagePreview/assets/viewer.min.js';
        $jsUrl = Helper::options()->pluginUrl . '/ImagePreview/assets/index.js';
        echo '<script type="text/javascript" src="'. $viewerUrl .'"></script>';
        echo '<script type="text/javascript" src="'. $jsUrl .'"></script>';
    }

    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function render()
    {
        
    }
}