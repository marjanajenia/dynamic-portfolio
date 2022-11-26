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
                                <th class="wd-10p">Image</th>
                                <th class="wd-10p">Work Service</th>
                                <th class="wd-30p">Description</th>
                                <th class="wd-10p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sl=1; @endphp
                            @foreach ($service as $data)
                                <tr>
                                    <td>{{ $sl }}</td>
                                    <td><img width="100" src="{{ asset('backend/service/'.$data->pic) }}" alt="" ></td>
                                    <td>{{ $data->service }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>
                                        <a href="{{ Route('service.edit',$data->id) }}" class="btn btn-info btn-sm" ><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
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
