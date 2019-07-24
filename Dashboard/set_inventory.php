<?php require_once '../Core/init-dasboard.php'; ?>

<?php $pages = Pages::setpages('Set Inventory'); ?>

<?php if (!$user->is_loggedIn() ) { Redirect::to('../Login'); } ?>

<?php $foto='../'.Session::get('photo'); ?>

<?php
$action='';
$msg='';
$status='';
$dataE=array(); 
if (Input::get('act')) {
	$action = Input::get('act');
	if ($action == 'Add') {
		if (Input::get('save')) {
            if ($inventory->move_files($_FILES['image_one'])) {
                $files1              = $_FILES['image_one'];
                $files2              = $_FILES['image_two'];
                $files3              = $_FILES['image_three'];
                $files_location1     =   $files1['tmp_name'];
                $files_location2     =   $files2['tmp_name'];
                $files_location3     =   $files3['tmp_name'];
                $location_img1 = $inventory->move_files($_FILES['image_one']);
                $location_img2 = $inventory->move_files($_FILES['image_two']);
                $location_img3 = $inventory->move_files($_FILES['image_three']);
                $data = array( 
                            'id'           => '',
                            'product_name' => Input::get('product_name'),
                            'category'     => Input::get('category'),
                            'color'        => Input::get('color'),
                            'size'         => Input::get('size'),
                            'qty'          => Input::get('quantity'),
                            'price'        => Input::get('price'),
                            'description'  => Input::get('description'),
                            'additional'   => Input::get('additional'),
                            'image_one'    => str_replace('../', '', $location_img1),
                            'image_two'    => str_replace('../', '', $location_img2),
                            'image_three'  => str_replace('../', '', $location_img3),
                            'time'         => date('Y-m-d')
                        );
                if ($inventory->add_inventory($data)) {
                    move_uploaded_file($files_location1, $location_img1);
                    move_uploaded_file($files_location2, $location_img2);
                    move_uploaded_file($files_location3, $location_img3);
                    $msg=Input::get('product_name').' has been added!';
                    $status='success';
                }else{
                   $msg=Input::get('product_name').' has been failed to add!';
                   $status='failed';
                }     
            }else{
                $msg = $inventory->move_files($_FILES['image_one']);
            }
        }
	}elseif(Input::get('act')=='Edit'){
        if (Input::get('id')) {
            $dataE = $inventory->tabel_category('inventory', 'id', Input::get('id'));
            if(Input::get('save')){
                
                $data = array( 
                            'product_name' => Input::get('product_name'),
                            'category'     => Input::get('category'),
                            'color'        => Input::get('color'),
                            'size'         => Input::get('size'),
                            'qty'          => Input::get('quantity'),
                            'price'        => Input::get('price'),
                            'description'  => Input::get('description'),
                            'additional'   => Input::get('additional'),
                            'time'         => date('Y-m-d')
                        );
                if ($inventory->edit_inventory($data, Input::get('id'))) {                   
                    $msg=Input::get('product_name').' has been edited!';
                    $status='success';
                }else{
                   $msg=Input::get('product_name').' has been failed to edited!';
                   $status='failed';
                }
            }
        }else{
            Redirect::to('inventory');        
        }
    }elseif (Input::get('act')=='Edit Image') {
        if (Input::get('cols')) {
            if (Input::get('id')) {
                $dataE = $inventory->tabel_category('inventory', 'id', Input::get('id'));
                if (Input::get('save2')) {
                    foreach ($dataE as $_dataE) {
                        # code...
                        $files1              = $_FILES['image_one'];
                        $files_location1     =   $files1['tmp_name'];
                        $location_img1 = $inventory->move_files($_FILES['image_one']);
                        $column='';
                        if (Input::get('cols')=='Image One') {
                                $column= 'image_one';
                            }elseif(Input::get('cols')=='Image Two') {
                                $column= 'image_two';
                            }else{
                                $column= 'image_three';
                            }
                        $data = array( 
                            $column        => str_replace('../', '', $location_img1),
                            'time'         => date('Y-m-d')
                        );
                        if ($inventory->edit_inventory($data, Input::get('id'))) {
                            move_uploaded_file($files_location1, $location_img1);
                            $msg=$_dataE['product_name'].' '.Input::get('cols').' has been updated!';
                            $status='success';
                        }else{
                           $msg=$_dataE['product_name'].' '.Input::get('cols').' has been failed to add!';
                           $status='failed';
                        }
                    }
                }
            }else{
                Redirect::to('inventory');
            }
        }else{
            Redirect::to('inventory');    
        }
    }elseif(Input::get('act')=='Delete'){
        if (Input::get('id')) {
            $dataE = $inventory->tabel_category('inventory', 'id', Input::get('id'));
            foreach ($dataE as $_dataE) {
                $name=$_dataE['product_name'];
                if ($inventory->delete_inventory(Input::get('id'))) {
                    $msg=$name.' '.Input::get('cols').' has been deleted!';
                    $status='success';
                }else{
                   $msg=$name.' '.Input::get('cols').' has been failed to delete!';
                   $status='failed';
                }
            }
        }else{
            Redirect::to('inventory');    
        }
    }else{
        Redirect::to('inventory');    
    }
}else{
	Redirect::to('inventory');
}
?>

<?php require_once 'template/header.php'; ?>

	<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><?= $action; ?> Inventory</h4>
                </div>
            </div>
            <div class="row">
            <?php if (!empty($msg)) { ?>
                    <div class="col-md-12 col-sm-12 col-xl-12 col-xg-12"> 
                        <div class="alert <?php if($status == 'success') echo 'alert-success'; else echo 'alert-danger';?>">
                            <?= $msg; ?> 
                            <?php if($status=='success'){ ?> 
                                <a href="inventory.php"> Check Inventory </a> 
                            <?php }else{ ?>
                                <?php if (Input::get('act')=='Delete') { ?>
                                <a href="inventory.php"> Check Inventory </a>   
                                <?php }else{ ?>
                                <a href="set_inventory.php?act=Edit&id=<? if(Input::get('save')) echo Input::get('id'); else echo Input::get('id'); ?>"> Check Inventory </a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
            <?php }else{ ?>
                <?php if (Input::get('act')=='Edit' || Input::get('act')=='Add') { ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 col-sm-6 col-xl-6 col-xg-6">
                        <?php if (Input::get('act')=='Edit') { ?>
                            
                            <?php foreach ($dataE as $_dataE) { ?>
                            
                            <input type="hidden" name="id" id="id" value="<?= $_dataE['id'];?>">
                            
                            <?php }?>
                        <?php } ?>
                        
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" required="" value="<?php if (Input::get('act')=='Edit') { foreach ($dataE as $_dataE) { echo $_dataE['product_name']; } }else{ echo ""; } ?>">
                        
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control" required="">
                            <?php if (Input::get('act')=='Edit') { ?>
                                <?php foreach ($dataE as $_dataE) { ?>
                                    <option value="">Product Category</option>
                                    <option value="Men" <?php if ($_dataE['category']=='Men') echo "selected"; ?>>Men</option>
                                    <option value="Women" <?php if ($_dataE['category']=='Women') echo "selected"; ?>>Women</option>
                                    <option value="Accessories" <?php if ($_dataE['category']=='Accessories') echo "selected"; ?>>Accessories</option>
                                <?php }?>
                            <?php }else{ ?>
                                <option value="">Product Category</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Accessories">Accessories</option>
                            <?php } ?>
                        </select>
                        
                        <label for="color">Color</label>
                        <select name="color" id="color" class="form-control" required="">
                             <?php if (Input::get('act')=='Edit') { ?>
                                <?php foreach ($dataE as $_dataE) { ?>
                                <option value="">Product Color</option>
                                <option value="Black" <?php if ($_dataE['color']=='Black') echo "selected"; ?>>Black</option>
                                <option value="Blue" <?php if ($_dataE['color']=='Blue') echo "selected"; ?>>Blue</option>
                                <option value="Grey" <?php if ($_dataE['color']=='Grey') echo "selected"; ?>>Grey</option>
                                <option value="Green" <?php if ($_dataE['color']=='Green') echo "selected"; ?>>Green</option>
                                <option value="Red" <?php if ($_dataE['color']=='Red') echo "selected"; ?>>Red</option>
                                <option value="White" <?php if ($_dataE['color']=='White') echo "selected"; ?>>White</option>
                                <?php } ?>
                            <?php }else{ ?>
                            <option value="">Product Color</option>
                            <option value="Black">Black</option>
                            <option value="Blue">Blue</option>
                            <option value="Grey">Grey</option>
                            <option value="Green">Green</option>
                            <option value="Red">Red</option>
                            <option value="White">White</option>
                            <?php } ?>
                        </select>
                        
                        <label for="size">Size</label>
                        <select name="size" id="size" class="form-control" required="">
                            <?php if (Input::get('act')=='Edit') { ?>
                                <?php foreach ($dataE as $_dataE) { ?>
                                <option value="">Product Size</option>
                                <option value="S" <?php if ($_dataE['size']=='S') echo "selected"; ?>>Size S</option>
                                <option value="M" <?php if ($_dataE['size']=='M') echo "selected"; ?>>Size M</option>
                                <option value="L" <?php if ($_dataE['size']=='L') echo "selected"; ?>>Size L</option>
                                <option value="XL" <?php if ($_dataE['size']=='XL') echo "selected"; ?>>Size XL</option>
                                <?php } ?>
                            <?php }else{ ?>
                            <option value="">Product Size</option>
                            <option value="S">Size S</option>
                            <option value="M">Size M</option>
                            <option value="L">Size L</option>
                            <option value="XL">Size XL</option>
                            <?php } ?>

                        </select>
                        
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" min="1" required="" value="<?php if (Input::get('act')=='Edit') { foreach ($dataE as $_dataE) { echo $_dataE['qty']; } }else{ echo ""; } ?>">
                        
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" min="1" required="" value="<?php if (Input::get('act')=='Edit') { foreach ($dataE as $_dataE) { echo $_dataE['price']; } }else{ echo ""; } ?>">

                        <label for="desciption">Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Description of Product" cols="50" rows="10" style="resize: none;" ><?php if (Input::get('act')=='Edit') { foreach ($dataE as $_dataE) { echo $_dataE['description']; } }else{ echo ""; } ?></textarea>   
                    </div>
                    <div class="col-md-6 col-sm-6 col-xl-6 col-xg-6">
                        <label for="additional">Additional Information</label>
                        <textarea name="additional" id="additional" class="form-control" placeholder="Additional of Product" cols="50" rows="10" style="resize: none;" ><?php if (Input::get('act')=='Edit') { foreach ($dataE as $_dataE) { echo $_dataE['additional']; } }else{ echo ""; } ?></textarea><br>


                       
                        
                    </div>
                    <div class="col-md-12 col-sm-12 col-xl-12 col-xg-12" style="margin-top: 2%;">
                        <center>
                        <input type="submit" name="save" id="save" value="<?php if(Input::get('act')=='Edit'){ echo"EDIT"; }else{ echo "ADD"; }?> PRODUCT" class="btn btn-primary">
                        <input type="reset" name="reset" id="reset" value="RESET" class="btn btn-danger">
                        </center>
                    </div>    
                </form>
                <?php }else{ ?>
                <div class="col-md-12 col-sm-12 col-xl-12 col-xg-12">
                    <center>
                        <form action="" method="post" enctype="multipart/form-data">
                        <?php foreach ($dataE as $_dataE ) {?>
                            <img src="../<?php if(Input::get('cols')=='Image One') { echo $_dataE['image_one']; }elseif(Input::get('cols')=='Image Two'){ echo $_dataE['image_two']; }elseif(Input::get('cols')=='Image Three'){ echo $_dataE['image_three']; } ?>" style="width: 35%;" id="image">
                            <br>
                            <br>
                            <div class="col-md-12 col-sm-12 col-xl-12 col-xg-12">
                            
                            <label><?= strtoupper(Input::get('cols'));?>
                                <button type="button" name="cancel_one" id="cancel-one" class="btn btn-sm" style="display: none;">
                                    <i class="fa fa-times"></i>
                                </button>
                                <button type="button" name="btn_one" id="btn-one" class="btn btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </button>
                            </label>
                                <input type="hidden" name="id" id="id" value="<?= $_dataE['id']; ?>">
                                <input type="text" name="image_one" id="image_one" class="form-control" value="<?php if(Input::get('cols')=='Image One') { echo $_dataE['image_one']; }elseif(Input::get('cols')=='Image Two'){ echo $_dataE['image_two']; }elseif(Input::get('cols')=='Image Three'){ echo $_dataE['image_three']; } ?>" readonly="" required="" onchange="showImage(this,'image')">
                                <br>
                                <input type="submit" id="save2" name="save2" class="btn btn-primary" value="EDIT IMAGE" disabled="">
                                <a href="inventory.php" class="btn btn-danger">CANCEL</a>
                            </div>
                        <?php } ?>
                        </form>
                    </center>
                </div>
                <?php } ?>
            <?php } ?>
                
            </div>
        </div>
	</div>
<?php require_once 'template/footer.php'; ?>

<script type="text/javascript">
    <?php if (Input::get('act')=='Edit Image') { ?>
        $(document).ready(function(){
            $('#btn-one').click(function(){
                $('#image_one').removeAttr("type", "text");
                $('#image_one').removeAttr("readonly", "");
                $('#image_one').attr({type : "file"});
                $('#btn-one').fadeOut(1000);
                $('#cancel-one').fadeIn(3000);
                $('#save2').removeAttr("disabled", "");
            });
            $('#cancel-one').click(function(){
                $('#image_one').removeAttr("type", "file");
                $('#image_one').attr({type : "text", readonly: ""});
                $('#cancel-one').fadeOut(1000);
                $('#btn-one').fadeIn(3000);
                $('#save2').attr({disabled : ""});
            });
            $('#reset').click(function(){
                $('#image_one').removeAttr("type", "file");
                $('#image_one').attr({type : "text", readonly: ""});
                $('#cancel-one').fadeOut(1000);
                $('#btn-one').fadeIn(3000);
                $('#save2').attr({disabled : ""});
                return true;
            });
        });
        function showImage(picture,idpreview)
        {
          var gb = image_one.files;
          for (var i = 0; i < gb.length; i++)
          {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType))
            {
              //jika tipe data sesuai
              preview.file = gbPreview;
              reader.onload = (function(element)
              {
                return function(e)
                {
                  element.src = e.target.result;
                };
              })(preview);
              //membaca data URL gambar
              reader.readAsDataURL(gbPreview);
            }
              else
              {
                //jika tipe data tidak sesuai
                alert("Tipe file tidak sesuai. Gambar harus bertipe .jpg atau .jpeg.");
                return false;
              }
          }
        }
    <?php } ?>
</script>