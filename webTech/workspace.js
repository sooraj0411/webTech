$(document).ready(function(){
    //$('#content').load('create_h.php')
    $('#left a').click(function(){
        var page=$(this).attr('href');
        $('#content').load(page+'.php');
        return false;
    });
});