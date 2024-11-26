<template>
  <main>
    <TopBar :language="language" @setLanguage="setLanguage" />
    <MovieList :moviesJson="moviesJson" @changeMoviesPage="changeMoviesPage" @selectMovie="selectMovie"/>
  </main>
</template>

<script>
import MovieService from '@/modules/Services/MovieService';
import MovieList from '../modules/NoAuthClient/Components/MovieList.vue';
import TopBar from '../modules/BaseLayout/TopBar.vue';

export default {
  name: 'HomeView',
  components: {
    MovieList,
    TopBar
  },
  data() {
      return {
        moviesJson: {},
        language: 'en',
        service: new MovieService(this.language)
      };
  },
  methods: {
    async fetchPopularMovies() {
      try {
        this.moviesJson = await this.service.getPopularMovies(this.language);
      } catch (error) {
        console.error('Error fetching movies:', error);
      }
    },
    async changeMoviesPage(fullUrl) {
      try {
        this.moviesJson = await this.service.getPage(fullUrl, this.language);
      } catch (error) {
        console.error('Error fetching movies:', error);
      }
    },
    setLanguage(language) {
      this.language = language;
      this.service.setLanguage(language);
    },
    selectMovie(id) {
      this.$router.push({ name: 'MovieDetailView', params: { id: id }, query: { language: this.language }});
    }
  },
  async mounted() {
    await this.fetchPopularMovies();
  },
  watch: {
    language: {
      handler() {
        this.fetchPopularMovies();
      },
      immediate: true 
    }
  }
}
</script>