<template>
    
</template>


<script>

export default{

created(){

    AppStorage.clear()
    Toast.fire({
        icon: 'success',
        title: 'Logout successfully'
      })

    this.$router.push({ name: 'Login' })
    this.$emit("LoggedinAction",{
        loggeding:false

    });

  }  

}  

</script>

<style>

</style>