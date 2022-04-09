<template>
    <div>

        <h2 class="mb-4">Timeline</h2>
        <ol class="border-l border-gray-300">
            <TimelineEntry date="December, 1991" entry="Born in Allegan, MI" />
            <TimelineEntry date="April, 2016" entry="Got married!" />
        </ol>

    </div>
</template>

<script>
import TimelineEntry from '../components/TimelineEntry.vue'
export default {
  components: { TimelineEntry },
    name: 'AboutPage'
}
</script>