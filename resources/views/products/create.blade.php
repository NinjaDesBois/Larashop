@extends('layouts.app')
@section('content')

    <section class="contact-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 bg-light p-4">
                    <form action="{{ route('product.store') }}" class="contact-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center">Add Product </h3>
                        <div class="form-group">
                            <div class="form-input-group mb-3">
                                <h5>Name of product</h5>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    placeholder="Enter the name of product">
                            </div>
                            <div class="form-input-group mb-3">
                                <h5>Price</h5>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                                    placeholder="Enter the price of product">
                            </div>
                            <div class="form-input-group mb-3">
                                <h5>Quantity available</h5>
                                <input type="number" class="form-control @error('Qty') is-invalid @enderror" name="Qty"
                                    placeholder="Enter the Quantity available of product">
                            </div>
                            <div class="input-group mb-3">
                                <h5>Category of product</h5>
                                <select name="category_id" class="custom-select" id="inputGroupSelect01">
                                    
                                    @foreach ($categorylist as $category) 
                                    
                                  <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">DESCRIPTION </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                              </div>
                            
                            <div class="input-group mb-3">
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
                            <span>SAVE</span>
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
                    <a type="button" href="{{route('product.index')}}">PRODUCTS</a>
                </button>
                <button  class="btn-group btn mb-3 mr-3 btn-indigo">
                    <a type="button" href="{{route('all-categories')}}">Categories</a>
                </button>
               </div>
             
              </div>
             
             
    </section>
@endsection
