// window.alert("Carregou custom!");

$(window).on('load', function () {


    // $('#btn-search').on('click',
    //     function () {
    //         if ($('#search').height() == 0) {
    //             $('#search').animate(({ height: '70px' }));
    //             $('#menu-dropdown').animate(({ width: '0px' }))
    //             console.log($('#search').height())
    //         } else {
    //             $('#search').animate(({ height: '0px' }))
    //             console.log($('#search').height())
    //         }
    //     }
    // )

    $('#btn-menu').on('click',
        function () {
            // window.alert('Carregou');
            if ($(window).width() <= 860) {
                if ($('#dropdown').width() == 0) {
                    $('#dropdown').animate(({ width: '250px' }));
                    console.log($('#dropdown').width())
                } else {
                    $('#dropdown').animate(({ width: '0px' }))
                    console.log($('#dropdown').width())
                }
            } else {
                if ($('#dropdown').width() == 0) {
                    $('#dropdown').animate(({ width: '250px' }));
                    // $('#search').animate(({ height: '0px' }))
                    console.log($('#dropdown').width())
                } else {
                    $('#dropdown').animate(({ width: '0px' }))
                    console.log($('#dropdown').width())
                }
            }
        }
    )

    // $('#btn-description').on('click',
    //     function () {
    //         $('#container-description').addClass('active');
    //         $('#container-specification').removeClass('active');
    //     }
    // )
    // $('#btn-details').on('click',
    //     function () {
    //         $('#container-specification').addClass('active');
    //         $('#container-description').removeClass('active');
    //     }
    // )
    // // 
});