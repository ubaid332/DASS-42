<template>
    <bread-crumb :btn_text="'Add Category'" @OpenModalAction="OpenModalACtion"/>
    <modal :title="modalTitle" v-if="showModal" @close="showModal = false" >
       <form @submit.prevent="addRecord">
       <div class="form-group">
        <label for="">Category Name</label>
        <input type="text" class="form-control" v-model="form.name" required>
       </div>
        <div style="display: flex;justify-content: end;">
          <button v-show="submitBtn" type="submit" class="btn btn-sm btn-info">Save</button>
          <button v-show="loadingBtn" disabled class="btn btn-sm btn-info"><i style="font-size:14px" class="fa fa-circle-o-notch fa-spin"></i>Loading...</button>
        </div>
       </form>     
  </modal>
</template>


<script>
import Breadcrumb from '../../Components/layout/Breadcrumb.vue';
import Modal from '../../Components/ModalComponent.vue';

export default{
    components:{
        'bread-crumb':Breadcrumb,Modal
    },
    data(){
        return {
            showModal:false,
            submitBtn:true,
            loadingBtn:false,
            // BearerToken:localStorage.getItem('token'),
            form:{
                name:null
            }
        }
    },
    methods:{
        closeModal(){},
        OpenModalACtion(){
            this.modalTitle= "Add New Category"
            // Notification.success();
            this.showModal=true;
            this.form.name=null;
        },
        addRecord(){
            //  const token ="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2ODQxNTU2MTEsImV4cCI6MTY4NDE1OTIxMSwibmJmIjoxNjg0MTU1NjExLCJqdGkiOiJXa21WUmt4MndCazhNUlZiIiwic3ViIjoiNiIsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.qzIVfixopL9iKxtHjalAK1VODvdti4iFxIMa1yj0Ir0"
            axios.post('/api/category',{
                headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
                 },
            } ,this.form)
            .then(response => {
           
          
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