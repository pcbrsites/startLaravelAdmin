<template>
    <div class="card-body"  v-bind:class="skin">
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
 