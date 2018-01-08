$( document ).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    Prism.plugins.autoloader.languages_path = '/js/languages/';

    $('.disabled').click(function(e){
        e.preventDefault();
    })
});