<template>
    <div class="p-6 max-w-xl mx-auto">
      <h1 class="text-xl font-bold mb-4">Edit Produk</h1>
      <form @submit.prevent="submit">
        <div class="mb-4">
          <label class="block">Nama Produk</label>
          <input v-model="form.name" class="w-full border p-2" />
        </div>
        <div class="mb-4">
          <label class="block">Deskripsi</label>
          <textarea v-model="form.description" class="w-full border p-2" />
        </div>
        <div class="mb-4">
          <label class="block">Harga</label>
          <input v-model="form.price" type="number" class="w-full border p-2" />
        </div>
        <div class="mb-4">
          <label class="block">Kategori</label>
          <select v-model="form.category_id" class="w-full border p-2">
            <option v-for="category in categories" :key="category.id" :value="category.id">
              {{ category.name }}
            </option>
          </select>
        </div>
        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3';
  import { defineProps } from 'vue';
  
  const props = defineProps({
    product: Object,
    categories: Array
  });
  
  const form = useForm({
    name: props.product.name,
    description: props.product.description,
    price: props.product.price,
    category_id: props.product.category_id,
  });
  
  function submit() {
    form.put(route('admin.products.update', props.product.id));
  }
  </script>
  