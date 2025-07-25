<template>
    <div class="p-6 max-w-xl mx-auto">
      <h1 class="text-xl font-bold mb-4">Tambah Produk</h1>
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
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3';
  import { defineProps } from 'vue';
  
  const props = defineProps({ categories: Array });
  
  const form = useForm({
    name: '',
    description: '',
    price: '',
    category_id: '',
  });
  
  function submit() {
    form.post(route('admin.products.store'));
  }
  </script>
  