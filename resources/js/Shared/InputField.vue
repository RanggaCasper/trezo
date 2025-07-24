<template>
  <div class="w-full">
    <!-- Label -->
    <label :for="inputId" class="block mb-2 text-sm font-semibold text-muted">
      {{ label }}
      <span v-if="required && !disabled" class="text-red-500">*</span>
    </label>

    <!-- Input -->
    <input
      :type="type"
      :id="inputId"
      :name="name"
      :placeholder="placeholder"
      :value="modelValue"
      :required="required"
      :disabled="disabled"
      :autocomplete="autocomplete"
      @input="$emit('update:modelValue', $event.target.value)"
      @blur="$emit('blur', $event)"
      @focus="$emit('focus', $event)"
      class="w-full text-sm text-gray-700 bg-transparent border transition p-2.5 rounded-lg placeholder:text-gray-400 focus:border-primary focus:ring-primary disabled:opacity-60 border-gray-300"
      :class="{
        'border-red-500 focus:border-red-500 focus:ring-red-500': error,
      }"
    />

    <!-- Error message -->
    <p v-if="error" class="mt-1 text-sm text-red-600">
      {{ error }}
    </p>
  </div>
</template>

<script>
export default {
  name: "InputField",
  props: {
    label: { type: String, default: null },
    name: { type: String, required: true },
    id: { type: String, default: null },
    modelValue: { type: [String, Number], default: "" },
    placeholder: { type: String, default: "" },
    type: { type: String, default: "text" },
    required: { type: Boolean, default: false },
    disabled: { type: Boolean, default: false },
    autocomplete: { type: String, default: "off" },
    error: { type: String, default: null },
  },
  computed: {
    inputId() {
      return this.id || this.name;
    },
  },
};
</script>
