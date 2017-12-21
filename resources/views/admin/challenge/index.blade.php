@extends('layouts.master')

@section('content')

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Challenge Index</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered table-striped full-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
                </thead>
                <tbody>
                @foreach($challenges as $challenge)
                    <tr>

                        <td><a href="{{route('challenges.show', [$challenge->id])}}" class="show-participants"> {{$challenge->name}}</a></td>
                        <td class="center">
                            <a href="{{route('challenges.edit', [$challenge->id])}}"><i class="fa fa-pencil-square-o"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['challenges.destroy', $challenge->id], 'class' => 'delete_form', 'id' => 'form-delete-challenges-' . $challenge->id]) !!}
                                <a href="#"  data-form="challenges-{{ $challenge->id }}" class="data-delete"><i class="fa fa-trash-o"></i></a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Options</th>
                </tr>
                </tfoot>
            </table>
            <a href="{{route('challenges.create')}}" class="btn btn-primary pull-right" role="button">Create challenge</a>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Submissions: </h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('bottom')
    <script>
        $(document).ready(function(){
            $('.show-participants').on('click',function(e){
                e.preventDefault();
                var dataURL = $(this).attr('href');
                console.log(dataURL);
                $('.modal-body').load(dataURL,function(){
                    $('#myModal').modal({show:true});
                });
            });
        });
    </script>
@endsection
