<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="active">
                    <a href="{{ route('show.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
                </li>


                <li>
                    <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('admin.post') }}"> Posts </a></li>
                        <li><a href="{{ route('tag.index') }}"> Tag </a></li>
                        <li><a href="{{ route('category.post') }}"> Category </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Product </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> Product </a></li>
                        <li><a href="register.html"> Tag </a></li>
                        <li><a href="forgot-password.html"> Category </a></li>
                        <li><a href="forgot-password.html"> Brand </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Orders </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> Orders </a></li>
                        <li><a href="register.html"> Reports </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> Posts</a></li>
                        <li><a href="login.html"> Blogs</a></li>
                        <li><a href="login.html"> Contact Us</a></li>
                        <li><a href="login.html"> About Us</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-document"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="login.html"> Users</a></li>
                        <li><a href="login.html"> Role</a></li>
                        <li><a href="login.html"> permission</a></li>
                    </ul>
                </li>

            </ul>


        </div>
    </div>
</div>
<!-- /Sidebar -->
