<template>
  <Link :href="`/products/${product.slug}`">
    <div
      class="rounded-lg overflow-hidden shadow-md transform transition duration-300 hover:shadow-lg hover:ring-2 hover:ring-primary"
    >
      <img class="w-full h-48 object-cover" :src="product.image" :alt="product.name" />
      <div class="px-4 py-2">
        <h3 class="font-semibold line-clamp-1">{{ product.name }}</h3>
        <div class="mt-2 flex items-center justify-between">
          <span class="text-sm text-gray-700">
            {{ formatCurrency(product.price) }}
          </span>
        </div>
      </div>
    </div>
  </Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import { formatCurrency } from "../Utils/helper.js";

export default {
  components: {
    Link,
  },
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
  methods: {
    formatCurrency,
  },
};
</script>
