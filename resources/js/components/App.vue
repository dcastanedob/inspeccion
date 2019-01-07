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
       <div class="navbar-container content">
         <div class="collapse navbar-collapse" id="navbar-mobile">
           <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Explore Modern...">
                </div>
              </li>
            </ul>
         </div>
       </div>
      </div>
    </nav>
    <!--<router-view></router-view>-->
  </div>
</template>

<script>

export default {
  name: 'app',
}

</script>

<style scoped>

.navbar-header{
  background: #656565;
}


</style>
