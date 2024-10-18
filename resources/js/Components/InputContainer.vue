<template>
     <div class="p-2">
        <label :for="id" class="form-label">{{ titulo }}</label>
        <slot></slot>
        <div id="emailHelp" class="form-text">{{ help }}</div>
    </div>
</template>

<script>
    export default {
        props: ['titulo', 'id', 'help']
    }
</script>