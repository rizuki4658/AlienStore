<?php require_once '../Core/init-dasboard.php'; ?>

<?php $pages = Pages::setpages('Inventory'); ?>

<?php if (!$user->is_loggedIn() ) { Redirect::to('../Login'); } ?>

<?php 
$foto='../'.Session::get('photo');
$data_men= $inventory->tabel_category('inventory','category','Men');
$data_women= $inventory->tabel_category('inventory','category','Women');
$data_accessories= $inventory->tabel_category('inventory','category','Accessories');
$no_men=1;
$no_women=1;
$no_acc=1;
?>

<?php require_once 'template/header.php'; ?>

	<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Inventory</h4>
                    <h4>
                    	<a href="set_inventory.php?act=Add" class="btn btn-info" value="Add"><i class="fa fa-plus"></i> Inventory</a>
                    </h4>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5%;">
                	<div class="col-md-12">
                    	<h4 style="text-transform: uppercase; color: #fff;">Men Inventory</h4>
                	</div>
                	<div class="panel panel-default">
                        <div class="panel-heading" style="background-color: rgba(40, 96, 144, 1); color: #fff;">
                            <?= date('d-M-y'); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="tabel-data-men" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data_men as $_data_men){ ?>
                                       <tr>
                                            <td><?= $no_men++; ?></td>
                                            <td><?= $_data_men['product_name'];?></td>
                                            <td>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image One&id=<?= $_data_men['id'];?>"><img src="../<?= $_data_men['image_one'];?>" width="30" height="40"></a>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image Two&id=<?= $_data_men['id'];?>"><img src="../<?= $_data_men['image_two'];?>" width="30" height="40"></a>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image Three&id=<?= $_data_men['id'];?>"><img src="../<?= $_data_men['image_three'];?>" width="30" height="40"></a>
                                            </td>
                                            <td><?= $_data_men['color'];?></td>
                                            <td><?= $_data_men['size'];?></td>
                                            <td><?= $_data_men['qty']." Pcs";?></td>
                                            <td><?= "Rp. ".number_format($_data_men['price']);?></td>
                                            <td><?= "Rp. ".number_format($_data_men['price']*$_data_men['qty']); ?></td>
                                            <td>
                                                <a href="set_inventory.php?act=Delete&id=<?= $_data_men['id']; ?>" class="btn btn-danger" onclick="return confirm('Are sure want to delete this product <?= $_data_men['product_name']; ?>')"><i class="fa fa-trash"></i></a>
                                                <a href="set_inventory.php?act=Edit&id=<?= $_data_men['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5%;">
                	<div class="col-md-12">
                    	<h4 style="text-transform: uppercase; color: #fff;">Women Inventory</h4>
                	</div>
                	<div class="panel panel-default">
                        <div class="panel-heading" style="background-color: rgba(201, 48, 44, 1); color: #fff;">
                            <?= date('d-M-y'); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id="tabel-data-women" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data_women as $_data_women){ ?>
                                       <tr>
                                            <td><?= $no_women++; ?></td>
                                            <td><?= $_data_women['product_name'];?></td>
                                            <td>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image One&id=<?= $_data_women['id'];?>"><img src="../<?= $_data_women['image_one'];?>" width="30" height="40"></a>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image Two&id=<?= $_data_women['id'];?>"><img src="../<?= $_data_women['image_two'];?>" width="30" height="40"></a>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image Three&id=<?= $_data_women['id'];?>"><img src="../<?= $_data_women['image_three'];?>" width="30" height="40"></a>
                                            </td>
                                            <td><?= $_data_women['color'];?></td>
                                            <td><?= $_data_women['size'];?></td>
                                            <td><?= $_data_women['qty']." Pcs";?></td>
                                            <td><?= "Rp. ".number_format($_data_women['price']);?></td>
                                            <td><?= "Rp. ".number_format($_data_women['price']*$_data_women['qty']); ?></td>
                                            <td>
                                                <a href="set_inventory.php?act=Delete&id=<?= $_data_women['id']; ?>" class="btn btn-danger" onclick="return confirm('Are sure want to delete this product <?= $_data_women['product_name']; ?>')"><i class="fa fa-trash"></i></a>
                                                <a href="set_inventory.php?act=Edit&id=<?= $_data_women['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>    
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5%;">
                	<div class="col-md-12">
                    	<h4 style="text-transform: uppercase; color: #fff;">Accessories Inventory</h4>
                	</div>
                	<div class="panel panel-default">
                        <div class="panel-heading" style="background-color: rgba(68, 157, 68, 1); color: #fff;">
                            <?= date('d-M-y'); ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="table-responsive">
                            <table id="tabel-data-acc" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                            <th>Act</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($data_accessories as $_data_accessories){ ?>
                                       <tr>
                                            <td><?= $no_acc++; ?></td>
                                            <td><?= $_data_accessories['product_name'];?></td>
                                            <td>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image One&id=<?= $_data_accessories['id'];?>"><img src="../<?= $_data_accessories['image_one'];?>" width="30" height="40"></a>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image Two&id=<?= $_data_accessories['id'];?>"><img src="../<?= $_data_accessories['image_two'];?>" width="30" height="40"></a>
                                                <a href="set_inventory.php?act=Edit Image&cols=Image Three&id=<?= $_data_accessories['id'];?>"><img src="../<?= $_data_accessories['image_three'];?>" width="30" height="40"></a>
                                            </td>
                                            <td><?= $_data_accessories['color'];?></td>
                                            <td><?= $_data_accessories['size'];?></td>
                                            <td><?= $_data_accessories['qty']." Pcs";?></td>
                                            <td><?= "Rp. ".number_format($_data_accessories['price']);?></td>
                                            <td><?= "Rp. ".number_format($_data_accessories['price']*$_data_accessories['qty']); ?></td>
                                            <td>
                                                <a href="set_inventory.php?act=Delete&id=<?= $_data_accessories['id']; ?>" class="btn btn-danger" onclick="return confirm('Are sure want to delete this product <?= $_data_accessories['product_name']; ?>')"><i class="fa fa-trash"></i></a>
                                                <a href="set_inventory.php?act=Edit&id=<?= $_data_accessories['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>    
                </div>    
            </div>
        </div>
	</div>

<?php require_once 'template/footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tabel-data-men').DataTable();
        $('#tabel-data-women').DataTable();
        $('#tabel-data-acc').DataTable();
    });
</script>