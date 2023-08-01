@extends(Adminview.Inventory.Electronics.master_branch)

@section('content')
<!-- Main content start -->
<div class="content-page">
    <div class="content">

        <!--  Content-->
        <div class="container-fluid">

            <div class=" row">

                <div class="p-4 col-12 bg-white">
                    <div class="d-flex align-items-center justify-content-center" style="">

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-between mb-3">

                                <p class="text-primary">All Categories</p>
                                <!-- border border-1 border-primary d-flex justify-content-center align-items-center -->
                                <!-- Button trigger modal -->
                                <span type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#addProductCategory">
                                    <!-- Add Category -->
                                </span>

                                <span>
                                    <p class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add Product <i class="fa fa-3x fa-plus" style="font-size: 16px;"></i></p>
                                    <!-- <span class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                                                <i class="fa fa-3x fa-plus fs-1"></i>
                                            </span> -->
                                </span>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="text-primary">
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <!-- <th>UPC Code</th> -->
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Desktop</td>
                                            <!-- <td>124</td> -->
                                            <td>
                                                <a href=""><i class="fas fa-edit ms-2 text-primary me-3"></i></a> <a href=""><i class="fas fa-trash text-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mobile</td>
                                            <!-- <td>124</td> -->
                                            <td>
                                                <a href=""><i class="fas fa-edit ms-2 text-primary me-3"></i></a> <a href=""><i class="fas fa-trash text-danger"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td>radio</td>
                                            <!-- <td>124</td> -->
                                            <td>
                                                <a href=""><i class="fas fa-edit ms-2 text-primary me-3"></i></a> <a href=""><i class="fas fa-trash text-danger"></i></a>
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
        <!-- container-fluid -->

        <!-- Category Modal start -->
        <!-- Category Modal end -->


        <!-- Product Modal -->
        <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="mb-3 col-3 text-center">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name">
                            </div>

                            <div class="col-3">
                                <label for="" class="form-label">Category Name</label>
                                <select class="form-select" aria-label="Default select example" name="category_name">
                                    <option selected>Open this select menu</option>
                                    <option value="Computer">Computer</option>
                                    <option value="Android">Android</option>
                                    <option value="Radio">Radio</option>
                                </select>
                            </div>

                            <!-- <div class="mb-3 col-3 text-center">
                                        <label for="upc" class="form-label">UPC code</label>
                                        <input type="text" class="form-control" id="upc" placeholder="Enter UPC Code" name="upc">
                                    </div> -->

                            <div class="mb-3 col-3 text-center">
                                <label for="ean" class="form-label">EAN code</label>
                                <input type="text" class="form-control" id="ean" placeholder="Enter EAN Code" name="ean">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="Price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="Price" placeholder="Enter Price" name="Price">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="model" class="form-label">Model</label>
                                <input type="text" class="form-control" id="model" placeholder="Enter Model Name" name="model">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="resolution" class="form-label">Resolution</label>
                                <input type="text" class="form-control" id="resolution" placeholder="Enter Resolution Name" name="resolution">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="features" class="form-label">Features</label>
                                <input type="text" class="form-control" id="features" placeholder="Enter Features Name" name="features">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="discount" class="form-label">Discount in % (if any)</label>
                                <input type="text" class="form-control" id="discount" placeholder="00.00%" name="discount">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="" class="form-label">Discount Expires</label>
                                <input type="date" class="form-control" id="" placeholder="">
                            </div>

                            <div class="mb-3 col-12"> </div>

                            <div class="col-12 col-md-6 col-lg-6  col-xl-6 mb-3">
                                <label class="mb-2" for="product_description">Description </label>
                                <textarea class="form-control" id="product_description" name="product_description" rows="4" placeholder="Enter Product  Description: " required></textarea>
                            </div>

                            <div class="col-12 col-md-6 col-lg-6  col-xl-6 mb-3">
                                <label class="mb-2" for="additional_information">Additional Information </label>
                                <textarea class="form-control" id="additional_information" name="additional_information" rows="4" placeholder="Enter Product Additional Description: " required></textarea>
                            </div>

                            <!-- variant -->
                            <div class=" col-12 mb-3 ">
                                <label class="form-check-label">Add Varient</label>
                                <div class="row">
                                    <div class=" col-3 mb-3 form-check">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="color_radio" onchange="show_variant_selector('color')">
                                            <label class="form-check-label" for="color_radio">Color</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="size_radio" onchange="show_variant_selector('size')">
                                            <label class="form-check-label" for="size_radio">Size</label>
                                        </div>


                                    </div>
                                    <div class=" col-3 mb-3 form-check">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="texture_radio" onchange="show_variant_selector('texture')">
                                            <label class="form-check-label" for="texture_radio">Resolution</label>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="material_radio" onchange="show_variant_selector('material')">
                                            <label class="form-check-label" for="material_radio">Features</label>
                                        </div>
                                        <!-- <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="style_radio" onchange="show_variant_selector('style')">
                                                    <label class="form-check-label" for="style_radio">Style</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="long_radio" onchange="show_variant_selector('height')">
                                                    <label class="form-check-label" for="long_radio">Height</label> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 " id="color_selector">
                            <label class="form-label">Color</label>
                            <select class="form-control varient" multiple="multiple" id="color_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator(this)">
                                <option>Red</option>
                                <option>Blue</option>
                                <option>Black</option>
                                <option>Pink</option>
                                <option>Yellow</option>
                                <option>White</option>
                                <option>Brown</option>
                            </select>
                        </div>
                        <!-- size -->
                        <div class="col-4 " id="size_selector">
                            <label class="form-label">Size</label>
                            <select class="form-control varient" multiple="multiple" id="size_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                <option>SM</option>
                                <option>LG</option>
                                <option>MD</option>
                                <option>XL</option>
                                <option>XXL</option>
                                <option>35</option>
                                <option>36</option>
                                <option>38</option>
                                <option>40</option>
                            </select>
                        </div>
                        <div class="col-5 d-none" id="material_selector">
                            <label class="form-label">Resolution</label>
                            <select class="form-control varient" multiple="multiple" id="material_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                <option>Material 1</option>
                                <option>Material 2</option>
                                <option>Material 3</option>
                                <option>Material 4</option>
                                <option>Material 5</option>
                            </select>
                        </div>
                        <div class="col-5 d-none" id="style_selector">
                            <label class="form-label">Features</label>
                            <select class="form-control varient" multiple="multiple" id="styles_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                <option>Casual</option>
                                <option>Formal</option>
                                <option>Business/Professional</option>
                                <option>Athletic/Sportswear</option>
                                <option>Athletic/Sportswear</option>
                                <option>Bohemian</option>
                                <option>Vintage</option>
                                <option>Streetwear</option>
                                <option>Preppy</option>
                                <option>Romantic</option>
                                <option>Minimalist</option>
                                <option>Ethnic/Traditional</option>
                            </select>
                        </div>
                        <div class="col-4 d-none" id="texture_selector">
                            <label class="form-label">Texture</label>
                            <select class="form-control varient" multiple="multiple" id="texture_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                <option>Smooth</option>
                                <option>Rough</option>
                                <option>Soft</option>
                                <option>Slick/Shiny</option>
                                <option>Crisp</option>
                            </select>
                        </div>
                        <div class="col-4 d-none" id="height_selector">
                            <label class="form-label">Height</label>
                            <select class="form-control varient" multiple="multiple" id="height_variant" style="width:100%;z-index: 99999;width:200px;" onchange="variant_table_generator()">
                                <option>12'</option>
                                <option>22'</option>

                            </select>
                        </div>

                        <script>
                            const show_variant_selector = (str) => {
                                console.log(str);
                                if (str == 'size') {
                                    let size_selector = document.getElementById('size_selector');
                                    if (size_selector.classList.contains('d-none')) {
                                        size_selector.classList.remove('d-none');
                                    } else {
                                        size_selector.classList.add('d-none');
                                    }
                                }
                                if (str == 'color') {
                                    let color_selector = document.getElementById('color_selector');
                                    if (color_selector.classList.contains('d-none')) {
                                        color_selector.classList.remove('d-none');
                                    } else {
                                        color_selector.classList.add('d-none');
                                    }
                                }
                                if (str == 'material') {
                                    let material_selector = document.getElementById('material_selector');
                                    if (material_selector.classList.contains('d-none')) {
                                        material_selector.classList.remove('d-none');
                                    } else {
                                        material_selector.classList.add('d-none');
                                    }
                                }
                                if (str == 'style') {
                                    let style_selector = document.getElementById('style_selector');
                                    if (style_selector.classList.contains('d-none')) {
                                        style_selector.classList.remove('d-none');
                                    } else {
                                        style_selector.classList.add('d-none');
                                    }
                                }
                                if (str == 'texture') {
                                    let texture_selector = document.getElementById('texture_selector');
                                    if (texture_selector.classList.contains('d-none')) {
                                        texture_selector.classList.remove('d-none');
                                    } else {
                                        texture_selector.classList.add('d-none');
                                    }
                                }
                                if (str == 'height') {
                                    let height_selector = document.getElementById('height_selector');
                                    if (height_selector.classList.contains('d-none')) {
                                        height_selector.classList.remove('d-none');
                                    } else {
                                        height_selector.classList.add('d-none');
                                    }
                                }
                            }

                            const variant_table_generator = (tag) => {
                                // Get the selected values
                                var color_variantValues = $('#color_variant').val();
                                var size_variantValues = $('#size_variant').val();
                                var material_variantValues = $('#material_variant').val();

                                // Print the selected values to the console

                                // console.log(material_variantValues);
                                const combinations = [];

                                for (let i = 0; i < color_variantValues.length; i++) {
                                    for (let j = 0; j < size_variantValues.length; j++) {
                                        for (let k = 0; k < material_variantValues.length; k++) {
                                            const combination = [color_variantValues[i], size_variantValues[j], material_variantValues[k]];
                                            combinations.push(combination);
                                        }
                                    }
                                }

                                console.log(combinations);

                            }
                            const mula = () => {
                                // Get the selected values
                                var color_variantValues = $('#color_variant').val();
                                var size_variantValues = $('#size_variant').val();


                                const combinations = [];

                                for (let i = 0; i < color_variantValues.length; i++) {
                                    for (let j = 0; j < size_variantValues.length; j++) {

                                        const combination = [color_variantValues[i], size_variantValues[j]];
                                        combinations.push(combination);

                                    }
                                }
                                console.log(combinations);

                                let table = document.getElementById('product_table');
                                combinations.forEach(combination => {
                                    let tr = document.createElement('tr');

                                    combination.forEach(comb => {
                                        let td = document.createElement('td');
                                        td.innerHTML = comb;
                                        tr.appendChild(td);
                                    });
                                    let td1 = document.createElement('td');
                                    let input = document.createElement('input');
                                    input.setAttribute('type', 'file');
                                    let img = document.createElement('img');
                                    img.setAttribute('src', 'https://e7.pngegg.com/pngimages/344/673/png-clipart-empty-set-null-set-mathematical-notation-set-notation-mathematics-rim-black-and-white.png');
                                    img.setAttribute('width', 100);
                                    input.setAttribute('data-plugins', 'dropify');
                                    input.setAttribute('data-height', '300');

                                    // <input type="file" data-plugins="dropify" data-height="300" />
                                    let input2 = document.createElement('input');
                                    td1.appendChild(input);
                                    td1.appendChild(img);
                                    tr.appendChild(td1);
                                    let td2 = document.createElement('td');
                                    td2.appendChild(input2);
                                    tr.appendChild(td2);

                                    table.appendChild(tr);
                                });
                            }
                        </script>


                        <!-- <div class="col-12 d-flex justify-content-center p-2">
                                        <span class="btn btn-soft-success" onclick="mula()">Populate variant table</span>
                                    </div> -->

                        <h3 class="text-left">Table</h3>
                        <table id="product_table" class="mb-5">
                            <tr style="border:1px solid black;">
                                <th>Color</th>
                                <th>Size</th>
                                <th>Image</th>
                                <th>Buying Price</th>
                                <th>Selling Price</th>
                                <th>Qunatity</th>
                                <th>Discount<br>(if any)</th>
                                <th>Discount Expires<br>(if any)</th>
                                <th>Brand</th>
                                <th>Actions</th>
                            </tr>

                            <tr>
                                <td>Red</td>
                                <td>XXL</td>
                                <td>Red</td>
                                <td>29299</td>
                                <td>65556</td>
                                <td>100</td>
                                <td>20%</td>
                                <td>30Traikh</td>
                                <td>Orange</td>
                                <td>
                                    <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                    <a href=""><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Red</td>
                                <td>XXL</td>
                                <td>Red</td>
                                <td>29299</td>
                                <td>65556</td>
                                <td>100</td>
                                <td>20%</td>
                                <td>30Traikh</td>
                                <td>Orange</td>
                                <td>
                                    <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                    <a href=""><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Red</td>
                                <td>XXL</td>
                                <td>Red</td>
                                <td>29299</td>
                                <td>65556</td>
                                <td>100</td>
                                <td>20%</td>
                                <td>30Traikh</td>
                                <td>Orange</td>
                                <td>
                                    <a href=""><i class="fas fa-edit ms-2 text-primary"></i></a>
                                    <a href=""><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>

                        </table>
                    </div>

                    <h4 class="text-left mb-3">Electronics Specification </h4>

                    <div class="">
                        <div class="row mb-5">

                            <div class="mb-3 col-2 text-center">
                                <label for="display_size" class="form-label">Display Size</label>
                            </div>
                            <div class="mb-3 col-4 text-center">
                                <input type="text" class="form-control" id="display_size" placeholder="Enter Display Size ">
                            </div>

                            <div class="mb-3 col-2 text-center">
                                <label for="display_type" class="form-label">Display Type</label>
                            </div>
                            <div class="mb-3 col-4 text-center">
                                <input type="text" class="form-control" id="display_type" placeholder="Enter Display Type">
                            </div>

                            <div class="mb-3 col-2 text-center">
                                <label for="panel_type" class="form-label">Panel Type</label>
                            </div>
                            <div class="mb-3 col-4 text-center">
                                <input type="text" class="form-control" id="panel_type" placeholder="Enter Panel Type">
                            </div>

                            <div class="mb-3 col-2 text-center">
                                <label for="resolution" class="form-label">Resolution</label>
                            </div>
                            <div class="mb-3 col-4 text-center">
                                <input type="text" class="form-control" id="resolution" placeholder="Enter Resolution">
                            </div>


                            <div class="mb-5"></div>

                            <div class="mb-3 col-3 text-center">
                                <label for="pixel_pitch" class="form-label">Pixel(pitch)</label>
                            </div>

                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="pixel_pitch" placeholder="Enter Pixel Pitch">
                            </div>


                            <div class="mb-3 col-3 text-center">
                                <label for="display_surface" class="form-label">Display Surface</label>
                            </div>

                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="display_surface" placeholder="Enter Display Surface">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="aspect_ratio" class="form-label">Aspect Ratio</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="aspect_ratio" placeholder="Enter Aspect Ratio">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="viewing_angle" class="form-label">Viewing Angle</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="viewing_angle" placeholder="Enter Viewing Angle">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="power" class="form-label">Power Type</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="viewing_angle" placeholder="Enter Viewing Angle">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="warranty" class="form-label">Warranty</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="warranty" placeholder="Enter Warranty">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="dimension" class="form-label">Dimension</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="dimension" placeholder="Enter Dimension">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="respones_time" class="form-label">Response Time</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="respones_time" placeholder="Enter Response Time">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="color_gamut" class="form-label">Color Gamut</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="color_gamut" placeholder="Enter Color Gamut">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="refresh_rate" class="form-label">Refresh Rate</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="refresh_rate" placeholder="Enter Refresh Rate">
                            </div>
                            <div class="mb-3 col-3 text-center">
                                <label for="brightness" class="form-label">Brightness</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
                                <input type="text" class="form-control" id="brightness" placeholder="Enter Brightness">
                            </div>

                            <div class="mb-3 col-3 text-center">
                                <label for="contrast_ratio" class="form-label">Contrast ratio</label>
                            </div>
                            <div class="mb-3 col-8 text-center">
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

                    <h4 class="text-left mb-3">Custom Specification

                        <span style="font-size: 25px!important;"> <i class="fas fa-plus text-success add_specification"></i></span>
                    </h4>

                    <section class="d-none custom_specification text-center">

                        <div class="row col_enter">

                            <!-- custom input start -->
                            <section class="row">
                                <div class="mb-3 col-5">
                                    <input type="text" class="form-control mb-2" id="" placeholder="Enter Key" name="key">
                                </div>

                                <div class="mb-3 col-5">
                                    <input type="text" class="form-control" id="" placeholder="Enter Value" name="key">
                                </div>

                                <!-- <i class="fas fa-check"></i> -->
                                <div class="mt-1 mb-3 col-2 delete_col">

                                    <span style="font-size: 20px!important;">
                                        <i class="fas fa-times me-3 text-danger">
                                        </i>
                                    </span>
                                </div>

                            </section>

                            <!-- custom input end -->
                        </div>
                        <span class="btn btn-success add_more_col" style="font-size: 15px!important;">Add More <i class="fas fa-plus text-white"></i></span>
                    </section>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary submit">Submit</button>
                </div>
            </div>
        </div>
        <!-- Product Modal end -->





    </div>

</div>
<!-- Main content end -->
@endsection