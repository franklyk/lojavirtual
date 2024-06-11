import './bootstrap';



$(() => {
    setTimeout(() => {
        alert('jQuery triggered via app.js')
    }, 2500);
});



$('#btn-search').on('click',
    function () {
        if ($('#search').height() == 0) {
            $('#search').animate(({ height: '70px' }));
            $('#menu-dropdown').animate(({ width: '0px' }))
            console.log($('#search').height())
        } else {
            $('#search').animate(({ height: '0px' }))
            console.log($('#search').height())
        }
    }
)

$('#btn-menu').on('click',
    function () {
        if ($(window).width() <= 860) {
            if ($('#menu-dropdown').width() == 0) {
                $('#menu-dropdown').animate(({ width: '200px' }));
                $('#search').animate(({ height: '0px' }))
                console.log($('#menu-dropdown').width())
            } else {
                $('#menu-dropdown').animate(({ width: '0px' }))
                console.log($('#menu-dropdown').width())
            }
        } else {
            if ($('#menu-dropdown').width() == 0) {
                $('#menu-dropdown').animate(({ width: '200px' }));
                // $('#search').animate(({ height: '0px' }))
                console.log($('#menu-dropdown').width())
            } else {
                $('#menu-dropdown').animate(({ width: '0px' }))
                console.log($('#menu-dropdown').width())
            }
        }
    }
)

$('#btn-description').on('click',
    function () {
        $('#container-description').addClass('active');
        $('#container-specification').removeClass('active');
    }
)
$('#btn-details').on('click',
    function () {
        $('#container-specification').addClass('active');
        $('#container-description').removeClass('active');
    }
)
// 

