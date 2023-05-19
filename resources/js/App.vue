<template>
    <section>
        <div class="logo" v-if="loggedIn">
                        <a href="index.html">
                            
                            <!--<i class="fa fa-maxcdn"></i>-->
                            <span class="brand-name">DASS-42 APP</span>
                        </a>
                    </div>
            <!-- sidebar left start-->
            <div class="sidebar-left" v-if="loggedIn">
                
                <div class="sidebar-left-info">

                    <div class="user-box">
                        <div class="d-flex justify-content-center">
                            <img src="assets/images/users/240-240.jpg" alt="" class="img-fluid rounded-circle"> 
                        </div>
                        <div class="text-center text-white mt-2">
                            <h6> {{ username }} </h6>
                            <p class="text-muted m-0">Admin</p>
                        </div>
                    </div>   
                                        
                    
                  <side-bar-component/>
                   
                </div>
            </div>

            <!-- body content start-->
            <div :class="{'body-content':loggedIn,'bg-login' :!loggedIn }">
            <!-- <div class="bg-login"> -->
                <!-- header section start-->
               <header-component v-if="loggedIn" />
                <!-- header section end-->

                <div class="container-fluid">
                    <router-view @LoggedinAction="LoggedinAction"></router-view>
                    
                </div><!--end container-->

                <!--footer section start-->
                <footer class="footer" v-if="loggedIn">
                    2023 &copy; Ubaid Ullah
                </footer>
                <!--footer section end-->


              
            </div>
            <!--end body content-->
        </section>

</template>


<script>
import { RouterLink, RouterView } from "vue-router";

import headerComponent from './Components/layout/headerComponent.vue';
import sideBarComponent from './Components/layout/sideBarComponent.vue';


export default{

    components:{
        'header-component':headerComponent,
        'side-bar-component':sideBarComponent,
        'route-view':RouterView,
    },
    data(){
        return{
            loggedIn:User.loggedIn(),
            username: User.name()
        }
    },
    methods:{
        LoggedinAction(status){
            this.loggedIn = status.loggeding;
            // console.log(status);
        }
    },
      
}
</script>