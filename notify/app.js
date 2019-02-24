$(function () {

    var baseurl = 'http://localhost/notify/index.php/';

    $('input.send-notify')(function () {
    
        if (value != null) {
            $.ajax({

                url: baseurl + 'notify.php',
                method: 'post',
                dataType: 'json',
                lab_id: {lab},  
                pc_id: {pc},

            }).done(function (responce) {
                console.log(responce)
            });
        }
    });
    
    // $('input.send-url').on('click', function () {

    //     if (send-url != null) {
    //         $.ajax({

    //             url: baseurl + 'notify.php',
    //             method: 'post',
    //             dataType: 'json',
    //             send_url: {url}

    //         }).done(function (responce) {
    //             console.log(responce)
    //         });
    //     }
    // });

});