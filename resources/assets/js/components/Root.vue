<template>
  <div class="container" style="height: 100%">
    <div class="row justify-content-md-center align-items-center" style="height: 100%">
      <div class="col col-lg-2">
        <button type="button" class="btn btn-primary" @click="nextStep()">Empezar</button>
        <start v-if="step==0"></start>
        <first-step v-if="step==1"></first-step>
      </div>
    </div>
  </div>
</template>

<script>
  import Start from './landing/Start.vue';
  import FirstStep from './landing/FirstStep.vue';

  export default {
    components: {
      'start': Start,
      'first-step': FirstStep,
    },
    data () {
      return {
        step: 0,
      }
    },
    mounted() {
      console.log('Component mounted.')
    },
    methods: {
      nextStep(){
        console.log("Next step");
        this.step += 1;
      }
    }
  }
</script>
