<template lang="html">   
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo-default-119x34.png" alt="" width="119" height="34" srcset="images/logo-default-182x57.png 2x"/></a>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#about">About</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#features">Features</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#products">Products</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#services">Services</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#testimonials">Testimonials</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                  <!-- Callback link-->
                  <div class="rd-navbar-call">
                    <button class="icon icon-md mdi mdi-phone" data-toggle="modal" data-target="#call-form"></button>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
</template>

<script>
import Home from "../Home.vue"


export default {
  name: 'Main',
  components: {
    'Home': Home 
  },
  beforeMount(){ 
     
     
  },
  computed: {    
   
  },
  methods:{    
    
  }
}

</script>
