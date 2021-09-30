<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Aug 2020 19:53:43 GMT -->

<!-- Mirrored from sciencediarybd.com/soft/addnewshipment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Sep 2021 13:13:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
    <link href="plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">

    <link href="plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/jquery-step/jquery.steps.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
             <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index-2.html">
                        <img src="assets/img/somelogo.png" class="navbar-logo" alt="logo">
                    </a>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">

                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Sales</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
            <ul class="navbar-nav flex-row ml-auto ">
                <li class="nav-item more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Settings</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">Settings</a>
                            <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">Mail</a>
                            <a class="dropdown-item" id="print" data-value="Print" href="{{route('preview.print')}}">Print</a>
                            <a class="dropdown-item" data-value="Download" href="javascript:void(0);">Download</a>
                            <a class="dropdown-item" data-value="Share" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <x-home-sidebar></x-home-sidebar>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
       <!--  <div id="content" class="main-content"> -->
            <div id="content" class="main-content">           
                <div class="row">
                 

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>New Shipment</h4>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" id="shipment" name="shipmentForm" action="{{route('ship.store')}}">
                                    @csrf
                                <div class="widget-content widget-content-area">
                                    <div id="circle-basic" class="">
                                        <h3>Sender Details</h3>
                                        <section>
                                            <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Sender Company<span style="color: red;">*</span></label>
                                                    <input class="form-control" id="s_company" name="s_company" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Sender Name<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" id="s_name" name="s_name" placeholder="Default input">
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Sender Address</label>
                                                   <input class="form-control" type="text" id="s_address" name="s_address" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Country<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                      <input class="form-control" type="text" id="s_country" name="s_country" placeholder="Default input">
                                                    </div>
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">State<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" id="s_state" name="s_state" placeholder="Default input">
                                                 </div> 
                                            </div>

                                             <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">City<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                      <input class="form-control" type="text" id="s_city" name="s_city" placeholder="Default input">
                                                    </div>
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Zip Code<span style="color: red;">*</span></label>
                                                   <input class="form-control" name="s_zipcode" id="s_zipcode" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Sender NID/Passport No.<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                      <input type="text" name="s_nidorpp" id="s_nidorpp" class="form-control" placeholder="Username" aria-label="NID/Passport">
                                                    </div>
                                                 </div> 
                                            </div>
                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">TelePhone No.<span style="color: red;">*</span></label>
                                                   <input class="form-control" id="s_telephone" name="s_telephone" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>
                                             <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Mobile Number<span style="color: red;">*</span></label>
                                                   <input class="form-control" name="s_mobile" id="s_mobile" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>
                                        </section>

                                        <h3>Recipient Details</h3>
                                        <section>
                                            <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient Company<span style="color: red;">*</span></label>
                                                    <input class="form-control" type="text" id="r_company"  name="r_company" placeholder="Default input">
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient Name<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" name="r_name" id="r_name" placeholder="Default input">
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient Address<span style="color: red;">*</span></label>
                                                   <input class="form-control" name="r_address" id="r_address" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient Country<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                     <input class="form-control" type="text" name="r_country" id="r_country" placeholder="Default input">
                                                    </div>
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient State<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" name="s_state" id="r_state" placeholder="Default input">
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient City<span style="color: red;">*</span></label>
                                                     <input class="form-control" type="text" id="r_city" name="r_city" placeholder="Default input">
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient ZIP Code<span style="color: red;">*</span></label>
                                                   <input class="form-control" name="r_zipcode" id="r_zipcode" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient ID<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                      <input type="text" class="form-control" name="r_id" placeholder="ID" id="r_id" aria-label="Username">
                                                    </div>
                                                 </div> 
                                            </div>

                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipeint Mobile Phone<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" id="r_mobile" name="r_mobile" placeholder="Default input">
                                                 </div> 
                                            </div>

                                             <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Recipient TelePhone<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" id="r_telephone" name="r_telephone" placeholder="Default input">
                                                 </div> 
                                            </div>

                                        </div>
                                        </section>
                                  
                                        <h3>Percel details</h3>
                                        <section>
                                            <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Courier Name<span style="color: red;">*</span></label>
                                                  <input class="form-control" type="text" id="cou_name" name="cou_name" placeholder="Default input">
                                                 </div> 
                                            </div>
                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Courier Number<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" name="cou_number" id="cou_number" placeholder="Default input">
                                                 </div> 
                                            </div>
                                             <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Sample<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" id="cou_sample" name="cou_sample" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>

                                            <div class="row">
                                            <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Height</label>
                                                   <div class="input-group">
                                                      <input type="number" class="form-control" id="cou_height" name="cou_height" placeholder="Username" aria-label="Username">
                                                    </div>
                                                 </div> 
                                            </div>
                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Width</label>
                                                   <input class="form-control" type="number" id="cou_width" name="cou_width" placeholder="Default input">
                                                 </div> 
                                            </div>
                                             <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Length</label>
                                                   <input class="form-control" type="number" id="cou_length" name="cou_length" placeholder="Default input">
                                                 </div> 
                                            </div>
                                             <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">V.Weight<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="number" id="v_weight" name="v_weight" placeholder="Default input">
                                                 </div> 
                                            </div>
                                             <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">G. Weight<span style="color: red;">*</span></label>
                                                   <input class="form-control" type="text" id="g_weight" name="g_weight" placeholder="Default input">
                                                 </div> 
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Prepaid Amount<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon5">৳</span>
                                                      </div>
                                                      <input type="text" class="form-control" id="prepaid_amount" name="prepaid_amount">
                                                    </div>
                                                 </div> 
                                            </div>
                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Collect Amount</label>
                                                   <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon5">৳</span>
                                                      </div>
                                                      <input type="text" class="form-control" id="coll_amount" name="coll_amount" placeholder="Username" aria-label="Username">
                                                    </div>
                                                 </div> 
                                            </div>

                                             <div class="col">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Booked By<span style="color: red;">*</span></label>
                                                   <div class="input-group">
                                                      <input type="text" class="form-control" name="booked_by" id="booked_by" placeholder="Username" aria-label="Username">
                                                    </div>
                                                 </div> 
                                            </div>
                                            <div class="col">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Date and Time</label>
                                                   
                                                        <input id="basicFlatpickr" name="dateNtime" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                                 </div> 
                                            </div>
                                             <!-- <div class="col-4">
                                               <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Third Party Amount</label>
                                                   <div class="input-group">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon5">৳</span>
                                                      </div>
                                                      <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                                    </div>
                                                 </div> 
                                            </div> -->
                                        </div>

                                        
                                        </section>
                                        <!-- Start -->
                                        <h3>Invoice</h3>
                                        <section>
                                            <div class="user-details" style="margin-left: 47px;">
                                                <div class="user_data">
                                            <div class="row">
                                            <div class="col-4">
                                                 <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Description</label>
                                                   <div class="input-group">
                                                      <input type="text" name="description[]" class="form-control" id="description-0" placeholder="Username" aria-label="Username">
                                                    </div>
                                                 </div> 
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Quantity</label>
                                                   <input class="form-control" id="quantity-0" name="quantity[]" type="text" placeholder="Default input">
                                                 </div> 
                                            </div>
                                             <div class="col-2">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">U. Price</label>
                                                   <input class="form-control" id="price-0" type="text" name="price[]" placeholder="Default input">
                                                 </div> 
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Amount</label>
                                                   <input class="form-control" id="tot_amount-0" type="text" name="tot_amount[]" placeholder="Default input">
                                                 </div> 
                                            </div>
                                            <!-- <div class="col-1">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Remark</label>
                                                   <input class="form-control" type="text" placeholder="Default input">
                                                 </div> 
                                            </div> -->
                                             <div class="col-2 d-flex justify-content-center">
                                                <div class="form-group"> 
                                                    <label for="exampleFormControlInput1">Add/Sub</label>

                                                  <input type="button" class="btn btn-success add_details"  value="+">
                                                 </div> 
                                            <!-- </div> -->
                                        </div>
                                         </div>
                                          </div>
<!-- invoice multiple rows -->
<script type="text/javascript">
        $(document).ready(function(){
            var i = 0;
         
          $("#quantity-" + i).change(function() {
            upd_art(i)
          });

           $("#price-" + i).change(function() {
            upd_art(i)
          });

          

          $(".add_details").click(function(){
           i++;

            $(".user-details").append('<div class="user_data"><div class="row"><div class="col-4"><div class="form-group"><label for="exampleFormControlInput1">Description</label><div class="input-group"><input type="text" name="description[]" id="description-' + i +'" class="form-control" placeholder="Username" aria-label="Username"></div></div></div><div class="col-2"><div class="form-group"><label for="exampleFormControlInput1">Qty Full</label><input class="form-control" type="text" id="quantity-'+ i +'" name="quantity[]" placeholder="Default input"></div></div><div class="col-2"><div class="form-group"><label for="exampleFormControlInput1">Unit Price</label><input class="form-control" type="text" id="price-'+ i +'" name="price[]"  placeholder="Default input"></div> </div><div class="col-2"><div class="form-group"><label for="exampleFormControlInput1">Amount</label><input class="form-control" type="text" id="tot_amount-' + i +'" name="tot_amount[]" placeholder="Default input"></div></div><div class="col-2 d-flex justify-content-center"><div class="form-group"><label for="exampleFormControlInput1"></label><input type="button" class="btn btn-danger remove-btn" value="X" style="margin-top: 12px;margin-right: 11px;"></div></div></div></div>');

              
              $("#quantity-" + i).change(function() {
                upd_art(i)
              });

               $("#price-" + i).change(function() {
                upd_art(i)
              });

              
          });

          $("body").on("click",".remove-btn",function(e){
           $(this).parents('.user_data').remove();
          });

          function upd_art(i) {
            var qty = $('#quantity-' + i).val();
            var price = $('#price-' + i).val();
            
            // console.log(name);
            // console.log(price);
            var totAmount = (qty * price);
            var totAm = totAmount.toFixed(2);
            $('#tot_amount-' + i).val(totAm);
        }

           /* $("#appendedArea").on('click', '#subBtn', function() {
             $(this).remove();
            });*/

        });


</script>
                                       
                                    </section>
                                     <h3>Preview</h3>
                                        <section>
                                        <div class="row">
                                           <div class="col-12">
                                            <h4 class="text-center">Shipment Details</h4>
                                           </div>
                                           <br>
                                            <div class="col-12">
                                                <table class="table table-bordered">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Sender Information</th>
                                                      <th scope="col">Recipient Information</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td id="inv_s_com"></td>
                                                      <td id="inv_r_com"></td>
                                                    </tr>

                                                     <tr>
                                                      <td id="inv_s_name"></td>
                                                      <td id="inv_r_name"></td>
                                                    </tr>

                                                    <tr>
                                                      <td id="inv_s_address"></td>
                                                      <td id="inv_r_address"></td>
                                                    </tr>

                                                     <tr>
                                                      <td id="inv_s_country"></td>
                                                      <td id="inv_r_country"></td>
                                                    </tr>

                                                    <tr>
                                                      <td id="inv_s_state"></td>
                                                      <td id="inv_r_state"></td>
                                                    </tr>

                                                    <tr>
                                                      <td id="inv_s_city"></td>
                                                      <td id="inv_r_city"></td>
                                                    </tr>
                                                     
                                                     <tr>
                                                      <td id="inv_s_zip"></td>
                                                      <td id="inv_r_zip"></td>
                                                    </tr>
                                                    
                                                     <tr>
                                                      <td id="inv_s_tel"></td>
                                                      <td id="inv_r_tel"></td>
                                                    </tr>
                                                     <tr>
                                                      <td id="inv_s_mob"></td>
                                                      <td id="inv_r_mob"></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                            </div>

                                            <div class="col-6">
                                            <table class="table table-borderless">

                                                 <thead>
                                                    <tr>
                                                      <th scope="col">Parcel Details</th>
                                                      <th scope="col"></th>
                                                    </tr>
                                                  </thead>

                                                <tbody>
                                                <tr>
                                                  <th scope="row">Courier Name :</th>
                                                  <td id="inv_cou_name">TPC</td>
                                                </tr>

                                                 <tr>
                                                  <th scope="row">Courier Number :</th>
                                                  <td id="inv_cou_number">#7878</td>
                                                </tr>

                                                <tr>
                                                  <th scope="row">Height :</th>
                                                  <td id="inv_cou_height">68 cm</td>
                                                </tr>

                                                 <tr>
                                                  <th scope="row">Width :</th>
                                                  <td id="inv_cou_weight">89 cm</td>
                                                </tr>

                                                <tr>
                                                  <th scope="row">Length :</th>
                                                  <td id="inv_cou_leight">100 cm</td>
                                                </tr>

                                                <tr>
                                                  <th scope="row">V. Weight :</th>
                                                  <td id="inv_cou_vweight">30.5</td>
                                                </tr>

                                                 <tr>
                                                  <th scope="row">G. Weight :</th>
                                                  <td id="inv_cou_gweight">35.6</td>
                                                </tr>

                                                <tr>
                                                  <th scope="row">Prepaid Amount :</th>
                                                  <td id="inv_prepaid_amount">600</td>
                                                </tr>

                                                 <tr>
                                                  <th scope="row">Collect Amount :</th>
                                                  <td id="inv_cou_colamount">400</td>
                                                </tr>

                                                <!-- <tr>
                                                  <th scope="row">Third Party Amount :</th>
                                                  <td>300</td>
                                                </tr> -->

                                                 <tr>
                                                  <th scope="row">Booked By :</th>
                                                  <td id="inv_cou_bookedby">Nashid Ahmed</td>
                                                </tr>

                                                <tr>
                                                  <th scope="row">Date and Time :</th>
                                                  <td id="inv_cou_datentime">01/05/2021</td>
                                                </tr>

                                              </tbody>
                                            </table>
                                            </div>
                                            <div class="col-6">
                                            </div>
                                            <div class="col-6">
                                                <h2>Invoice</h2>
                                            </div>
                                            <div class="col-6"></div>
                                            <div class="col-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                          <th scope="col">Sl</th>
                                                          <th scope="col">Item Description</th>
                                                          <th scope="col">Quantity</th>
                                                          <th scope="col">Unit Price</th>
                                                          <th scope="col">Amount</th>
                                                          <th scope="col">Remarks</th>
                                                        </tr>  
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>1</td>
                                                              <td>Steel Sheet</td>
                                                              <td>2</td>
                                                              <td>100</td>
                                                              <td>200</td>
                                                              <td>---</td>
                                                          </tr>

                                                           <tr>
                                                              <td>1</td>
                                                              <td>Steel Sheet</td>
                                                              <td>2</td>
                                                              <td>100</td>
                                                              <td>200</td>
                                                              <td>---</td>
                                                          </tr>

                                                           <tr>
                                                              <td></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td><b>Total</b></td>
                                                              <td>400</td>
                                                              <td></td>
                                                          </tr>

                                                      </tbody>
                                                </table>
                                            </div>
                                            <div class="col-12">
                                                <b>Terms & Conditions:</b>
                                                <p>
                                                    1. Services provided to the centers mentioned in enclosed printed list.<br>
                                                    2. Pls add Fuel & others Charge as per courier agent declared .<br>
                                                    3. Dollar rate as per association declaration.<br>
                                                    4. Payment should be made by Pay Order / Cash.<br>
5. We do not carry Cash/Gold/Silver/Diamond/Liquid and other articles restricted by Law.<br>
6. Customs Duty, Taxes & others customs related any charges in receiver account.<br>
7. If courier company changes their declared rate, we will provide you the same accordingly.<br>
8. Our Parcels pickup last time within 9.00 pm .
                                                </p>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button class="btn btn-primary" type="submit" style="">Submit</button>
                                            </div>
                                           
                                            <!-- <div class="col"></div>  -->
                                        </div>
                                    </section>
                                           <!--  End -->                                          
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <script type="text/javascript">

              $(document).ready(function(){ $('#print').click(function(){var href = $("s_name").val();$.session.set("yoursessioname", "storevalue");}) });
                
            </script>
                   
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        
        <!--  END CONTENT AREA  -->

   <!--  </div> -->
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="plugins/flatpickr/flatpickr.js"></script>
    <script src="plugins/flatpickr/custom-flatpickr.js"></script>
    
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>

    <script src="bootstrap/js/popper.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_1.js"></script>
    <script src="plugins/select2/select2.min.js"></script>
    <script src="plugins/select2/custom-select2.js"></script>
    <script src="plugins/jquery-step/jquery.steps.min.js"></script>
    <script src="plugins/jquery-step/custom-jquery.steps.js"></script>
    <script type="text/javascript">
        /*var ss = $(".basic").select2({
        tags: true,
        });*/
        $(".disabled-results").select2();


    </script>

    <!-- parcel details height*weight*length -->
    <script type="text/javascript">
        $(document).ready(function() {


             $("#cou_height").change(function() {
                v_weight()
              });
              $("#cou_width").change(function() {
                v_weight()
              });

               $("#cou_length").change(function() {
                v_weight()
              });
               function v_weight(){
                var height = $('#cou_height').val();
                var weight = $('#cou_width').val();
                var lenght = $('#cou_length').val();
                // console.log(name);
                // console.log(price);
                var totNumber = (height * weight * lenght);
                var tot = totNumber.toFixed(2);
                console.log(tot);
                $('#v_weight').val(tot);
               }

        
    });
        

    </script>


   
    <script type="text/javascript">
        /*var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        })*/
        var f1 = flatpickr(document.getElementById('basicFlatpickr'));
    </script>

    
<!-- <script type="text/javascript">
    
</script> -->
   
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Aug 2020 19:54:24 GMT -->

<!-- Mirrored from sciencediarybd.com/soft/addnewshipment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Sep 2021 13:13:39 GMT -->
</html>