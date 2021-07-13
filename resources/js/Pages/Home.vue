<template>
    <div class="h-screen">
        <section class="shadow-xl rounded-md w-full lg:mx-auto flex overflow-hidden">
            <!-- Left section -->

            <div class="relative">
                <left-section :changeCurrentRightSide="changeCurrentRightSide" :switchToTeam="switchToTeam" />
                <add-group :changeCurrentRightSide="changeCurrentRightSide" :currentRightSide="currentRightSide" />
                <add-contact :findContacts="findContacts" :changeCurrentRightSide="changeCurrentRightSide" :currentRightSide="currentRightSide" />
            </div>

            <middle-section :changeCurrentLeftSide="changeCurrentLeftSide" />
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
        findContacts: Array
    },
    data() {
        return {
            currentRightSide: 'groups',
            currentLeftSide: ''
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


