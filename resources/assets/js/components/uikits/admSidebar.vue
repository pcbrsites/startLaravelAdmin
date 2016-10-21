<template>
    <aside id="sidebar" class="app-sidebar">
        <slot></slot>        
    </aside>        
</template>
<script>  
     export default {
      props:[
          'skin'
      ]
    }
</script>
 