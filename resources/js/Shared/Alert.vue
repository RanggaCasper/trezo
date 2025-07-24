<template>
  <div class="mb-4 space-y-2">
    <!-- General Error Message -->
    <div
      v-if="errors.error"
      class="p-3 text-sm text-red-800 bg-red-100 border border-red-300 rounded-lg"
      role="alert"
    >
      {{ errors.error }}
    </div>

    <!-- Field Validation Errors -->
    <div
      v-if="hasFieldErrors"
      class="p-3 text-sm text-red-800 bg-red-100 border border-red-300 rounded-lg"
      role="alert"
    >
      <ul class="list-disc list-inside space-y-1">
        <li v-for="(message, key) in fieldErrors" :key="key">
          {{ message }}
        </li>
      </ul>
    </div>

    <!-- Flash Success -->
    <div
      v-if="successMessage"
      class="p-3 text-sm text-green-800 bg-green-100 border border-green-300 rounded-lg"
      role="alert"
    >
      {{ successMessage }}
    </div>
  </div>
</template>

<script>
import { usePage } from "@inertiajs/vue3";

export default {
  name: "Alert",
  computed: {
    errors() {
      return usePage().props.errors || {};
    },
    successMessage() {
      return usePage().props.flash?.success || null;
    },
    fieldErrors() {
      const { error, ...rest } = this.errors;
      return rest;
    },
    hasFieldErrors() {
      return Object.keys(this.fieldErrors).length > 0;
    },
  },
};
</script>
