<template>
  <p>Test</p>
</template>

<script>

export default {
  data() {
    return {
      categories: [],
    }
  },
  mounted() {
    this.getCategories();
  },
  methods : {
    getCategories() {
      axios.get('/api/categories').then((response) => {
        this.categories = response.data.data
      }).catch(function (error) {
        console.log(error);
      })
    }
  }
}

</script>
