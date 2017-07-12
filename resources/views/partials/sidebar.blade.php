<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{!! route('home') !!}" class="site_title"><i class="fa fa-paw"></i> <span>SFCG</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{!! asset('production/images/img.jpg') !!}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Dashboard</a></li>
                        </ul>
                    </li>

                    <li {{ Request::is('/project') ? 'active open' : '' }} >
                        <a ><i class="fa fa-edit"></i> Project Management<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('project.index') }}">All Projects</a></li>
                            <li><a href="{{ route('project.create') }}">Add New Project</a></li>
                        </ul>
                    </li>

                    <li{{ Request::is('/plans') ? 'active open' : '' }} ><a><i class="fa fa-sitemap"></i> Plan Management <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu" style="display: none">
                          <li><a>Select Plan<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none">
                              <li class="sub_menu"><a href="level2.html">DIP Management</a>
                              </li>
                              <li><a href="#level2_1">SIP Management</a>
                              </li>
                            </ul>
                          </li>
                      </ul>
                    </li>

                    <li {{ Request::is('/dip') ? 'active open' : '' }} >
                        <a ><i class="fa fa-edit"></i>Implementation Plan Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav side-menu">
                        <li>
                            <a ><i class="fa "></i>Select a Plan <span class="fa fa-chevron-down"></span></a>
                           
                            <ul class="nav child_menu">
                                <li><a href="{{ route('dips.index') }}">All DIPs</a></li>
                                <li><a href="{{ route('dips.create') }}">Add New DIP</a></li>
                            </ul>
                            </li>
                        </ul>
                    </li>

                    <li {{ Request::is('/training') ? 'active open' : '' }} >
                        <a ><i class="fa fa-edit"></i> Training Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('trainings.index') }}">All Trainings</a></li>
                            <li><a href="{{ route('trainings.create') }}">Add New Training</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>