@extends('layouts.dashboard')
@section('title' ,'Your History')

@section ('content')
<div class="col ">
    <div class="row-4 ">
        @foreach($links as $link)
        <div class="card m-5 p-3">
            <div class="card-body">
                <h4 class="">{{$link->title}}</h4>
                <a href="{{route('redirect', $link->link)}}">
                    <p class="card-text">{{$link->short_link}}</p>
                </a>
                <p class="card-text">{{$link->link}}</p>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <form action="{{route('redirect', $link->link)}}" method="post">
                        @csrf
                        @method('get')
                        <button class="btn btn-primary m-2 border-0" type="submit">Open</button>
                    </form>
                    <form action="{{route('dashboard.destroy', $link->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger m-2 border-0 " style="background-color: #ff5622;" type="submit">Delete</button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
@endSection