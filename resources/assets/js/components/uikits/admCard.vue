<template>
    <div class="card" v-bind:class="skin">        
        <slot></slot>
    </div>
</template>
<script>  
     export default {
      props:[
          'skin'
      ]
    }
</script>
 