$(document).ready(function(){

    $('p.clickMe').on('click', function() {
        $.post(window.location.pathname, {testPost: 'testPost'}, function () {
            console.log('ola kala');
        })
    })

});