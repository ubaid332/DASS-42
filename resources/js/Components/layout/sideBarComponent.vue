<template>
    
           <ul class="side-navigation">
                        <li>
                            <h3 class="navigation-title">Navigation</h3>
                        </li>
                        <li class="active">
                            <router-link to="/dashboard"><i class="mdi mdi-gauge"></i> <span>Dashboard</span></router-link>
                        </li>
                        
                        <li>
                            <h3 class="navigation-title">DASS Servey Forms</h3>
                        </li>
                        <li><router-link to="/dass_42"><i class="mdi mdi-google-circles-extended"></i> <span>DASS-42</span></router-link>
                          
                        </li>

                        <li><router-link to="/anxiety_4"><i class="mdi mdi-google-circles-extended"></i> <span>Anxiety-4</span></router-link>
                          
                        </li>

                        <li><router-link to="/depression_4"><i class="mdi mdi-google-circles-extended"></i> <span>Depression-4</span></router-link>
                          
                        </li>

                        <li><router-link to="/stress_4"><i class="mdi mdi-google-circles-extended"></i> <span>Stress-4</span></router-link>
                          
                        </li>

                        
                        
                        <!-- <li class="menu-list"><a href="javascript:;"><i class="mdi mdi-table"></i> <span>Tables</span></a>
                            <ul class="child-list">
                                <li><a href="tables-basic.html"> Basic Table</a></li>
                                <li><a href="tables-datatable.html"> Data Table</a></li>
                                <li><a href="tables-editable.html"> Editable </a></li>
                                <li><a href="tables-responsive.html"> Responsive Table </a></li>
                            </ul>
                        </li> -->
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