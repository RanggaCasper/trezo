<template>
  <Head title="Keranjang Belanja" />
  <div class="flex flex-col gap-4 mb-[82px]">
    <CardCart
      v-for="item in cartItems"
      :key="item.id"
      :item="item"
      @increase="increaseQty"
      @decrease="decreaseQty"
      @remove="removeFromCart"
    />
  </div>

  <!-- Jika keranjang kosong -->
  <div v-if="cartItems.length === 0" class="flex flex-col items-center justify-center">
    <img
      src="/public/assets/svg/empty.svg"
      alt="Keranjang kosong"
      class="size-64 object-contain"
    />
    <p class="text-lg font-medium">Keranjang Anda kosong.</p>
  </div>
</template>

<script>
import { Head } from "@inertiajs/vue3";
import CardCart from "../Shared/CardCart.vue";
import AppLayout from "../Shared/Layouts/AppLayout.vue";

export default {
  layout: AppLayout,
  components: {
    CardCart,
    Head,
  },
  props: {
    cartItems: {
      type: Array,
      required: true,
    },
  },
  methods: {
    increaseQty(item) {
      this.$inertia.post("/cart/increase", { id: item.id });
    },
    decreaseQty(item) {
      this.$inertia.post("/cart/decrease", { id: item.id });
    },
    removeFromCart(item) {
      this.$inertia.post("/cart/remove", { id: item.id });
    },
  },
};
</script>
