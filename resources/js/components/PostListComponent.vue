<template>
    <div class="post-list">
      <div v-for="post in posts" :key="post.id" class="post-item">
        <h3>{{ post.title }}</h3>
        <p>{{ post.content }}</p>
      </div>
    </div>
</template>
<script>
export default {
  name: 'PostListComponent',
  props: {
    posts: Array
  },
  data() {
    return {

    };
  },

};
</script>

