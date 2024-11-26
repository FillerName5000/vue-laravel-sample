<template>
  <div id="container">
      <h1>Login</h1>
      <form @submit.prevent="login">
          <div>
              <label for="email">Email</label>
              <input
                  type="email"
                  id="email"
                  v-model="email"
                  required
              />
          </div>
          <div>
              <label for="password">Password</label>
              <input
                  type="password"
                  id="password"
                  v-model="password"
                  required
              />
          </div>
          <div v-if="message" :class="{'error': !isSuccess, 'success': isSuccess}">{{ message }}</div>
          <button type="submit">Login</button>
      </form>
  </div>
</template>
  
<script>
export default {
    name: 'LoginView',
    data() {
        return {
            email: '',
            password: '',
            message: null,
            isSuccess: false,
            BASE_URL: 'https://api.test/api'
        };
    },
    methods: {
        async login() {
            const response = await fetch(`${this.BASE_URL}/login`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',                     
                    'credentials': 'include',                                      
                },
                credentials: 'include',
                body: JSON.stringify({
                    email: this.email,
                    password: this.password,
                }),
            });
            const data = await response.json();
            if (response.status === 200) {
                this.isSuccess = true;
                this.message = "Login successful";
                this.$router.push({ name: 'AdminHomeView' });
            } else {
                this.isSuccess = false;
                this.message = data.error || "An error occurred";
            }
        },
    },
}
</script>

<style scoped>
.error {
  color: red;
  font-weight: bold;
}
.success {
  color: green;
  font-weight: bold;
}
label {
  display: block;
  margin-bottom: 0.5rem;
}
input {
  padding: 0.5rem;
  margin-bottom: 1rem;
  border-radius: 0.25rem;
  border: 1px solid #ccc;
}
button {
  padding: 0.75rem 1.5rem;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
}
button:hover {
  background-color: #0056b3;
}

div#container {
  width: 60%; 
  margin: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
</style>

<!--- admin@imdc.com  & "pwd" -->