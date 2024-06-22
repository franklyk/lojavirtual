// window.alert("Carregou custom!");

$(window).on('load', function () {
    
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
});