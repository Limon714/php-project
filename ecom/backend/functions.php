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
       $output = "<tr>
       <td> " . $result['cate_id'] .";</td>
       <td> " . $result['cate_name'] .";</td>
       <td> " . $result['slug_url'] .";</td>
       <td> " . $result['added_on'] .";</td>
       <td> " . $result['status'] .";</td>
       </tr>" ;

    }
    return $output;
}
?>