@extends('layouts.app')

@section('content')
<div class="row g-2">
    <div class="col-6">
        <a href="/">HOME</a>
    </div>
    <div class="col-6">
        <span>
            {{$category->name}}
        </span>
    </div>

    <div class="col-12">
      <form action="{{route('modul.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Question</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="question">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ansver</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="answer"></textarea>
          </div>
          <input type="number" name="category_id" value="{{$category->id}}" hidden>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
      </form>
    </div>
  </div>
@endsection