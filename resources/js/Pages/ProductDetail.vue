<template>
  <Head :title="product ? product.name : 'Detail Produk'" />

  <div class="relative mx-auto" v-if="product">
    <div class="absolute top-4 left-4">
      <Link href="/" >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="size-8 text-white"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12h14" />
          <path d="M5 12l6 6" />
          <path d="M5 12l6 -6" />
        </svg>
      </Link>
    </div>

    <div class="absolute top-4 right-4">
      <Link href="/cart">
        <svg
          class="size-8 text-white"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
            d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z"
          />
        </svg>
      </Link>
    </div>

    <img
      :src="product.image"
      @error="handleImageError"
      class="w-full h-64 object-cover"
      alt="Gambar Produk"
    />

    <div class="p-4 max-w-6xl mx-auto">
      <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ product.name }}</h1>
      <p class="text-gray-600 mb-4">{{ product.description }}</p>
      <p class="text-xl font-semibold text-primary mb-4">
        {{ formatCurrency(product.price) }}
      </p>
    </div>
  </div>

  <!-- Loading State -->
  <div v-else-if="!product && !error" class="p-4 max-w-6xl mx-auto">
    <div class="bg-white rounded-lg shadow p-8 text-center">
      <div
        class="animate-spin rounded-full h-12 w-12 border-b-2 border-orange-500 mx-auto"
      ></div>
      <p class="mt-4 text-gray-600">Memuat produk...</p>
    </div>
  </div>

  <!-- Error State -->
  <div v-else class="p-4 max-w-6xl mx-auto">
    <div class="bg-white rounded-lg shadow p-8 text-center">
      <div class="text-red-500 text-6xl mb-4">⚠️</div>
      <h2 class="text-xl font-semibold text-gray-800 mb-2">Produk Tidak Ditemukan</h2>
      <p class="text-gray-600 mb-4">Maaf, produk yang Anda cari tidak dapat ditemukan.</p>
      <button
        @click="goBack"
        class="bg-orange-500 text-white px-6 py-2 rounded-lg hover:bg-orange-600 transition-colors"
      >
        Kembali
      </button>
    </div>
  </div>

  <ProductNavigation v-if="product" :product="product" @buy-now="$emit('buy-now')" />
</template>

<script>
import ProductLayout from "../Shared/Layouts/ProductLayout.vue";
import ProductNavigation from "../Shared/ProductNavigation.vue";
import { Head, Link } from "@inertiajs/vue3";
import { formatCurrency } from "../Utils/helper.js";

export default {
  layout: ProductLayout,
  components: {
    ProductNavigation,
    Head,
    Link
  },
  props: {
    product: Object,
  },
  data() {
    return {
      error: false,
      imageError: false,
    };
  },
  methods: {
    formatCurrency,
    goBack() {
      this.$inertia.visit("/");
    },
    handleImageError(event) {
      event.target.src =
        "https://placehold.co/400x300/f8f9fa/6c757d?text=Gambar+Tidak+Tersedia";
      this.imageError = true;
    },
  },
};
</script>
