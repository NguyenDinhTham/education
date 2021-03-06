<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?php  echo $this->webroot; ?>/img/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo isset($activeMenu) && $activeMenu == 'shop' ? 'active' : '';  ?>">
                <a href="<?php echo $this->Html->url(['plugin' => 'admin', 'controller' => 'Shops', 'action' => 'index']);  ?>" class=" waves-effect waves-block">
                    <i class="material-icons">shopping_basket</i>
                    <span>Shops</span>
                </a>
            </li>

            <li class="<?php echo isset($activeMenu) && $activeMenu == 'product' ? 'active' : '';  ?>">
                <a href="<?php echo $this->Html->url(['plugin' => 'admin', 'controller' => 'Products', 'action' => 'index']);  ?>" class=" waves-effect waves-block">
                    <i class="material-icons">add_shopping_cart</i>
                    <span>Products</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Toyo Design</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>