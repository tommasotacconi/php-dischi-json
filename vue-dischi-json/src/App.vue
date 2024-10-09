<script>
import AppHeader from './components/AppHeader.vue';
import AppMain from './components/AppMain.vue';
import axios from 'axios';
import { store } from './data/store.js';

export default {
  data() {
    return {
      store,
    }
  },
  methods: {
    getLibraryDiscs() {
      axios.get('http://localhost/es-php/es_43-php-dischi-json/')
        .then(response => {
          // handle success
          console.log(response);
          this.store.discsList = response.data;
        })
        .catch(error => {
          if (error.response) {
            // The server responded with a status code outside the 2xx range
            console.log('Error response:', error.response);
          } else if (error.request) {
            // The request was made but no response was received
            console.log('Error request:', error.request);
          } else {
            // Something happened in setting up the request that triggered an error
            console.log('Error message:', error.message);
          }
        });
    },
  },
  components: {
    AppHeader,
    AppMain
  },
  created() {
    this.getLibraryDiscs(); 
  }
}
</script>

<template>
  <AppHeader />
  <AppMain />
</template>

<style lang="scss">
@use './style/general.scss';
@use 'bootstrap'
</style>
