<!-- Start Top -->
<div id="top" class="clearfix"> 
    <!-- Start App Logo -->
    <div class="applogo"> <a href="index.html" class="logo">Admin</a> </div>
    <!-- End App Logo --> 
    <!-- Start Sidebar Show Hide Button --> 
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a> <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a> 
    <!-- End Sidebar Show Hide Button --> 
    <!-- Start Searchbox -->
    <form class="searchform">
        <input type="text" class="searchbox" id="searchbox" placeholder="Buscar...">
        <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox --> 
    <!-- Start Sidepanel Show-Hide Button --> 
    {{-- <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>  --}}
    <!-- End Sidepanel Show-Hide Button --> 
    <!-- Start Top Right -->
    <ul class="top-right">
        <li class="dropdown dropdown-notification nav-item link"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label count-info"><span class="label label-warning">6</span><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right top-width">
                <li class="dropdown-menu-header">
                    <h6 class="dropdown-header"><span>Notificatições</span><span class="pull-right label label-danger">6 Novas</span></h6>
                </li>
                <li class="list-group"><a href="#" class="list-group-item">
                    <div class="media">
                        <div class="media-body">
                            <h6 class="media-heading color10"><i class="fa fa-shopping-cart"></i> You have new order!</h6>
                            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <small>
                                <time datetime="2017-02-14 20:00" class="media-meta text-muted">30 minutes ago</time>
                            </small> </div>
                        </div>
                    </a>
                    
                    <li class="dropdown-menu-footer"><a href="#" class="dropdown-item text-muted text-center">Ver todas as  notificatições</a></li>
                </ul>
            </li>
            <li class="dropdown link"> <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="{{ asset('public/img/profileimg.png')}}" alt="img"><b>John Doe</b><span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
                    <li role="presentation" class="dropdown-header">Profile</li>
                    <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">2</span></a></li>
                    <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
                    <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
                    <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </ul>
        <!-- End Top Right --> 
</div>
<!-- End Top --> 