<template>
    <div class="max-w-screen-lg mx-auto">
        <Header />
        <Nuxt />
    </div>
</template>

<script>
export default {
    head: {
        bodyAttrs: {
            class: 'text-slate-700 p-6 md:p-12 transition-all'
        }
    }
}
</script>