<template>
  <header class="header">
    <nav class="nav">
      <div class="nav-content">
        <!-- Logo -->
        <RouterLink to="/" class="logo">
          <div class="logo-icon">
            <span class="logo-text">S</span>
          </div>
          <span class="logo-name">Stargate</span>
        </RouterLink>

        <!-- Desktop Navigation -->
        <div class="nav-links">
          <RouterLink to="/" class="nav-link">Home</RouterLink>
          <RouterLink to="/about" class="nav-link">About</RouterLink>
          <RouterLink to="/services" class="nav-link">Services</RouterLink>
          <RouterLink to="/partners" class="nav-link">Partners</RouterLink>
          <RouterLink to="/blog" class="nav-link">Blog</RouterLink>
          <RouterLink to="/faq" class="nav-link">FAQ</RouterLink>
          <RouterLink to="/contact" class="nav-link">Contact</RouterLink>
        </div>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" @click="toggleMobileMenu">
          <svg class="menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path v-if="!isMobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Mobile Navigation -->
      <div class="mobile-nav" :class="{ 'mobile-nav-open': isMobileMenuOpen }">
        <RouterLink to="/" class="mobile-nav-link" @click="closeMobileMenu">Home</RouterLink>
        <RouterLink to="/about" class="mobile-nav-link" @click="closeMobileMenu">About</RouterLink>
        <RouterLink to="/services" class="mobile-nav-link" @click="closeMobileMenu">Services</RouterLink>
        <RouterLink to="/partners" class="mobile-nav-link" @click="closeMobileMenu">Partners</RouterLink>
        <RouterLink to="/blog" class="mobile-nav-link" @click="closeMobileMenu">Blog</RouterLink>
        <RouterLink to="/faq" class="mobile-nav-link" @click="closeMobileMenu">FAQ</RouterLink>
        <RouterLink to="/contact" class="mobile-nav-link" @click="closeMobileMenu">Contact</RouterLink>
      </div>
    </nav>
  </header>
</template>

<script setup lang="ts">
import { ref } from 'vue'

const isMobileMenuOpen = ref(false)

const toggleMobileMenu = () => {
  isMobileMenuOpen.value = !isMobileMenuOpen.value
}

const closeMobileMenu = () => {
  isMobileMenuOpen.value = false
}
</script>

<style scoped>
.header {
  background: rgba(17, 24, 39, 0.9);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid #374151;
  position: sticky;
  top: 0;
  z-index: 50;
}

.nav {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 16px;
}

.nav-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 16px 0;
}

.logo {
  display: flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  color: white;
}

.logo-icon {
  width: 40px;
  height: 40px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo-text {
  color: white;
  font-weight: 700;
  font-size: 1.25rem;
}

.logo-name {
  font-size: 1.5rem;
  font-weight: 700;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  color: transparent;
}

.nav-links {
  display: flex;
  gap: 32px;
  align-items: center;
}

.nav-link {
  color: #d1d5db;
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s ease;
  position: relative;
}

.nav-link:hover {
  color: #7c3aed;
}

.nav-link.router-link-active {
  color: #7c3aed;
}

.nav-link.router-link-active::after {
  content: '';
  position: absolute;
  bottom: -8px;
  left: 0;
  right: 0;
  height: 2px;
  background: linear-gradient(135deg, #1e3a8a 0%, #7c3aed 100%);
  border-radius: 1px;
}

.mobile-menu-btn {
  display: none;
  background: none;
  border: none;
  color: #d1d5db;
  cursor: pointer;
  padding: 8px;
}

.menu-icon {
  width: 24px;
  height: 24px;
}

.mobile-nav {
  display: none;
  flex-direction: column;
  gap: 16px;
  padding: 16px 0;
  border-top: 1px solid #374151;
  background: rgba(17, 24, 39, 0.95);
  backdrop-filter: blur(10px);
}

.mobile-nav-link {
  color: #d1d5db;
  text-decoration: none;
  font-weight: 500;
  padding: 12px 0;
  transition: color 0.3s ease;
}

.mobile-nav-link:hover {
  color: #7c3aed;
}

.mobile-nav-link.router-link-active {
  color: #7c3aed;
}

/* Responsive Design */
@media (max-width: 768px) {
  .nav-links {
    display: none;
  }
  
  .mobile-menu-btn {
    display: block;
  }
  
  .mobile-nav {
    display: flex;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }
  
  .mobile-nav-open {
    max-height: 400px;
  }
}

@media (max-width: 480px) {
  .nav {
    padding: 0 12px;
  }
  
  .logo-name {
    font-size: 1.25rem;
  }
  
  .logo-icon {
    width: 36px;
    height: 36px;
  }
  
  .logo-text {
    font-size: 1.125rem;
  }
}
</style>