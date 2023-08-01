@extends('Adminview.Inventory.Ecommerce.master_branch')

@section('title')
<title>Super Parent Category</title>
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
                                    <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProductCategory">Add Super Category<i class="fa fa-3x fa-plus ms-2" style="font-size: 16px;"></i></p>

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
                                            <th>Parent Category</th>
                                            <th>UPC Code</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Electronics</td>
                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Fashion</td>
                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Clothes</td>
                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Two Wheel</td>
                                            <td>56655656</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
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
<div class="modal fade" id="addProductCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                        <label for="super_category" class="form-label">Super Category</label>


                        <select class="form-select" name="super_category" id="type_1">
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
                        <label for="upc" class="form-label">Unicode/(UPC)</label>
                        <input type="text" class="form-control" id="upc" placeholder="Enter UPC Code:">
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