  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Usuario Logueado</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ PRINCIPAL</li>
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
     

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.roles.index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
            <li><a href="{{route('admin.users.index')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="{{route('admin.menus.index')}}"><i class="fa fa-circle-o"></i> Menus</a></li>
        
          </ul>
        </li>  
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cc-visa"></i>
            <span>Ventas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('admin.sales.index')}}"><i class="fa fa-circle-o"></i> Ventas</a></li>
              <li><a href="{{route('admin.deliveries.index')}}"><i class="fa fa-circle-o"></i> Deliveries</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Inventario</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.purchases.index')}}"><i class="fa fa-circle-o"></i> Compras</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-industry"></i>
            <span>Sucursales</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.sucursals.index')}}"><i class="fa fa-circle-o"></i> Sucursales</a></li>
            <li><a href="{{route('admin.wharehouses.index')}}"><i class="fa fa-circle-o"></i> Almacenes</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-cloud"></i>
            <span>Datos Maestros</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('admin.categories.index')}}"><i class="fa fa-circle-o"></i>Categorias</a></li>
            <li><a href="{{route('admin.brands.index')}}"><i class="fa fa-circle-o"></i> Marcas</a></li>
            <li><a href="{{route('admin.providers.index')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
            <li><a href="{{route('admin.clients.index')}}"><i class="fa fa-circle-o"></i> Clientes</a></li>
            <li><a href="{{route('admin.products.index')}}"><i class="fa fa-circle-o"></i> Productos</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Informes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-lock"></i> <span>Salir</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>