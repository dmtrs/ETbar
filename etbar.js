/*<![CDATA[*/
$(document).ready(function() { 
    $("#etbar_tabs").css({height: 48});
    $("#etbar_tabs" ).tabs();
    $("#etbar_tabs" ).resizable({
        handles: 'w,e',
    });
    $( "#etbar_tabs" ).draggable({ axis: 'x' });
});
/*]]>*/ 
