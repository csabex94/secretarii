<template>
    <div class="h-screen">
        <section class="shadow-xl rounded-md w-full lg:mx-auto flex">
            <!-- Left section -->
            <left-section />
            <!-- Middle section -->
            <middle-section  :handleOpenRightSide="openRightSide" />
            <!-- Right section -->
            <right-section v-if="showRightSide" :closeRightSide="closeRightSide" />
        </section>
    </div>
</template>

<script>
import LeftSection from "@/Components/LeftSection";
import MiddleSection from "@/Components/MiddleSection";
import RightSection from "@/Components/RightSection";

export default {
    components: {RightSection, MiddleSection, LeftSection},
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    data() {
        return {
            showRightSide: false
        }
    },
    methods: {
        openRightSide() {
            this.showRightSide = true;
        },
        closeRightSide() {
            this.showRightSide = false;
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


