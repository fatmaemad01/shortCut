@extends('layouts.dashboard')

@section('title' , 'Create New')

@section ('breadcrumb')
@parent
<li class="breadcrumb-item active">Create</li>

@endSection

@section('content')

<form class="ms-2" action="{{route('dashboard.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row justify-content-md-center">
    <div class="col-8 ">
      <div class="form-group">
        <label for="link">
          <h5>Your Link</h5>
        </label>
        <input name="link" type="text" class="form-control  @error('link') is-invalid @enderror" id="link" placeholder="https://www.exampleLink.com">
        @error('link')
        <p class="invalid-feedback">{{$message}}</p>
        @endError
      </div>
    </div>
  </div>
  <div class="row justify-content-md-center">
    <div class="col-8 ">
      <div class="form-group">
        <label for="title">
          <h5>Title</h5>
        </label>
        <input name="title" type="text" class="form-control  @error('title') is-invalid @enderror" id="title">
        @error('title')
        <p class="invalid-feedback">{{$message}}</p>
        @endError
        <button type="submit" class="btn btn-primary mt-3 border-0" style="background-color: #ff5622;">Submit</button>

      </div>
    </div>
  </div>





</form>


@endSection