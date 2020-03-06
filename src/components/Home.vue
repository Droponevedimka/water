<template lang="pug">
    section(class="wrapper home")
      div(class="home__block")
        div(class="home__block-txt") Доставка воды <br> в Москве
          p(class="home__block-desc") чистая природная питьевая вода         
        mainform
      div(id="modal" class="modal")
        div(class="modal__block")
          div(class="modal__block-txt") Ваша заявка принята!
          img(class="modal__block-img" src="/assets/img/loader.gif")
          
</template>


<script>
import MainForm from "./MainForm.vue"

export default {
  name: 'Home',
  components: {
    'mainform': MainForm 
  },
  beforeMount(){ 
     
     
  },
  computed: {    
   
  },
  methods:{    
    
  }
}

</script>
