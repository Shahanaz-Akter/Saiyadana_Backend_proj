    @extends('Adminview.Inventory.Ecommerce.master_branch')

    @section('title')
    <title>Show All</title>
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
                                        <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#super_category">Add Super Category<i class="fa fa-3x fa-plus ms-2" style="font-size: 16px;"></i></p>
                                    </span>

                                    <span class="me-2">
                                        <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#sub_category">Add Sub Category<i class="fa fa-3x fa-plus ms-2" style="font-size: 16px;"></i></p>
                                    </span>

                                    <span>
                                        <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product<i class="fa fa-3x fa-plus ms-1" style="font-size: 16px;"></i></p>
                                    </span>


                                </div>
                                <div class=" text-center p-2" style="font-size: 20px;">All Products List</div>
                                <!-- <hr> -->

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr class="">
                                                <th>#</th>
                                                <th>Super Category Name</th>
                                                <th>Super Category Image</th>
                                                <th>Sub category Name</th>
                                                <th>Sub category Primary Name</th>
                                                <th>Sub category Secondary Name</th>
                                                <th>Price</th>
                                                <th>SKU</th>
                                                <th>Regular Price</th>
                                                <th>Discount Price</th>
                                                <th>Entry Date</th>
                                                <th>Expired Date</th>
                                                <th>Stock Availability</th>
                                                <th>Brands</th>
                                                <th>Capacity</th>
                                                <th>UPC Code</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th>1</th>
                                                <td>Ecommerce</td>
                                                <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                                <td>Camera</td>
                                                <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>

                                                <td class="position-relative">
                                                    <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                    <a href="{{url('/view_more')}}" class="">
                                                        <button class="position-absolute mt-2 btn btn-sm btn-primary" style="top: 5%; left: 20%;">View More</button>
                                                    </a>
                                                </td>
                                                <td>300</td>
                                                <td>34500</td>
                                                <td>20000/=</td>
                                                <td>18000/=</td>
                                                <td>04-6-23</td>
                                                <td>07-6-23</td>

                                                <td>Stock-In</td>
                                                <td>Ryans</td>
                                                <td>2000mg</td>
                                                <td>5656</td>
                                                <td>Lorem ipsum mula khabe</td>
                                                <td>
                                                    <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square ms-2" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                    <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>1</th>
                                                <td>Electronics</td>
                                                <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                                <td>Computer</td>
                                                <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>

                                                <td class="position-relative">
                                                    <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                    <a href="{{url('/view_more')}}" class="">
                                                        <button class="position-absolute mt-2 btn btn-sm btn-primary" style="top: 5%; left: 20%;">View More</button>
                                                    </a>
                                                </td>
                                                <td>300</td>
                                                <td>34500</td>
                                                <td>20000/=</td>
                                                <td>18000/=</td>
                                                <td>04-6-23</td>
                                                <td>07-6-23</td>

                                                <td>Stock-In</td>
                                                <td>Ryans</td>
                                                <td>2000mg</td>
                                                <td>5656</td>
                                                <td>Lorem ipsum aut at!</td>
                                                <td>
                                                    <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square ms-2" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                    <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th>1</th>
                                                <td>Clothes</td>
                                                <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>
                                                <td>Scart</td>
                                                <td><img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px"></td>

                                                <td class="position-relative">
                                                    <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Not Available" height="auto" width="150px">
                                                    <a href="{{url('/view_more')}}" class="">
                                                        <button class="position-absolute mt-2 btn btn-sm btn-primary" style="top: 5%; left: 20%;">View More</button>
                                                    </a>
                                                </td>
                                                <td>300</td>
                                                <td>34500</td>
                                                <td>20000/=</td>
                                                <td>18000/=</td>
                                                <td>04-6-23</td>
                                                <td>07-6-23</td>

                                                <td>Stock-In</td>
                                                <td>Ryans</td>
                                                <td>2000mg</td>
                                                <td>5656</td>
                                                <td>Lorem ipsum aut at!</td>
                                                <td>
                                                    <a href="{{url('/edit_products')}}"><i class="fa-solid fa-pen-to-square ms-2" data-bs-toggle="modal" data-bs-target="#edit"></i></a>
                                                    <a href="{{url('/delete_products/')}}"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content end-->

    </div>



    <!-- Super Category Modal start -->
    <div class="modal fade" id="super_category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

    <!-- Sub Category Modal start -->
    <div class="modal fade" id="sub_category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

    <!-- Product Modal -->
    <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Product Selection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="row">

                        <div class="mb-3 col-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name">
                        </div>

                        <div class="col-3">
                            <label for="" class="form-label">Category Name</label>
                            <select class="form-select" aria-label="Default select example" name="category_name">
                                <option value="null" selected>Select</option>
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
                        </div>



                        <div class="mb-3 col-3">
                            <label for="regular_Price" class="form-label">Regular Price</label>
                            <input type="text" class="form-control" id="regular_Price" placeholder="Enter Price" name="regular_Price">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="discount_Price" class="form-label">Discount Price</label>
                            <input type="text" class="form-control" id="discount_Price" placeholder="Enter Price" name="discount_Price">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="model" placeholder="Enter Model Name" name="model">
                        </div>



                        <div class="mb-3 col-3">
                            <label for="resolution" class="form-label">Resolution</label>
                            <input type="text" class="form-control" id="resolution" placeholder="Enter Resolution Name" name="resolution">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="features" class="form-label">Features</label>
                            <input type="text" class="form-control" id="features" placeholder="Enter Features Name" name="features">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="discount" class="form-label">Discount in % (if any)</label>
                            <input type="text" class="form-control" id="discount" placeholder="00.00%" name="discount">
                        </div>




                        <div class="col-12 col-md-6 col-lg-6  col-xl-6 mb-3">
                            <label class="mb-2" for="product_description">Description </label>
                            <textarea class="form-control" id="product_description" name="product_description" rows="4" placeholder="Enter Product  Description: " required></textarea>
                        </div>

                        <div class="mb-3 col-3 mt-4">
                            <label for="stock" class="form-label">Stock Availability</label>
                            <input type="text" class="form-control" id="model" placeholder="Enter Model Name" name="stock">
                        </div>

                        <div class="mb-3 col-3 mt-4">
                            <label for="" class="form-label">Discount Expires</label>
                            <input type="date" class="form-control" id="" placeholder="">
                        </div>





                        <div class="col-12 col-md-9 col-lg-9  col-xl-9 mb-2 mt-2">
                            <label class="mb-2" for="primary_image">primary Product Image</label>
                            <input type="file" class="form-control-file" id="primary_image" name="primary_image" placeholder="Enter primary Product Image: " required>
                        </div>

                        <!-- <div class="mb-3 col-3 mt-4"></div> -->

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-2 mt-2">
                            <label class="mb-2" for="secondary_image">Secondary Product Image</label>
                            <input type="file" class="form-control-file" id="secondary_image" name="secondary_image[]" placeholder="Enter SEcondary Product Image: ">
                            <span><i class="fas fa-times me-1" onclick="delete_element(this)"></i></span>
                        </div>

                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-2 mt-2">
                        </div>

                        <section class="row secondary_images_parent"></section>

                        <div class="mt-2 mb-3 text-left">
                            <span class="mb-2 plus_btn p-1 btn btn-primary mt-2"> Add More <i class=" ms-1 fa-solid fa-plus "></i></span>
                        </div>

                        <!-- <span class="btn btn-primary plus_btn ms-2">Add More <i class="fas fa-plus text-white"></i></span> -->
                    </div>


                    <h4 class="mb-3 ms-5">Electronics Specification </h4>
                    <hr>

                    <div class="ms-5">
                        <div class="row mb-5">

                            <div class="mb-3 col-2">
                                <label for="display_size" class="form-label">Display Size</label>
                            </div>
                            <div class="mb-3 col-4 ">
                                <input type="text" class="form-control" id="display_size" placeholder="Enter Display Size ">
                            </div>

                            <div class="mb-3 col-2">
                                <label for="display_type" class="form-label">Display Type</label>
                            </div>
                            <div class="mb-3 col-4">
                                <input type="text" class="form-control" id="display_type" placeholder="Enter Display Type">
                            </div>

                            <div class="mb-3 col-2">
                                <label for="panel_type" class="form-label">Panel Type</label>
                            </div>
                            <div class="mb-3 col-4 ">
                                <input type="text" class="form-control" id="panel_type" placeholder="Enter Panel Type">
                            </div>

                            <div class="mb-3 col-2">
                                <label for="resolution" class="form-label">Resolution</label>
                            </div>
                            <div class="mb-3 col-4 ">
                                <input type="text" class="form-control" id="resolution" placeholder="Enter Resolution">
                            </div>


                            <!-- <div class="mb-5"></div> -->

                            <div class="mb-3 col-3 ">
                                <label for="pixel_pitch" class="form-label">Pixel(pitch)</label>
                            </div>

                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="pixel_pitch" placeholder="Enter Pixel Pitch">
                            </div>


                            <div class="mb-3 col-3 ">
                                <label for="display_surface" class="form-label">Display Surface</label>
                            </div>

                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="display_surface" placeholder="Enter Display Surface">
                            </div>

                            <div class="mb-3 col-3 ">
                                <label for="aspect_ratio" class="form-label">Aspect Ratio</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="aspect_ratio" placeholder="Enter Aspect Ratio">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="viewing_angle" class="form-label">Viewing Angle</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="viewing_angle" placeholder="Enter Viewing Angle">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="power" class="form-label">Power Type</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="viewing_angle" placeholder="Enter Viewing Angle">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="warranty" class="form-label">Warranty</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="warranty" placeholder="Enter Warranty">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="dimension" class="form-label">Dimension</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="dimension" placeholder="Enter Dimension">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="respones_time" class="form-label">Response Time</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="respones_time" placeholder="Enter Response Time">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="color_gamut" class="form-label">Color Gamut</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="color_gamut" placeholder="Enter Color Gamut">
                            </div>
                            <div class="mb-3 col-3">
                                <label for="refresh_rate" class="form-label">Refresh Rate</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="refresh_rate" placeholder="Enter Refresh Rate">
                            </div>
                            <div class="mb-3 col-3 ">
                                <label for="brightness" class="form-label">Brightness</label>
                            </div>
                            <div class="mb-3 col-8 ">
                                <input type="text" class="form-control" id="brightness" placeholder="Enter Brightness">
                            </div>

                            <div class="mb-3 col-3 ">
                                <label for="contrast_ratio" class="form-label">Contrast ratio</label>
                            </div>
                            <div class="mb-3 col-8">
                                <input type="text" class="form-control" id="contrast_ratio" placeholder="Enter Contrast ratio">
                            </div>
                            <!-- <div class="mb-3 col-3 text-center">
                                        <label for="" class="form-label">Name</label>
                                        <select class="form-select" aria-label="Default select example" name="category_name">
                                            <option selected>Open this select menu</option>
                                            <option value="Computer">Computer</option>
                                            <option value="Android">Android</option>
                                            <option value="Radio">Radio</option>
                                        </select>
                                    </div> -->

                            <!-- <br><br><br><br> -->

                            <!-- custom input end -->

                        </div>
                    </div>

                    <h4 class="text-left mb-5 ms-5">Custom Specification

                        <span style="font-size: 25px!important;"> <i class="fas fa-plus text-success add_specification ms-4"></i></span>
                    </h4>

                    <section class="d-none custom_specification text-center mb-4">

                        <div class="row col_enter">

                            <!-- custom input start -->
                            <section class="row">
                                <div class="mb-3 col-5">
                                    <input type="text" class="form-control mb-2 ms-5" id="" placeholder="Enter Key" name="keyy">
                                </div>

                                <div class="mb-3 col-5">
                                    <input type="text" class="form-control" id="" placeholder="Enter Value" name="valuee">
                                </div>

                                <!-- <i class="fas fa-check"></i> -->
                                <div class="mt-1 mb-3 col-2 delete_col">

                                    <span style="font-size: 20px!important;">
                                        <i class="fas fa-times text-danger">
                                        </i>
                                    </span>
                                </div>

                            </section>

                            <!-- custom input end -->
                        </div>

                        <span class="btn btn-primary add_more_col ms-2">Add More <i class="fas fa-plus text-white"></i></span>

                    </section>

                    <div class="modal-footer">
                        <div type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</div>
                        <div type="button" class="btn btn-primary submit">Submit</div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- modal end -->
    <!-- Main content end -->

    <script>
        let div = document.querySelector('.putput');
        let container = document.querySelector('.container');
        let parent = document.querySelector('.secondary_images_parent');
        let plus = document.querySelector('.plus_btn');

        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-4 col-lg-4 col-xl-4 mb-2 mt-2");

            let label = document.createElement('label');
            label.setAttribute("for", "secondary_image");
            label.setAttribute("class", "mb-2");
            label.textContent = "Secondary Product Image  ";

            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "secondary_image");
            input.setAttribute("name", "secondary_image[]");
            input.setAttribute("placeholder", "Enter Secondary Product Image: ");
            input.setAttribute("required", "");

            let span = document.createElement('span');
            let i_tagg = document.createElement('i');
            i_tagg.setAttribute('class', '');
            i_tagg.classList.add("fas", "fa-times");
            i_tagg.setAttribute('onclick', 'delete_element(this)');

            span.append(i_tagg);

            div.append(label);
            div.append(input);
            div.append(span);

            parent.append(div);
            console.log(parent);
        });
    </script>

    <script>
        const delete_element = (e) => {
            let parent = e.parentNode.parentNode;
            // console.log(parent);
            parent.classList.add('d-none');
        }
    </script>

    @endsection