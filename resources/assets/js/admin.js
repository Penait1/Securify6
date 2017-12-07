$( document ).ready(function() {
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});

    $('.full-table').DataTable();

    $('.data-delete').on('click', function (e) {
        if (!confirm('Are you sure you want to delete this record?')) return;
        $('#form-delete-' + $(this).data('form')).submit();

        e.preventDefault();
    });
});