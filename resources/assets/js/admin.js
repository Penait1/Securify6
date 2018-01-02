$( document ).ready(function() {
    Prism.plugins.autoloader.languages_path = '/js/languages/';

    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});

    $('.full-table').DataTable();

    $('.data-delete').on('click', function (e) {
        if (!confirm('Are you sure you want to delete this record?')) return;
        $('#form-delete-' + $(this).data('form')).submit();

        e.preventDefault();
    });

    $('.openCommentModal').on('click', function (e) {
        e.preventDefault();

        var text = $(this).data('text');
        var $modal = $('#commentModal');
        $modal.find('.modal-body').html(text);

        $modal.modal('show');
    });

    $('.show-participants').on('click',function(e){
        e.preventDefault();
        var dataURL = $(this).attr('href');
        $('.modal-body').load(dataURL,function() {
            $('#myModal').modal({show:true});
        });
    });
});