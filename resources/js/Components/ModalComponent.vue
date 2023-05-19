<template>
    <div class="modal-mask" >
      
      <div class="modal-wrapper">
        <div class="modal-container" :class="size">
          
          <div class="modal-header">
            <label>{{title}}</label>
            <button class="modal-close-btn" @click="$emit('close')">&times;</button>
          </div>
          <div class="modal-body">
            <slot></slot>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props:['title'],
    // props: {
    //   title: String,
    //   required: true,
    //   size: {
    //     type: String,
    //     default: "medium",
    //   },
    // },
  };
  </script>
<style scoped>
.modal-mask {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9998;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5) !important;
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

.modal-container {
  position: relative;
  z-index: 9999;
  max-width: 500px;
  width: 100%;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
  animation: modal-show 0.3s ease-in-out;
}

@keyframes modal-show {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid #ccc;
  
}

.modal-header h3 {
  margin: 0;
}
.modal-header::before{
    content: unset;
}
.modal-header::after{
    content: unset;
}
.modal-close-btn {
  border: none;
  background-color: transparent;
  font-size: 24px;
  cursor: pointer;
}

.modal-body {
  padding: 20px;
}

</style>  