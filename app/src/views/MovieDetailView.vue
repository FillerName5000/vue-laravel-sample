<template>
    <div v-if="movie" class="movie-detail">
      <button @click="goBack">Back to List</button>
      <h1>{{ movie.title }}</h1>
      <p><strong>Year:</strong> {{ movie.year }}</p>
      <p><strong>Rating:</strong> {{ movie.rating }}</p>
      <p><strong>Genre:</strong> {{ movie.genre }}</p>
      <p><strong>Description:</strong> {{ movie.short_description }}</p>
    </div>
    <div v-else>
      <p>Loading...</p>
    </div>
</template>
  
  <script>
  import MovieService from '@/modules/Services/MovieService';
  
  export default {
    name: 'MovieDetailView',
    data() {
        return {
            movie: {
                id: 1,
                title: 'DEFAULT MOVIE TITLE',
                year: 2021,
                rating: 5,
                genre: 'sci-fi',
                director_id: 11,
                short_description: 'Set in a distant future, it follows the journey of Paul Atreides, a young nobleman whose family gains control of the desert planet Arrakis. As Paul navigates the complex politics and power struggles of Arrakis, he discovers his own destiny intertwined with the planet\'s fate, facing epic battles and mystical forces along the way.'
            },
            language: this.$route.query.language || 'en',
            service: new MovieService(this.language)
        };
    },
    methods: {
        async fetchMovieDetails(id) {
            try {
                const movieJson = await this.service.getMovieDetails(id, this.language);
                this.movie = movieJson.data[0];
            } catch (error) {
                console.error('Error fetching movie details:', error);
            }
        },
        goBack() {
            this.$router.push({name: 'Home'});
        }
    },
    async mounted() {
        await this.fetchMovieDetails(this.$route.params.id, this.language);
    }
};
</script>
  
  <style scoped>
  .movie-detail {
    border: 0.1rem solid #ccc;
    padding: 1rem;
  }
  
  button {
    padding: 0.5rem 1rem;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    margin-bottom: 1rem;
  }
  </style>
  