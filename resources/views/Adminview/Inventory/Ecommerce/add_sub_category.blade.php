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
                                            <th>Sub category</th>
                                            <th>Primary Image</th>
                                            <th>Secondary Image</th>
                                            <th>Price</th>
                                            <th>SKU</th>
                                            <th>Entry</th>
                                            <th>Expired</th>
                                            <th>Regular</th>
                                            <th>Discount</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Monitor</td>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                            <td class="position-relative">
                                                <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                <a href="{{url('/view_more')}}" class="">
                                                    <button class="position-absolute mt-2 btn btn-primary" style="top: 30%; left: 30%;">View More</button>
                                                </a>
                                            </td>
                                            <td>300</td>
                                            <td>34500</td>
                                            <td>4-08-23</td>
                                            <td>10-08-23</td>
                                            <td>44567</td>
                                            <td>4467</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatibus nemo amet omnis provident fuga tempora cupiditate est, sequi placeat consequuntur, libero pariatur explicabo! Dolore ea veniam laborum aut at!</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Keyboard</td>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                            <td class="position-relative">
                                                <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                <a href="" class="">
                                                    <button class="position-absolute mt-2 btn btn-primary" style="top: 30%; left: 30%;">View More</button>
                                                </a>
                                            </td>
                                            <td>300</td>
                                            <td>34500</td>
                                            <td>4-08-23</td>
                                            <td>10-08-23</td>
                                            <td>44567</td>
                                            <td>4467</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatibus nemo amet omnis provident fuga tempora cupiditate est, sequi placeat consequuntur, libero pariatur explicabo! Dolore ea veniam laborum aut at!</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Mouse</td>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                            <td class="position-relative">
                                                <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                <a href="{{url('/view_more')}}" class="">
                                                    <button class="position-absolute mt-2 btn btn-primary" style="top: 30%; left: 30%;">View More</button>
                                                </a>
                                            </td>
                                            <td>300</td>
                                            <td>34500</td>
                                            <td>4-08-23</td>
                                            <td>10-08-23</td>
                                            <td>44567</td>
                                            <td>4467</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatibus nemo amet omnis provident fuga tempora cupiditate est, sequi placeat consequuntur, libero pariatur explicabo! Dolore ea veniam laborum aut at!</td>
                                            <td>
                                                <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can ms-2"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Speaker</td>
                                            <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                            <td class="position-relative">
                                                <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                <a href="{{url('/view_more')}}" class="">
                                                    <button class="position-absolute mt-2 btn btn-primary" style="top: 30%; left: 30%;">View More</button>
                                                </a>
                                            </td>
                                            <td>300</td>
                                            <td>34500</td>
                                            <td>4-08-23</td>
                                            <td>10-08-23</td>
                                            <td>44567</td>
                                            <td>4467</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui voluptatibus nemo amet omnis provident fuga tempora cupiditate est, sequi placeat consequuntur, libero pariatur explicabo! Dolore ea veniam laborum aut at!</td>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Sub Category Selection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{url('/post_sub_category')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <input type="hidden" name="id" value="{{ $product->id }}">

                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="sub_category_primary_image" class="mb-2">Sub Category Primary Image</label>
                            <input type="file" id="sub_category_primary_image" name="sub_category_primary_image">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="sub_category_secondary_image" class="mb-2">Sub Category Secondary Image</label>
                            <input type="file" id="sub_category_secondary_image" name="sub_category_secondary_image[]" multiple>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="sub_category_name" class="form-label">Sub Category Name</label>
                            <input type="text" class="form-control" id="sub_category_name" placeholder="Enter Sub Category" name="sub_category_name">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter price Code:" name="price">
                        </div>


                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="sku_code" class="form-label">SKU Code</label>
                            <input type="text" class="form-control" id="sku_code" placeholder="Enter SKU Code:" name="sku_code">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="entry_date" class="form-label">Entry Date</label>
                            <input type="date" class="form-control" id="entry_date" placeholder="Enter Entry Date:" name="entry_date">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="expire_date" class="form-label">Expired Date</label>
                            <input type="date" class="form-control" id="expire_date" placeholder="Enter Expired Date:" name="expire_date">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="regular_price" class="form-label">Regular Price</label>
                            <input type="text" class="form-control" id="regular_price" placeholder="Enter Regular Price:" name="regular_price">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="discount_price" class="form-label">Discount Price</label>
                            <input type="text" class="form-control" id="discount_price" placeholder="Enter Discount Price:" name="discount_price">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" cols="" rows="" name="description"></textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 mb-3">
                        </div>

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </form>
            </div>



            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Submit</button> -->
            </div>
        </div>
    </div>
</div>
<!--Sub Category Modal end -->

</div>
<!-- modal end -->
<!-- Main content end -->

@endsection