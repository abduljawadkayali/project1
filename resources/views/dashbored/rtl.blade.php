<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

 <!DOCTYPE html>
 <html lang="ar" dir="rtl">
 
 <head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="/assets/img/favicon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
    @lang("Future Generation Private Schools")
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'
   />
   <!--     Fonts and icons     -->
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
   />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
 
   <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
   <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">
 
   <!-- CSS Files -->
   <link href="/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
   <link href="/assets/css/material-dashboard-rtl.css?v=1.1" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="/assets/demo/demo.css" rel="stylesheet" />
 
   <!-- Style Just for persian demo purpose, don't include it in your project -->
   <style>
     body,
     h1,
     h2,
     h3,
     h4,
     h5,
     h6,
     .h1,
     .h2,
     .h3,
     .h4 {
       font-family: "Cairo";
     }
   </style>
 </head>
 
 <body class="">
   <div class="wrapper ">
     <div class="sidebar" data-color="purple" data-background-color="white" data-image="/assets/img/sidebar-1.jpg">
       <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
 
         Tip 2: you can also add an image using data-image tag
     -->
       <div class="logo">
         <a href="welcome" class="simple-text logo-normal">
             @lang("Future Generation Private Schools")      </a>
       </div>
 
       
 
 
       <div class="sidebar-wrapper">
         <ul class="nav">
           <li class="nav-item ">
             <a class="nav-link" href="users">
               <i class="material-icons">person</i>
               <p> @lang('Users') </p>
             </a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="roles">
               <i class="material-icons">dashboard</i>
               <p> @lang("Roles")</p>
             </a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="permissions">
               <i class="material-icons">content_paste</i>
               <p>@lang("Permissions")</p>
             </a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="./typography.html">
               <i class="material-icons">library_books</i>
               <p>تایپوگرافی</p>
             </a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="./icons.html">
               <i class="material-icons">bubble_chart</i>
               <p>آیکن‌ها</p>
             </a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="./map.html">
               <i class="material-icons">location_ons</i>
               <p>نقشه</p>
             </a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="./notifications.html">
               <i class="material-icons">notifications</i>
               <p>اعلان‌ها</p>
             </a>
           </li>
           <li class="nav-item active  ">
             <a class="nav-link" href="./rtl.html">
               <i class="material-icons">language</i>
               <p>language</p>
             </a>
           </li>
            <li class="nav-item active-pro ">
                 <a class="nav-link" href="./upgrade.html">
                     <i class="material-icons">unarchive</i>
                     <p>Upgrade to PRO</p>
                 </a>
             </li>
         </ul>
       </div>
     </div>
     <div class="main-panel">
       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
         <div class="container-fluid">
           <div class="navbar-wrapper">
             <a class="navbar-brand" href="#"> @lang('dashbored') </a>
           </div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="sr-only">Toggle navigation</span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-end">
             <form class="navbar-form">
               <div class="input-group no-border">
                 <input type="text" value="" class="form-control" placeholder="جستجو...">
                 <button type="submit" class="btn btn-white btn-round btn-just-icon">
                   <i class="material-icons">search</i>
                   <div class="ripple-container"></div>
                 </button>
               </div>
             </form>
             <ul class="navbar-nav">
               <li class="nav-item">
                 <a class="nav-link" href="#pablo">
                   <i class="material-icons">dashboard</i>
                   <p class="d-lg-none d-md-block">
                     آمارها
                   </p>
                 </a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="material-icons">notifications</i>
                   <span class="notification">۵</span>
                   <p class="d-lg-none d-md-block">
                     اعلان‌ها
                   </p>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                   <a class="dropdown-item" href="#">محمدرضا به ایمیل شما پاسخ داد</a>
                   <a class="dropdown-item" href="#">شما ۵ وظیفه جدید دارید</a>
                   <a class="dropdown-item" href="#">از حالا شما با علیرضا دوست هستید</a>
                   <a class="dropdown-item" href="#">اعلان دیگر</a>
                   <a class="dropdown-item" href="#">اعلان دیگر</a>
                 </div>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="#pablo">
                   <i class="material-icons">person</i>
                   <p class="d-lg-none d-md-block">
                     حساب کاربری
                   </p>
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </nav>
       <br>
       <br>
       @include ('includes.messages')
       <main class="py-4">
           @yield('content')
       </main>
 
       <!-- End Navbar -->
     
        
</div>



     <!--   Core JS Files   -->
     <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
     <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
     <script src="/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
     <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 
     <!-- Chartist JS -->
     <script src="/assets/js/plugins/chartist.min.js"></script>
     <!--  Notifications Plugin    -->
     <script src="/assets/js/plugins/bootstrap-notify.js"></script>
     <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
     <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    
     <script>
       $(document).ready(function () {
         // Javascript method's body can be found in assets/js/demos.js
         md.initDashboardPageCharts();
 
       });
     </script>
 </body>
 
 </html>
 