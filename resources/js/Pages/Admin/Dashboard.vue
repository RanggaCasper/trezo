<template>
    <div class="min-h-screen bg-gray-100 p-6">
      <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Admin Dashboard</h1>
  
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
  
          <!-- Card Kategori -->
          <div class="p-6 bg-white rounded-xl shadow-md cursor-pointer hover:shadow-lg transition">
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Manajemen Kategori</h2>
            <p class="text-gray-600">Data statistik singkat dapat ditampilkan di sini.</p>
          </div>
  
          <!-- Card Produk -->
          <Link
            href="/admin/products"
            class="p-6 bg-white rounded-xl shadow-md block hover:shadow-lg transition cursor-pointer"
          >
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Manajemen Produk</h2>
            <p class="text-gray-600">Kelola daftar produk dari sini.</p>
          </Link>
  
          <!-- Card Pengguna -->
          <Link
            href="/admin/users"
            class="p-6 bg-white rounded-xl shadow-md block hover:shadow-lg transition cursor-pointer"
          >
            <h2 class="text-xl font-semibold text-gray-700 mb-2">Manajemen User</h2>
            <p class="text-gray-600">Pantau dan kelola pengguna yang terdaftar.</p>
          </Link>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { Head, Link } from '@inertiajs/vue3'
  </script>
  
  <Head title="Admin Dashboard" />
  