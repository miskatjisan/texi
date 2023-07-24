

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{'/'}}" class="brand-link">
      <span class="brand-text font-weight-light">Airport Local Taxis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="#" class="img-circle elevation-2" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Session::get('comp_name')}} Partner</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{'/partner'}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Welcome to Airport Local Taxis Partner
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{'/'}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home page</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="{{route('books.index')}}" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Bookings
              </p>
            </a>
            </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Account Details
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('banks.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Bank Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('banks.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Bank Account</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Billing Address</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Payment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('payments.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pay To Cards</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('payments.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Pay To Card</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Documents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('licenses.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Operator's License</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('insurances.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insurences</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Pricing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('bymilages.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>By Milage Pricing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('airfixprices.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Airport Fixed Pricing</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('congcharges.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Congestion Charges</p>
                </a>
              </li>

            </ul>
          </li>




          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Coverages Areas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('areacovers.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Area Coverage</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{route('areacovers.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Area Coverage</p>
                </a>
              </li> 
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Fleet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('drivers.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drivers</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{route('vehicles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehicles</p>
                </a>
              </li>
              </ul>
          </li>


      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>













  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Fleet
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('drivers.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Drivers</p>
                </a>
              </li> 

              <li class="nav-item">
                <a href="{{route('vehicles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vehicles</p>
                </a>
              </li>