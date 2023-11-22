<?php
include 'db-con.php';

if(isset($_POST['add-category'])){
   $cate_id = mt_rand(1111,9999);
   $cate_name=$_POST['name'];
   $meta_title=$_POST['title'];
   $meta_key=$_POST['keyword'];
   $meta_desc=$_POST['description'];
   $added_on=date('M-d-Y');
   $slug_url = slugUrl($cate_name);

   $sql = "INSERT INTO fv_categories(cate_id,cate_name,meta_title,meta_key,meta_desc,slug_url,added_on,status) VALUES ('$cate_id','$cate_name','$meta_title', '$meta_key','$meta_desc','$slug_url','$added_on',1)";

   $check = mysqli_query($con,$sql);
   if($check){
    ?>
    <script type="text/javascript">
        alert('Data Inserted Successfully');
        window.location.href="view-categories.php";
    </script>
    <?php 
   }

}


if(isset($_POST['add-sub-categories'])){
   $cate_id = mt_rand(1111,9999);
   $cate_name=$_POST['name'];
   $meta_title=$_POST['title'];
   $meta_key=$_POST['keyword'];
   $meta_desc=$_POST['description'];
   $added_on=date('M-d-Y');
   $parent_id =$_POST['parent_id'] ;
   $slug_url = slugUrl($cate_name);

   $sql = "INSERT INTO fv_sub_categories(cate_id,parent_id,cate_name,meta_title,meta_key,meta_desc,slug_url,added_on,status) 
   VALUES ('$cate_id','$parent_id','$cate_name','$meta_title', '$meta_key','$meta_desc','$slug_url','$added_on',1)";

   $check = mysqli_query($con,$sql);
   if($check){
    ?>
    <script type="text/javascript">
        alert('Data Inserted Successfully');
        window.location.href="view-sub-categories.php";
    </script>
    <?php 
   }

}

if(isset($_POST['add-product'])){
   $pro_id = mt_rand(1111,9999);
   $pro_name=$_POST['pro_name'];
   $pro_cate=$_POST['parent_id'];
   $pro_sub_cate=$_POST['subcat_id'];
   $pro_desc=$_POST['pro_desc'];
   $stock=$_POST['stock'];
   $status=$_POST['status'];
   $mrp=$_POST['mrp'];
   $file = $_FILES['product_image']['name'];
   $temp = $_FILES['product_image']['tmp_name'];
   $destination = './img/uploads/'.$file;
   move_uploaded_file($temp,$destination);
   $selling_price=$_POST['selling_price'];
   $meta_title=$_POST['meta_title'];
   $meta_key=$_POST['meta_key'];
   $meta_desc=$_POST['meta_description'];
   $added_on=date('M-d-Y');
   $slug_url = slugUrl($pro_name);

   $sql = "INSERT INTO fv_product(pro_id, pro_name, pro_cate,pro_sub_cate,pro_desc,stock,mrp,selling_price,product_image,meta_title,	meta_description,meta_key,status,slug_url,added_on) 
   VALUES ('$pro_id','$pro_name','$pro_cate','$pro_sub_cate','$pro_desc','$stock','$mrp','$selling_price','$file','$meta_title', '$meta_desc','$meta_key','$status','$slug_url','$added_on')";

   $check = mysqli_query($con,$sql);
   if($check){
    ?>
    <script type="text/javascript">
        alert('Data Inserted Successfully');
       
    </script>
    <?php 
   }

}




function slugUrl($string){
    $slug = preg_replace('/[^a-zA-Z0-9 -]/','',$string);
    $slug = str_replace(' ','-',$slug);
    $slug = strtolower($slug);
    return $slug;
}

function get_categories(){
    include 'db-con.php';
    $sql = "SELECT * FROM fv_categories ORDER BY id DESC";
    $check = mysqli_query($con,$sql);
    while($result = mysqli_fetch_assoc($check)){
     echo  $output = "<tr>
       <td>". $result['id']."</td>
       <td> " . $result['cate_id'] .";</td>
       <td> " . $result['cate_name'] .";</td>
       <td> " . $result['slug_url'] .";</td>
       <td> " . $result['added_on'] .";</td>
       <td> " . $result['status'] .";</td>
       </tr>" ;

    }
   
}

function get_Sub_categories(){
    include 'db-con.php';
    $sql = "SELECT * FROM fv_sub_categories ORDER BY id DESC";
    $check = mysqli_query($con,$sql);
    while($result = mysqli_fetch_assoc($check)){
        $parent_id = $result['parent_id'];
        $sql2 = "SELECT cate_name FROM fv_categories WHERE cate_id = $parent_id";
        $check2 = mysqli_query($con,$sql2);
        $parent = mysqli_fetch_assoc($check2);
        echo  $output = "<tr>
       <td>". $result['id']."</td>
       <td> " . $result['cate_id'] .";</td>
       <td> " . $result['cate_name'] .";</td>
       <td> " . $parent['cate_name'] .";</td>
       <td> " . $result['slug_url'] .";</td>
       <td> " . $result['added_on'] .";</td>
       <td> " . $result['status'] .";</td>
       </tr>" ;

    }
   
}



if(isset($_POST['cate_id'])){
  $p = $_POST['cate_id'];
  $sql2 = "SELECT * FROM fv_sub_categories WHERE parent_id = $p ORDER BY id DESC";
  $check2 = mysqli_query($con,$sql2);
  ?>
  <option value="">select</option>
 <?php while($result = mysqli_fetch_assoc($check2)){
    echo "<option value=".$result['cate_id'].">".$result['cate_name']."</option>";
  }
}



?>