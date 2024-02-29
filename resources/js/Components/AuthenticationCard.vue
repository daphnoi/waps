<script setup>
import formback from '@/Components/img/wapsbg.png'
import wapsreap from '@/Components/img/repwaps.png'
import loginicon from '@/Components/img/loginicon.png'

</script>

<template>

    <div class="h-[100vh]  items-center p-[25vmin] px-[75vh]  bgimg"
        :style="{ 'background-image': 'url(' + formback + ')' }">
        <div class="absolute w-full h-[100vh] left-0  bg-center repeat-x opacity-50 bg-fixed reap top-0"
            :style="{ 'background-image': 'url(' + wapsreap + ')' }">
        </div>
        <div class="w-[50vh] h-[60vh] mt-2 px-9 py-9 bg-white shadow-md overflow-hidden rounded-xl absolute hover:bg-gray-200">
            
            <slot />
        </div>
    </div>
</template>

<style>
.bgimg {
    background-position: 0%;
    background-size: cover;
}

.reap {
    background-position: 0%;
    /* background-size: 100%; */
    background-repeat: repeat;
    background-size: contain;
    animation: wapsreapanimation 80s linear infinite;
}



@keyframes wapsreapanimation {
    from {
        background-position: 0%;
    }

    to {
        background-position: 500vw;
    }

}
</style>


