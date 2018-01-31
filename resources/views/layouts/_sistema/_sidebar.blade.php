<!-- Start Sidabar -->
<div class="sidebar clearfix">
    <ul class="sidebar-panel nav metismenu" id="side-menu" data-plugin="metismenu">
        <li><a href="#"><span class="icon color5"><i class="fa fa-home" aria-hidden="true"></i></span><span class="nav-title">Dashboard</span> </a>
            {{-- <ul>
                <li><a href=""><i class="fa fa-circle" aria-hidden="true"></i> Dashboard 1</a></li>
                <li><a href=""><i class="fa fa-circle" aria-hidden="true"></i> Dashboard 2</a></li>
                <li><a href=""><i class="fa fa-circle" aria-hidden="true"></i> Dashboard 3</a></li>
            </ul> --}}
        </li>
        <li class="sidetitle">FEATURES</li>                
        <li><a href="#"><span class="icon color5"><i class="fa fa-book" aria-hidden="true"></i></span><span class="nav-title">Blog</span> <i class="fa fa-sort-desc caret"></i></a>
            <ul>
                <li><a href="{{ route('posts.create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Novo Post</a></li>
                <li><a href="{{ route('posts.index') }}"><i class="fa fa-circle" aria-hidden="true"></i> Todos os Post</a></li>
            </ul>
        </li>
    </ul>
</div>
    <!-- End Sidabar -->  