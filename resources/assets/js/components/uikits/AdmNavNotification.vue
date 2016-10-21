<template>
    <li class="dropdown notification" v-bind:class="skin">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i v-bind:class="icon" aria-hidden="true"></i></div>
            <div class="title">{{title}}</div>
            <div class="count">{{count}}</div>
        </a>
        <div class="dropdown-menu">
            <slot></slot>  
        </div>
    </li>
</template>
<script>
    export default {
        props: [
            'icon',
            'skin',
            'title',
            'count'
        ]
    }
</script>
