<template>
    <div class="w-full h-full flex flex-col">
        <div class="=w-full p-2">
            <ul ref="scrolling" class="w-full" v-if="currentTopicConversations">
                <li class="w-full flex items-center mt-3" v-for="message in currentTopicConversations" :key="message.id">
                    <div class="mr-4 flex flex-col">
                        <img src="/user.png" class="w-12 h-12 bg-gray-700 rounded-full contrast" alt="">
                        <span>{{ message.created_by.name }}</span>
                    </div>
                    <div class="bg-blue-200 p-2 rounded-md">
                        {{ message.message }}
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: "TopicConversations",
    props: {
        currentTopicConversations: Array
    },
    data() {
        return {
            form: this.$inertia.form({
                _method: 'post',
                message: ''
            })
        }
    },
    methods: {
        writeMessage() {
            this.form.post(route('conversation.store', { topicId: this.$page.url.split('=')[1] }), {
               preserveScroll: true
            });
        }
    },
    mounted() {
        let limit = this.currentTopicConversations[this.currentTopicConversations.length - 1].id;
        let el = this.$refs['scrolling'];
        el.scrollTop = el.scrollHeight;
        el.scrollTop;
    }
}
</script>

<style scoped>
.contrast {
    filter: grayscale(1) invert(1);
}
</style>
