<template>
  <div class="container" style="height: 100%; background-color: #aaa">
    <div class="row" style="height: 100%; background-image: url('http://ak4.picdn.net/shutterstock/videos/8962384/thumb/1.jpg'); background-position: center; background-repeat: no-repeat;">
      <div class="col col-lg-8 text-center">
        <!-- TODO -->
        <full-frame v-if="step==i" text="{user.email + " - " + mission.title}"></full-frame>

        <button type="button" class="btn btn-primary" @click="nextStep()">Siguiente</button>
      </div>
    </div>
  </div>
</template>

<script>
  import HalfFrame from './landing/HalfFrame.vue';
  import FullFrame from './landing/FullFrame.vue';

  export default {
    components: {
      'half-frame': HalfFrame
    },
    props: ['users'],
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
