<template>
  <div class="flex items-center justify-between p-4 bg-white rounded shadow-sm hover:ring-2 hover:ring-primary transition duration-300">
    <div class="flex items-center gap-4">
      <img
        :src="item.product.image"
        class="size-20 object-cover rounded"
        :alt="item.product.name"
      />
      <div>
        <Link :href="`/products/${item.product.slug}`" class="font-medium text-sm text-primary hover:underline">{{ item.product.name }}</Link>
        <p class="text-sm text-gray-600">
          {{ formatCurrency(item.product.price) }}
        </p>
        <div class="flex items-center gap-2 mt-2">
          <button
            @click="$emit('decrease', item)"
            class="w-7 h-7 bg-gray-200 cursor-pointer rounded text-gray-700 hover:bg-gray-300"
          >−</button>
          <span class="text-sm w-6 text-center">{{ item.quantity }}</span>
          <button
            @click="$emit('increase', item)"
            class="w-7 h-7 bg-gray-200 cursor-pointer rounded text-gray-700 hover:bg-gray-300"
          >+</button>
        </div>
      </div>
    </div>
    <button
      @click="$emit('remove', item)"
      class="text-red-500 text-sm cursor-pointer hover:underline"
    >
      Hapus
    </button>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
import { formatCurrency } from '../Utils/helper.js'

export default {
  components: {
    Link
  },
  props: {
    item: {
      type: Object,
      required: true
    }
  },
  methods: {
    formatCurrency
  }
}
</script>
