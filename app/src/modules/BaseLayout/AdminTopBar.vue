<template>
    <div class="admin-top-bar">
      <button class="create-movie-button" @click="goToCreateMovie">Create Movie</button>
    </div>
  </template>
  
  <script>
  export default {
    name: 'AdminTopBar',
    methods: {
      goToCreateMovie() {
        this.$router.push({ name: 'AdminCreateMovieView' });
      }
    }
  };
  </script>
  
  <style scoped>

.admin-top-bar {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  padding: 1rem;
  margin-bottom: 1rem;
}

.create-movie-button {
  flex: 1;
  padding: 0.5rem 1rem;
  border: none;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}
  </style>
  