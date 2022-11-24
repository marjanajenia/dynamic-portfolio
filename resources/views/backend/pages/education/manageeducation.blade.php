@extends('backend.mastertemplate.template')

@section('content')
<div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
</div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            <h6 class="br-section-label">All Education Information</h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-2p">Serial</th>
                            <th class="wd-10p">Session</th>
                            <th class="wd-20p">Program Name</th>
                            <th class="wd-20p">Institute</th>
                            <th class="wd-30p">Description</th>
                            <th class="wd-10p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $sl=1; @endphp
                        @foreach($education as $data)
                        <tr>
                            <td>{{ $sl }}</td>
                            <td>{{ $data->session }}</td>
                            <td>{{ $data->program }}</td>
                            <td>{{ $data->institute }}</td>
                            <td>{{ $data->description }}</td>
                            <td>
                                <a href="{{ Route('education.edit',$data->id) }}" class="btn btn-info btn-sm" ><i class="fa fa-edit"></i></a>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete"></i></button>
                            </td>
                        </tr>
                        @php $sl++; @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- br-pagebody -->
    <script>
        $(function(){
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
          //$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
      </script>


@endsection

