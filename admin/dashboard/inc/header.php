<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin - Welcome To Admin Pannel</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.3/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>




<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

</script>
    
    
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="">Admin</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="overflow-y:scroll;">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="home.php">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                
                
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components2">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-edit"></i>
                        <span class="nav-link-text">Add Category</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents2">
                        <li>
                            <a href="all_cata.php"><i class="fa fa-fw fa-edit"></i>All</a>
                        </li>
                        <li>
                            <a href="add_cata.php"><i class="fa fa-fw fa-edit"></i>Add New</a>
                        </li>
                    </ul>
                </li>
               
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components4">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-edit"></i>
                        <span class="nav-link-text">Add Product</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents4">
                       <li>
                            <a href="all_product.php"><i class="fa fa-fw fa-edit"></i>All</a>
                        </li>
                          <li>
                            <a href="add_product.php"><i class="fa fa-fw fa-edit"></i>Add New</a>
                        </li>
                        
                       
                    </ul>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components5">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-edit"></i>
                        <span class="nav-link-text">Add City</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents5">
                       <li>
                            <a href="all_city.php"><i class="fa fa-fw fa-edit"></i>All</a>
                        </li>
                          <li>
                            <a href="add_city.php"><i class="fa fa-fw fa-edit"></i>Add New</a>
                        </li>
                        
                       
                    </ul>
                </li>
                
                 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components6">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-edit"></i>
                        <span class="nav-link-text">Add Location</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents6">
                       <li>
                            <a href="all_location.php"><i class="fa fa-fw fa-edit"></i>All</a>
                        </li>
                          <li>
                            <a href="add_location.php"><i class="fa fa-fw fa-edit"></i>Add New</a>
                        </li>
                        
                       
                    </ul>
                </li>
                
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components7">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents7" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-edit"></i>
                        <span class="nav-link-text">Order</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents7">
                       <li>
                            <a href="looped_users.php"><i class="fa fa-fw fa-edit"></i>New Order</a>
                        </li>
                          <li>
                            <a href="active_order.php"><i class="fa fa-fw fa-edit"></i>Active Order</a>
                        </li>
                        <li>
                            <a href="compelete_order.php"><i class="fa fa-fw fa-edit"></i>Compelete Order</a>
                        </li>
                        
                       
                    </ul>
                </li>



                
                
                
  
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">Profile</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href=""><i class="fa fa-fw fa-gears"></i> Settings</a>
                        </li>
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-edit"></i> Edit Profile</a>
                        </li>
                    </ul>
                </li>
                
                
                
                
              
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"></li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">