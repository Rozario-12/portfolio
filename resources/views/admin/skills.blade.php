@extends('layouts.page-layout')
@section('content')

<div class="container mt-5">
    <a href="{{route('create-skill')}}" class="btn btn-primary mb-3">Add skill </a>
    <div class="row">
        @foreach ($skills as $skill)
        <div class="col-4 card">
            <h3>{{$skill->title}} </h3>
            <img src="{{$skill->skill_image}}" width="300px" alt="">
            <p>{{$skill->content}}</p>
            <a class="btn btn-danger" href="{{route('delete-skill',['id'=>$skill->id])}}">delete</a>
            <a href="{{route('edit-skill',['id'=>$skill->id])}}" class="btn btn-primary">edit</a>
        </div>
        @endforeach
    </div>
</div>
hello


@endsection
