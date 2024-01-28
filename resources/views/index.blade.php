@extends('layouts.app')

@section('content')
<div class="row g-2">
    <div class="col-12">
      <div class="p-3">
          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Category +
            </button>
            @include('modals.category')
      </div>
    </div>
    <table class="table">
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <td>
                        {{$key+1}}
                    </td>
                    <td>
                        <a href="{{route('category.show',$category->id)}}">
                            <button type="button" class="btn btn-primary position-relative">
                                {{$category->name}}
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$category->modul_count}}
                                <span class="visually-hidden">unread messages</span>
                                </span>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="{{route('game',$category->id)}}">
                            <i class="fa-solid fa-gamepad fa-2xl" style="color: #FFD43B;"></i>
                        </a>
                    </td>
                    {{-- <td>
                        <a href="{{ route('category.destroy', ['id' => $task->id]) }}">
                            <i class="fa-solid fa-trash fa-2xl" style="color: #e71818;"></i>
                        </a>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
      </table>
    {{-- @foreach ($categories as $category)
    <div class="col-6">
      <div class="p-3">
          <a href="{{route('category.index')}}">
              <button type="button" class="btn btn-primary position-relative">
                  {{$category->name}}
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  99+
                  <span class="visually-hidden">unread messages</span>
                  </span>
              </button>
          </a>
          
      </div>
    </div>
    @endforeach --}}

    
  </div>
@endsection