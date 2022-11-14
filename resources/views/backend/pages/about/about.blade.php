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
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card p-3 shadow-base">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="dob">Birth</label>
                                    <input type="date" class="form-control" name="dob" id="dob" placeholder="Enter Your date of birth">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address">
                                </div>
                                <div class="form-group">
                                    <label for="number">Contact Number</label>
                                    <input type="text" class="form-control" name="number" id="number" placeholder="Enter Your Contact Number">
                                </div>
                                <div class="form-group">
                                    <label for="file">Picture</label>
                                    <input type="file" class="form-control" name="pic" id="pic">
                                    <div class="text-center mt-4">
                                        <img width="150" id="pic" src="{{ asset('backend/pic/') }}" class="img-fluid" alt="" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" name="website" id="website" placeholder="Enter your website">
                                </div>
                                <div class="form-group">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Enter your zip code">
                                </div>
                                <div class="form-group">
                                    <label for="project_complete">Project complete</label>
                                    <input type="text" class="form-control" name="project_complete" id="project_complete" placeholder="Enter your complete project number">
                                </div>
                                <br>
                                <div class="form-group">
                                    <button class="form-control btn btn-info">update Information</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div><!-- br-pagebody -->
<script>
    $(function(){
        $("#dob").datepicker();
    });
</script>


@endsection
