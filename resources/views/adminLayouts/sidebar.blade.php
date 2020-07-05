 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="treeview">
             <a href="{{ route('admin.dashboard.index') }}">
             <i class="fa fa-dashboard"></i>
             <span>Dashboard</span>
             <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
            </span>
             </a>
          </li>
        </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Homepage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
                <li class="{{ Route::is('admin.homepage.index') ? 'active' : '#' }}"><a href="{{ route('admin.homepage.index') }}"><i class="fa fa-circle-o"></i> Edit Main Content</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i>
            <span>Article</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ Request::segment(2) == 'list-articles' ? 'active' : '#'  }}"><a href="{{ route('admin.articles.index') }}"><i class="fa fa-circle-o"></i> List Article</a></li>
            <li class="{{ Request::segment(3) == 'categories' ? 'active' : '#'  }}"><a href="{{ route('admin.categories.index') }}"><i class="fa fa-circle-o"></i> Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>About</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
                <li class="{{ Route::is('admin.about.index') ? 'active' : '#' }}"><a href="{{ route('admin.about.index') }}"><i class="fa fa-circle-o"></i> Edit About</a></li>
            </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments-o"></i> <span>Contact Us</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
            <ul class="treeview-menu">
                <li class="{{ Route::is('admin.contact.index') ? 'active' : '#'}}"><a href="{{ route('admin.contact.index') }}"><i class="fa fa-circle-o"></i> Edit Contact Us</a></li>
                <li class="{{ Route::is('admin.feedback.index') ? 'active' : '#'}}"><a href="{{ route('admin.feedback.index') }}"><i class="fa fa-circle-o"></i> Show Feedback</a></li>
            </ul>
        </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-question"></i> <span>FAQ</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li class="{{ Route::is('admin.faq.index') ? 'active' : '#' }}"><a href="{{ route('admin.faq.index') }}"><i class="fa fa-circle-o"></i> List FAQ</a></li>
                  <li class="{{ Route::is('admin.subject.index') ? 'active' : '#' }}"><a href="{{ route('admin.subject.index') }}"><i class="fa fa-circle-o"></i> Subject</a></li>
              </ul>
          </li>
          <li class="treeview">
              <a href="#">
                  <i class="fa fa-edit"></i> <span>Master</span>
                  <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
              </a>
              <ul class="treeview-menu">
                  <li class="{{ Route::is('admin.profil') ? 'active' : '#' }}"><a href="{{ route('admin.profil') }}"><i class="fa fa-circle-o"></i> Lihat Profil</a></li>
              </ul>
          </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
