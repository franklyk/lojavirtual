$(document).ready(function(){
    $('#btn-menu').click(function(){
        if($('#dropdown-menu').width() == 0){
            $('#dropdown-menu').animate({width: '280px'},{duration:700})
        }else{
            $('#dropdown-menu').animate({width:'0'},{duration:700})
        }
    })
})