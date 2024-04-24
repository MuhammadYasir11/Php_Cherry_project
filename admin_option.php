<?php
include 'connect.php';
?>



<!DOCTYPE html>
<html>
   <head>
      <title>Admin Option</title>
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
                  <div class="col-lg-3">
                     <div class="user-logo">
                        <a href=""><img src="asset/images/logo.png" alt=""></a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-group has-feedback">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control customInput" placeholder="Search Admin">
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="logout-top">
                        <a href="">Logout</a>
                     </div>
                  </div>
               </div>
               <!-- row -->
            </div>
            <!-- topbar -->
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
                     <li><a href="">Admin Options</a></li>
                  </ul>
               </div>
               <div class="menu-right">
                  <ul>
                     <li><a href="#" data-toggle="modal" data-target="#myModal2" class="filter-btn"><span class="fa fa-filter"></span></a></li>
                  </ul>
               </div>
            </div>
            <!-- user-menu -->
         </div>
         <!-- middle-left -->
         <div class="middle-right">
            <div class="user-right-flex">
               <div>
                  <h4>Bin Size</h4>
               </div>
               <div class="user-right-button">
                  <ul>
                      <li><button type="button" class="add-button" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Add</button></li>
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
            <div class="col-lg-3">
               <!-- required for floating -->
               <!-- Nav tabs -->
               <ul class="nav nav-tabs tabs-left tabs-left-admin sideways">
                  <li class="active">
                     <a href="#tab-1" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Bin Size</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-2" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Class</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-3" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Delivery Type</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-4" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Fungicide</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-5" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Generation</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-6" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Buyer Group Type</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-7" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Grower Group Type</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                     <a href="#tab-8" data-toggle="tab">
                        <div class="user-table">
                           <table class="table">
                              <tr>
                                 <th>Job Type</th>
                              </tr>
                           </table>
                           <span class="fa fa-angle-right angle-right"></span>
                        </div>
                     </a>
                  </li>
                  <li>
                    <a href="#tab-9" data-toggle="tab">
                       <div class="user-table">
                          <table class="table">
                             <tr>
                                <th>Paddocks</th>
                             </tr>
                          </table>
                          <span class="fa fa-angle-right angle-right"></span>
                       </div>
                    </a>
                 </li>
                 <li>
                    <a href="#tab-10" data-toggle="tab">
                       <div class="user-table">
                          <table class="table">
                             <tr>
                                <th>Seasons</th>
                             </tr>
                          </table>
                          <span class="fa fa-angle-right angle-right"></span>
                       </div>
                    </a>
                 </li>
                 <li>
                    <a href="#tab-11" data-toggle="tab">
                       <div class="user-table">
                          <table class="table">
                             <tr>
                                <th>Seed Type</th>
                             </tr>
                          </table>
                          <span class="fa fa-angle-right angle-right"></span>
                       </div>
                    </a>
                 </li>
                 <li>
                    <a href="#tab-12" data-toggle="tab">
                       <div class="user-table">
                          <table class="table">
                             <tr>
                                <th>Seed Variety</th>
                             </tr>
                          </table>
                          <span class="fa fa-angle-right angle-right"></span>
                       </div>
                    </a>
                 </li>
               </ul>
            </div>
            <div class="col-lg-8">
               <!-- Tab panes -->
               <div class="tab-content">
                  <div class="tab-pane active" id="tab-1">
                     <div class="row">
                       
    <?php
    $sql = "SELECT * FROM admin_option";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <div class="col-md-4">
    <h4><?php echo $row['Bin_Size']; ?></h4>
    <div class="user-boxes">

        <h6>Id</h6>
        <h5><?php echo $row['id']; ?></h5>
        <h6>Bin Size</h6>
        <h5><?php echo $row['Bin_Size']; ?></h5>
        <h6>Empty Bin Weight</h6>
        <h5><?php echo $row['Empty_Bin_Weight']; ?></h5>
        <ul>
           <li><button type="button" class="red-btn btn edit-button" data-toggle="modal" data-target="#editModal" onclick="UpdateAdmin('.$id.')"><span class="fa fa-plus"></span>Edit</button></li>
            <li><a href="" class="trash-btn"><span class="fa fa-trash-o"></span></a></li>
        </ul>
      </div>
    </div>
    <?php
        }
    }
    ?>
    <!-- user-boxes -->


                        <!-- col-->
                    
                     <!-- row -->
                  </div>
                  <!-- tab-8 -->
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
                  <h4 class="modal-title" id="myModalLabel2">Unloading</h4>
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

      <!-- add Model -->

      

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Option</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <form>
          <div class="form-group">
            <label  class="col-form-label">Bin Size:</label>
            <input type="text" class="form-control" id="BinSize">
          </div>
          <div class="form-group">
            <label  class="col-form-label">Empty Bin Weight:</label>
            <input type="text" class="form-control" id="Empty_Bin_Weight">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addadmin()">Save changes</button>
      </div>
      </form>
    </div>

  </div>
</div>
</div>

<!-- UpdateModal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Update Admin Option</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="col-form-label">Bin Size:</label>
            <input type="text" class="form-control" id="BinSize" value="<?php echo $Bin_Size; ?>">
          </div>
          <div class="form-group">
            <label class="col-form-label">Empty Bin Weight:</label>
            <input type="text" class="form-control" id="Empty_Bin_Weight" value="<?php echo $Empty_Bin_Weight; ?>">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateadmin()">Save changes</button>
        <input type="hidden" id="hiddendata">
      </div>
    </div>
  </div>
</div>



     <script type="text/javascript" src="asset/js/jquery.js"></script>
      <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="asset/js/index.js"></script>
      <script type="text/javascript" src="asset/js/wow.js"></script>


      <!-- End Add Model -->
      <!-- modal -->
     <script type="text/javascript" src="asset/js/jquery.js"></script>
      <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="asset/js/index.js"></script>
      <script type="text/javascript" src="asset/js/wow.js"></script>

         <script >


           function addadmin(){
              var addBin=$('#BinSize').val();
              var addBinweight=$('#Empty_Bin_Weight').val();

              $.ajax({
                url:"save.php",
                type: 'post',
                data:{
                    Binsend:addBin,
                    Binweightsend:addBinweight
                },
                success:function(data,status){
                  if (status == 'success') {
                     $('#exampleModal').modal('hide');
                       
                     
                    
                  }
                }
              });
           }

    //update data
    function UpdateAdmin(updateid){

    }
    

         </script>

   </body>
</html>