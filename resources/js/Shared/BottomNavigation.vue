<template>
  <div class="px-2 max-w-md mx-auto text-gray-800">
    <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200">
      <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
        <!-- Beranda -->
        <Link
          href="/"
          class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="size-7 text-gray-500 group-hover:text-primary"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105"
            />
            <path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" />
          </svg>
          <span class="text-sm text-gray-500 group-hover:text-primary">Beranda</span>
        </Link>

        <!-- Cart -->
        <Link
          href="/"
          class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-100 group"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="size-7 text-gray-500 group-hover:text-primary"
          >
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
              d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z"
            />
          </svg>
          <span class="text-sm text-gray-500 group-hover:text-primary">Keranjang</span>
        </Link>

        <!-- Akun -->
        <button
          type="button"
          class="inline-flex col-span-2 flex-col items-center justify-center px-5 hover:bg-gray-100 group"
        >
          <svg
            class="w-5 h-5 mb-2 text-gray-500 group-hover:text-primary"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"
            />
          </svg>
          <span class="text-sm text-gray-500 group-hover:text-primary">Akun</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
  name: "BottomNavigation",
  components: {
    Link,
  },
};
</script>
