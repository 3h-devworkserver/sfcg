<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{!! route('home') !!}" class="site_title"><i class="fa fa-paw"></i> <span>SFCG</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{!! asset('3hammers_footer.png') !!}" alt="..." class="img-circle profile_img">
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
                    
                    <li class="{{ active_class(Active::checkUriPattern('project*')) }}" >
                        <a ><i class="fa fa-tasks"></i> Project Management<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none; {{ active_class(Active::checkUriPattern('project*'), 'display: block;') }}">
                            <li><a href="{{ route('project.index') }}">All Projects</a></li>
                            <li><a href="{{ route('project.create') }}">Add New Project</a></li>
                        </ul>
                    </li>

                    <li{{ Request::is('/plans') ? 'active open' : '' }} ><a><i class="fa fa-sitemap"></i> Plan Management <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu" style="display: none">
                          <li><a>Select Plan<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu" style="display: none">
                              <li class="sub_menu"><a href="{{ route('dips.index') }}">DIP Management</a>
                              </li>
                              <li><a href="#level2_1">SIP Management</a>
                              </li>
                            </ul>
                          </li>
                      </ul>
                    </li>
                    
                    <li class="{{ active_class(Active::checkUriPattern('trainings*')) }}">
                        <a ><i class="fa fa-university"></i> Training Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none; {{ active_class(Active::checkUriPattern('trainings*'), 'display: block;') }}">
                            <li><a href="{{ route('trainings.index') }}">All Trainings</a></li>
                            <li><a href="{{ route('trainings.create') }}">Add New Training</a></li>
                        </ul>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('ngo*')) }}" >
                        <a ><i class="fa fa-building-o"></i> NGO Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none; {{ active_class(Active::checkUriPattern('ngo*'), 'display: block;') }}">
                            <li><a href="{{ route('ngo.index') }}">All NGO</a></li>
                            <li><a href="{{ route('ngo.create') }}">Add New NGO</a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ active_class(Active::checkUriPattern('staffs*')) }}" >
                        <a ><i class="fa fa-users"></i> Staff Management <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none; {{ active_class(Active::checkUriPattern('staffs*'), 'display: block;') }}">
                            <li><a href="{{ route('staffs.index') }}">All Staffs</a></li>
                            <li><a href="{{ route('staffs.create') }}">Add New Staff</a></li>
                        </ul>
                    </li>

                    <li class="{{ active_class(Active::checkUriPattern('settings*')) }}" >
                        <a ><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu" style="display: none; {{ active_class(Active::checkUriPattern('settings*'), 'display: block;') }}">
                            <li><a href="{{url('/settings/generalsetting')}}">General Setting</a></li>
                        </ul>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

    </div>
</div>