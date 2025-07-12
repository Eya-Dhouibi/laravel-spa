<template>
  <header class="position-sticky top-0 bg-white shadow-sm z-index-3">
    <div class="container">

      <!-- ✅ Mobile Header -->
      <div class="d-flex justify-content-between align-items-center py-2 d-lg-none">
        <span class="fw-bold fs-4 text-dark">FRESH JUICE SHOP</span>

        <button
          class="navbar-toggler border-0 bg-transparent"
          type="button"
          @click="isMenuOpen = !isMenuOpen"
          aria-controls="mobileMenu"
          :aria-expanded="isMenuOpen.toString()"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <transition name="fade">
        <div v-if="isMenuOpen" id="mobileMenu" class="d-lg-none bg-white rounded shadow-sm py-3">

          <form class="d-flex px-3 mb-3" role="search" @submit.prevent="onSearch">
            <input
              v-model="searchQuery"
              class="form-control me-2"
              type="search"
              placeholder="Search for fresh juices..."
              aria-label="Search"
            />
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>

          <ul class="nav flex-column px-3">
            <li class="nav-item"><a class="nav-link text-dark" href="#">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Shop</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Our Juices</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Contact</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">New Arrivals</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Special Offers</a></li>
            <li class="nav-item"><a class="nav-link text-dark" href="#">Categories</a></li>
          </ul>
        </div>
      </transition>

      <div class="d-none d-lg-flex justify-content-between align-items-center py-2">
        <span class="fw-bold fs-4 text-dark">FRESH JUICE SHOP</span>

        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">Our Juices</a></li>
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">Contact</a></li>
        </ul>
      </div>

      <div class="d-none d-lg-flex justify-content-between align-items-center py-2 border-top">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">New Arrivals</a></li>
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">Special Offers</a></li>
          <li class="nav-item"><a class="nav-link px-3 text-dark" href="#">Categories</a></li>
        </ul>

        <form class="d-flex" role="search" @submit.prevent="onSearch">
          <input
            v-model="searchQuery"
            class="form-control me-2"
            type="search"
            placeholder="Search..."
            aria-label="Search"
          />
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>

    </div>
  </header>
</template>

<script setup>
import { ref } from 'vue'

const isMenuOpen = ref(false)
const searchQuery = ref('')

function onSearch() {
  alert(`Recherche : ${searchQuery.value}`)
}
</script>

<style scoped>
header {
  z-index: 99;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  background: no-repeat center center;
  background-size: 100% 100%;
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0,0.7)' stroke-width='2' stroke-linecap='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s ease;
}
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>
