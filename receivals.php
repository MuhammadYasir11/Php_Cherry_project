<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html>
   <head>
      <title>Receivals</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/style.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/animate.css" />
      <link rel="stylesheet" type="text/css" href="asset/css/hover.css" />
   </head>
   <body>
      <div class="main-section">
         <div class="container-fluid">
            <div class="topbar">
               <div class="row">
                  <div class="col-lg-3 col-sm-3">
                     <div class="user-logo">
                        <a href=""><img src="asset/images/logo.png" alt=""></a>
                     </div>
                  </div>
                  <div class="col-lg-6 col-sm-6">
                     <div class="form-group has-feedback">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control customInput" placeholder="Search Receivals">
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-3">
                     <div class="logout-top">
                        <a href="">Logout</a>
                     </div>
                  </div>
               </div>
               <!-- row -->
            </div>
            <!-- topbar -->
            <div class="mobile-topbar visible-xs">
               <div class="container">
                  <div class="topbar-flex">
                     <p>
                        <a href="super-admin.html">  <span class="fa fa-angle-left"></span></a>
                     </p>
                     <h4>Receival</h4>
                     <p>
                        <a href="" class="mobile-redbtn">Add</a>
                     </p>
                  </div>
                  <!-- topbar-flex -->
                  <p class="mobile-filtericon">
                     <a href="#" data-toggle="modal" data-target="#myModal2">Filter <img src="asset/images/filter-list.png" alt=""></a>
                  </p>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search for a receivals here.." name="" id="">
                  </div>
               </div>
            </div>
            <!-- mobile-topbar -->
         </div>
         <!-- container-fluid -->
      </div>
      <!-- main-section -->
      <!-- middle-section -->
      <div class="middle-section">
         <div class="middle-left">
            <div class="user-menu">
               <div class="menu-left">
                  <ul>
                     <li><a href=""><span class="fa fa-arrow-left"></span> Menu</a></li>
                     <li> <span class="fa fa-chevron-right"></span> </li>
                     <li><a href="">Receivals</a></li>
                  </ul>
               </div>
               <div class="menu-right">
                  <ul>
                     <li><a href="#" data-toggle="modal" data-target="#myModal2" class="filter-btn"><span class="fa fa-filter"></span></a></li>
                     <li><button type="button" class="add-button" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Add</button></li>
                  </ul>
               </div>
            </div>
            <!-- user-menu -->
         </div>
         <!-- middle-left -->
         <div class="middle-right">
            <div class="user-right-flex">
               <div>
                  <h4>Receivals</h4>
               </div>
               <div class="user-right-button">
                  <ul>
                     <li><a href="" class="filter-btn"><span class="fa fa-trash-o"></span></a></li>
                     <li><a href="" class="add-button"><span class="fa fa-edit"></span> Edit</a></li>
                  </ul>
               </div>
            </div>
            <!-- user-right-flex -->
         </div>
         <!-- middle-right-->
      </div>
      <!-- middle-section -->
      <!-- tab-section -->
      <div class="tab-section">
         <div class="row row0">
            <div class="col-lg-3 col-sm-6">
               <!-- required for floating -->
               <!-- Nav tabs -->
               <ul class="nav nav-tabs tabs-left sideways">
                  <li class="active">
                     <a href="#tab-1" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Grower Name</th>
                                 <th>Grower Group</th>
                                 
                              </tr>

                              <?php
                          $sql = "select Grower_Name, from receivals" ;
                          $result =mysqli_query($con,$sql);
                          if($result){
                          while ($row=mysqli_fetch_assoc($result)) {
                   
                              ?>
                              <tr>
                                 <td><?php  echo $row['Grower_Name'];?></td>
                                 <td><?php  echo $row['Grower_Group'];?></td>
                                 
                              </tr>

                              <?php 
            
            } } else {?>
            <tr>
            <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
            </tr>
            <?php } ?> 
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  
               </ul>
            </div>
            <div class="col-lg-8 col-sm-6">
               <!-- Tab panes -->
               <div class="tab-content">
                  <div class="tab-pane active" id="tab-1">
                     <div class="row">

                       <?php
$sql = "SELECT * FROM receivals";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="col-md-5">
    <div class="user-boxes">
        <h6>Grower Name</h6>
        <h5><?php echo $row['Grower_Name']; ?></h5>
        <h6>Grower Group</h6>
        <h5><?php echo $row['Grower_Group']; ?></h5>
        <h6>Time Added</h6>
        <h5><?php echo $row['Time_Added']; ?></h5>
        <h6>Paddock</h6>
        <h5><?php echo $row['Paddock']; ?></h5>
        <ul>
            <li><a href="">Paddock 1</a></li>
            <li><a href="">Paddock 2</a></li>
        </ul>
    </div>
</div>
<?php
    }
}
?>

                           </div>
                           
                        
                      
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-1 -->
                  <div class="tab-pane" id="tab-2">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Grower Name</h6>
                              <h5>Shehar Yar Grows</h5>
                              <h6>Grower Group</h6>
                              <h5>McChain</h5>
                              <h6>Time Added</h6>
                              <h5>12/05/2023 10:27 AM</h5>
                              <h6>Paddock</h6>
                              <ul>
                                 <li><a href="">Paddock 1</a></li>
                                 <li><a href="">Paddock 2</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Seed Information</h4>
                           <div class="user-boxes">
                              <h6>Seed Variety</h6>
                              <h5>Innovator 2</h5>
                              <h6>Seed Generation</h6>
                              <h5>G1</h5>
                              <h6>Seed Class</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for TIA Sample</a></li>
                              </ul>
                              <h6>TIA Sample ID</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Unloading Information</h4>
                           <div class="user-boxes">
                              <h6>Unloading Status</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for Unload</a></li>
                              </ul>
                              <h6>Unloading ID</h6>
                              <h5>-</h5>
                              <h6>Seed Type</h6>
                              <h5>Whole Seed ( 35-73 mm )</h5>
                              <h6>Oversize Bin Size</h6>
                              <h5>1 Tonne</h5>
                              <h6>Seed Bin Size</h6>
                              <h5>2 Tonne</h5>
                           </div>
                           <!--user-boxes -->
                           <h4>Other Information</h4>
                           <div class="user-boxes">
                              <h6>Transport Co</h6>
                              <h5>Alan Lord Holdings.</h5>
                              <h6>Delivery Type</h6>
                              <h5>Truck</h5>
                              <h6>Growers’s Docket No</h6>
                              <h5>1243435</h5>
                              <h6>CHC Receival Docket No</h6>
                              <h5>4345</h5>
                              <h6>Fungicide</h6>
                              <h5>BU - Magnate / Vorlon</h5>
                              <h6>Driver’s Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Comments</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-2 -->
                  <div class="tab-pane" id="tab-3">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Grower Name</h6>
                              <h5>Shehar Yar Grows</h5>
                              <h6>Grower Group</h6>
                              <h5>McChain</h5>
                              <h6>Time Added</h6>
                              <h5>12/05/2023 10:27 AM</h5>
                              <h6>Paddock</h6>
                              <ul>
                                 <li><a href="">Paddock 1</a></li>
                                 <li><a href="">Paddock 2</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Seed Information</h4>
                           <div class="user-boxes">
                              <h6>Seed Variety</h6>
                              <h5>Innovator 2</h5>
                              <h6>Seed Generation</h6>
                              <h5>G1</h5>
                              <h6>Seed Class</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for TIA Sample</a></li>
                              </ul>
                              <h6>TIA Sample ID</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Unloading Information</h4>
                           <div class="user-boxes">
                              <h6>Unloading Status</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for Unload</a></li>
                              </ul>
                              <h6>Unloading ID</h6>
                              <h5>-</h5>
                              <h6>Seed Type</h6>
                              <h5>Whole Seed ( 35-73 mm )</h5>
                              <h6>Oversize Bin Size</h6>
                              <h5>1 Tonne</h5>
                              <h6>Seed Bin Size</h6>
                              <h5>2 Tonne</h5>
                           </div>
                           <!--user-boxes -->
                           <h4>Other Information</h4>
                           <div class="user-boxes">
                              <h6>Transport Co</h6>
                              <h5>Alan Lord Holdings.</h5>
                              <h6>Delivery Type</h6>
                              <h5>Truck</h5>
                              <h6>Growers’s Docket No</h6>
                              <h5>1243435</h5>
                              <h6>CHC Receival Docket No</h6>
                              <h5>4345</h5>
                              <h6>Fungicide</h6>
                              <h5>BU - Magnate / Vorlon</h5>
                              <h6>Driver’s Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Comments</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-3 -->
                  <div class="tab-pane" id="tab-4">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Grower Name</h6>
                              <h5>Shehar Yar Grows</h5>
                              <h6>Grower Group</h6>
                              <h5>McChain</h5>
                              <h6>Time Added</h6>
                              <h5>12/05/2023 10:27 AM</h5>
                              <h6>Paddock</h6>
                              <ul>
                                 <li><a href="">Paddock 1</a></li>
                                 <li><a href="">Paddock 2</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Seed Information</h4>
                           <div class="user-boxes">
                              <h6>Seed Variety</h6>
                              <h5>Innovator 2</h5>
                              <h6>Seed Generation</h6>
                              <h5>G1</h5>
                              <h6>Seed Class</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for TIA Sample</a></li>
                              </ul>
                              <h6>TIA Sample ID</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Unloading Information</h4>
                           <div class="user-boxes">
                              <h6>Unloading Status</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for Unload</a></li>
                              </ul>
                              <h6>Unloading ID</h6>
                              <h5>-</h5>
                              <h6>Seed Type</h6>
                              <h5>Whole Seed ( 35-73 mm )</h5>
                              <h6>Oversize Bin Size</h6>
                              <h5>1 Tonne</h5>
                              <h6>Seed Bin Size</h6>
                              <h5>2 Tonne</h5>
                           </div>
                           <!--user-boxes -->
                           <h4>Other Information</h4>
                           <div class="user-boxes">
                              <h6>Transport Co</h6>
                              <h5>Alan Lord Holdings.</h5>
                              <h6>Delivery Type</h6>
                              <h5>Truck</h5>
                              <h6>Growers’s Docket No</h6>
                              <h5>1243435</h5>
                              <h6>CHC Receival Docket No</h6>
                              <h5>4345</h5>
                              <h6>Fungicide</h6>
                              <h5>BU - Magnate / Vorlon</h5>
                              <h6>Driver’s Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Comments</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-4 -->
                  <div class="tab-pane" id="tab-5">
                     <!-- row -->
                  </div>
                  <!-- tab-5 -->
                  <div class="tab-pane" id="tab-6">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Grower Name</h6>
                              <h5>Shehar Yar Grows</h5>
                              <h6>Grower Group</h6>
                              <h5>McChain</h5>
                              <h6>Time Added</h6>
                              <h5>12/05/2023 10:27 AM</h5>
                              <h6>Paddock</h6>
                              <ul>
                                 <li><a href="">Paddock 1</a></li>
                                 <li><a href="">Paddock 2</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Seed Information</h4>
                           <div class="user-boxes">
                              <h6>Seed Variety</h6>
                              <h5>Innovator 2</h5>
                              <h6>Seed Generation</h6>
                              <h5>G1</h5>
                              <h6>Seed Class</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for TIA Sample</a></li>
                              </ul>
                              <h6>TIA Sample ID</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Unloading Information</h4>
                           <div class="user-boxes">
                              <h6>Unloading Status</h6>
                              <ul>
                                 <li><a href="" class="black-btn">Push for Unload</a></li>
                              </ul>
                              <h6>Unloading ID</h6>
                              <h5>-</h5>
                              <h6>Seed Type</h6>
                              <h5>Whole Seed ( 35-73 mm )</h5>
                              <h6>Oversize Bin Size</h6>
                              <h5>1 Tonne</h5>
                              <h6>Seed Bin Size</h6>
                              <h5>2 Tonne</h5>
                           </div>
                           <!--user-boxes -->
                           <h4>Other Information</h4>
                           <div class="user-boxes">
                              <h6>Transport Co</h6>
                              <h5>Alan Lord Holdings.</h5>
                              <h6>Delivery Type</h6>
                              <h5>Truck</h5>
                              <h6>Growers’s Docket No</h6>
                              <h5>1243435</h5>
                              <h6>CHC Receival Docket No</h6>
                              <h5>4345</h5>
                              <h6>Fungicide</h6>
                              <h5>BU - Magnate / Vorlon</h5>
                              <h6>Driver’s Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Comments</h6>
                              <h5>-</h5>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-6 -->
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <!-- row -->
      </div>
      <!-- tab-section -->
      <!-- Modal -->
      <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <!-- <span aria-hidden="true">&times;</span> -->
                     <span class="fa fa-arrow-left"></span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel2">Receivals</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="">Unique ID <span class="fa fa-angle-right"></span> </a></li>
                     <li><a href="">Name <span class="fa fa-angle-right"></span> </a></li>
                     <li><a href="">Email <span class="fa fa-angle-right"></span> </a></li>
                     <li><a href="">Username <span class="fa fa-angle-right"></span> </a></li>
                     <li><a href="">User Access <span class="fa fa-angle-right"></span> </a></li>
                  </ul>
               </div>
            </div>
            <!-- modal-content -->
         </div>
         <!-- modal-dialog -->
      </div>
      <!-- modal -->
      <div class="mobile-userlist visible-xs">
         <ul class="nav nav-tabs tabs-left sideways">
            <li class="active">
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#receival-details">
                     <table class="table">
                        <tr>
                           <th>Grower Name</th>
                           <th>Receival ID</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar Grows</td>
                           <td>565</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
         </ul>
      </div>
      <!--mobile-userlist-->
      <!-- Modal -->
      <div class="modal right fade user-details" id="receival-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <!-- <span aria-hidden="true">&times;</span> -->
                     <span class="fa fa-arrow-left"></span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel3">Shehar Yar Grows</h4>
                  <div class="modal-menu">
                     <!-- Single button -->
                     <div class="btn-group">
                        <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-ellipsis-v"></span>
                        </button>
                        <ul class="dropdown-menu">
                           <li><a href="#"><span class="fa fa-trash-o"></span> Delete</a></li>
                           <li><a href="#"><span class="fa fa-edit"></span> Edit</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="modal-body">
                  <ol class="breadcrumb">
                     <li><a href="#">Menu</a></li>
                     <li><a href="#">Receivals</a></li>
                     <li class="active">Shehar Yar</li>
                  </ol>
                  <div class="user-boxes">
                     <h6>Grower Name</h6>
                     <h5>Shehar Yar Grows</h5>
                     <h6>Grower Group</h6>
                     <h5>McChain</h5>
                     <h6>Time Added</h6>
                     <h5>12/05/2023 10:27 AM</h5>
                     <h6>Paddock</h6>
                     <ul>
                        <li><a href="">Paddock 1</a></li>
                        <li><a href="">Paddock 2</a></li>
                     </ul>
                  </div>
                  <!--user-boxes -->
                  <h4>Seed Information</h4>
                  <div class="user-boxes">
                     <h6>Seed Variety</h6>
                     <h5>Innovator 2</h5>
                     <h6>Seed Generation</h6>
                     <h5>G1</h5>
                     <h6>Seed Class</h6>
                     <ul>
                        <li><a href="" class="black-btn">Push for TIA Sample</a></li>
                     </ul>
                     <h6>TIA Sample ID</h6>
                     <h5>-</h5>
                  </div>
                  <!--user-boxes -->
                  <h4>Unloading Information</h4>
                  <div class="user-boxes">
                     <h6>Unloading Status</h6>
                     <ul>
                        <li><a href="" class="black-btn">Push for Unload</a></li>
                     </ul>
                     <h6>Unloading ID</h6>
                     <h5>-</h5>
                     <h6>Seed Type</h6>
                     <h5>Whole Seed ( 35-73 mm )</h5>
                     <h6>Oversize Bin Size</h6>
                     <h5>1 Tonne</h5>
                     <h6>Seed Bin Size</h6>
                     <h5>2 Tonne</h5>
                  </div>
                  <!--user-boxes -->
                  <h4>Other Information</h4>
                  <div class="user-boxes">
                     <h6>Transport Co</h6>
                     <h5>Alan Lord Holdings.</h5>
                     <h6>Delivery Type</h6>
                     <h5>Truck</h5>
                     <h6>Growers’s Docket No</h6>
                     <h5>1243435</h5>
                     <h6>CHC Receival Docket No</h6>
                     <h5>4345</h5>
                     <h6>Fungicide</h6>
                     <h5>BU - Magnate / Vorlon</h5>
                     <h6>Driver’s Name</h6>
                     <h5>Shehar Yar</h5>
                     <h6>Comments</h6>
                     <h5>-</h5>
                  </div>
                  <!--user-boxes -->
               </div>
            </div>
            <!-- modal-content -->
         </div>
         <!-- modal-dialog -->
      </div>

       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Receivals</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label  class="col-form-label">Grower Name:</label>
            <input type="text" class="form-control" id="Growername">
          </div>
          <div class="form-group">
            <label  class="col-form-label">Grower Group:</label>
            <input type="text" class="form-control" id="Growergroup">
          </div>
           <div class="form-group">
            <label  class="col-form-label">TimeAdded:</label>
            <input type="time" class="form-control" id="Time_Added" value="10:05 AM" />
          </div>
         <div class="form-group">
            <label  class="col-form-label">Paddock:</label>
            <input type="text" class="form-control" id="Paddock">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addreceivals()">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
      <!-- modal -->
      <script type="text/javascript" src="asset/js/jquery.js"></script>
      <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="asset/js/index.js"></script>
      <script type="text/javascript" src="asset/js/wow.js"></script>

       <script >
           function addreceivals(){
              var addGrowername=$('#Growername').val();
              var addGrowergroup=$('#Growergroup').val();
              var addTime_Added=$('#Time_Added').val();
              var addPaddock=$('#Paddock').val();
              

              $.ajax({
                url:"save.php",
                type: 'post',
                data:{
                    Growernamesend:addGrowername,
                    Growergroupsend:addGrowergroup,
                    Time_Addedsend:addTime_Added,
                    Paddocksend:addPaddock,
                },
               success:function(data,status){
                  if (status == 'success') {
                     console.log(status);
                     $('#exampleModal').modal('hide');
                    
                  }
                }
              });
           }
         </script>
   </body>
</html>