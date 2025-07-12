<template>
  <div class="layout">
    <Header />
    
    <main>
      <router-view />
    </main>

    <Footer />
  </div>
</template>

<script setup>
import Header from './components/inc/Header.vue'
import Footer from './components/inc/Footer.vue'
</script>
