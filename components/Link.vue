<template>
    <a
        class="rounded py-2 px-4 bg-slate-800 uppercase text-sm text-white text-center font-semibold hover:bg-sky-600 transition-all"
        :href="href"
    >
        <font-awesome-icon
            v-if="icon"
            :icon="icon"
        />
        {{ text }}
    </a>
</template>

<script>
export default {
    props: {
        text: {
            type: String,
            required: true
        },
        href: {
            type: String,
            required: true
        },
        icon: {
            type: String,
            required: false,
            default: null
        }
    }
}
</script>