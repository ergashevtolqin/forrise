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

    <div class="col-12 mb-5 mt-5">

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="btn btn-info collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    {{$question->question}}
                  
                </button>
              </h2>
              <div style="border: 1px solid black;
              border-radius: 5px;" id="flush-collapseOne" class="accordion-collapse collapse mt-3" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    {{$question->answer}}
                </div>
              </div>
            </div>
          </div>

      {{-- <form action="{{route('modul.store')}}" method="POST">
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
      </form> --}}
    </div>
    <div class="col-6">
        <a href="{{route('count.no',$question->id)}}">
            <button type="button" class="btn btn-danger">No 
            @if (isset($question->count->no))
                {{$question->count->no}}
            @else 
                0
            @endif 
        </button>
        </a>
    </div>
    <div class="col-6">
        <a href="{{route('count.yes',$question->id)}}">
            <button type="button" class="btn btn-success">Yes 
            @if (isset($question->count->yes))
                {{$question->count->yes}}
            @else 
                0
            @endif 
            </button>
        </a>
    </div>
  </div>
@endsection