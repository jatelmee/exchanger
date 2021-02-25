<template>
  <div class="example">{{ msg }}</div>
</template>

<script lang='ts'>
import { defineComponent } from "vue";

export default defineComponent({
  setup: () => {
    return { msg: "Vityok klymets" };
  },
});
</script>