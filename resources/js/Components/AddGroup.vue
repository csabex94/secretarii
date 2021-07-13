<template>
    <div :class="currentRightSide === 'add-group' ? 'slideIn' : 'slideOut'" class="addGroup absolute flex flex-col justify-start items-stretch bg-gray-50 rounded-md lg:rounded-none lg:rounded-l-md p-3">
        <div class="flex-auto flex flex-col">
            <div class="flex-auto flex flex-row">
                <div class="w-full p-1">
                    <form @submit.prevent="createTeam">
                        <div class="w-full flex items-start p-1">
                            <input v-model="form.name" class="w-full text-gray-700 bg-gray-200 text-sm py-1 rounded" type="text" placeholder="Group name" />
                            <button type="button" @click="changeCurrentRightSide('groups')" class="flex flex-col justify-center items-center p-2 ml-2 rounded-full focus:ring-2 hover:bg-gray-200 hover:bg-opacity-30 focus:outline-none" aria-label="Add">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            changeCurrentRightSide: Function,
            currentRightSide: String
        },
        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                })
            }
        },
        methods: {
            createTeam() {
                this.form.post(route('teams.store'), {
                    errorBag: 'createTeam',
                    preserveScroll: true,
                    preserveState: true,
                    onSuccess: () => {
                        this.changeCurrentRightSide('groups');
                    }
                })
            },
        },
    }
</script>

<style scoped>
    .addGroup {
        width: 100%;
        min-width: 320px;
        top: 0;
        left: 0;
        height: 100%;
        transition: transform .7s;
    }
    .slideOut {
        transform: translateX(-100%);
    }
    .slideIn {
        transform: translateX(0);
    }
</style>
