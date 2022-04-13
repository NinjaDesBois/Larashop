@extends('layouts.app')
@section('content')







    <div class="border border-primary rounded container">

        <div class="d-flex justify-content-between">
            <h2 class="text-center m-3">Product List</h2>
            <a type="button" class="btn-group btn m-3 mr-3 btn-indigo text-dark" href="{{Route('product.create')}}">
                <span>Add a new Product</span>
            </a>
        </div>

        {{-- TABLEAU --}}
        <table class="table containerart">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Quqntity</th>
                    <th scope="col">price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Creation date</th>
                    <th scope="col">Update date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)

                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->name }} <br><img src="{{$product->image}}" style="height:150px;width:150px;border-radius:15%;" alt=""></td>
                        <td>{{ $product->Qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category->name }}</td>
                      
                        <td>{{ $product->created_at->diffForHumans() }}</td>
                        <td>{{ $product->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('product.edit', encrypt($product->id)) }}" class="btn-sm btn-success"><i
                                    class="fas fa-edit"></i></a>
                            <button href="" class="btn-sm btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $product->id }}"><i class="fas fa-trash"></i>
                            </button>

                            <div class="modal fade" id="deleteModal{{ $product->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog bg-light rounded">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">ARE YOU SURE TO DELETE THIS
                                                ITEM ?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body bg-primary">
                                                The deletion of this Product item will be final, are you sure you want to
                                                delete </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn-sm btn-primary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn-sm btn-danger"
                                                    data-bs-dismiss="modal">Understood</button>
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
