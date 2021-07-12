<template>
    <div class="w-full lg:w-3/6 xl:w-2/6 flex flex-col justify-start items-stretch  bg-white  rounded-md lg:rounded-none lg:rounded-l-md p-3">
        <div class="flex-auto flex flex-col">
            <div class="flex-auto flex flex-row">
                <div class="w-full p-1">
                    <div v-if="!showAddGroupForm" class="w-full flex items-center p-1">
                        <input
                            type="text"
                            placeholder="Search"
                            class="search-input mr-2 bg-gray-600 bg-opacity-10 placeholder-gray-500 pl-10 text-gray-400 text-sm py-1 rounded-md outline-none w-full focus:outline-none"
                        />
                        <button @click="openShowAddGroupForm" class="flex flex-col justify-center items-center p-2 rounded-full focus:ring-2 hover:bg-gray-200 hover:bg-opacity-30 focus:outline-none" aria-label="Add">
                            <svg class="fill-current h-4 w-4" viewBox="0 0 25 25">
                                <path d="M11 11v-11h1v11h11v1h-11v11h-1v-11h-11v-1h11z"/>
                            </svg>
                        </button>
                    </div>
                    <div v-else class="flex items-center justify-between p-1">
                        <add-group  />
                        <button @click="closeShowAddGroupForm" type="button" class="flex ml-2 flex-col justify-center items-center p-2 rounded-full focus:ring-2 hover:bg-gray-200 hover:bg-opacity-30 focus:outline-none">
                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                <path d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                            </svg>
                        </button>
                    </div>
                    <ul v-if="$page.props.user.all_teams && Object.keys($page.props.user.all_teams).length > 0 && !showAddGroupForm" class="overflow-y-auto">
                        <li v-for="team in getTeams()" :key="team.id" class="my-2 p-2 flex flex-row cursor-pointer rounded-lg hover:bg-gray-200 hover:bg-opacity-50">
                            <img src="/group.png" class="h-12 contrast bg-gray-900 w-12 rounded-full mr-4" alt="">
                            <div class="w-full flex flex-col justify-center">
                                <div class="flex flex-row justify-between items-center">
                                    <h2 class="text-xs font-bold">{{ team['name']}}</h2>
                                    <div class="text-xs flex flex-row">
                                        <svg class="w-4 h-4 text-blue-600 fill-current mr-1" viewBox="0 0 19 14">
                                            <path fill-rule="nonzero" d="M4.96833846,10.0490996 L11.5108251,2.571972 C11.7472185,2.30180819 12.1578642,2.27443181 12.428028,2.51082515 C12.6711754,2.72357915 12.717665,3.07747757 12.5522007,3.34307913 L12.4891749,3.428028 L5.48917485,11.428028 C5.2663359,11.6827011 4.89144111,11.7199091 4.62486888,11.5309823 L4.54038059,11.4596194 L1.54038059,8.45961941 C1.2865398,8.20577862 1.2865398,7.79422138 1.54038059,7.54038059 C1.7688373,7.31192388 2.12504434,7.28907821 2.37905111,7.47184358 L2.45961941,7.54038059 L4.96833846,10.0490996 L11.5108251,2.571972 L4.96833846,10.0490996 Z M9.96833846,10.0490996 L16.5108251,2.571972 C16.7472185,2.30180819 17.1578642,2.27443181 17.428028,2.51082515 C17.6711754,2.72357915 17.717665,3.07747757 17.5522007,3.34307913 L17.4891749,3.428028 L10.4891749,11.428028 C10.2663359,11.6827011 9.89144111,11.7199091 9.62486888,11.5309823 L9.54038059,11.4596194 L8.54038059,10.4596194 C8.2865398,10.2057786 8.2865398,9.79422138 8.54038059,9.54038059 C8.7688373,9.31192388 9.12504434,9.28907821 9.37905111,9.47184358 L9.45961941,9.54038059 L9.96833846,10.0490996 L16.5108251,2.571972 L9.96833846,10.0490996 Z"></path>
                                        </svg>
                                        <span class="text-gray-400">
                            10:45
                          </span>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between items-center">
                                    <p class="text-xs text-gray-500">On projection apartments unsatiable...</p>
                                    <span class="text-sm bg-blue-500 rounded-full w-5 h-5 text-center text-white font-bold">4</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AddGroup from '@/Components/AddGroup'

export default {
    name: "LeftSection",
    components: {
        AddGroup
    },
    data() {
        return {
            showAddGroupForm: false
        }
    },  
    methods: {
        getTeams() {
            let list = [];
            for (let [key, value] of Object.entries(this.$page.props.user.all_teams)) {
                list.push(value);
            }
            return list;
        },
        openShowAddGroupForm() {
            this.showAddGroupForm = true
        },
        closeShowAddGroupForm() {
            this.showAddGroupForm = false
        }
    }
}
</script>

<style scoped>
    .search-input {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' d='M18.109,17.776l-3.082-3.081c-0.059-0.059-0.135-0.077-0.211-0.087c1.373-1.38,2.221-3.28,2.221-5.379c0-4.212-3.414-7.626-7.625-7.626c-4.212,0-7.626,3.414-7.626,7.626s3.414,7.627,7.626,7.627c1.918,0,3.665-0.713,5.004-1.882c0.006,0.085,0.033,0.17,0.098,0.234l3.082,3.081c0.143,0.142,0.371,0.142,0.514,0C18.25,18.148,18.25,17.918,18.109,17.776zM9.412,16.13c-3.811,0-6.9-3.089-6.9-6.9c0-3.81,3.089-6.899,6.9-6.899c3.811,0,6.901,3.09,6.901,6.899C16.312,13.041,13.223,16.13,9.412,16.13z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: left 0.75rem center;
        background-size: 0.9rem 1.25rem;
    }
    .contrast {
        filter: grayscale(1) invert(1);
    }
</style>
