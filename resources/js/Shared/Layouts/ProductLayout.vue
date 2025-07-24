<template>
  <div class="w-full max-w-md mx-auto">
    <slot />
  </div>
</template>

<script>
export default {
  layout: "ProductLayout",
  props: {
    title: {
      type: String,
      default: import.meta.env.VITE_APP_NAME,
    },
  },
  computed: {
    pageTitle() {
      return this.title || import.meta.env.VITE_APP_NAME;
    }
  }
};
</script>
