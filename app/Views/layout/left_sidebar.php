<div class="left-side-bar">
  <div class="brand-logo">
    <a href="<?= base_url('/') ?>">
      <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
      <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
      <i class="ion-close-round"></i>
    </div>
  </div>
  <div class="menu-block customscroll">
    <div class="sidebar-menu">
      <ul id="accordion-menu">
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'Home' ? 'active' : '' ?>">
            <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('dashboard') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Dashboard style 1' ? 'active' : '' ?>">Dashboard style 1</a></li>
            <li><a href="<?= base_url('dashboard/dashboard_style2') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Dashboard style 2' ? 'active' : '' ?>">Dashboard style 2</a></li>
            <li><a href="<?= base_url('dashboard/dashboard_style3') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Dashboard style 3' ? 'active' : '' ?>">Dashboard style 3</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'Forms' ? 'active' : '' ?>">
            <span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('forms') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Form Basic' ? 'active' : '' ?>">Form Basic</a></li>
            <li><a href="<?= base_url('forms/advanced_components') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Advanced Components' ? 'active' : '' ?>">Advanced Components</a></li>
            <li><a href="<?= base_url('forms/form_wizard') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Form Wizard' ? 'active' : '' ?>">Form Wizard</a></li>
            <li><a href="<?= base_url('forms/html5_editor') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'HTML5 Editor' ? 'active' : '' ?>">HTML5 Editor</a></li>
            <li><a href="<?= base_url('forms/form_pickers') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Form Pickers' ? 'active' : '' ?>">Form Pickers</a></li>
            <li><a href="<?= base_url('forms/image_croppers') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Image Croppers' ? 'active' : '' ?>">Image Cropper</a></li>
            <li><a href="<?= base_url('forms/image_dropzone') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Image Dropzone' ? 'active' : '' ?>">Image Dropzone</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'Tables' ? 'active' : '' ?>">
            <span class="micon dw dw-library"></span><span class="mtext">Tables</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('tables') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Basic Tables' ? 'active' : '' ?>">Basic Tables</a></li>
            <li><a href="<?= base_url('tables/data_tables') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Data Tables' ? 'active' : '' ?>">Data Tables</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= base_url('calender') ?>" class="dropdown-toggle no-arrow <?= isset($page) && !empty($page) && $page == 'Calender' ? 'active' : '' ?>">
            <span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'UI Elements' ? 'active' : '' ?>">
            <span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('UserInterfaceElements') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Buttons' ? 'active' : 'Buttons' ?>">Buttons</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/cards') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Cards' ? 'active' : '' ?>">Cards</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/cards_hover') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Cards Hover' ? 'active' : '' ?>">Cards Hover</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/modals') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Modals' ? 'active' : '' ?>">Modals</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/tabs') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Tabs' ? 'active' : '' ?>">Tabs</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/tooltip') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Tooltip' ? 'active' : '' ?>">Tooltip &amp; Popover</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/sweet_alert') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Sweet Alert' ? 'active' : '' ?>">Sweet Alert</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/notification') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Notification' ? 'active' : '' ?>">Notification</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/timeline') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Timeline' ? 'active' : '' ?>">Timeline</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/progressbar') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Progressbar' ? 'active' : '' ?>">Progressbar</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/typography') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Typography' ? 'active' : '' ?>">Typography</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/list_group') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'List group' ? 'active' : '' ?>">List group</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/range_slider') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Range Slider' ? 'active' : '' ?>">Range slider</a></li>
            <li><a href="<?= base_url('UserInterfaceElements/carousel') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Carousel' ? 'active' : '' ?>">Carousel</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'Icons' ? 'active' : '' ?>">
            <span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('icons') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'FontAwesome Icons' ? 'active' : '' ?>">FontAwesome Icons</a></li>
            <li><a href="<?= base_url('icons/FoundationIcons') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Foundation Icons' ? 'active' : '' ?>">Foundation Icons</a></li>
            <li><a href="<?= base_url('icons/IoniconsIcons') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Ionicons Icons' ? 'active' : '' ?>">Ionicons Icons</a></li>
            <li><a href="<?= base_url('icons/ThemifyIcons') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Themify Icons' ? 'active' : '' ?>">Themify Icons</a></li>
            <li><a href="<?= base_url('icons/CustomIcons') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Custom Icons' ? 'active' : '' ?>">Custom Icons</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'Charts' ? 'active' : '' ?>">
            <span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('charts') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Highchart' ? 'active' : '' ?>">Highchart</a></li>
            <li><a href="<?= base_url('charts/jQueryKnob') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'jQuery Knob' ? 'active' : '' ?>">jQuery Knob</a></li>
            <li><a href="<?= base_url('charts/jvectormap') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'jvectormap' ? 'active' : '' ?>">jvectormap</a></li>
            <li><a href="<?= base_url('charts/Apexcharts') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == 'Apexcharts' ? 'active' : '' ?>">Apexcharts</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == 'Additional Pages' ? 'active' : '' ?>">
            <span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('AdditionalPages') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Video Player</a></li>
            <li><a href="<?= base_url('AdditionalPages/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Login</a></li>
            <li><a href="<?= base_url('AdditionalPages/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Forgot Password</a></li>
            <li><a href="<?= base_url('AdditionalPages/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Reset Password</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">400</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">403</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">404</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">500</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">503</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Blank</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Contact Directory</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Blog</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Blog Detail</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Product</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Product Detail</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">FAQ</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Profile</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Gallery</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Pricing Tables</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
          </a>
          <ul class="submenu">
            <li><a href="javascript:;" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Level 1</a></li>
            <li><a href="javascript:;" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Level 1</a></li>
            <li><a href="javascript:;" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Level 1</a></li>
            <li class="dropdown">
              <a href="javascript:;" class="dropdown-toggle <?= isset($page_sub1) && !empty($page_sub1) && $page == '' ? 'active' : '' ?>">
                <span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
              </a>
              <ul class="submenu child">
                <li><a href="javascript:;" class="<?= isset($page_sub2) && !empty($page_sub2) && $page_sub2 == '' ? 'active' : '' ?>">Level 2</a></li>
                <li><a href="javascript:;" class="<?= isset($page_sub2) && !empty($page_sub2) && $page_sub2 == '' ? 'active' : '' ?>">Level 2</a></li>
              </ul>
            </li>
            <li><a href="javascript:;" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Level 1</a></li>
            <li><a href="javascript:;" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Level 1</a></li>
            <li><a href="javascript:;" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Level 1</a></li>
          </ul>
        </li>
        <li>
          <a href="<?= base_url('/') ?>" class="dropdown-toggle no-arrow <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('/') ?>" class="dropdown-toggle no-arrow <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('/') ?>" class="dropdown-toggle no-arrow <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        <li>
          <div class="sidebar-small-cap">Extra</div>
        </li>
        <li>
          <a href="javascript:;" class="dropdown-toggle <?= isset($page) && !empty($page) && $page == '' ? 'active' : '' ?>">
            <span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
          </a>
          <ul class="submenu">
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Introduction</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Getting Started</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Color Settings</a></li>
            <li><a href="<?= base_url('/') ?>" class="<?= isset($page_sub1) && !empty($page_sub1) && $page_sub1 == '' ? 'active' : '' ?>">Third Party Plugins</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>