<template>
  <div class="w-full max-w-md mx-auto">
    <TopNavigation :title="pageTitle" />
    <div class="mt-[72px] px-2 md:px-0 pt-4">
      <slot />
    </div>
    <BottomNavigation />
  </div>
</template>

<script>
import BottomNavigation from "../BottomNavigation.vue";
import TopNavigation from "../TopNavigation.vue";

export default {
  layout: "AppLayout",
  components: {
    BottomNavigation,
    TopNavigation,
  },
  props: {
    title: {
      type: String,
      default: import.meta.env.VITE_APP_NAME,
    }
  },
  computed: {
    pageTitle() {
      return this.title || import.meta.env.VITE_APP_NAME;
    }
  }
};
</script>
