<template>
  <div class="movie-list">
    <div v-for="movie in moviesJson.data" :key="movie.id" class="movie-item" @click="selectMovie(movie.id)">
      <h2>{{ movie.title }}</h2>
      <p>{{ movie.year }} - Rating: {{ movie.rating }}</p>
      <p>{{ movie.genre }}</p>
      <p>{{ movie.short_description }}</p>
    </div>
    <div class="pagination">
      <button @click="changeMoviesPage(moviesJson.prev_page_url)" :disabled="!moviesJson.prev_page_url">Previous</button>
      <button @click="changeMoviesPage(moviesJson.next_page_url)" :disabled="!moviesJson.next_page_url">Next</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'MovieList',
  emits: ['changeMoviesPage', 'selectMovie'],
  props: {
    moviesJson: {
      type: Object,
      default: {
        current_page: 1,
        data: [
          {
            id: 1,
            title: 'DEFAULT MOVIE TITLE',
            year: 2021,
            rating: 5,
            genre: 'sci-fi',
            director_id: 11,
            short_description: 'Set in a distant future, it follows the journey of Paul Atreides, a young nobleman whose family gains control of the desert planet Arrakis. As Paul navigates the complex politics and power struggles of Arrakis, he discovers his own destiny intertwined with the planet\'s fate, facing epic battles and mystical forces along the way.'
          }
        ],
        prev_page_url: null,
        next_page_url: null,
      },
    },
  },
  methods: {
    changeMoviesPage(url) {
      if (url) {
        this.$emit('changeMoviesPage', url);
      }
    },
    selectMovie(id) {
      this.$emit('selectMovie', id);
    }
  },
};
</script>

<style scoped>
.movie-list {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.movie-item {
  border: 0.1rem solid #ccc;
  padding: 1rem;
  text-align: center;
  cursor: pointer;
}

.movie-item:hover {
  background-color: #438486;
}

.pagination {
  display: flex;
  justify-content: space-between;
  margin-top: 1rem;
}

button {
  padding: 0.5rem 1rem;
  border: none;
  background-color: #007bff;
  color: white;
  cursor: pointer;
}

button:disabled {
  background-color: #ccc;
  cursor: not-allowed;
}
</style>
