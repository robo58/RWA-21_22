<template>
  <v-container>
    <v-row>
      <v-col>
        <v-text-field
            label="Naslov"
          v-model="newPost.title"
        >

        </v-text-field>
        </v-col>
      </v-row>
    <v-row>
      <v-col>

      <v-text-field
            label="Opis"
            v-model="newPost.description"
        >

        </v-text-field>
    </v-col>
    </v-row>
    <v-row>
      <v-col>
        <v-select
            v-model="newPost.category_id"
            :items="categories"
            item-value="id"
            item-text="title"
        >
        </v-select>
    </v-col>
    </v-row>
    <v-row>
      <v-col>
        <v-btn @click.prevent="addPost">
          Dodaj
        </v-btn>
      </v-col>
    </v-row>

    <v-row>
      <v-col>
        <v-data-table
            :headers="headers"
            :items="posts"
            :items-per-page="5"
            class="elevation-1"
        ></v-data-table>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>

export default {
  name: "Posts",

  created() {

  },

  mounted() {
    this.getCategories();
    this.getPosts()
  },

  methods: {
    getCategories(){
      this.$axios.get('/api/categories').then((response)=>{
        this.categories=response.data;
      });
    },
    getPosts(){
      this.$axios.get('/api/posts').then((response)=>{
        this.posts=response.data;
      });
    },
    addPost(){
      this.$axios.post('/api/posts', this.newPost).then((response)=>{
        this.newPost = {};

        this.posts.push(response.data);
      });
    },
    editPost(post){
      this.newPost = post;
    }
  },

  data(){
    return {
      headers: [
        {
          text: '#',
          align: 'start',
          sortable: true,
          value: 'id',
        },
        {
          text: 'Naslov',
          align: 'start',
          sortable: true,
          value: 'title',
        },
        {
          text: 'Opis',
          align: 'start',
          sortable: false,
          value: 'description',
        },
        {
          text: 'Kategorija',
          align: 'start',
          sortable: true,
          value: 'category.title',
        },
      ],
      posts: [],
      categories: [],
      newPost: {}
    }
  }
}
</script>

<style scoped>

</style>