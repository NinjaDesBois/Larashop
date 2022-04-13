@extends('layouts.app')
@section('content')

    <section class="contact-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 bg-light p-4">
                    <form action="{{ route('product.update',$product->id)}}" class="contact-form" method="POST">
                        @csrf
                        @method('PUT')
                        <h2>Edit product </h2>
                        <div class="form-group">
                            <div class="form-input-group mb-3">
                                <h4>Edit name of product </h4>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{$product->name}}">
                            </div>
                            <div class="form-input-group mb-3">
                                <h4>Edit price </h4>
                                <input type="number" class="form-control @error('name') is-invalid @enderror" name="price"
                                    value="{{$product->price}}">
                            </div>
                            <div class="form-input-group mb-3">
                                <h4>Edit Quantity </h4>
                                <input type="number" class="form-control @error('name') is-invalid @enderror" name="Qty"
                                    value="{{$product->Qty}}">
                            </div>
                            <div class="form-group mb-3">
                                <h4>Edit Description </h4>
                                <label for="exampleFormControlTextarea1"> </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description"></textarea>
                              </div>
                            
                            <div class="input-group ">
                                <h4>Edit Image </h4>
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Upload Image Product</span>
                                </div>
                           
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" name="image">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
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
                    <a type="button" href="{{route('product.index')}}">Products</a>
                </button>
                <button type="" class="btn-group btn mb-3 mr-3 btn-indigo">
                    <a type="button" href="{{route('all-categories')}}">Category</a>
                </button>
               </div>
             
              </div>
             
             
    </section>
@endsection
