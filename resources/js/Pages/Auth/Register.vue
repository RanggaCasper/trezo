<template>
  <Head title="Halaman Register" />
  <div class="bg-white shadow-md rounded-lg p-4">
    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Daftar</h3>
    <Alert />
    <form @submit.prevent="handleSubmit">
      <div class="mb-3">
        <InputField
          v-model="name"
          id="name"
          name="name"
          label="Nama"
          placeholder="Masukkan nama"
          required
          :error="$page.props.errors.name"
        />
      </div>
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
      <div class="mb-3">
        <InputField
          v-model="confirmPassword"
          id="confirm_password"
          name="confirm_password"
          label="Ulangi Password"
          placeholder="Ulangi password"
          type="password"
          required
          :error="$page.props.errors.confirm_password"
        />
      </div>
      <button
        type="submit"
        class="w-full p-2 mt-4 cursor-pointer text-white bg-primary rounded-lg hover:bg-primary/90"
      >
        Daftar
      </button>
    </form>
    <p class="mt-4 text-sm text-gray-600">
      Sudah punya akun?
      <Link href="/auth/login" class="text-primary hover:underline">Masuk sekarang</Link>
    </p>
  </div>
</template>

<script>
import AuthLayout from "../../Shared/Layouts/AuthLayout.vue";
import InputField from "../../Shared/InputField.vue";
import Alert from "../../Shared/Alert.vue";
import { Head, Link } from "@inertiajs/vue3";

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
      name: "",
      email: "",
      password: "",
      confirmPassword: "",
    };
  },
  methods: {
    handleSubmit() {
      this.$inertia.post("/auth/register", {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.confirmPassword,
      });
    },
  },
};
</script>
