<template>
  <div>
    <p>{{text}}</p>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['text'],
    }
</script>
