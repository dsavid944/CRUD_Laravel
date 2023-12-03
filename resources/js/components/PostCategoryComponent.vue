<template>
    <div class="post-category-component">
      <h2>Publicaciones de la Categoría: {{ categoryName }}</h2>
      <ul v-if="posts.length">
        <li v-for="post in posts" :key="post.id">
          <h3>{{ post.title }}</h3>
          <p>{{ post.content }}</p>
        </li>
      </ul>
      <p v-else>No hay publicaciones en esta categoría.</p>
    </div>
  </template>
  <script>
  import axios from 'axios';

  export default {
    name: 'PostCategoryComponent',
    props: {
      categoryId: {
        type: Number,
        required: true
      }
    },
    data() {
      return {
        posts: [],
        categoryName: ''
      };
    },
    created() {
      this.fetchPosts();
    },
    methods: {
      fetchPosts() {
        axios.get(`/api/categories/${this.categoryId}/posts`)
          .then(response => {
            this.posts = response.data.posts;
            this.categoryName = response.data.categoryName;
          })
          .catch(error => {
            console.error('Error al obtener las publicaciones:', error);
            // Manejar el error como consideres apropiado
          });
      }
    }
  };
  </script>
<style scoped>
.post-category-component {
  /* Tus estilos aquí */
}
</style>
