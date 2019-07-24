<?php require_once '../Core/init-dasboard.php'; ?>

<?php $pages = Pages::setpages('Dashboard'); ?>

<?php if (!$user->is_loggedIn() ) { Redirect::to('../Login'); } ?>

<?php 
$foto='../'.Session::get('photo');  
?>
<?php require_once 'template/header.php'; ?>

    
    
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>
                </div>
            </div>

            <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-money dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          </div>   
                        </div>
                         <h5>Sales</h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          </div>
                        </div>
                         <h5>Simple Text Here </h5>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-cogs dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          </div>                           
                        </div>
                        <h5>Simple Text Here </h5>
                    </div>
                </div>   
            </div>
        </div>
      </div>
<?php require_once 'template/footer.php'; ?>

