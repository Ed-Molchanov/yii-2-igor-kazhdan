$(function () {

    $('#test1').crossSlide({
        speed: 45,
        fade: 1
    }, [
      { src: '/site/image/1.jpg', dir: 'up' },
      { src: '/site/image/2.jpg', dir: 'down' },
      { src: '/site/image/3.jpg', dir: 'up' },
      { src: '/site/image/4.jpg', dir: 'down' }

    ]); /* $('#test1').crossSlide  */


    $('#info_katalog tr').click(function () {

        var x = $(this).find('.id').text();
        $('#n_info').text(x);
        $('#id_info_del').val(x);


        $.ajax({
            type: "POST",
            dataType: "json",
            url: '/site/ajax/modal_info.php',
            data: {
                id: x
            },
            success: function (x) {
                $('#a1').val(x.a1);
                $('#a2').val(x.a2);
                $('#a3').val(x.a3);
                $('#a4').val(x.a4);
                $('#a5').val(x.a5);
            },
            error: function () {
                alert("ошибка получения данных из базы!");
            }
        }); /* $.ajax({*/
    }); /* $('#brands_katalog tr').click(function () {*/



    $(window).load(function () {
        $('.p1').addClass('zoomIn');
         $('.p2').addClass('zoomIn');

        $('.p3').addClass('zoomIn');
        $('.p4').addClass('zoomIn');
        $('.p5').addClass('zoomIn');


    });

    $(window).scroll(function () {
        $('.p2').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();

            if (imagePos < topOfWindow + 750) {
                $(this).addClass('zoomIn');
            }
            if (imagePos > topOfWindow + 750) {
                $(this).removeClass('zoomIn');
            }
            if (imagePos < topOfWindow ) {
                $(this).removeClass('zoomIn');
            }
        });
    });

 $(window).scroll(function () {
        $('.p5').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();

            if (imagePos < topOfWindow + 750) {
                $(this).addClass('zoomIn');
            }
            if (imagePos > topOfWindow + 750) {
                $(this).removeClass('zoomIn');
            }
            if (imagePos < topOfWindow ) {
                $(this).removeClass('zoomIn');
            }
        });
    });


$(window).scroll(function () {
        $('.p4').each(function () {
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();

            if (imagePos < topOfWindow + 750) {
                $(this).addClass('zoomIn');
            }
            if (imagePos > topOfWindow + 750) {
                $(this).removeClass('zoomIn');
            }
            if (imagePos < topOfWindow ) {
                $(this).removeClass('zoomIn');
            }
        });
    });




});         // end $ 