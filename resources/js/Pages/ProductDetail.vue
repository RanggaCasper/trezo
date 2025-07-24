<template>
  <div class="relative mx-auto" v-if="product">
    <div class="absolute top-2 left-2">
      <button @click="goBack" class="bg-black/30 p-2 rounded-lg cursor-pointer shadow">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          class="size-4 text-white"
        >
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l14 0" />
          <path d="M5 12l6 6" />
          <path d="M5 12l6 -6" />
        </svg>
      </button>
    </div>

    <img :src="product.image" class="w-full h-64 object-cover" alt="" />

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
import { formatCurrency } from "../Utils/helper.js";

export default {
  layout: ProductLayout,
  components: {
    ProductNavigation,
  },
  props: {
    product: {
      type: Object,
      default: null,
    },
    title: {
      type: String,
      default: "Detail Produk",
    },
  },
  data() {
    return {
      error: false,
      imageError: false,
    };
  },
  methods: {
    formatCurrency,
    buyNow() {
      // TODO: Implementasi beli sekarang
      console.log("Beli sekarang:", this.product);
      // Anda bisa menambahkan logic untuk pembelian langsung di sini
      alert("Redirect ke halaman checkout!");
    },

    goBack() {
      // Kembali ke halaman sebelumnya atau home
      this.$inertia.visit("/");
    },

    handleImageError(event) {
      // Fallback image jika gambar gagal dimuat
      event.target.src =
        "https://placehold.co/400x300/f8f9fa/6c757d?text=Gambar+Tidak+Tersedia";
      this.imageError = true;
    },
  },

  mounted() {
    if (this.product) {
      document.title = `${this.product.name} - ${import.meta.env.VITE_APP_NAME}`;
    }
  },

  watch: {
    product: {
      handler(newProduct) {
        if (!newProduct) {
          this.error = true;
        } else {
          this.error = false;
          document.title = `${newProduct.name} - Trezo`;
        }
      },
      immediate: true,
    },
  },
};
</script>
