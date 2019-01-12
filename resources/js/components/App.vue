<template>
  <div id="app">
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-shadow navbar-semi-dark">
      <div class="navbar-wrapper">
        <div class="navbar-header expanded">
         <ul class="nav navbar-nav flex-row position-relative">
           <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="ft-menu font-large-1"></i></a></li>
           <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="modern admin logo" src="images/logo.png">
               <h3 class="brand-text">Inspección</h3></a></li>
           <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
           <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
         </ul>
       </div>
      </div>
    </nav>
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow expanded" data-scroll-to-active="true">
      <div class="main-menu-content ps-container ps-theme-light ps-active-y">
        <ul class="navigation navigation-main" data-menu="menu-navigation">
          <li class="nav-item"><a href="#"><i class="la la-home"></i><span class="menu-title" >Escritorio</span></a></li>
          <li class="nav-item has-sub" :class="{ open: dropdowns.administracion }" @click="toggle('administracion')"><a href="#"><i class="la la-bank"></i><span class="menu-title" >Administración</span></a>
            <ul class="menu-content" style="">
              <li class="is-shown"><a href="#" class="menu-item" >Empresas</a></li>
              <li class="is-shown"><a href="#" class="menu-item" >Departamentos</a></li>
              <li class="is-shown"><a href="#" class="menu-item" >Áreas de trabajo</a></li>
              <li class="is-shown"><a href="#" class="menu-item" >Proyectos</a></li>
              <li class="is-shown"><a href="#" class="menu-item" >Usuarios</a></li>
            </ul>
          </li>
          <li class="nav-item has-sub" :class="{ open: dropdowns.equipos }" @click="toggle('equipos')"><a href="#"><i class="la la-cubes"></i><span class="menu-title" >Equipos / Productos</span></a>
            <ul class="menu-content" style="">
              <li class="is-shown"><a href="#" class="menu-item" >Consultar</a></li>
              <li class="is-shown"><a href="#" class="menu-item" >Registro</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--<router-view></router-view>-->
  </div>
</template>

<script>

export default {
  name: 'app',
  data () {
    return {
      dropdowns:{
        administracion:false,
        equipos:false,
      }
    }
  },
  //COMPONENT METHODS
  methods:{

    toggle(menu){

      let _this = this

      if(_this.dropdowns[menu]){
        _this.dropdowns[menu] = false;
      }else{
        _this.dropdowns[menu] = true;
      }


    }
  },
}

</script>

<style scoped>

.navbar-header{
  background: #656565;

}

.main-menu.menu-dark .navigation > li.open > a{
  border-right: 4px solid #FFE529;
}


</style>
