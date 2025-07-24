<template>
  <Head title="Beranda" />
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-[82px]">
    <CardProduct v-for="product in products" :key="product.id" :product="product" />
  </div>

  <div
    v-if="products.length === 0"
    class="flex flex-col items-center justify-center"
  >
    <img
      src="/public/assets/svg/empty.svg"
      alt="Produk kosong"
      class="size-64 object-contain"
    />
    <p class="text-lg font-medium">Tidak ada produk.</p>
  </div>
</template>

<script>
import AppLayout from "../Shared/Layouts/AppLayout.vue";
import CardProduct from "../Shared/CardProduct.vue";
import { Head } from "@inertiajs/vue3";

export default {
  layout: AppLayout,
  components: {
    CardProduct,
    Head,
  },
  props: {
    products: Array,
  },
};
</script>
