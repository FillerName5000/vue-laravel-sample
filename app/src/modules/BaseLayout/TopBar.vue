<template>
  <header class="top-bar">
    <img src="@/assets/images/imdc-logo.png" alt="Logo" class="logo">
    <input type="text" placeholder="Search..." class="search-bar">
    <div class="language-toggle">
      <a href="#" @click.prevent="setLanguage('en')" :class="{ active: language === 'en' }">EN</a>
      <a href="#" @click.prevent="setLanguage('nl')" :class="{ active: language === 'nl' }">NL</a>
    </div>
    <img src="@/assets/images/login-icon.png" alt="Login" class="login-icon" @click="goToLogin">
    <img src="@/assets/images/register-icon.png" alt="Register" class="register-icon" @click="goToRegister">
  </header>
</template>

<script>
export default {
  props: {
    language: {
      type: String,
      default: 'en'
    }
  },
  emits: ['setLanguage'],
  methods: {
    setLanguage(language) {
      this.$emit('setLanguage', language);
    },
    goToLogin() {
      this.$router.push({ name: 'Login' });
    },
    goToRegister() {
      this.$router.push({ name: 'Register' });
    }
  }
};
</script>

<style scoped>
.top-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0.25rem 0.5rem;
  margin: 1rem 0;
  background-color: #212529;
  border-bottom: 0.0625rem solid #495057;
}

.logo {
  height: 2.5rem;
}

.search-bar {
  flex-grow: 1;
  margin: 0 0.75rem;
  padding: 0.375rem;
  border: 0.0625rem solid #495057;
  border-radius: 0.25rem;
  background-color: #343a40;
  color: #dee2e6;
}

.language-toggle a {
  text-decoration: none;
  color: #dee2e6;
  padding: 0.375rem 0.75rem;
  cursor: pointer;
}

.language-toggle a.active {
  font-weight: bold;
  text-decoration: underline;
}

.language-toggle a:not(.active):hover {
  text-decoration: underline;
}

.login-icon,
.register-icon {
  height: 2rem;
  cursor: pointer;
  margin-left: 1rem;
}
</style>
