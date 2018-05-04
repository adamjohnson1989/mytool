<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler">
            </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
            <form class="sidebar-search " action="extra_search.html" method="POST">
                <a href="javascript:;" class="remove">
                    <i class="icon-close"></i>
                </a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="fa fa-search" aria-hidden="true"></i></a>
							</span>
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <?php $controller = $this->request->params['controller']; ?>
        <li class="start open <?= $controller == 'Dashboards'? 'active' : ''?>">
            <a href="javascript:;">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
        </li>
        <?php if($Auth->user('role') == AUTH_ALL || $Auth->user('role') == AUTH_EDITOR):?>
        <!-- begin manager tag for web-->
        <li class="<?= $controller == 'Recruitments'? 'active' : ''?>">
            <a href="<?php echo $this->Url->build(['controller' => 'Recruitments','action' => 'index']) ?>">
                <i class="fa fa-street-view" aria-hidden="true"></i>
                <span class="title">Thông tin tuyển dụng</span>
                <span class="arrow "></span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                <span class="title">Tin Tức</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li class="<?= $controller == 'Categories'? 'active' : ''?>">
                    <a href="<?php echo $this->Url->build(['controller' => 'Categories','action' => 'index']) ?>">
                        Categories</a>
                </li>
                <li class="<?= $controller == 'News'? 'active' : ''?>">
                    <a href="<?php echo $this->Url->build(['controller' => 'News','action' => 'index']) ?>">
                        Tin Tức</a>
                </li>
            </ul>
        </li>
        <?php endif;?>
        <!-- end manager tag for web-->
        <?php if($Auth->user('role') == AUTH_ALL || $Auth->user('role') == AUTH_MODE):?>
        <li>
            <a href="javascript:void(0)">
                <i class="fa fa-address-card-o" aria-hidden="true"></i>
                <span class="title">Tổ chức tiếp nhận</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub-menu">
                <li class="<?= $controller == 'Associations'? 'active' : ''?>">
                    <a href="<?php echo $this->Url->build(['controller' => 'Associations','action' => 'index']) ?>">
                        <i class="fa fa-users" aria-hidden="true"></i>  Nghiệp Đoàn</a>
                </li>
                <li class="<?= $controller == 'Associations'? 'active' : ''?>">
                    <a href="<?php echo $this->Url->build(['controller' => 'Companys','action' => 'index']) ?>">
                        <i class="fa fa-handshake-o" aria-hidden="true"></i> Công Ty Tiếp Nhận</a>
                </li>
            </ul>
        </li>
        <li class="<?= $controller == 'Members'? 'active' : ''?>">
            <a href="<?php echo $this->Url->build(['controller' => 'Members','action' => 'index']) ?>">
                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                <span class="title">Thông tin thực tập sinh</span>
                <span class="arrow "></span>
            </a>
        </li>
        <?php endif;?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>