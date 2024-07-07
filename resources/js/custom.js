// window.alert("Carregou custom!");

$(window).on('load', function () {
    $('#btn-menu').on('click',
        function () {
            // window.alert('Carregou');
            if ($(window).width() <= 860) {
                if ($('.sidebar').width() == 0) {
                    $('.sidebar').animate(({ width: '300px' }));
                    // $('.sidebar').animate(({ width: '300px' }));
                    console.log($('.sidebar').width())
                } else {
                    $('#dropdown').animate(({ width: '0px' }))
                    console.log($('.sidebar').width())
                }
            } else {
                if ($('.sidebar').width() == 0) {
                    // $('.sidebar').animate(({ width: '300px', height: '300px' }));
                    // $('.sidebar').animate({ width: '300px', height: '100vh' });
                    // $('#search').animate(({ height: '0px' }))
                    console.log($('.sidebar').width())
                } else {
                    $('.sidebar').animate(({ width: '0px', height: '0px' }))
                    console.log($('.sidebar').width())
                }
            }
        }
    )
});