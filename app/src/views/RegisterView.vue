<template>
  <div class="register">
      <h1>Register</h1>
      <form @submit.prevent="register">
          <div>
              <label for="name">Name</label>
              <input
                  type="text"
                  id="name"
                  v-model="name"
                  placeholder="test" 
                  required
              />
          </div>
          <div>
              <label for="email">Email</label>
              <input
                  type="email"
                  id="email"
                  v-model="email"
                  placeholder="test@hotmail.com"
                  required
              />
          </div>
          <div>
              <label for="password">Password</label>
              <input
                  type="password"
                  id="password"
                  v-model="password"
                  placeholder="1"
                  required
              />
          </div>
          <div>
              <label for="password_confirmation">Confirm Password</label>
              <input
                  type="password"
                  id="password_confirmation"
                  v-model="password_confirmation"
                  placeholder="1"
                  required
              />
          </div>

          <div v-if="message" :class="{'error': !isSuccess, 'success': isSuccess}">{{ message }}</div>
          <button type="submit">Register</button>
      </form>
  </div>
</template>

<script>
export default {
  name: 'RegisterView',
  data() {
      return {
          name: '',
          email: '',
          password: '',
          password_confirmation: '',
          message: null,
          BASE_URL: 'https://api.test/api'
      };
  },
  methods: {
      async register() {         
        if (this.password !== this.password_confirmation) {
            this.message = "Passwords do not match";
            return;
        }
        const response = await fetch(
            `${this.BASE_URL}/register`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({
                    name: this.name,
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation,
                }),
            });
        const data = await response.json();
        if (response.ok) {
            this.isSuccess = true;
            this.message = "Login successful";
        } else {
            this.isSuccess = false;
            this.message = data.error || "An error occurred";
        }
      },
  },
};
</script>

<style scoped>
.message {
  color: white;
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

div.register {
  width: 60%;
  margin: auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}
</style>
