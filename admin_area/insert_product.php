
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<div class="row">
    <div class="col-lg-12">
        <!--<ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products 
            </li>
        </ol>-->
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-pencil fa-fw"></i> Insert Product
               </h3> 
           </div>
           <div class="panel-body">
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Product Title </label>
                      <div class="col-md-6">
                          <input name="product_title" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Product Category </label>  
                      <div class="col-md-6">
                          <select name="product_cat" class="form-control">
                              <option> Select a Category Product </option> 
                               
                          </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Customer Category </label>
                      <div class="col-md-6">
                          <select name="product_cat" class="form-control">
                              <option> Select a Category </option> 
                               
                          </select>
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Product Image 1 </label>
                      <div class="col-md-6">
                          <input name="product_img1" type="file" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Product Price </label>
                      <div class="col-md-6">
                          <input name="product_price" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Product Keywords </label>
                      <div class="col-md-6">
                          <input name="product_keywords" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Product Desc </label>
                      <div class="col-md-6">
                          <textarea name="product_desc" cols="19" rows="6" class="form-control"></textarea> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label>    
                      <div class="col-md-6">
                          <input name="submit" value="Add Product" type="submit" class="btn btn-primary form-control"> 
                      </div>
                   </div>
               </form>
           </div>
        </div>
    </div>
</div>  
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html> 