<template>
    <div class="card-header"  v-bind:class="skin">
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
 