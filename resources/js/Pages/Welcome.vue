<template>
  <layout>
    <h1>Welcome, {{ name }}</h1>
    <p>Welcome to my first Inertia.js app!</p>
  </layout>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
  components: {
    Layout,
  },
  props: {
      name: String,
  }
}
</script>