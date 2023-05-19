<template>
    <ul class="breadcrumb">
      <li><Button class="OpenModalBtn" @click="$emit('OpenModalAction')"><span class="mdi mdi-plus-circle"></span>{{ btn_text }}</Button></li>
      <li v-for="(route, index) in breadcrumbRoutes" :key="route.path">
        <router-link :to="route.path"><h3>{{ routeName(route) }}</h3></router-link>
        <span v-if="index < breadcrumbRoutes.length - 1" class="separator">/</span>
      </li>
    </ul>
  </template>
  
  <script>
  export default {
    props:['btn_text'],
    computed: {
      breadcrumbRoutes() {
        return this.$route.matched.filter(route => route.name);
      }
    },
    methods: {
      routeName(route) {
        return route.meta && route.meta.breadcrumbName ? route.meta.breadcrumbName : route.name;
      }
    }
  };
  </script>
  
  <style>
  
  .breadcrumb {
    list-style-type: none;
    padding: 0;
    margin: 20px 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
  }
  
  .separator {
    margin: 0 5px;
    color: gray;
  }
  
  .OpenModalBtn{
        cursor: pointer;
        background-color: green;
        color: #fff;
        border-radius: 5px;
        border:1px solid green;
        padding: 5px 10px;
  }
  </style>
  