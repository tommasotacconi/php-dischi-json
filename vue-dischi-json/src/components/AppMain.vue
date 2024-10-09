<script>
import Card from './Card.vue'
import { store } from '../data/store';

export default {
  data() {
    return {
      store,
    }
  },
  components: {
    Card,
  },
}
</script>

<template>
<main class="mt-3 p-1"> 
  <div class="container-md px-4">
    <div class="row row-cols-3 m-auto gx-5 gy-5" id="main-row">
      <div class="col" :class="{}" v-for="(disc, index) in store.discsList" :kye="index">
        <Card :disc="disc"/>
      </div>
    </div>
  </div>
</main>
</template>

<style scoped>
#main-row {
  max-width: 1000px;
}
</style>