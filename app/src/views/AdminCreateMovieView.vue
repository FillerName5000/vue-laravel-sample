<template>
    <div class="admin-create-movie-view">
        <h1>Create Movie</h1>
        <form @submit.prevent="createMovie">
            <label for="title">Title:</label>
            <input type="text" id="title" v-model="formData.title" required>

            <label for="year">Year:</label>
            <input type="number" id="year" v-model="formData.year" min="1900" max="2050" required>

            <label for="rating">Rating:</label>
            <input type="number" id="rating" v-model="formData.rating" min="0" max="5" step="0.1" required>

            <label for="genre">Genre:</label>
            <input type="text" id="genre" v-model="formData.genre" required>

            <label for="director_id">Director ID:</label>
            <input type="number" id="director_id" v-model="formData.director_id" min="0" required>

            <label for="poster">Poster link:</label>
            <input type="text" id="poster" v-model="formData.poster" required>

            <div class="language-fields">
                <div class="language-field">
                    <label for="en_code">Language Code (EN):</label>
                    <input type="text" id="en_code" v-model="formData.movie_language_all[0].code" required>

                    <label for="en_description">Short Description (EN):</label>
                    <input type="text" id="en_description" v-model="formData.movie_language_all[0].short_description" required>
                </div>
                <div class="language-field">
                    <label for="nl_code">Language Code (NL):</label>
                    <input type="text" id="nl_code" v-model="formData.movie_language_all[1].code" required>

                    <label for="nl_description">Short Description (NL):</label>
                    <input type="text" id="nl_description" v-model="formData.movie_language_all[1].short_description" required>
                </div>
            </div>

            <button type="submit">Create</button>
            <div v-if="successMessage" class="success-message">{{ successMessage }}</div>
            <div v-if="errorMessages.length" class="error-message">
                <ul>
                    <li v-for="(message, index) in errorMessages" :key="index">{{ message }}</li>
                </ul>
            </div>
        </form>
    </div>
</template>

<script>
import MovieService from '@/modules/Services/MovieService';

export default {
    name: 'AdminCreateMovieView',
    data() {
        return {
            service: new MovieService(),
            formData: {
                title: '',
                year: null,
                rating: null,
                genre: '',
                director_id: null,
                poster: '',
                movie_language_all: [
                    { code: 'en', short_description: '' },
                    { code: 'nl', short_description: '' }
                ]
            },
            errorMessages: [],
            successMessage: ''
        };
    },
    methods: {
        async createMovie() {
            try {
                const response = await this.service.createMovie(this.formData);
                if (response.errors) {
                    this.errorMessages = [];
                    this.successMessage = '';
                    const errors = response.errors;
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            this.errorMessages.push(...errors[key]);
                        }
                    }
                } else {
                    this.errorMessages = [];
                    this.successMessage = 'Movie created successfully!';
                }
            } catch (error) {
                this.errorMessages = ['An unknown error occurred.'];
                this.successMessage = '';
            }
        }
    }
};
</script>

<style scoped>
.admin-create-movie-view {
    width: 100%;
    max-width: 50rem;
    margin: 0 auto;
    padding: 2rem;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 0.5rem;
}

input {
    margin-bottom: 1rem;
}

.language-fields {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.language-field {
    display: flex;
    flex-direction: column;
}

button {
    padding: 0.5rem 1rem;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.success-message {
    color: green;
    margin-top: 1rem;
}

.error-message {
    color: red;
    margin-top: 1rem;
}

.error-message ul {
    padding: 0;
    list-style-type: none;
}

.error-message li {
    margin-bottom: 0.5rem;
}
</style>
