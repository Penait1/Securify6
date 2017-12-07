$( document ).ready(function() {
    $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
    $('#table_id').DataTable(); // Van Jeroen via telegram
});

$(document).ready(function() {
    $('#example').dataTable({"sPaginationType": "full_numbers"});
}); // Fiddle JS?