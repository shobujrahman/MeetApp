  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{url('admin/dashboard')}}" class="brand-link">
          <span class="brand-text font-weight-light pl-4">Meet App</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('images/admin_images/avatar04.png  ') }}" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  @if(Session::get('page')=="profile")
                  <?php $active = "active";?>
                  @else
                  <?php $active = ""; ?>
                  @endif
                  <a href="{{ url('admin/profile')}}"
                      class="d-block {{$active}}">{{ucwords(Auth::guard('admin')->user()->userName)}}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      @if(Session::get('page')=="dashboard")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/dashboard') }}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      @if(Session::get('page')=="index")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/category')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-list"></i>
                          <p>
                              Category
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      @if(Session::get('page')=="country")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/country')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-globe-europe"></i>
                          <p>
                              Country
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      @if(Session::get('page')=="comment")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{url('admin/comment')}}" class="nav-link {{$active}}">
                          <i class="nav-icon far fa-comment"></i>
                          <p>
                              Comment
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      @if(Session::get('page')=="gift")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/gift')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-gift"></i>
                          <p>
                              Gift
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      @if(Session::get('page')=="image")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/image')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-images"></i>
                          <p>
                              Image
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="name")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/name')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-signature"></i>
                          <p>
                              Name
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="video")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/video')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-video"></i>
                          <p>
                              Video
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="advertisement")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/advertisement')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-ad"></i>
                          <p>
                              Advertisement
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="banner")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/banner')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-images"></i>
                          <p>
                              Banner Photos
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="coin")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/coin')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-coins"></i>
                          <p>
                              Coin Purchase Plan
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="vip")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/vip')}}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-user-friends"></i>
                          <p>
                              Vip Plan
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      @if(Session::get('page')=="administrator")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/administrator') }}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Administrator
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      @if(Session::get('page')=="user")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/user') }}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-user"></i>
                          <p>
                              Users
                          </p>
                      </a>
                  </li>

		  <li class="nav-item">
                	@if(Session::get('page')=="notification")
                		<?php $active = "active";?>
                	@else
                		<?php $active = ""; ?>
                	@endif
                	<a href="{{ url('admin/notifications') }}" class="nav-link {{$active}}">
                    		<i class="nav-icon fas fa-bell"></i>
                    		<p>
                   	 		Notifications
                    		</p>
                	</a>
                  </li>


                  <li class="nav-item">
                      @if(Session::get('page')=="settings")
                      <?php $active = "active";?>
                      @else
                      <?php $active = ""; ?>
                      @endif
                      <a href="{{ url('admin/settings') }}" class="nav-link {{$active}}">
                          <i class="nav-icon fas fa-cog"></i>
                          <p>
                              Settings
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>