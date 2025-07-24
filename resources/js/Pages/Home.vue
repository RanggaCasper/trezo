<template>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <CardProduct
      v-for="product in products"
      :key="product.id"
      :product="product"
    />
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
  data() {
    return {
      products: [
        {
          id: 1,
          name: "Kaos Polos Hitam",
          price: 75000,
          image: "https://placehold.co/300x300?text=Kaos+Hitam",
        },
        {
          id: 2,
          name: "Celana Jeans Slim Fit",
          price: 180000,
          image: "https://placehold.co/300x300?text=Celana+Jeans",
        },
        {
          id: 3,
          name: "Sepatu Sneakers Putih",
          price: 250000,
          image: "https://placehold.co/300x300?text=Sneakers+Putih",
        },
        {
          id: 4,
          name: "Tas Ransel Waterproof",
          price: 120000,
          image: "https://placehold.co/300x300?text=Tas+Ransel",
        }
      ]
    };
  }
};
</script>
