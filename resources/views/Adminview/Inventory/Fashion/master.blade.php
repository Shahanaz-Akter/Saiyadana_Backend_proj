<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    @yield('title')
    <title>Saiyadana_Inventory</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->

    <link href="asset_1/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- icons -->
    <link href="asset_1/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- fontawewsome update version link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- select2 css link -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Plugins css -->
    <link href="asset_1/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="asset_1/libs/dropify/css/dropify.min.css" rel="stylesheet" type="text/css" />


    <style>
        .select2-results__options {
            z-index: 99999 !important;

        }

        .select2-results__option {
            z-index: 99999 !important;

        }

        .select2-selection__choice__display {
            color: black;
        }
    </style>

</head>

<!-- body start -->

<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

    <!-- Begin wrapper -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('Adminview.Inventory.Layouts.topbar')
        <!-- end Topbar Start -->

        <!-- start left sidebar -->
        @include('Adminview.Inventory.Electronics.sidebar')
        <!-- end left sidebar -->

        <!-- Start main Content-->
        @include('Adminview.Inventory.Electronics.dashboard_content')
        <!-- end main content -->

        <!-- Footer Start -->
        @include('Adminview.Inventory.Layouts.footer')
        <!-- end Footer -->

    </div>
    <!-- End Page content -->

    </div>
    <!-- end wrapper -->

    <!-- Right Sidebar -->
    @include('Adminview.Inventory.Layouts.right_sidebar')
    <!-- /Right-bar -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor -->
    <script src="asset_1/libs/jquery/jquery.min.js"></script>
    <script src="asset_1/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset_1/libs/simplebar/simplebar.min.js"></script>
    <script src="asset_1/libs/node-waves/waves.min.js"></script>
    <script src="asset_1/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="asset_1/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="asset_1/libs/feather-icons/feather.min.js"></script>

    <!-- knob plugin -->
    <script src="asset_1/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="asset_1/libs/morris.js06/morris.min.js"></script>
    <script src="asset_1/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="asset_1/js/pages/dashboard.init.js"></script>

    <!-- App js-->
    <script src="asset_1/js/app.min.js"></script>

    <!-- select2 js file -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Plugins js -->
    <script src="asset_1/libs/dropzone/min/dropzone.min.js"></script>
    <script src="asset_1/libs/dropify/js/dropify.min.js"></script>

    <!-- Init js-->
    <script src="asset_1/js/pages/form-fileuploads.init.js"></script>

    <script>
        $(".varient").select2({
            tags: true,
            tokenSeparators: [',', ' '],
            dropdownParent: $('#addProduct')
        })
    </script>


    <script>
        let parent = document.querySelector('.add_new');
        let plus = document.querySelector('.plus_btn');
        plus.addEventListener('click', function(event) {
            // console.log(event.target);
            let div = document.createElement('div');
            div.setAttribute("class", "col-12 col-md-6 col-ld-6 col-xl-6  text-uppercase mb-3");

            let label = document.createElement('label');

            label.setAttribute("class", "mb-2");
            label.setAttribute("class", "me-2");
            label.setAttribute("for", "image");
            label.textContent = "Add Image: ";


            let input = document.createElement('input');
            input.setAttribute("type", "file");
            input.setAttribute("class", "form-control-file");
            input.setAttribute("id", "image");
            input.setAttribute("name", "image[]");
            input.setAttribute("placeholder", "Add New: ");
            input.setAttribute("required", "");

            div.append(label);
            div.append(input);

            parent.append(div);
            console.log(parent);
        });
    </script>

    <script>
        // color customize input tag
        let color_text = document.querySelector('.color_text');
        let color_plus_btn = document.querySelector('.color_plus_btn');
        let enter_color_div = document.querySelector('.enter_color_div');
        let enter_color_div_input1 = document.querySelector('.enter_color_div_input');


        color_text.addEventListener('click', function() {
            let yes_contain = enter_color_div.classList.contains('d-none');

            if (yes_contain) {
                enter_color_div.classList.remove('d-none');
                enter_color_div_input1.classList.remove('d-none');
            } else {
                enter_color_div.classList.add('d-none');
                enter_color_div_input1.classList.add('d-none');
            }
        });



        let enter_color_div_input = document.querySelector('.enter_color_div_input');

        let color_btn = document.querySelector('.color_btn');
        console.log(color_btn);




        color_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('w-50');
            input.classList.add('mb-2');
            input.setAttribute('id', 'color');
            input.classList.add('me-2');
            input.setAttribute('name', 'color[]');

            enter_color_div_input.append(input);

        });

        // size customize input tag

        let size_text = document.querySelector('.size_text');
        let size_plus_btn = document.querySelector('.size_plus_btn');
        let enter_size_div = document.querySelector('.enter_size_div');
        let enter_size_div_input1 = document.querySelector('.enter_size_div_input');

        size_text.addEventListener('click', function() {
            let yes1_contain = enter_size_div.classList.contains('d-none');
            let enter_size_div_input2 = document.querySelector('.enter_color_div_input');

            if (yes1_contain) {
                enter_size_div.classList.remove('d-none');
                enter_size_div_input1.classList.remove('d-none');
            } else {
                enter_size_div.classList.add('d-none');
                enter_size_div_input1.classList.add('d-none');
            }
        });



        let enter_size_div_input = document.querySelector('.enter_size_div_input');

        let size_btn = document.querySelector('.size_btn');
        console.log(size_btn);

        size_plus_btn.addEventListener('click', function() {

            let input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.classList.add('form-control');
            input.classList.add('w-50');
            input.classList.add('mb-2');
            input.setAttribute('id', 'size');
            input.classList.add('me-2');
            input.setAttribute('name', 'size[]');

            enter_size_div_input.append(input);

        });
    </script>

    <script>
        let add_specification = document.querySelector('.add_specification');
        let custom_specification = document.querySelector('.custom_specification');

        add_specification.addEventListener('click', function(event) {

            let y_contain = custom_specification.classList.contains('d-none');
            if (y_contain) {
                custom_specification.classList.remove('d-none');
            } else {
                custom_specification.classList.add('d-none');
            }


        });
    </script>
    <script>
        let add_more_col = document.querySelector('.add_more_col');
        let col_enter = document.querySelector('.col_enter');

        add_more_col.addEventListener('click', function() {


            let section_tag1 = document.createElement('section');
            section_tag1.classList.add('row');

            let div1 = document.createElement('div');
            div1.classList.add('mb-3');
            div1.classList.add('col-5');
            let input1 = document.createElement('input');
            input1.setAttribute('type', 'text');
            input1.classList.add('form-control');
            input1.classList.add('mb-2');
            input1.classList.add('col__1');
            input1.setAttribute('id', '');
            input1.setAttribute('placeholder', 'Enter Key');
            input1.setAttribute('name', 'Key');
            div1.appendChild(input1);
            section_tag1.appendChild(div1);

            let div2 = document.createElement('div');
            div2.classList.add('mb-3');
            div2.classList.add('col-5');
            let input2 = document.createElement('input');
            input2.setAttribute('type', 'text');
            input2.classList.add('form-control');
            input2.classList.add('mb-2');
            input2.classList.add('col__2');
            input2.setAttribute('id', '');
            input2.setAttribute('placeholder', 'Enter Key');
            input2.setAttribute('name', 'Key');
            div2.appendChild(input2);
            section_tag1.appendChild(div2);

            let div3 = document.createElement('div');
            div3.classList.add('mt-1');
            div3.classList.add('mb-3');
            div3.classList.add('col-2');

            let span = document.createElement('span');
            span.style.fontSize = "20px";
            span.style.setProperty('font-size', '20px', 'important');
            // console.log(span);

            let i_tag = document.createElement('i');
            i_tag.classList.add('fas', 'fa-times');
            i_tag.classList.add('me-1');
            i_tag.classList.add('text-danger');
            i_tag.classList.add('delete_col');
            i_tag.setAttribute('onclick', "delete_child(this)");


            // i_tag.addEventListener('click', function(){

            // });

            // console.log(i_tag);

            span.appendChild(i_tag);
            div3.appendChild(span);
            section_tag1.appendChild(div3);
            col_enter.appendChild(section_tag1);
            console.log(section_tag1);
        });

        const delete_child = (selected_tag) => {
            // console.log(selected_tag);
            // console.log(selected_tag.parentNode.parentNode.parentNode);
            let remove_parent = selected_tag.parentNode.parentNode.parentNode;
            remove_parent.remove();
        }
    </script>

</body>

</html>