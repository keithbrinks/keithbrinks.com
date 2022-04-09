<template>
    <li>
        <div class="flex flex-start items-center">
            <div class="bg-gray-300 w-2 h-2 rounded-full -ml-1 mr-3" />
            <p class="text-gray-500 text-sm" v-text="date" />
        </div>
        <div class="ml-4 mb-6">
            <h4 class="text-gray-800 text-base font-medium" v-text="entry" />
        </div>
    </li>
</template>

<script>
export default {
    props: {
        date: {
            type: String,
            required: true
        },
        entry: {
            type: String,
            required: true
        }
    }
}
</script>