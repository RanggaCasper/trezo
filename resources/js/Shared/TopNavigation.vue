<template>
  <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 px-2">
    <div class="max-w-md flex flex-wrap items-center justify-between mx-auto py-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap">
          {{ appName }}
        </span>
      </a>
    </div>
  </nav>
</template>

<script>
export default {
  name: "TopNavigation",
  props: {
    title: import.meta.env.VITE_APP_NAME,
  },
  data() {
    return {
      appName: import.meta.env.VITE_APP_NAME,
    };
  },
};
</script>
