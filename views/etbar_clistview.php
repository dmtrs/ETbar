<?php
    $viewData["_x"] = (int)(100/(int)$dataProvider->pagination->pageSize);
    $this->widget('zii.widgets.CListView', array(
        'id'=>'clist'.$id,
	    'dataProvider'=>$dataProvider,
        //'itemView'=>'application.views.'.lcfirst($dataProvider->modelClass).'._view',
//      'itemView'=>'clistview_horizontal',
        'itemView'=>$itemView,
        'itemsCssClass'=>'etbar_clistview_container',
        'pagerCssClass'=>'etbar_clistview_pager',
        'summaryCssClass'=>'etbar_clistview_summary',
        'viewData'=>array('x'=>$viewData["_x"]),
        'htmlOptions'=>array('class'=>'etbar_clistview',
        ),
    )); 
    /**
    $this->widget('zii.widgets.CListView', array(
        'id'=>'vertical_clistview',
	    'dataProvider'=>$dataProvider,
        //'itemView'=>'application.views.'.lcfirst($dataProvider->modelClass).'._view',
        'itemView'=>'clistview_vertical',
        'viewData'=>array('x'=>$width),
        'itemsCssClass'=>'etbar_clistview_container',
        'pagerCssClass'=>'etbar_clistview_pager',
        'summaryCssClass'=>'etbar_clistview_summary',
        'htmlOptions'=>array('class'=>'etbar_clistview',
        ),
    ));**/
