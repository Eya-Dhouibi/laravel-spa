<template>
  <div class="layout">
    <Header />

    <main>
      <slot></slot>
    </main>

    <Footer />
  </div>
</template>

<script setup>
import Header from '../components/inc/Header.vue'
import Footer from '../components/inc/Footer.vue'
</script>

<style scoped>
.layout {
  padding: 20px;
}
</style>
