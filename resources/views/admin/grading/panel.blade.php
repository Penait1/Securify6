
@extends('layouts.master')


@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="ChallengeTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Index</th>
                        <th>Code</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 1; $i <= 200; $i++)
                        <tr>
                            <td>{{$i}}</td>
                            <td>Code example {{$i}}</td>
                            <td>Comment example {{$i}}</td>
                            <!--<td width="50"><button type="button">Grade</button></td>-->
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection

@section('bottom')
<script>

    var table = $('#ChallengeTable').DataTable();

    $('#ChallengeTable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
        table.row('.selected').remove().draw( false );
        window.location="{{url('/challenge')}}";
    } );

    $(function () {
            $("#ChallengeTable").DataTable();
            $("#ChallengeTable1").DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
</script>
    @endsection