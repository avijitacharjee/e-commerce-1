@extends('template')
@section('content')
    <style>
        .modal-delete {
            background-color:red;
        }
    </style>
    <table class = "table table-bordered table-light table-striped user-table" id = "user-table">
        <thead class="thead-light">
            <td>
                Name
            </td>
            <td>
                Email
            </td>
            <td>
                Phone
            </td>
            <td>

            </td>
            <td>

            </td>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{ $user-> name }}
                    </td>
                    <td>
                        {{ $user-> email }}
                    </td>
                    <td>
                        {{ $user-> phone }}
                    </td>
                    <td>
                        <button onclick="window.location.href='{{URL::to('user-update')}}/{{$user->id }}';" class="btn btn-success"> Update </button>
                    </td>
                    <td>
                        <button  class="btn btn-danger" type="button" data-toggle="modal" data-target="#deleteModal{{$user->id}}"> Delete </button>
                
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Delete confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete ?
                            </div>
                            <div class="modal-footer">
                                <button onclick="window.location.href='{{URL::to('user-delete')}}/{{$user->id }}';" type="button" class="btn btn-success" data-dismiss="modal">Yes</button>
                                <button type="button" class="btn btn-danger">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <script>
                            // $('#deleteModal{{$user->id}}').on('shown.bs.modal', function () {
                            //     $('#myInput').trigger('focus')
                            // })
                        </script>
                    </td>
                </tr>
                
                
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready( function () {
            $('#user-table').DataTable();
        } );

    </script>
    
@endsection