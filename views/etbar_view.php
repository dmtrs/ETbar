<script>
$(function() {
    $(document).ready(function() { $("#etbar_tabs").css({height: 50});
    });
    $( "#etbar_tabs" ).tabs();
});
</script>
<?php
echo CHtml::openTag('div',array('id'=>'etbar_tabs'));

echo "<div id='etbar_top_panel'>";
echo "<ul>";
foreach($this->tabs as $k => $tab)
{
    echo "<li><a href='#tabs-$k'>".key($tab)."</a></li>";
}
//{
//echo "<li><a href='#tabs-2'>Vertical</a></li>";
echo "<span class=\"etbar_icon_rb ui-icon ui-icon-grip-diagonal-se\" onclick=\"
    var h = $('#etbar_tabs').css('height');
    var leng = h.length;
    var height = h.substring(0, leng-2);
    if( height > 50 ) {
        var myheight = 47;
        var cur = 'n-resize';
    } else {
        var myheight = 280;
        var cur = 's-resize';
    }
        $(this).css({cursor: cur});
    $('#etbar_tabs').animate({height: myheight}, 'slow');\" />";
echo "</ul>";
echo "</div>"; //etbar_top_panel

echo "<div id='etbar_main_panel'>";
foreach($this->tabs as $k=>$tabData)
{
    echo "<div id='tabs-$k'>";
    $tab = current($tabData);
    if(is_string($tab)) {
        echo $tab;//CHtml::encode($tab);
    } else if(is_array($tab)){
        if(isset($tab["widget"])) {
            //CListView
            if($tab["widget"]==0) {/**
                $c = $this->getController();
                $c->renderPartial('application.extension.tbar.views.etbar_clistview', $tab);
                **/
                //$this->render('etbar_clistview', $tab);
                $x = (int)(100/(int)$tab["dataProvider"]->pagination->pageSize);
                $this->widget('zii.widgets.CListView', array(
                    'id'=>uniqid().'_horizontal_clistview',
            	    'dataProvider'=>$tab["dataProvider"],
                    'itemView'=>$tab["itemView"],
                    'itemsCssClass'=>'etbar_clistview_container',
                    'pagerCssClass'=>'etbar_clistview_pager',
                    'summaryCssClass'=>'etbar_clistview_summary',
                    'viewData'=>array('x'=>$x),
                    'htmlOptions'=>array('class'=>'etbar_clistview',
                ),
                )); 
            }           
        } else {
            echo "<script>
            $(function() {
                $.ajax({
                    url: 'index.php?r=site/etbarview',
                    data: { view: 'about' },
                    success: function(data) { 
                        $('#tabs-$k').html(data);
                    }});
            });
            </script>";
        }
    }
    echo "</div>";
}
echo "</div>";// main panel 


echo "</div>"; //etbar
7?>
