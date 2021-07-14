<template>
    <div class="h-screen">
        <section class="flex w-full overflow-hidden rounded-md shadow-xl lg:mx-auto">
            <!-- Left section -->

            <div class="relative w-2/6">
                <left-section :changeCurrentRightSide="changeCurrentRightSide" :switchToTeam="switchToTeam" />
                <add-group :changeCurrentRightSide="changeCurrentRightSide" :currentRightSide="currentRightSide" />
                <add-contact :findContacts="findContacts" :changeCurrentRightSide="changeCurrentRightSide" :currentRightSide="currentRightSide" />
            </div>

            <div class="w-full h-full bg-gray-100 flex">
                <middle-section
                    :currentTopicConversations="currentTopicConversations"
                    :middleSection="middleSection"
                    :currentTopics="currentTopics"
                    :changeCurrentLeftSide="changeCurrentLeftSide"
                />
                <div
                    :class="currentLeftSide === 'search' ? 'rightSlideIn' : 'rightSlideOut'"
                    class="w-full h-full w-4/6">
                    <group-search  :changeCurrentLeftSide="changeCurrentLeftSide" />
                </div>
                <div
                    :class="currentLeftSide === 'profile' ? 'rightSlideIn' : 'rightSlideOut'"
                    class="w-full h-full w-4/6">
                    <profile :currentLeftSide="currentLeftSide"  :changeCurrentLeftSide="changeCurrentLeftSide" />
                </div>
                <div
                    :class="currentLeftSide === 'group-settings' ? 'rightSlideIn' : 'rightSlideOut'"
                    class="w-full h-full w-4/6">
                    <right-section :changeCurrentLeftSide="changeCurrentLeftSide" />
                </div>

            </div>

        </section>
    </div>
</template>

<script>
import LeftSection from "@/Components/LeftSection";
import MiddleSection from "@/Components/MiddleSection";
import RightSection from "@/Components/RightSection";
import AddGroup from "@/Components/AddGroup";
import AddContact from "@/Components/AddContact";
import Profile from "@/Components/Profile";
import GroupSearch from "@/Components/GroupSearch";

export default {
    components: {
        Profile,
        RightSection,
        MiddleSection,
        LeftSection,
        AddGroup,
        AddContact,
        GroupSearch
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        rightSide: String,
        findContacts: Array,
        currentTopics: Array,
        currentTopicConversations: Array,
        middleSection: String
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
        height: 100vh;
        max-height: 100vh;
    }
    .rightSlideIn {
        transform: translateX(0);
        transition: .5s;
    }
    .rightSlideOut {
        transform: translateX(100%);
        width: 0;
        opacity: .5;
        transition: .5s;
    }
</style>


