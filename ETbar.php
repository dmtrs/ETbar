<?php
class ETbar extends CWidget
{
    /**
     * All the ETbar options for start
     *
     * @var array()
     **/
    public $options = array();
    /** 
     * Tab data
     * 
     * @var array()
     **/
    public $tabs = array();

    private $css;
    private $js;

    private function registerScripts()
    {
        $cs = Yii::app()->clientScript;

        if($this->css===null) {
            $cssPath = dirname(__FILE__).DIRECTORY_SEPARATOR;
            $cssFiles = array('jquery-ui.tabs.css', 'etbar_tabs.css');

            $css = Yii::app()->getAssetManager()->publish($cssPath.'theme');
            foreach($cssFiles as $file)
            {
                //$css = Yii::app()->getAssetManager()->publish($cssPath.$file);
                $cs->registerCssFile($css."/$file");
            }
        }
        if($this->js===null) {
            $jsFile = dirname(__FILE__).DIRECTORY_SEPARATOR.'etbar.js';
            $this->js = Yii::app()->getAssetManager()->publish($jsFile);
        }

        if(!$cs->isScriptRegistered('jquery')) {
            $cs->registerCoreScript('jquery');
            $cs->registerCoreScript('jquery.ui');
        }/**
        if(!$cs->isScriptRegistered('jquery-ui')) {
            $cs->registerCoreScript('jquery.ui');
        //}**/
        $cs->registerScriptFile($this->js, CClientScript::POS_BEGIN);

    }
    public function init()
    {    
        $this->registerScripts();
        parent::init();
    }
    public function run()
    {
        // This must be passed to extension as data       
		$dataProvider=new CActiveDataProvider('Etbarmodel',array(
            'pagination'=>array('pageSize'=>4),
        ));

		$this->render('ctabview',array(
			'dataProvider'=>$dataProvider,
		));
        //parent::run();**/
 //       $this->render('etbar_view');
    }
}
