<script setup>
</script>
<template>
        <div v-if="$page.props.flash.states === 'success'" class="bg-blue-300 text-white p-4">{{ $page.props.flash.message }}</div>
        <div v-if="$page.props.flash.states === 'danger'" class="bg-red-300 text-white p-4">{{ $page.props.flash.message }}</div>
</template>
