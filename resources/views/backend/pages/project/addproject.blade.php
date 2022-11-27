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
                    <form action="{{ Route('project.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" class="form-control" name="pic" id="pic" placeholder="Enter the Picture">
                                    <span class="text-danger">
                                        @error('pic')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    {{--  <div class="text-center mt-4">
                                        <img width="100" id="pic" src="{{asset('backend/service/.$service->pic')}}" class="img-fluid" alt="">
                                     </div>  --}}
                                </div>
                                <div class="form-group">
                                    <label for="service">Work Service</label>
                                    <input type="text" class="form-control" name="service" id="service" placeholder="Enter Work Service" value="{{ old('service') }}">
                                    <span class="text-danger">
                                        @error('service')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Work Description</label>
                                    <textarea rows="5" cols="30" class="form-control" name="description" id="description" placeholder="Enter Work description">{{ old('description') }}</textarea>
                                    <span class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button class="form-control btn btn-info">Add Project Information</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- br-pagebody -->


@endsection

