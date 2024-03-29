<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type of Business</title>

    <link rel="stylesheet" href="style-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />


    <style>
        * {
            /* @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,400&display=swap'); */
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,400&display=swap');
            font-family: 'Poppins', sans-serif;
        }

        a {
            text-decoration: none;
            color: gray;
        }


        .login-page {
            width: 100%;
            height: 100vh;
            display: inline-block;
            display: flex;
            align-items: center;
            background: url("{{asset('/asset_1/images/auth/bg.png')}}");
            background-size: cover;
            background-position: left center;
        }

        .form-right i {
            font-size: 100px;
        }

        .logo img {
            /* height: 40px; */
            width: auto;

        }



        /* /Don't forget to add Font Awesome CSS : "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/ */
        input[type="text"] {
            width: 50%;
            border: 1px solid #A952A5;
            border-radius: 4px;
            margin: 8px 0;
            outline: none;
            padding: 8px;
            box-sizing: border-box;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: dodgerBlue;
            box-shadow: 0 0 8px 0 dodgerBlue;
        }

        .inputWithIcon input[type="text"] {
            padding-left: 10px;
        }

        .inputWithIcon {
            position: relative;
            display: flex;
            align-items: center;
        }


        .inputWithIcon input[type="text"]:focus+i {
            color: dodgerBlue;
        }

        .inputWithIcon.inputIconBg i {
            background-color: #aaa;
            color: #fff;
            padding: 9px 4px;
            border-radius: 4px 0 0 4px;
        }

        .inputWithIcon.inputIconBg input[type="text"]:focus+i {
            color: #fff;
            background-color: dodgerBlue;
        }

        .login-with img {
            width: 20px;
            height: auto;

        }

        .login-with {
            display: flex;
            gap: 20px;
            align-items: center;

        }

        .icon-holder {
            /* display: inline-block; */
            height: 35px;
            width: 35px;
            border-radius: 50%;
            cursor: pointer;
            display: inline-flex;
            justify-content: center;
            box-shadow: inset 0 0 10px #EEEEEF;
            border: 2px solid #EEEEEF;
            align-items: center;
        }

        .button {
            text-align: center;
            display: inline-block;
            width: 50%;
            padding: 1em 3em;
            border-radius: 2em;
            background: linear-gradient(to right, #56b8dd, #6e80e6, #8467e7, #b444ee, #e639f7, #c63bf0);
            color: white;
            font-size: 14px;
        }

        @media(max-width: 458px) {
            .login-page {
                align-items: flex-start;
                padding-top: 12px;
                ;
            }

            .logo img {
                height: 28px;
                ;
            }

            .links span:nth-child(1) {
                font-size: 15px;
                ;
            }

            .container {
                width: 92% !important;
                margin: 5px auto !important;
                padding: 10px 15px !important;
            }
        }

        form input::placeholder {
            font-size: 15px;
            color: #999999;
        }




        select {
            width: 90%;
            height: 8vh;
            border: 2px solid black;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .btn-link {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        input.select2-search__field:focus {
            outline: none !important;
        }

        .select2-container--default .select2-selection--single {
            height: 40px;
            padding-top: 5px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 6px !important;
        }
    </style>

</head>

<body>


    <div class="login-page bg-light">
        <div class="container bg-white pt-3 pb-3 pe-5 ps-5 max-div" style="width:80%;min-height:430px;border-radius:10px; ;">

            <div class="row">
                <div class="col-lg-6 col-xl-6 col-md-6 col-sm-12">
                    <img src="{{asset('asset_1/images/auth/tob.png')}}" alt="" style="width:100%;">

                </div>


                <form class="col-lg-6 col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center flex-column" action="{{url('/post_tob/'.$user->id)}}" method="post">
                    @csrf
                    <div class="header mb-3">
                        <h2><b>Type Of Business!</b></h2>
                        <span style="color: #808080  ;
                        ">Login to continue</span>

                    </div>

                    <!-- <label for="language">Select a Programming Language:</label> -->
                    <select class="mt-3" name="business" id="type">
                        <option value="null">Select</option>
                        <option value="ecommerce">Ecommerce</option>
                        <option value="appliances">Appliances</option>
                        <option value="beauty_and_toys">Beauty and Toys</option>
                        <option value="clothes">Clothes</option>
                        <option value="groceries">Groceries</option>
                        <option value="mobiles">Mobiles</option>
                        <option value="shoes">Shoes</option>
                        <option value="top_offers">Top Offers</option>
                        <option value="electronics">Electronics</option>
                        <option value="fashion">Fashion</option>
                        <option value="two_wheel">Two Wheel</option>

                    </select>

                    <div class="btn-link mt-3">
                        <button class="button mb-4" type="submit">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#type").select2({
            placeholder: "Select Business Type",
            allowClear: true
        });
    </script>
</body>

</html>