@extends('layouts.app')

@section('content')

    <section class="profile-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Admin Panel</h4><button data-toggle="modal" data-target="#profile-edit">edit
                                profile</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="profile-image">
                                        <a href="#"><img src="../../images/user.png" alt="user"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <div class="form-group"><label class="form-label">name</label><input
                                            class="form-control" type="text" value="Larashop CEO"></div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <div class="form-group"><label class="form-label">Email</label><input
                                            class="form-control" type="email" value="Larashop@business.com"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Storage Admin Panel</h4><button data-toggle="modal" data-target="#contact-add">add
                                items</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show h-50">
                                    <div class="profile-card contact active">
                                        <h5 class="text-center">Products</h5>
                                        @foreach ($products as $products)
                                            <div class="profile-card contact d-flex flex-wrap p-1 w-50">
                                                <a href="{{ route('product.create') }}">{{ $products->name }}</a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact" style="max-height: 800px">
                                        <h5 class="text-center">Categories</h5>
                                        @foreach ($categorylist as $category)

                                            <div class="profile-card d-flex flex-wrap w-50">
                                                <div>{{ $category->name }}</div>
                                            </div>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>






















            {{-- <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>contact number</h4><button data-toggle="modal" data-target="#contact-add">add
                               contact</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact active">
                                        <h5>primary</h5>
                                        <p>+8801838288389</p>
                                        <ul class="user-action">
                                            <li><button class="edit" title="Edit This" data-toggle="modal" data-target="#contact-edit"><i class="icofont-edit"></i></button>
                                            </li>
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h5>secondary</h5>
                                        <p>+8801941101915</p>
                                        <ul class="user-action">
                                            <li><button class="edit" title="Edit This" data-toggle="modal" data-target="#contact-edit"><i class="icofont-edit"></i></button>
                                            </li>
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact mb-0">
                                        <h5>secondary</h5>
                                        <p>+8801747875727</p>
                                        <ul class="user-action">
                                            <li><button class="edit" title="Edit This" data-toggle="modal" data-target="#contact-edit"><i class="icofont-edit"></i></button>
                                            </li>
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>delivery address</h4><button data-toggle="modal" data-target="#address-add">add
                                address</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address active">
                                        <h5>Home</h5>
                                        <p>Adress</p>
                                        <ul class="user-action">
                                            <li><button class="edit" title="Edit This" data-toggle="modal" data-target="#address-edit"><i class="icofont-edit"></i></button>
                                            </li>
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h5>Office</h5>
                                        <p>adress</p>
                                        <ul class="user-action">
                                            <li><button class="edit" title="Edit This" data-toggle="modal" data-target="#address-edit"><i class="icofont-edit"></i></button>
                                            </li>
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address mb-0">
                                        <h5>Bussiness</h5>
                                        <p>Address</p>
                                        <ul class="user-action">
                                            <li><button class="edit" title="Edit This" data-toggle="modal" data-target="#address-edit"><i class="icofont-edit"></i></button>
                                            </li>
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card mb-0">
                        <div class="account-title">
                            <h4>payment option</h4><button data-toggle="modal" data-target="#payment-add">add
                                card</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment active"><img src="../../images/payment/01.png" alt="payment">
                                        <h4>card number</h4>
                                        <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                        <h5>miron mahmud</h5>
                                        <ul class="user-action">
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment"><img src="../../images/payment/02.png" alt="payment">
                                        <h4>card number</h4>
                                        <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                        <h5>miron mahmud</h5>
                                        <ul class="user-action">
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment mb-0"><img src="../../images/payment/03.png" alt="payment">
                                        <h4>card number</h4>
                                        <p><span>****</span><span>****</span><span>****</span><sup>1876</sup></p>
                                        <h5>miron mahmud</h5>
                                        <ul class="user-action">
                                            <li><button class="delete" title="Remove This" data-dismiss="alert"><i
                                                        class="icofont-ui-delete"></i></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="contact-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new contact</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option selected>choose title</option>
                            <option value="primary">primary</option>
                            <option value="secondary">secondary</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">number</label><input class="form-control" type="text" placeholder="Enter your number"></div><button class="form-btn" type="submit">save contact info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="address-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new address</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option selected>choose title</option>
                            <option value="home">home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">address</label><textarea class="form-control" placeholder="Enter your address"></textarea></div><button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="payment-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new payment</h3>
                    </div>
                    <div class="form-group"><label class="form-label">card number</label><input class="form-control" type="text" placeholder="Enter your card number"></div><button class="form-btn" type="submit">save card info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit profile info</h3>
                    </div>
                    <div class="form-group"><label class="form-label">profile image</label><input class="form-control" type="file"></div>
                    <div class="form-group"><label class="form-label">name</label><input class="form-control" type="text" value="Miron Mahmud"></div>
                    <div class="form-group"><label class="form-label">email</label><input class="form-control" type="text" value="mironcoder@gmail.com"></div><button class="form-btn" type="submit">save
                        profile info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="contact-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit contact info</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option value="primary" selected>primary</option>
                            <option value="secondary">secondary</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">number</label><input class="form-control" type="text" value="+8801838288389"></div><button class="form-btn" type="submit">save contact
                        info</button>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="address-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"><button class="modal-close" data-dismiss="modal"><i
                        class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit address info</h3>
                    </div>
                    <div class="form-group"><label class="form-label">title</label><select class="form-select">
                            <option value="home" selected>home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select></div>
                    <div class="form-group"><label class="form-label">address</label><textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                    </div><button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div> --}}
        @endsection
