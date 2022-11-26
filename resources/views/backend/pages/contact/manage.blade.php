@extends('backend.mastertemplate.template')
@section('content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
            <h4>Dashboard</h4>
            <p class="mg-b-0">Hey! Hello There Welcome To Our MultiVenDor Ecommerce Dashboard !</p>
        </div>
    </div>

    <div class="br-pagebody">
        <div class="card">
            <div class="card-body">
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th class="wd-10p">Serial</th>
                                <th class="wd-10p">Name</th>
                                <th class="wd-10p">Email</th>
                                <th class="wd-10p">Subject</th>
                                <th class="wd-30p">Message</th>
                                <th class="wd-10p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sl=1; @endphp
                            @foreach ($contact as $data)
                                <tr>
                                    <td>{{ $sl }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->subject }}</td>
                                    <td>{{ $data->message }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" href="" data-toggle="modal" data-target="#delete{{ $data->id }}"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are You Sure You Want To Delete THis
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                                            <a href="{{ Route('contact.delete',$data->id) }}" class="btn btn-danger" >Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                @php $sl++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div>
        </div>
    </div><!-- br-pagebody -->

    <script>
        $(function() {
            'use strict';

            $('#datatable1').DataTable({
                responsive: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });

            //Select2
           // $('.dataTables_length select').select2({
               // minimumResultsForSearch: Infinity
           // });

        });
    </script>
@endsection
