@extends('Adminview.Inventory.Ecommerce.master_branch')

@section('title')
<title>Sub Category</title>
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
                        <div class="col-12">



                            <div class="d-flex justify-content-end mb-3">

                                <span class="me-2">
                                    <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#sub_Category">Add Sub Category<i class="fa fa-3x fa-plus ms-2" style="font-size: 16px;"></i></p>

                                </span>

                                <span>
                                    <!-- <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product <i class="fa fa-3x fa-plus" style="font-size: 16px;"></i></p> -->
                                </span>


                            </div>
                            <div class=" text-center p-2" style="font-size: 20px;">Sub Category List</div>
                            <hr>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="">
                                            <th>#</th>
                                            <th>Sub category</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Monitor</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>keyboard</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mouse</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Speaker</td>
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
        <!-- content end-->

    </div>
</div>

<!-- Sub Category Modal start -->
<div class="modal fade" id="sub_Category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Sub Category Selection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-3">
                    <label for="sub_category_name" class="form-label">Sub Category Name</label>
                    <input type="text" class="form-control" id="sub_category_name" placeholder="Enter Sub Category">
                </div>
                <div class="mb-3">
                    <label for="upc" class="form-label">SKU Code</label>
                    <input type="text" class="form-control" id="sku" placeholder="Enter SKU Code:">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<!--Sub Category Modal end -->

</div>
<!-- modal end -->
<!-- Main content end -->

@endsection