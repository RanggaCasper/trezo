<template>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <CardProduct v-for="product in products" :key="product.id" :product="product" />
  </div>
</template>

<script>
import AppLayout from "../Shared/Layouts/AppLayout.vue";
import CardProduct from "../Shared/CardProduct.vue";

export default {
  layout: AppLayout,
  components: {
    CardProduct,
  },
  props: {
    products: Array,
  },
};
</script>
