<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        Dashboard
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <ul class="nav top-menu text-center">
        <li>
            <h2 style="margin-top: 0px">বিজয় একাত্তর হল, ঢাকা বিশ্ববিদ্যালয়</h2>
        </li>
    </ul>
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                {{HTML::image('assets/img/person-mini.png')}}
                
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <!-- <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> -->
                
                <li><a href="{{URL::to('logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
</div>
</header>

<!--header end-->