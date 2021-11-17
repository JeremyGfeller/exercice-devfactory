<template>

  <div class="row mt-4">

    <div class="col-sm-4 mb-4">
      <div class="card">
        <h5 class="card-header">Level 1</h5>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item" v-for="fParent in getParents" :key="fParent.id" v-on:click="searchChilds(0, fParent.id)"> 
              {{ fParent.name }}
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mb-4" v-show="firstChild">
      <div class="card">
        <h5 class="card-header">Level 2</h5>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item" v-for="fChild in firstChilds" :key="fChild.id" v-on:click="searchChilds(1, fChild.id)"> 
              {{ fChild.name }}
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-sm-4 mb-4" v-show="secondChild">
      <div class="card">
        <h5 class="card-header">Level 3</h5>
        <div class="card-body">
          <ul class="list-group list-group-flush">
            <li class="list-group-item" v-for="sChild in secondChilds" :key="sChild.id"> 
              {{ sChild.name }}
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>

</template>

<script>

export default {
  data() {
    return {
      categories: [],
      firstChilds: [],
      secondChilds: [],
      firstChild: false,
      secondChild: false
    }
  },
  computed: {
    // Filter the parents of the childrens 
    getParents() {
      var arr = [];
      this.categories.forEach((value, index) => {
        if(value.parent_id === null) arr.push(value);
      });
      return arr;
    }
  },
  mounted() {
    // Initialize data when the page is loading 
    this.getCategories();
  },
  methods : {
    // Get all datas from the DB
    getCategories() {
      axios.get('/api/categories').then((response) => {
        this.categories = response.data.data
      }).catch(function (error) {
        console.log(error);
      })
    },
    // Searching childs with the id of the parents 
    searchChilds: function(chk, id) {
      var arr = [];
      this.categories.forEach((value, index) => {
        if(value.parent_id === id) arr.push(value);
      });

      // Check if the function come from the parents or the first childs
      if(chk == 0) {
        this.firstChilds = arr;
        this.firstChild = true;
        this.secondChild = false;
      } else {
        this.secondChilds = arr;
        this.secondChild = true;
      }
    },
  }
}

</script>
