@extends('backend.mastertemplate.template')
@section('content')
@php
  $skill = App\Models\Backend\Skill::first();
@endphp
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
                    <form action="{{ Route('skill.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="photoshop">Photoshop</label>
                                    <input type="text" class="form-control" name="photoshop" id="photoshop" value="{{ $skill->photoshop }}">
                                </div>
                                <div class="form-group">
                                    <label for="html">HTML</label>
                                    <input type="text" class="form-control" name="html" id="html" value="{{ $skill->html }}">
                                </div>
                                <div class="form-group">
                                    <label for="css">CSS</label>
                                    <input type="text" class="form-control" name="css" id="css" value="{{ $skill->css }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="seo">SEO</label>
                                    <input type="text" class="form-control" name="seo" id="seo" value="{{ $skill->seo }}">
                                </div>
                                <div class="form-group">
                                    <label for="wordpress">WordPress</label>
                                    <input type="text" class="form-control" name="wordpress" id="wordpress" value="{{ $skill->wordpress }}">
                                </div>
                                <div class="form-group">
                                    <label for="jquery">JQuery</label>
                                    <input type="text" class="form-control" name="jquery" id="jquery" value="{{ $skill->jquery }}">
                                </div>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <div class="from-group">
                                    <button class="btn btn-info form-control">Update Skill</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- br-pagebody -->


@endsection

