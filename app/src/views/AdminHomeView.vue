<template>
	<main>
		<AdminTopBar />
		<AdminMovieList :moviesJson="moviesJson" @changeAdminMoviesPage="changeAdminMoviesPage" @editMovie="editMovie" />
	</main>
</template>

<script>
import MovieService from '@/modules/Services/MovieService';
import AdminMovieList from '../modules/AuthClient/Components/AdminMovieList.vue';
import AdminTopBar from '../modules/BaseLayout/AdminTopBar.vue';

export default {
	name: 'AdminHomeView',
	components: {
		AdminMovieList,
		AdminTopBar
	},
	data() {
		return {
			moviesJson: {},
			service: new MovieService()
		};
	},
	methods: {
		async fetchAllMovies() {
			try {
				const res = await this.service.getAllMovies();
				this.moviesJson = res;
			} catch (error) {
				console.error('Error fetching movies:', error);
			}
		},
		async changeAdminMoviesPage(fullUrl) {
			try {
				this.moviesJson = await this.service.getAdminPage(fullUrl);
			} catch (error) {
				console.error('Error fetching movies:', error);
			}
		},
		setLanguage(language) {
			this.language = language;
			this.service.setLanguage(language);
		},
		editMovie(id) {
			this.$router.push({ name: 'MovieEditView', params: { id: id } });
		}
	},
	async mounted() {
		await this.fetchAllMovies();
	},
}
</script>