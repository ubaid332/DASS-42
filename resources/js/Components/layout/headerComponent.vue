<template>
  <div class="header-section">
                    <!--logo and logo icon start-->
                   

                    <!--toggle button start-->
                    <a class="toggle-btn"><i class="ti ti-menu"></i></a>
                    <!--toggle button end-->

                    

                    <div class="notification-wrap">
                        <!--right notification start-->
                        <div class="right-notification">
                            <ul class="notification-menu">
                                <!-- <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline"></i>
                                        <span class="badge badge-success">4</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                          <div class="drop-title">Notifications</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-star"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Iwon meddle and...</span>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <i class="ti ti-heart"></i> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Michael W. Salazar</h6>
                                                        <span class="mail-desc">Lovely gide learn for you...</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-image"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>David D. Chen</h6>
                                                        <span class="mail-desc">Send his new photo...</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <i class="ti ti-bell"></i>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Irma J. Hendren</h6>
                                                        <span class="mail-desc">6:00 pm our meeting so...</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> 
                                                <strong>See all notifications</strong> 
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:;" class="notification" data-toggle="dropdown">
                                        <i class="mdi mdi-email-outline"></i>
                                        <span class="badge badge-danger">9</span>
                                    </a>
                                    <ul class="dropdown-menu mailbox dropdown-menu-right">
                                        <li>
                                            <div class="drop-title">New Messages 5</div>
                                        </li>
                                        <li class="notification-scroll">
                                            <div class="message-center">
                                                <a href="#">
                                                    <div class="user-img">
                                                         <img src="assets/images/users/avatar-2.jpg" alt="user" class="rounded-circle"> 
                                                         <span class="profile-status online pull-right"></span>
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Cassie T. Bishop</h6>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                        <span class="time">9:30 AM</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status busy pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Rudy A. Scott</h6>
                                                        <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> 
                                                    </div>
                                                </a> 
                                                <a href="#">
                                                    <div class="user-img">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status away pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Kevin D. Jernigan</h6>
                                                        <span class="mail-desc">I am a singer!</span> 
                                                        <span class="time">9:08 AM</span> 
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> 
                                                        <img src="assets/images/users/avatar-5.jpg" alt="user" class="rounded-circle"> 
                                                        <span class="profile-status offline pull-right"></span> 
                                                    </div>
                                                    <div class="mail-contnet">
                                                        <h6>Jane A. Seward</h6>
                                                        <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> 
                                                    </div>
                                                </a> 
                                            </div>
                                        </li>
                                        <li> 
                                            <a class="text-center bg-light" href="javascript:void(0);"> <strong>See all notifications</strong> </a>
                                        </li>
                                    </ul>
                                </li> -->

                                <li>
                                    <a href="javascript:;" data-toggle="dropdown">
                                        <img src="assets/images/users/240-240.jpg" alt="">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                                        <!-- <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a> -->
                                        <router-link to="/logout" class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</router-link>
                                    </div>

                                </li>

                                <li>
                                    <div class="sb-toggle-right">
                                        <i class="mdi mdi-apps"></i>
                                    </div>
                                </li>
                            </ul>
                        </div><!--right notification end-->
                    </div>
                </div>
</template>

<style scoped>
.logo{
    left: -20%;
}
</style>