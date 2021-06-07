
//Testing jQuery
$ ("#sbutton").onclick (function() {
    $ ('html, body').animate ({
        scrollTop: parseInt($("#elementtoScrollToID").offset().top)
    }, 2000);
    });