<template>
    <div class="min-h-screen bg-gray-100 p-6">
      <Head title="Daftar Produk" />
      <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold text-gray-800">Daftar Produk</h1>
          <Link href="/admin/products/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
            + Tambah Produk
          </Link>
        </div>
  
        <div class="bg-white shadow rounded-lg overflow-hidden">
          <table class="min-w-full text-sm text-left text-gray-600">
            <thead class="bg-gray-100 text-xs uppercase text-gray-500">
              <tr>
                <th class="px-6 py-4">Nama</th>
                <th class="px-6 py-4">Harga</th>
                <th class="px-6 py-4">Kategori</th>
                <th class="px-6 py-4 text-right">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="product in products" :key="product.id" class="border-b hover:bg-gray-50">
                <td class="px-6 py-4 font-medium text-gray-800">{{ product.name }}</td>
                <td class="px-6 py-4">Rp {{ product.price.toLocaleString('id-ID') }}</td>
                <td class="px-6 py-4">{{ product.category?.name || '-' }}</td>
                <td class="px-6 py-4 text-right space-x-2">
                  <Link :href="`/admin/products/${product.id}/edit`" class="text-blue-600 hover:underline">Edit</Link>
                  <button @click="deleteProduct(product.id)" class="text-red-600 hover:underline">Hapus</button>
                </td>
              </tr>
              <tr v-if="products.length === 0">
                <td colspan="4" class="px-6 py-4 text-center text-gray-500">Belum ada produk.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { router, Link, Head } from '@inertiajs/vue3'
  
  const props = defineProps({
    products: Array
  })
  
  function deleteProduct(id) {
    if (confirm('Apakah Anda yakin ingin menghapus produk ini?')) {
      router.delete(`/admin/products/${id}`)
    }
  }
  </script>
  