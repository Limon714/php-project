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
    echo "Data Inserted";
   }

}

function slugUrl($string){
    $slug = preg_replace('/[^a-zA-Z0-9 -]/','',$string);
    $slug = str_replace(' ','-',$slug);
    $slug = strtolower($slug);
    return $slug;
}
?>