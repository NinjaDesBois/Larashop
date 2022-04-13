


@extends('layouts.app')
@section('content')







<div class="border border-primary rounded container">

<div class="d-flex justify-content-between">
    <h2 class="text-center m-3">Category List</h2>
    <a type="button" class="btn-group btn m-3 mr-3 btn-indigo text-dark" href="{{route('add-category')}}">
    <span>Add a new Category</span>
  </a>
</div>

{{-- TABLEAU --}}
   <table class="table containerart">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Category name</th>
        <th scope="col">Creation date</th>
        <th scope="col">Update date</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categorylist as $key => $category)

      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$category->name}}</td>
        <td>{{$category->created_at->diffForHumans()}}</td>
        <td>{{$category->updated_at->diffForHumans()}}</td>
        <td>
            <a href="{{route('edit-category', encrypt($category->id))}}" class="btn-sm btn-success"><i class="fas fa-edit"></i></a>
            <button href="" class="btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$category->id}}"><i class="fas fa-trash"></i>
            </button>
                {{-- MODAL --}}
                <div class="modal fade" id="deleteModal{{$category->id}}"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog bg-light rounded">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">ARE YOU SURE TO DELETE THIS ITEM ?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('delete-category',$category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <div class="modal-body bg-primary">
                                The deletion of this Category item will be final, are you sure you want to delete {{$category->name}}                        </div>
                            <div class="modal-footer">
                              <button type="button"  class="btn-sm btn-primary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn-sm btn-danger" data-bs-dismiss="modal">Understood</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
</div>


   @endsection
