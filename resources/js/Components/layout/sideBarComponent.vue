<template>
    
           <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Navigation</h3>
                        </li>
                        <li class="active">
                            <router-link to="/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></router-link>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-buffer"></i> <span>UI Elements</span></a>
                            <ul class="child-list">
                                <li><a href="ui-typography.html"> Typography</a></li>
                                <li><a href="ui-buttons.html"> Buttons</a></li>
                                <li><a href="ui-cards.html"> Cards</a></li>
                                <li><a href="ui-tabs.html"> Tab & Accordions</a></li>
                                <li><a href="ui-modals.html"> Modals</a></li>
                                <li><a href="ui-bootstrap.html"> BS Elements</a></li>
                                <li><a href="ui-progressbars.html"> Progress Bars</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-carousel.html"> Carousel</a></li>
                            </ul>
                        </li>
                        <li>
                            <h3 class="navigation-title">Components</h3>
                        </li>
                        <li class="menu-list"><router-link to="/category"><i class="mdi mdi-google-circles-extended"></i> <span>Category</span></router-link>
                        </li>
                        <li class="menu-list"><a href=""><i class="mdi mdi-diamond"></i> <span>Icons</span></a>
                            <ul class="child-list">
                                <li><a href="icons-material.html"> Material Design</a></li>
                                <li><a href="icons-font-awesome.html"> Font Awesome</a></li>
                                <li><a href="icons-themify.html"> Themify</a></li>
                            </ul>
                        </li>
                        <li class="menu-list"><a href="javascript:;"><i class="mdi mdi-table"></i> <span>Tables</span></a>
                            <ul class="child-list">
                                <li><a href="tables-basic.html"> Basic Table</a></li>
                                <li><a href="tables-datatable.html"> Data Table</a></li>
                                <li><a href="tables-editable.html"> Editable </a></li>
                                <li><a href="tables-responsive.html"> Responsive Table </a></li>
                            </ul>
                        </li>
                    </ul>
</template>

<style scoped>
    /* Sidebar */
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding: 20px;
      color: #fff;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar li {
      margin-bottom: 10px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
    }

    .sidebar a:hover {
      color: #f8f9fa;
    }

    /* Dropdown */
    .dropdown {
      position: relative;
    }

    .dropdown .dropdown-menu {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #343a40;
      z-index: 1;
      padding: 10px 0;
    }

    .dropdown:hover .dropdown-menu {
      display: block;
    }

    .dropdown-menu a {
      padding: 5px 20px;
      display: block;
    }

    .dropdown-menu a:hover {
      background-color: #f8f9fa;
      color: #343a40;
    }
  </style>