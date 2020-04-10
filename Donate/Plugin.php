<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * Donate
 * 
 * @package Donate 
 * @author 山顶洞洞人
 * @version 1.0.0
 * @link http://rootvip.cn
 */
class Donate_Plugin implements Typecho_Plugin_Interface
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
        Typecho_Plugin::factory('rootvip.cn.Donate')->Donate = array('Donate_Plugin', 'render');
        Typecho_Plugin::factory('Widget_Archive')->header = array('Donate_Plugin', 'style');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('Donate_Plugin', 'js');
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
        $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('word', NULL, '赏', _t('捐赠按钮名称')));
        $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('memo', NULL, '感谢支持', _t('备注')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx1', NULL, '', _t('微信一元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx2', NULL, '', _t('微信二元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx5', NULL, '', _t('微信五元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx10', NULL, '', _t('微信十元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx20', NULL, '', _t('微信二十元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx50', NULL, '', _t('微信五十元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx100', NULL, '', _t('微信一百元二维码地址')));
        $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('wx0', NULL, '', _t('微信付款码地址')));

        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb1', NULL, '', _t('支付宝一元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb2', NULL, '', _t('支付宝二元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb5', NULL, '', _t('支付宝五元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb10', NULL, '', _t('支付宝十元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb20', NULL, '', _t('支付宝二十元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb50', NULL, '', _t('支付宝五十元二维码地址')));
        // $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb100', NULL, '', _t('支付宝一百元二维码地址')));
        $form->addInput(new Typecho_Widget_Helper_Form_Element_Text('zfb0', NULL, '', _t('支付宝付款码地址')));
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
        $cssUrl = Helper::options()->pluginUrl . '/Donate/assets/style.css';
        echo '<link rel="stylesheet" type="text/css" href="' . $cssUrl . '" />';
    }
    public static function js() {
        $jsUrl = Helper::options()->pluginUrl . '/Donate/assets/index.js';
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
        echo '<div class="donate-panel">';
        echo '<div id="donate-btn">';
        echo  htmlspecialchars(Typecho_Widget::widget('Widget_Options')->plugin('Donate')->word);
        echo  '</div>';
        echo '<div id="qrcode-panel" style="display: none;">';
        echo '<div class="arrow"></div>';
        echo '<div class="qrcode-body">';
        
        echo '<div class="donate-memo">';
        echo  htmlspecialchars(Typecho_Widget::widget('Widget_Options')->plugin('Donate')->memo);
        echo '<span id="donate-close">关闭</span>';
        echo '</div>';

        echo '<div class="donate-qrpay">';
        echo  '<img id="wxqr" src="'.htmlspecialchars(Typecho_Widget::widget('Widget_Options')->plugin('Donate')->wx0).'" />';
        echo  '<img id="zfbqr" style="display: none;" src="'.htmlspecialchars(Typecho_Widget::widget('Widget_Options')->plugin('Donate')->zfb0).'" />';
        echo '</div>';

        echo '<form action="" method="get">';
        echo '<label><input name="pay" type="radio" value="wx" checked />微信 </label> ';
        echo '<label><input name="pay" type="radio" value="zfb" />支付宝 </label> ';
        echo '</form> ';

       echo '</div>';
       echo '</div>';
       echo '</div>';
    }
}
