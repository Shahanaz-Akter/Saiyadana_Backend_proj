@extends('Adminview.Inventory.Ecommerce.master_branch')

@section('title')
<title>Super Category</title>
@endsection

@section('content')
<div class="content-page">
    <div class="content">

        <!--  Content start-->
        <div class="container-fluid">

            <div class=" row">

                <div class="p-4 col-12 bg-white">
                    <div class="d-flex align-items-center justify-content-center" style="">

                    </div>
                    <div class="row">
                        <!-- <select class="form-select" name="super_category" id="type1">
                            <option value="null" selected>Select</option>
                            <option value="ecommerce">Ecommerce</option>
                            <option value="fashion">Fashion</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothes">Clothes</option>
                            <option value="appliances">Appliances</option>
                            <option value="beauty_and_toys">Beauty and Toys</option>
                            <option value="groceries">Groceries</option>
                            <option value="shoes">Shoes</option>
                            <option value="top_offers">Top Offers</option>
                            <option value="two_wheel">Two Wheel</option>
                        </select> -->
                        <div class="col-12">



                            <div class="d-flex justify-content-end mb-3">

                                <span class="me-2">
                                    <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#parentCategory">Add Super Category<i class="fa fa-3x fa-plus ms-2" style="font-size: 16px;"></i></p>

                                </span>

                                <span>
                                    <!-- <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product <i class="fa fa-3x fa-plus" style="font-size: 16px;"></i></p> -->
                                </span>

                            </div>
                            <div class=" text-center p-2" style="font-size: 20px;">Super Category List</div>
                            <hr>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>Super Category Image</th>
                                            <th>Super Category Name</th>
                                            <th>Unicode/upc Code</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"> <td></td>
                                            <td>Electronics</td>

                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_super_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                            <td></td>
                                            <td>Fashion</td>

                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_super_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"> <td></td>
                                            <td>Clothes</td>
                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_super_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row"></th>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"> <td></td>
                                            <td>Two Wheel</td>
                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_super_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <br><br><br>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content end-->

</div>
</div>

<!-- Super Category Modal start -->
<div class="modal fade" id="parentCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Super Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">

                <form action="{{url('/post_super_category')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="super_category_name" class="form-label mb-2">Super Category</label>


                        <select class="form-select" name="super_category_name" id="type_1">
                            <option value="null" selected>Select</option>
                            <option value="ecommerce">Ecommerce</option>
                            <option value="fashion">Fashion</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothes">Clothes</option>
                            <option value="appliances">Appliances</option>
                            <option value="beauty_and_toys">Beauty and Toys</option>
                            <option value="groceries">Groceries</option>
                            <option value="shoes">Shoes</option>
                            <option value="top_offers">Top Offers</option>
                            <option value="two_wheel">Two Wheel</option>
                        </select>
                        <!-- <input type="text" class="form-control" id="category_name" placeholder="Enter category Name:"> -->
                    </div>



                    <div class="mb-3">
                        <label for="super_category_image" class="mb-2">Super Category Image</label>
                        <input type="file" id="super_category_image" name="super_category_image">
                    </div>


                    <div class="mb-3">
                        <label for="unicode mb-2" class="form-label">Unicode/(UPC)</label>
                        <input type="text" class="form-control" id="unicode" placeholder="Enter UPC Code:" name="unicode">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Super Category Modal end -->


</div>
<!-- modal end -->
<!-- Main content end -->

@endsection