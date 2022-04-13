@extends('layouts.app')
@section('content')

    <section class="contact-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 bg-light p-4">
                    <form action="{{ route('edit-category',$category->id)}}" class="contact-form" method="POST">
                        @csrf
                        @method('PUT')
                        <h4>Edit category </h4>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$category->name}}">
                            </div>
                        </div>

                        <button type="submit" class="btn-group btn mb-3 mr-3 btn-indigo">
                            <span>Save edit</span>
                        </button>


                    </form>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                   
                </div>
            </div>
            <div class="row">
               <div class="d-flex flex-wrap mx-auto col-lg-6 ">
               
                <button type="" class="btn-group btn mb-3 mr-3 btn-indigo">
                    <a type="button" href="{{route('all-categories')}}">CATEGORIES</a>
                </button>
                <button type="" class="btn-group btn mb-3 mr-3 btn-indigo">
                    <a type="button" href="primary">Products</a>
                </button>
               </div>
             
              </div>
             
             
    </section>
@endsection
