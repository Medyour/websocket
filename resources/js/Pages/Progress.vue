<template>
    <div>
      <h2>Progress: {{ progress }}%</h2>
      <progress :value="progress" max="100" class="w-full h-4"></progress>
    </div>
  </template>

  <script setup>
  import { ref, onMounted, onBeforeUnmount } from 'vue';

  const progress = ref(0);

  onMounted(() => {
    window.Echo.channel('progress-channel')
      .listen('.progress.updated', (e) => {
        console.log('Received progress:', e.progress);
        progress.value = e.progress;
      });
  });

  onBeforeUnmount(() => {
    window.Echo.leave('progress-channel');
  });
  </script>
