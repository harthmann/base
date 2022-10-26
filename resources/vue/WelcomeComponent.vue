<template>
  <div>
    <h1>Welcome</h1>
    <v-btn color="primary" class="my-2">Button</v-btn>
    <v-alert dismissible type="success">
      Vuetify installed successfully
    </v-alert>
    <v-autocomplete
      :search-input.sync="search"
      label="Nome da post"
      :items="posts"
      item-text="title"
      item-value="id"
      return-object
      v-model="post"
    ></v-autocomplete>
  </div>
</template>

<script>
  export default{
    data() {
      return {
        posts: [
        {
                "id": 1,
                "title": "Post 1"
              }
        ],
        post: {
                "id": 1,
                "title": "Post 1"
              },
        search: null
      }
    },
    watch: {
      search (val) {
        val && val !== this.select && this.getPosts(val)
      },
    },
    methods:{
      async getPosts() {
        let results = await axios.get('http://localhost:3001/posts');
        this.posts = results.data;
      }
    }
  }
</script>