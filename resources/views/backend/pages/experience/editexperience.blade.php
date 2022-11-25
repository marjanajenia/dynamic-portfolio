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
                    <form action="{{ Route('experience.update',$experience->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="session">Session</label>
                                    <input type="text" class="form-control" name="session" id="session" placeholder="Enter Your Session" value="{{ $experience->session }}">
                                    <span class="text-danger">
                                        @error('session')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control" name="position" id="position" placeholder="Enter Your Position" value="{{ $experience->position }}">
                                    <span class="text-danger">
                                        @error('position')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <label for="institute">Institute</label>
                                    <input type="text" class="form-control" name="institute" id="institute" placeholder="Enter Your Institute Name" value="{{ $experience->institute}}">
                                    <span class="text-danger">
                                        @error('institute')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" cols="30" rows="5" name="description" id="description" placeholder="Enter Your Description">{{ $experience->description }}</textarea>
                                    <span class="text-danger">
                                        @error('description')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button class="form-control btn btn-info">Update Experience Information</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- br-pagebody -->


@endsection

