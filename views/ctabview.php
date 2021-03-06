<script>/**
$(document).ready(function() {
    $('#etbar_tabs').css({height: 0}).animate({height: '300'}, 'slow');
});
$(function() {
    $( "#etbar_tabs" ).tabs();
});**/
</script>
<?php
$width = (int)(100/(int)$dataProvider->pagination->pageSize);
echo CHtml::openTag('div',array('id'=>'etbar_tabs'));

echo "<div id='etbar_top_panel'>";
echo "<ul>";
echo "<li><a href='#tabs-1'>Horizontal</a></li>";
echo "<li><a href='#tabs-2'>Vertical</a></li>";
echo "<span class=\"etbar_icon_rb ui-icon ui-icon-grip-diagonal-se\" onclick=\"
    var h = $('#etbar_tabs').css('height');
    var leng = h.length;
    var height = h.substring(0, leng-2);
    if( height > 50 ) {
        var myheight = 47;
        var cur = 'n-resize';
    } else {
        var myheight = 320;
        var cur = 's-resize';
    }
        $(this).css({cursor: cur});
    $('#etbar_tabs').animate({height: myheight}, 'slow');\" />";
echo "</ul>";
echo "</div>";

echo "<div id='main1'>";
echo CHtml::openTag('div', array('id'=>'tabs-1'));
    $this->widget('zii.widgets.CListView', array(
        'id'=>'horizontal_clistview',
	    'dataProvider'=>$dataProvider,
        //'itemView'=>'application.views.'.lcfirst($dataProvider->modelClass).'._view',
        'itemView'=>'clistview_horizontal',
        'itemsCssClass'=>'etbar_clistview_container',
        'pagerCssClass'=>'etbar_clistview_pager',
        'summaryCssClass'=>'etbar_clistview_summary',
        'viewData'=>array('x'=>$width),
        'htmlOptions'=>array('class'=>'etbar_clistview',
        ),
    )); 
echo CHtml::closeTag('div');
echo CHtml::openTag('div', array('id'=>'tabs-2'));
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
    ));
echo "</div>";

echo CHtml::closeTag('div');
echo CHtml::closeTag('div');
?>
