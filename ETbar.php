<?php
class ETbar extends CWidget
{
    private $css;
    private $js;

    private function registerScripts()
    {
        $cs = Yii::app()->clientScript;

        if($this->css===null) {
            $cssFile = dirname(__FILE__).DIRECTORY_SEPARATOR.'etbar.css';
            $this->css = Yii::app()->getAssetManager()->publish($cssFile);
        }
        if($this->js===null) {
            $jsFile = dirname(__FILE__).DIRECTORY_SEPARATOR.'etbar.js';
            $this->js = Yii::app()->getAssetManager()->publish($jsFile);
        }
        $cs->registerCssFile($this->css);

        if(!$cs->isScriptRegistered('jquery')) {
            $cs->registerCoreScript('jquery');
        }
        $cs->registerScriptFile($this->js, CClientScript::POS_BEGIN);
    }
    public function init()
    {
        $this->registerScripts();
        echo CHtml::tag('div', array('class'=>'toolbar'), false, false);
        parent::init();
    }
    public function run()
    {
        parent::run();
    }
}
