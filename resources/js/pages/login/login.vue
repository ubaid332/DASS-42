<template>
     <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <div class="card-title text-center">
                                                
                                                <h5 class="mt-3"><b>Welcome to DASS-42 APP</b></h5>
                                                <p>Developed By: Ubaid Ullah</p>
                                            </div>  
                                            <form @submit.prevent="Login" class="form mt-5 contact-form" action="index.html">
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" type="email" placeholder="Email" required="required" v-model="form.email">
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="col-sm-12">
                                                        <input class="form-control form-control-line" type="password" placeholder="Password" required="required" v-model="form.password">
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <div class="col-12">
                                                        <label class="cr-styled">
                                                            <input type="checkbox" checked>
                                                            <i class="fa"></i> 
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div> -->
                                                
                                                <div class="form-group">
                                                    <div class="col-sm-12 mt-4">
                                                        <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                                    </div>
                                                </div>

                                                <!-- <div class="form-group">
                                                    <div class="col-sm-12 mt-4 text-center">
                                                        <a href="recoverpw.html"><i class="fa fa-lock m-r-5"></i> Forgot password?</a>
                                                    </div>
                                                </div> -->

                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</template>
<script>

export default {
    data(){
        return{
           form :{
            email:null,
            password:null
           },
        }
    },
    methods:{
        Login(){
            axios.post('/api/auth/login', this.form)
            .then(response => {
            if(response.data.access_token){
                // console.log(response.data);
                Toast.fire({
                icon: "success",
                title: "Signed in successfully",
            }); 
            this.$router.push({ name: "Dashboard" });
            User.responseAfterLogin(response); 
            this.$emit("LoggedinAction",{
                    loggeding:true
              });
            }else{
                Toast.fire({
                icon: "warning",
                title: "Invalid Email or Password",
             });
            }
          
            })
           .catch(error => {
                console.error(error);
                Toast.fire({
                icon: "warning",
                title: "Invalid Email or Password",
            });
            });
        }
    }
}
</script>