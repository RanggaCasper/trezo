<template>
  <div class="w-full max-w-md mx-auto">
    <TopNavigation :title="title" />
    <div class="mt-[72px] px-2 pt-4">
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
};
</script>
