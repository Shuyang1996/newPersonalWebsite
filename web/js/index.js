$(document).ready(function(){
    $('.home').click(function(){
        $(this).hide();
    });

    $('.submut').on('click',function(){
    	$.ajax({
            url: '/api/v2/norwood/get_campaign_url/'+ campaign_id,
            type: 'GET'
        })
        .done(function(data){
        	window.alert('succeed');
        })
        .fail(function(data){
        	window.alert('error')l
        });
    })
});