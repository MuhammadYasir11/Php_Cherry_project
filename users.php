<!DOCTYPE html>
<html>
   <head>
      <title>Users</title>
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
                        <input type="text" class="form-control customInput" placeholder="Search Users">
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
                     <h4>Users</h4>
                     <p>
                        <a href="" class="mobile-redbtn">Add</a>
                     </p>
                  </div>
                  <!-- topbar-flex -->
                  <p class="mobile-filtericon">
                     <a href="#" data-toggle="modal" data-target="#myModal2">Filter <img src="asset/images/filter-list.png" alt=""></a>
                  </p>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Search for a user here.." name="" id="">
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
                     <li><a href="">Users</a></li>
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
                  <h4>Shehar Yar</h4>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                                 <th>Name</th>
                                 <th>Email</th>
                              </tr>
                              <tr>
                                 <td>Shehar Yar</td>
                                 <td>shehar@next-x.com.au</td>
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
                  <div class="tab-pane active" id="tab-1">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Email</h6>
                              <h5>shehar@next-x.com.au</h5>
                              <h6>Username</h6>
                              <h5>SheharYar</h5>
                              <h6>User Access</h6>
                              <ul>
                                 <li><a href="">Admin</a></li>
                                 <li><a href="">Grower</a></li>
                                 <li><a href="">Buyer</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Grower Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <ul>
                                 <li><a href="">McCain</a></li>
                                 <li><a href="">Simplot</a></li>
                              </ul>
                              <h6>Grower Name</h6>
                              <h5>ABC Name</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Buyer Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <h5>McCain</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Paddocks</h4>
                           <div class="user-boxes">
                              <div class="user-column-two">
                                 <div>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                 </div>
                                 <div>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                 </div>
                              </div>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-1 -->
                  <div class="tab-pane" id="tab-2">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Email</h6>
                              <h5>shehar@next-x.com.au</h5>
                              <h6>Username</h6>
                              <h5>SheharYar</h5>
                              <h6>User Access</h6>
                              <ul>
                                 <li><a href="">Admin</a></li>
                                 <li><a href="">Grower</a></li>
                                 <li><a href="">Buyer</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Grower Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <ul>
                                 <li><a href="">McCain</a></li>
                                 <li><a href="">Simplot</a></li>
                              </ul>
                              <h6>Grower Name</h6>
                              <h5>ABC Name</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Buyer Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <h5>McCain</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Paddocks</h4>
                           <div class="user-boxes">
                              <div class="user-column-two">
                                 <div>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                 </div>
                                 <div>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                 </div>
                              </div>
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
                              <h6>Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Email</h6>
                              <h5>shehar@next-x.com.au</h5>
                              <h6>Username</h6>
                              <h5>SheharYar</h5>
                              <h6>User Access</h6>
                              <ul>
                                 <li><a href="">Admin</a></li>
                                 <li><a href="">Grower</a></li>
                                 <li><a href="">Buyer</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Grower Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <ul>
                                 <li><a href="">McCain</a></li>
                                 <li><a href="">Simplot</a></li>
                              </ul>
                              <h6>Grower Name</h6>
                              <h5>ABC Name</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Buyer Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <h5>McCain</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Paddocks</h4>
                           <div class="user-boxes">
                              <div class="user-column-two">
                                 <div>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                 </div>
                                 <div>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                 </div>
                              </div>
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
                              <h6>Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Email</h6>
                              <h5>shehar@next-x.com.au</h5>
                              <h6>Username</h6>
                              <h5>SheharYar</h5>
                              <h6>User Access</h6>
                              <ul>
                                 <li><a href="">Admin</a></li>
                                 <li><a href="">Grower</a></li>
                                 <li><a href="">Buyer</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Grower Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <ul>
                                 <li><a href="">McCain</a></li>
                                 <li><a href="">Simplot</a></li>
                              </ul>
                              <h6>Grower Name</h6>
                              <h5>ABC Name</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Buyer Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <h5>McCain</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Paddocks</h4>
                           <div class="user-boxes">
                              <div class="user-column-two">
                                 <div>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                 </div>
                                 <div>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                 </div>
                              </div>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-4 -->
                  <div class="tab-pane" id="tab-5">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Email</h6>
                              <h5>shehar@next-x.com.au</h5>
                              <h6>Username</h6>
                              <h5>SheharYar</h5>
                              <h6>User Access</h6>
                              <ul>
                                 <li><a href="">Admin</a></li>
                                 <li><a href="">Grower</a></li>
                                 <li><a href="">Buyer</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Grower Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <ul>
                                 <li><a href="">McCain</a></li>
                                 <li><a href="">Simplot</a></li>
                              </ul>
                              <h6>Grower Name</h6>
                              <h5>ABC Name</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Buyer Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <h5>McCain</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Paddocks</h4>
                           <div class="user-boxes">
                              <div class="user-column-two">
                                 <div>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                 </div>
                                 <div>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                 </div>
                              </div>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                     </div>
                     <!-- row -->
                  </div>
                  <!-- tab-5 -->
                  <div class="tab-pane" id="tab-6">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="user-boxes">
                              <h6>Name</h6>
                              <h5>Shehar Yar</h5>
                              <h6>Email</h6>
                              <h5>shehar@next-x.com.au</h5>
                              <h6>Username</h6>
                              <h5>SheharYar</h5>
                              <h6>User Access</h6>
                              <ul>
                                 <li><a href="">Admin</a></li>
                                 <li><a href="">Grower</a></li>
                                 <li><a href="">Buyer</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Grower Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <ul>
                                 <li><a href="">McCain</a></li>
                                 <li><a href="">Simplot</a></li>
                              </ul>
                              <h6>Grower Name</h6>
                              <h5>ABC Name</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                        </div>
                        <!-- col -->
                        <div class="col-md-6">
                           <h4>Buyer Details</h4>
                           <div class="user-boxes">
                              <h6>Grower Group</h6>
                              <h5>McCain</h5>
                              <h6>Unique Tags</h6>
                              <ul>
                                 <li><a href="">Abcd</a></li>
                                 <li><a href="">Xyzd</a></li>
                              </ul>
                           </div>
                           <!--user-boxes -->
                           <h4>Paddocks</h4>
                           <div class="user-boxes">
                              <div class="user-column-two">
                                 <div>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                    <h6>Paddock Name</h6>
                                    <h5>Sheharyar’s Paddock 1</h5>
                                 </div>
                                 <div>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                    <h6>No of Hactares</h6>
                                    <h5>40</h5>
                                 </div>
                              </div>
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
                  <h4 class="modal-title" id="myModalLabel2">Users</h4>
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
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
                        </tr>
                     </table>
                     <span class="fa fa-angle-right angle-right"></span>
                  </div>
               </a>
            </li>
            <li>
               <a href="#">
                  <div class="user-table" data-toggle="modal" data-target="#user-details">
                     <table class="table">
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                        </tr>
                        <tr>
                           <td>Shehar Yar</td>
                           <td>shehar@next-x.com.au</td>
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
      <div class="modal right fade user-details" id="user-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <!-- <span aria-hidden="true">&times;</span> -->
                     <span class="fa fa-arrow-left"></span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel3">Shehar Yar</h4>
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
                     <li><a href="#">Users</a></li>
                     <li class="active">Shehar Yar</li>
                  </ol>
                  <div class="user-boxes">
                     <h6>Name</h6>
                     <h5>Shehar Yar</h5>
                     <h6>Email</h6>
                     <h5>shehar@next-x.com.au</h5>
                     <h6>Username</h6>
                     <h5>SheharYar</h5>
                     <h6>User Access</h6>
                     <ul>
                        <li><a href="">Admin</a></li>
                        <li><a href="">Grower</a></li>
                        <li><a href="">Buyer</a></li>
                     </ul>
                  </div>
                  <!--user-boxes -->
                  <h4>Grower Details</h4>
                  <div class="user-boxes">
                     <h6>Grower Group</h6>
                     <ul>
                        <li><a href="">McCain</a></li>
                        <li><a href="">Simplot</a></li>
                     </ul>
                     <h6>Grower Name</h6>
                     <h5>ABC Name</h5>
                     <h6>Unique Tags</h6>
                     <ul>
                        <li><a href="">Abcd</a></li>
                        <li><a href="">Xyzd</a></li>
                     </ul>
                  </div>
                  <!--user-boxes -->
                  <h4>Buyer Details</h4>
                  <div class="user-boxes">
                     <h6>Grower Group</h6>
                     <h5>McCain</h5>
                     <h6>Unique Tags</h6>
                     <ul>
                        <li><a href="">Abcd</a></li>
                        <li><a href="">Xyzd</a></li>
                     </ul>
                  </div>
                  <!--user-boxes -->
                  <h4>Paddocks</h4>
                  <div class="user-boxes">
                     <div class="user-column-two">
                        <div>
                           <h6>Paddock Name</h6>
                           <h5>Sheharyar’s Paddock 1</h5>
                           <h6>Paddock Name</h6>
                           <h5>Sheharyar’s Paddock 1</h5>
                           <h6>Paddock Name</h6>
                           <h5>Sheharyar’s Paddock 1</h5>
                        </div>
                        <div>
                           <h6>No of Hactares</h6>
                           <h5>40</h5>
                           <h6>No of Hactares</h6>
                           <h5>40</h5>
                           <h6>No of Hactares</h6>
                           <h5>40</h5>
                        </div>
                     </div>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label  class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="Name">
          </div>
          <div class="form-group">
            <label  class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="Email">
          </div>
          <div class="form-group">
            <label  class="col-form-label">UserName:</label>
            <input type="text" class="form-control" id="UserName">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="adduser()">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

      <!-- End Add Model -->
      <!-- modal -->
      <script type="text/javascript" src="asset/js/jquery.js"></script>
      <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="asset/js/index.js"></script>
      <script type="text/javascript" src="asset/js/wow.js"></script>

       <script >
           function adduser(){
              var addName=$('#Name').val();
              var addEmail=$('#Email').val();
              var addUserName=$('#UserName').val();

              $.ajax({
                url:"save.php",
                type: 'post',
                data:{
                    Namesend:addName,
                    Emailsend:addEmail,
                    UserNamesend:addUserName
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