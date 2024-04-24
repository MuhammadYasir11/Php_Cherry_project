<?php

include 'connect.php';
?>




<!DOCTYPE html>
<html>
   <head>
      <title>Notes List</title>
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
                        <input type="text" class="form-control customInput" placeholder="Search Notes">
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
                     <h4>Notes</h4>
                     <p>
                        <a href="#" data-toggle="modal" data-target="#notes-modal" class="mobile-redbtn">Add</a>
                     </p>
                  </div>
                  <!-- topbar-flex -->
                  <p class="mobile-filtericon">
                     <a href="#" data-toggle="modal" data-target="#myModal2">Filter <img src="asset/images/filter-list.png" alt=""></a>
                  </p>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search for a notes here.." name="" id="">
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
                     <li><a href="">Notes</a></li>
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
                  <h4>Create new receivals tomorrow ….</h4>
               </div>
               <div class="user-right-button">
                  <ul>
                     <li><a href="" class="filter-btn"><span class="fa fa-trash-o"></span></a></li>
                     <li><a href="" class="add-button"><span class="fa fa-edit"></span> Edit</a></li>
                     <li><a href="" class="add-duplicate"> Duplicate</a></li>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
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
                                 <th>21, Aug 2023</th>
                                 <th></th>
                              </tr>
                              <tr>
                                 <td>Create new receivals tomorrow ….</td>
                                 <td>
                     <a href="" class="tab-redbtn">Receival</a></td>
                     </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                     </div>
                     </a>
                  </li>
               </ul>
            </div>
           <div class="col-lg-8 col-sm-6">
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="tab-3">
            <div class="row">
                <?php
                $sql = "SELECT Message FROM notes";
                $result = mysqli_query($con, $sql);

                if (!$result) {
                    die("Query failed: " . mysqli_error($con));
                }

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-11">
                    <div class="user-boxes notes-list">
                        <p><?php echo $row['Message']; ?></p>
                        <ul>
                            <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                            <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                            <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                            <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                        </ul>
                    </div>
                    <!-- user-boxes -->
                </div>
                <!-- col-md-4 -->
                <?php
                }
                ?>
            </div>
            <!-- row -->
        </div>
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
                  <h4 class="modal-title" id="myModalLabel2">Notes List</h4>
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
      <!-- notes-modal -->
      <div class="modal fade notes-modal" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header text-center">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Note Detail</h4>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <textarea name="" id=""  class="form-control" rows="5" placeholder="Write a note here "></textarea>
                  </div>
                  <p>
                     <a href="" class="btn red-btn">Receival</a>
                  </p>
                  <h5>Attachments</h5>
                  <ul>
                     <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                     <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                     <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                     <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                  </ul>
                  <p class="text-center">
                     <a href="" class="btn red-btn"> <span class="fa fa-plus"></span> Add Note</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- modal -->
      <div class="mobile-userlist visible-xs">
         <ul class="nav nav-tabs tabs-left sideways">
            <li class="active">
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
               </tr>
               </table>
               <span class="fa fa-angle-right angle-right"></span>
               </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#notes-details">
                     <table class="table">
                        <tr>
                           <th>21, Aug 2023</th>
                           <th></th>
                        </tr>
                        <tr>
                           <td>Create new receivals tomorrow ….</td>
                           <td>
               <a href="" class="tab-redbtn">Receival</a></td>
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
      <div class="modal right fade user-details" id="notes-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <!-- <span aria-hidden="true">&times;</span> -->
                     <span class="fa fa-arrow-left"></span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel3">21, August 2023</h4>
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
                     <li><a href="#">Notes</a></li>
                     <li class="active">21, August 2023</li>
                  </ol>
                  <div class="user-boxes notes-list">
                     <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet 
                        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
                        consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
                        sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea 
                        takimata sanctus est Lorem ipsum dolor sit amet.
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                        dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet 
                        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                     </p>
                     <ul>
                        <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                        <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                        <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                        <li><a href=""><img src="asset/images/notes-img.png" alt=""></a></li>
                     </ul>
                  </div>
                  <!-- user-boxes -->
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
        <h5 class="modal-title" id="exampleModalLabel">Add Notes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label  class="col-form-label">Message:</label>
            <input type="text" class="form-control" id="Message">
          </div>
         
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addnotes()">Save changes</button>
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
           function addnotes(){
              var addMessage=$('#Message').val();
              

              $.ajax({
                url:"save.php",
                type: 'post',
                data:{
                    Messagesend:addMessage,
                    
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