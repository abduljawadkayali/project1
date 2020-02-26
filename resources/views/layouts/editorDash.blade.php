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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

   @yield('header')
   <link href="/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
   <link href="/assets/css/material-dashboard-rtl.css?v=1.1" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="/assets/demo/demo.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
 
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
          <a href="/welcome" class="simple-text logo-normal">
              @lang("Future Generation Private Schools")      </a>
        </div>
  
        
  
  
        <div class="sidebar-wrapper">
          <ul class="nav">

            
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('AddStudent') }}">
                <i class="material-icons"> group_add</i>
                <p> @lang('Add Student') </p>
              </a>
            </li>


            <li class="nav-item ">
              <a class="nav-link" href="{{ route('teacher.create') }}">
                <i class="material-icons"> person_add</i>
                <p> @lang('Add Teacher') </p>
              </a>
            </li>
            
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('relation') }}">
                <i class="material-icons"> add</i>
                <p> @lang('Add Teacher responsity') </p>
              </a>
            </li> 


            <li class="nav-item ">
              <a class="nav-link" href="{{ route('respon.index') }}">
                <i class="material-icons"> short_text</i>
                <p> @lang('Teacher responsity') </p>
              </a>
            </li>  
 



            <li class="nav-item ">
              <a class="nav-link" href="{{ route('group.create') }}">
                <i class="material-icons"> add_box</i>
                <p> @lang('Add Class') </p>
              </a>
            </li>


            <li class="nav-item ">
              <a class="nav-link" href="{{ route('branch.create') }}">
                <i class="material-icons"> add</i>
                <p> @lang('Add Branches') </p>
              </a>
            </li>

           
       

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('subject.create') }}">
                <i class="material-icons"> note_add </i>
                <p> @lang('Add Subject') </p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('exam.create') }}">
                <i class="material-icons"> add</i>
                <p> @lang('Add Exam') </p>
              </a>
            </li>
            

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('year.create') }}">
                <i class="material-icons"> library_add</i>
                <p> @lang('Add Year') </p>
              </a>
            </li>

            
           

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('semister.create') }}">
                <i class="material-icons"> add</i>
                <p> @lang('Add Semister') </p>
              </a>
            </li>

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('student.index') }}">
                <i class="material-icons"> people</i>
                <p> @lang('Students') </p>
              </a>
            </li>
            

            
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('teacher.index') }}">
                <i class="material-icons"> people</i>
                <p> @lang('Teachers') </p>
              </a>
            </li>
            

            

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('group.index') }}">
                <i class="material-icons"> people</i>
                <p> @lang('Classes') </p>
              </a>
            </li>


        

           
            

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('branch.index') }}">
                <i class="material-icons"> add_box</i>
                <p> @lang('Branches') </p>
              </a>
            </li>

           
            

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('subject.index') }}">
                <i class="material-icons"> add_box</i>
                <p> @lang('Subjects') </p>
              </a>
            </li>

            
            

            <li class="nav-item ">
              <a class="nav-link" href="{{ route('exam.index') }}">
                <i class="material-icons"> add_box</i>
                <p> @lang('Exams') </p>
              </a>
            </li>


            <li class="nav-item ">
              <a class="nav-link" href="{{ route('year.index') }}">
                <i class="material-icons"> sort</i>
                <p> @lang('Years') </p>
              </a>
            </li>
            

            
            <li class="nav-item ">
              <a class="nav-link" href="{{ route('semister.index') }}">
                <i class="material-icons"> short_text</i>
                <p> @lang('Semisteres') </p>
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
             <a class="navbar-brand" href="/AddStudent"> @lang('dashbored') </a>
           </div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
             aria-label="Toggle navigation">
             <span class="sr-only">Toggle navigation</span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
             <span class="navbar-toggler-icon icon-bar"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-end">
            
             <ul class="navbar-nav">
               
              


              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>
  
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a style="text-align:center;" class="nav-link" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                      @lang("logout")
                  </a>
  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>



             </ul>
           </div>
         </div>
       </nav>
       <br>
       <br>
       @include ('includes.messages')
       <main class="py-4">
           @yield('main')
       </main>
 
       <!-- End Navbar -->
     
        
</div>



     <!--   Core JS Files   -->
     <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
     <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
     <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
 
     <!-- Chartist JS -->
     <script src="../assets/js/plugins/chartist.min.js"></script>
     <!--  Notifications Plugin    -->
     <script src="../assets/js/plugins/bootstrap-notify.js"></script>
     <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
     <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    
     <script>
       $(document).ready(function () {
         // Javascript method's body can be found in assets/js/demos.js
         md.initDashboardPageCharts();
 
       });
     </script>
 </body>
 
 </html>
 