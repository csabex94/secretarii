<template>
    <div class="flex flex-col justify-between flex-auto p-5">
        <div class="flex flex-col divide-y-2 divide-gray-100">
            <div v-for="topic in currentTopics" :key="topic.id" class="flex flex-col py-8">
                <div class="flex flex-col flex-shrink-0 mb-6 md:w-64 md:mb-0">
                <span class="font-semibold text-gray-700 title-font">Creator Name</span>
                <span class="mt-1 text-sm text-gray-500">{{ topic.created_at }}</span>
                </div>
                <div class="md:flex-grow">
                <h2 class="mb-2 text-2xl font-medium text-gray-900 title-font">{{ topic.title }}</h2>
                <p class="leading-relaxed">{{ topic.description }}</p>
                <a class="inline-flex items-center mt-4 text-indigo-500">Learn More
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Messages",
    props: {
        currentTopics: Array
    }
}
</script>

<style scoped>

</style>
