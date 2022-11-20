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
                                <th class="wd-5p">Serial</th>
                                <th class="wd-10p">Name</th>
                                <th class="wd-10p">Email</th>
                                <th class="wd-10p">Subject</th>
                                <th class="wd-30p">Message</th>
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

            // Select2
            $('.dataTables_length select').select2({
                minimumResultsForSearch: Infinity
            });

        });
    </script>
@endsection
