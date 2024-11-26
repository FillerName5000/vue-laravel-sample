const BASE_URL = 'https://api.test/api'; // laravel uses [folder].test for urls

export default class MovieService {
    async getPopularMovies(language = 'en') {
        const url = `${BASE_URL}/movies/popular?page=${1}&language=${language}`;
        const response = await fetch(url);
        return response.json();
    }

    async getPage(fullUrl, language) {
        const languageQueryParam = language ? `&language=${language}` : '';
        const urlWithLanguage = `${fullUrl}${languageQueryParam}`;
        const response = await fetch(urlWithLanguage);
        return response.json();
    }

    async getMovieDetails(id, language = "en") {
        const url = `${BASE_URL}/movies/${id}?language=${language}`;
        const response = await fetch(url);
        return response.json();
    }

    async getAllMovies() {
        const url = `${BASE_URL}/admin/movies`;
        const response = await fetch(url, {
            method: 'GET',
            headers: {             
                'Content-Type': 'application/json',
                'Accept': 'application/json',                     
                'credentials': 'include',    
            },
            credentials: 'include'}
        );
        const res = response.json();
        return res;
    }

    async getAdminPage(fullUrl) {
        const response = await fetch(fullUrl, {
            method: 'GET',
            headers: {             
                'Content-Type': 'application/json',
                'Accept': 'application/json',                     
                'credentials': 'include',    
            },
            credentials: 'include'}
        );
        return response.json();
    }

    async createMovie(data) {
        const url = `${BASE_URL}/admin/movies`;
        const response = await fetch(url, {
            method: 'POST',
            headers: {             
                'Content-Type': 'application/json',
                'Accept': 'application/json',                     
                'credentials': 'include',    
            },
            credentials: 'include',
            body: JSON.stringify(data)
        });
        return response.json();
    }
}
