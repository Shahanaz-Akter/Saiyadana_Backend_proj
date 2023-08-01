<!DOCTYPE html>
<html>

<head>
    <title>Product Form</title>

    <!-- bootstrap update version link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- fontawewsome update version link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <!-- Show the Products list as Tabular format -->
    <div class="d-flex justify-content-end mb-2">
        <!-- <div class="" style="padding: 15px 10px;">
            <button class="btn btn-success mt-2">Admin Dashboard</button>
        </div> -->



        <div class="" style="padding: 15px 10px;">
            <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#add_new_user">New User <i class="fas fa-plus"></i></button>
        </div>

        <div class="" style="padding: 15px 10px;">
            <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#uploding_products">Uploading Product +</button>
        </div>

        <div class="" style="padding: 15px 20px;">
            <a href="{{url('/logout')}}"><button class="btn btn-success mt-2">Logout</button></a>
        </div>
    </div>


    <div class="container mt-2">
        <!-- <button class="mb-5 btn btn-outline-success  text-center">
        </button> -->
        <table class="table mb-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col">Size</th>
                    <th scope="col">Status</th>
                    <th scope="col">Primary image</th>
                    <th scope="col">Secondary image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>


                <tr>
                    <th scope="row">1</th>
                    <td>Shirt</td>
                    <td>Men</td>
                    <td>500</td>
                    <td>Red</td>
                    <td>XXL</td>
                    <td>Stock-In</td>
                    <td>Primary Image</td>
                    <td>Secondary Image</td>
                    <td>Description</td>
                    <td> <a href="{{url('/edit_product')}}"><i class="fa-solid fa-pen-to-square ms-2"></i></a> </td>
                    <td> <a href="{{url('/delete_product/')}}"><i class="fa-solid fa-trash-can"></i></a> </td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Pant</td>
                    <td>Men</td>
                    <td>300</td>
                    <td>Blue</td>
                    <td>XL</td>
                    <td>Stock-Out</td>
                    <td>Primary Image</td>
                    <td>Secondary Image</td>
                    <td>Description</td>
                    <td> <a href="{{url('/edit_product')}}"><i class="fa-solid fa-pen-to-square ms-2"></i></a> </td>
                    <td> <a href="{{url('/delete_product/')}}"><i class="fa-solid fa-trash-can"></i></a> </td>
                </tr>


                <tr>
                    <th scope="row">3</th>
                    <td>Shirt</td>
                    <td>Women</td>
                    <td>550</td>
                    <td>Purple</td>
                    <td>XXL</td>
                    <td>Stock-In</td>
                    <td>Primary Image</td>
                    <td>Secondary Image</td>
                    <td>Description</td>
                    <td> <a href="{{url('/edit_product')}}"><i class="fa-solid fa-pen-to-square ms-2"></i></a> </td>
                    <td> <a href="{{url('/delete_product/')}}"><i class="fa-solid fa-trash-can"></i></a> </td>
                </tr>

            </tbody>
        </table>

    </div>

    <!-- start new user Modal -->
    <div class="modal fade" id="add_new_user" tabindex="-1" aria-hidden="true">
        <div class="modal-md modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5" style="border: 2px solid green; border-radius:30px;">
                <div class="modal-body">
                    <div class="d-flex justify-content-end">
                        <div class="">
                        </div>
                        <div class="">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>


                    <div class="container mt-3 row">

                        <form action="{{url('/post_login')}}" method="POST" enctype="multipart/form-data">
                            @csrf


                            @error('name')
                            <div style="color: red;">{{$message}}</div>
                            @enderror

                            <div class="col-12 col-md-10 col-lg-10  col-xl-10 form-group text-uppercase mb-3">
                                <label class="mb-2" for="user_name">User Name</label>
                                <input type="text" class="form-control" id="user_name" name="name" placeholder="Enter User Name: ">
                            </div>

                            @error('email')
                            <div style="color: red;">{{$message}}</div>
                            @enderror

                            <div class="col-12 col-md-10 col-lg-10  col-xl-10 form-group text-uppercase mb-3">
                                <label class="mb-2" for="email">User Email </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter User Email: ">
                            </div>


                            @error('password')
                            <div style="color: red;">{{$message}}</div>
                            @enderror

                            <div class="col-12 col-md-10 col-lg-10  col-xl-10 form-group text-uppercase mb-3">
                                <label class="mb-2" for="password">User Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="User Password: ">
                            </div>

                            <div class="col-12 col-md-10 col-lg-10  col-xl-10 form-group text-uppercase mb-3">
                                <label class="mb-2" for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password: " required>
                            </div>

                            <button type="submit" class="btn btn-primary submit">Submit</button>

                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end new user Modal -->

    <!-- start product-details Modal -->
    <div class="modal fade" id="uploading_products" tabindex="-1" aria-hidden="true">
        <div class="modal-xl modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
            <div class="modal-content p-3 p-md-5" style="border: 2px solid green; border-radius:30px;">
                <div class="modal-body">
                    <div class="d-flex justify-content-end">
                        <div class="">
                        </div>
                        <div class="">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>


                    <div class="container mt-3 row">

                        <form action="{{url('/post_upload_products')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="name">Product Name: </label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Name: ">
                            </div>
                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="price">Product Price: </label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter Product Price: ">
                            </div>
                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="size">Product Size: </label>
                                <input type="text" class="form-control" id="size" name="size" placeholder="Enter Product Size: ">
                            </div>
                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="color">Product Color:</label>
                                <input type="text" class="form-control" id="color" name="color" placeholder="Enter Product Size: ">
                            </div>
                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="status">Status:</label>
                                <input type="text" class="form-control" id="status" name="status" placeholder="Enter Status: ">
                            </div>
                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="product_status">Product Status:</label>
                                <input type="text" class="form-control" id="product_status" name="product_status" placeholder="Enter Product Status: ">
                            </div>

                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="form-label">Select Product Status</label>
                                <select name='product_status' class="form-select">
                                    <option value="design">Design</option>
                                    <option value="ready">Ready</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="primary_image">primary Product Image</label>
                                <input type="file" class="form-control-file" id="primary_image" name="primary_image" placeholder="Enter primary Product Image: ">
                            </div>


                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="secondary_image">Secondary Product Image</label>
                                <input type="file" class="form-control-file" id="secondary_image" name="secondary_image[]" placeholder="Enter SEcondary Product Image: ">
                                <span><i class="fas fa-times" onclick="delete_element(this)"></i></span>
                            </div>
                            <section class="secondary_images_parent">
                            </section>

                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5 plus_btn btn btn-success">Add New Secondary Image <i class="fa-solid fa-plus" style="font-size: 17px;"></i></div>

                            <div class="col-12 col-md-8 col-lg-8  col-xl-8 form-group text-uppercase mb-5">
                                <label class="mb-2" for="description">Description </label>
                                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter Product Description: "></textarea>
                            </div>

                            <button type="submit" class="btn btn-success btn-lg submit">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end product-details Modal -->

    <!-- Link of JS files -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Adding Image JS file -->
    <!-- <script>
        let container = document.querySelector('.container');
        let parent = document.querySelector('.secondary_images_parent');
        let plus = document.querySelector('.plus_btn');
        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-8 col-ld-8 col-xl-8 form-group text-uppercase mb-5");

            let label = document.createElement('label');
            label.setAttribute("for", "secondary_image");
            label.setAttribute("class", "mb-2");
            label.textContent = "Secondary Product Image  ";

            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "secondary_image");
            input.setAttribute("name", "secondary_image[]");
            input.setAttribute("placeholder", "Enter SEcondary Product Image: ");
            input.setAttribute("required", "");

            div.append(label);
            div.append(input);

            parent.append(div);
            console.log(parent);
        });
    </script> -->


    <script>
        let div = document.querySelector('.putput');

        let container = document.querySelector('.container');
        let parent = document.querySelector('.secondary_images_parent');
        let plus = document.querySelector('.plus_btn');

        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-8 col-ld-8 col-xl-8 form-group text-uppercase mb-5");

            let label = document.createElement('label');
            label.setAttribute("for", "secondary_image");
            label.setAttribute("class", "mb-2");
            label.textContent = "Secondary Product Image  ";

            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "secondary_image");
            input.setAttribute("name", "secondary_image[]");
            input.setAttribute("placeholder", "Enter SEcondary Product Image: ");
            input.setAttribute("required", "");

            let span = document.createElement('span');
            let i_tagg = document.createElement('i');
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




</body>

</html>