<?php
    //Main container 
    echo CHtml::openTag('div', array('class'=>'etbar'));
    //Panel container
    echo CHtml::openTag('div', array('class'=>'etbar_top_panel'));
    echo "Panel";

    //Panel Item
/**    echo CHtml::openTag('div', array('class'=>'etbar_top_panel_item') );
    echo CHtml::closeTag('div');**/
    echo CHtml::closeTag('div');

    //Content container
    //Find a way to change the view
//    echo CHtml::openTag('div', array('class'=>'etbar_content'));
    $this->widget('zii.widgets.CListView', array(
	    'dataProvider'=>$dataProvider,
        //'itemView'=>'application.views.'.lcfirst($dataProvider->modelClass).'._view',
        'itemView'=>'clistview',
        'itemsCssClass'=>'etbar_clistview_content',
        'pagerCssClass'=>'etbar_clistview_pager',
        'summaryCssClass'=>'etbar_clistview_summary',
        'htmlOptions'=>array('class'=>'etbar_clistview'),
    )); 
    /**Content items
    for($i=0; $i < 2; $i++) {
        echo CHtml::openTag('div', array(
                'class'=>'etbar_content_item', 
                'style'=>'width: 20%;'));
        echo $i;
        echo CHtml::closeTag('div');
    }**/

//    echo CHtml::closeTag('div');

    //Area under panel item
    echo CHtml::openTag('div', array('class'=>'etbar_side_panel'));
    echo CHtml::closeTag('div');

    //Close main container
    echo CHtml::closeTag('div');
?>
