/*<![CDATA[*/
$(document).ready(function() {
    $('.etbar').css({height: 0}).animate({height: '300'}, "slow");
    $('#etbar_tabs').tabs({
        tabTemplate: '<div><a href="#{href}">#{label}</a></div>'
    });
});
/*]]>*/ 
