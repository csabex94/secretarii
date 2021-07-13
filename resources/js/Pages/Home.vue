<template>
    <div class="h-screen">
        <section class="flex w-full overflow-hidden rounded-md shadow-xl lg:mx-auto">
            <!-- Left section -->

            <div class="relative">
                <left-section :changeCurrentRightSide="changeCurrentRightSide" :switchToTeam="switchToTeam" />
                <add-group :changeCurrentRightSide="changeCurrentRightSide" :currentRightSide="currentRightSide" />
                <add-contact :findContacts="findContacts" :changeCurrentRightSide="changeCurrentRightSide" :currentRightSide="currentRightSide" />
            </div>

            <middle-section :currentTopics="currentTopics" :changeCurrentLeftSide="changeCurrentLeftSide" />
            <right-section v-show="currentLeftSide === 'group-settings'" :changeCurrentLeftSide="changeCurrentLeftSide" />
            <!-- Right section -->
        </section>
    </div>
</template>

<script>
import LeftSection from "@/Components/LeftSection";
import MiddleSection from "@/Components/MiddleSection";
import RightSection from "@/Components/RightSection";
import AddGroup from "@/Components/AddGroup";
import AddContact from "@/Components/AddContact";

export default {
    components: {
        RightSection,
        MiddleSection,
        LeftSection,
        AddGroup,
        AddContact
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        rightSide: String,
        findContacts: Array,
        currentTopics: Array
    },
    data() {
        return {
            currentRightSide: 'groups',
            currentLeftSide: '',
            team_id: null
        }
    },
    methods: {
        changeCurrentRightSide(component) {
            this.currentRightSide = component;
        },
        switchToTeam(teamId) {
            this.$inertia.put(route('current-team.update'), {
                'team_id': teamId
            }, {
                preserveState: false
            })
        },
        changeCurrentLeftSide(component) {
            this.currentLeftSide = component;
        }
    },
    mounted() {
        if (this.rightSide) {
            this.currentRightSide = this.rightSide;
        }
    }
}
</script>

<style scoped>
    section {
        height: 100%;
        min-height: 95vh;
    }
</style>


