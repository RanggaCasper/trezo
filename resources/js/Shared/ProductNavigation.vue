<template>
  <div class="px-2 max-w-md mx-auto text-gray-800">
    <div class="fixed bottom-0 left-0 z-50 w-full h-14 bg-white border-t border-gray-200">
      <div class="grid h-full max-w-md grid-cols-4 mx-auto font-medium">
        <!-- Tambah ke keranjang -->
        <button
          @click="addToCart"
          class="inline-flex cursor-pointer flex-col items-center justify-center px-5 bg-green-500 hover:bg-green-600 group transition"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="size-7 text-white"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
            <path d="M12.5 17h-6.5v-14h-2" />
            <path d="M6 5l14 1l-.86 6.017m-2.64 .983h-10.5" />
            <path d="M16 19h6" />
            <path d="M19 16v6" />
          </svg>
        </button>

        <!-- Pesan Sekarang -->
        <button
          type="button"
          class="col-span-3 cursor-pointer bg-primary inline-flex flex-col items-center justify-center px-5 group transition hover:bg-primary-dark"
        >
          <span class="text-lg text-white">Pesan Sekarang</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import { toast } from "vue3-toastify";

export default {
  name: "ProductNavigation",
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
  methods: {
    addToCart() {
      if (!this.$page.props.auth.user) {
        this.$inertia.visit("/auth/login");
        return;
      }

      this.$inertia.post(
        "/cart/add",
        {
          product_id: this.product.id,
          quantity: 1,
        },
        {
          onSuccess: () => {
            toast.success("Produk berhasil ditambahkan ke keranjang!");
          },
          onError: (errors) => {
            console.error(errors);
            alert("Gagal menambahkan produk ke keranjang.");
          },
        }
      );
    },
  },
};
</script>
