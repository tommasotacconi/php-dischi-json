<script>

export default {
  data() {
    return {

    }
  },
  props: {
    disc: {
      type: Object,
      required: true
    }
  }
}
</script>

<template>
  <div class="card disc-card col-10 m-auto border-dark-subtle">
    <img :src="disc.poster" class="card-img-top w-75 m-auto mt-3" alt="disc image">
    <div class="card-body">
      <h5 class="card-title text-center">{{ disc.title }}</h5>
      <p class="card-text text-center">
        <span class="author">{{ disc.author }}</span><br>
        <span class="release-date">{{ disc.year }}</span>
      </p>
    </div>
  </div>
</template>

<style scoped>


.author {
  font-size: 0.8rem;
  color: #aaa;
}

.card.disc-card {
  min-height: 330px;
  border-color: #aaa;
  background-color: var(--bs-dark-bg-subtle);

  img {
    border-radius: 0;
  }

  &&:hover {
    background: var(--bs-light-bg-subtle)
  }
}

</style>