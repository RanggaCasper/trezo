<template>
  <Head title="Halaman Login" />
  <div class="bg-white shadow-md rounded-lg p-4">
    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Masuk</h3>
    <Alert />
    <form @submit.prevent="handleSubmit">
      <div class="mb-3">
        <InputField
          v-model="email"
          id="email"
          name="email"
          label="Email"
          placeholder="Masukkan email"
          type="email"
          required
          :error="$page.props.errors.email"
        />
      </div>
      <div class="mb-3">
        <InputField
          v-model="password"
          id="password"
          name="password"
          label="Password"
          placeholder="Masukkan password"
          type="password"
          required
          :error="$page.props.errors.password"
        />
      </div>
      <button
        type="submit"
        class="w-full cursor-pointer p-2 mt-4 text-white bg-primary rounded-lg hover:bg-primary/90"
      >
        Masuk
      </button>
    </form>
    <p class="mt-4 text-sm text-gray-600">
      Belum punya akun?
      <Link href="/auth/register" class="text-primary hover:underline"
        >Daftar sekarang</Link
      >
    </p>
  </div>
</template>

<script>
import AuthLayout from "../../Shared/Layouts/AuthLayout.vue";
import InputField from "../../Shared/InputField.vue";
import Alert from "../../Shared/Alert.vue";
import { Link, Head } from "@inertiajs/vue3";

export default {
  layout: AuthLayout,
  components: {
    InputField,
    Link,
    Alert,
    Head,
  },
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    handleSubmit() {
      this.$inertia.post("/auth/login", {
        email: this.email,
        password: this.password,
      });
    },
  },
};
</script>
