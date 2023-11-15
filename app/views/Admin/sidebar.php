 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="AdminController.php" class="brand-link">
         <img src="../views/Admin/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">ADMIN</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="../views/Admin/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Admin</a>
             </div> 
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <!-- Danh mục -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-calendar-minus"></i>
                         <p>
                             Quản trị danh mục
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="AdminController.php?act=listdm" name= "ds-danhmuc" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="AdminController.php?act=adddm" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm Mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- sản phẩm -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-mobile"></i>
                         <p>
                             Quản trị sản phẩm
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm Mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- biến thể -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-swatchbook"></i>
                         <p>
                             Quản trị biến thể
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm Mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- bình luận -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-solid fa-comment"></i>
                         <p>
                             Quản trị bình luận
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- bài viết -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-regular fa-newspaper"></i>
                         <p>
                             Quản trị bài viết
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm Mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- tài khoản -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-user"></i>
                         <p>
                             Quản trị tài khoản
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm Mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- đơn hàng -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-shopping-cart"></i>
                         <p>
                             Quản trị đơn hàng
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- hệ thống -->
                 <li class="nav-item has-treeview">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-cog"></i>
                         <p>
                             Quản trị hệ thống
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>

                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-image nav-icon"></i>
                                 <p>Logo</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../views/Admin/assets/pages/tables/simple.html" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>footer</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <!-- <li class="nav-header">EXAMPLES</li> -->
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>