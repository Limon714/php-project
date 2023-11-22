<?php include 'db-con.php';
    $sql = "SELECT * FROM fv_categories ORDER BY id DESC";
    $check = mysqli_query($con,$sql);
   
   

?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <?php include 'links.php'; ?>
</head>

<body class="crm_body_bg">


    <?php include 'header.php'; ?>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="header_notification_warp d-flex align-items-center">
                                <li>
                                    <a class="bell_notification_clicker nav-link-notify" href="#"> <img
                                            src="img/icon/bell.svg" alt>
                                    </a>

                                    <div class="Menu_NOtification_Wrap">
                                        <div class="notification_Header">
                                            <h4>Notifications</h4>
                                        </div>
                                        <div class="Notification_body">

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/2.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/4.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/3.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/2.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Cool Marketing </h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/4.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>Awesome packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="single_notify d-flex align-items-center">
                                                <div class="notify_thumb">
                                                    <a href="#"><img src="img/staf/3.png" alt></a>
                                                </div>
                                                <div class="notify_content">
                                                    <a href="#">
                                                        <h5>what a packages</h5>
                                                    </a>
                                                    <p>Lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nofity_footer">
                                            <div class="submit_button text-center pt_20">
                                                <a href="#" class="btn_1">See More</a>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <a class="CHATBOX_open nav-link-notify" href="#"> <img src="img/icon/msg.svg"
                                            alt> </a>
                                </li>
                            </div>
                            <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <p>Neurologist </p>
                                        <h5>Dr. Robar Smith</h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="#">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner ">
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Fill All the Product details</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <div class="card-body">
                                    <form action="functions.php" method="post" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Product Name</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Enter category name..." name="pro_name">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Parent Category</label>
                                               <select name="parent_id" onchange="get_subCategories(this.value)"  class="form-control">
                                               <option value="">--Select--</option>
                                                <?php  foreach($check as $val){ ?>
                                                    <option value="<?php echo $val['cate_id']; ?>"><?php echo ucwords($val['cate_name']) ; ?></option>
                                               <?php } ?>
                                               </select>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Sub Category</label>
                                               <select name="subcat_id" id="subcat_id" class="form-control">
                                               
                                               </select>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Original Price</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Original Price..." name="mrp">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Selling Price</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Selling Price..." name="selling_price">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Stock</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="stock" name="stock">
                                            </div>
                                            
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="inputEmail4">Product Description</label>
                                                <textarea name="pro_desc" class="form-control" id="" cols="30" rows="10"></textarea>
                                                
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Product Image</label>
                                                <input type="file" class="form-control" id="inputEmail4"
                                                    placeholder="Product Image" name="product_image">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Meta Title</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Meta Title..." name="meta_title">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Meta Keyword</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Write Keyword..." name="meta_key">
                                            </div>
                                            
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label" for="inputEmail4">Meta Description</label>
                                                <input type="text" class="form-control" id="inputEmail4"
                                                    placeholder="Write Description..." name="meta_description">
                                            </div>


                                            <div class="col-md-4">
                                                <label class="form-label" for="inputState">Status</label>
                                                <select id="inputState" class="form-control" name="status">
                                                    <option selected>Choose...</option>
                                                    <option value="1"> Active</option>
                                                    <option value="0"> Deactive</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary" name="add-product">Add Product</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>

        <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
        <script>
                        CKEDITOR.replace( "pro_desc" );
        </script>
  <script type="text/javascript">
    function get_subCategories(cate_id){
        var cate_id = cate_id;
        $.ajax({
            url:'functions.php',
            data:{cate_id:cate_id},
            method:'post',
            error:function(){
                alert("Something went wrong");
            },
            success:function(data){
               $("#subcat_id").html(data);
            }

        });
    }
  </script>