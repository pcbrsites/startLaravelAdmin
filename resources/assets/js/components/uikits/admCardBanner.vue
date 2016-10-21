<template>
    <a class="card card-banner"  v-bind:class="skin">
        <div class="card-body">
            <i class="icon fa  fa-4x"  v-bind:class="icon"></i> 
            <div class="content">
                <slot></slot>
            </div>
        </div>
    </a>  
</template>
<script>  
     export default {
      props:[
          'skin',
          'icon'
      ]
    }
</script>
 