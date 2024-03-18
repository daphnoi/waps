<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './../components/sidebar.vue';
import { onMounted, ref, watch, defineProps } from 'vue';
import { useForm, usePage, router } from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import Input from '@/Components/Input.vue';
import moment from 'moment';
import InputError from '@/Components/InputError.vue';
import Dropdown from '@/Components/Dropdown.vue';
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import { useFileDialog } from '@vueuse/core';


const props = defineProps([
    "Item",
    "Project"
])


const { files, open, reset, onChange } = useFileDialog()
onChange((files) => {
})

const backgroundColor = ref([
    [
        "Aqua", "#00FFFF"
    ],
    [
        "Aquamarine", "#7FFFD4"
    ],
    [
        "Azure", "#F0FFFF"
    ],
    [
        "Beige", "#F5F5DC"
    ],
    [
        "Bisque", "#FFE4C4"
    ],
    [
        "Black", "#000000"
    ],
    [
        "Blanched Almond", "#FFEBCD"
    ],
    [
        "Blue", "#0000FF"
    ],
    [
        "Blue Violet", "#8A2BE2"
    ],
    [
        "Brown", "#FFE4C4"
    ],
    [
        "Burly Wood", "#DEB887"
    ],
    [
        "Cadet Blue", "#5F9EA0"
    ],
    [
        "Chartreuse", "#7FFF00"
    ],
    [
        "Chocolate", "#D2691E"
    ],
    [
        "Coral", "#FF7F50"
    ], [
        "Cornflower Blue", "#6495ED"
    ],
    [
        "Cornsilk", "#FFF8DC"
    ],
    [
        "Crimson", "#DC143C"
    ], [
        "Cyan", "#FFE4C4"
    ],
    [
        "Dark Blue", "#00008B"
    ],
    [
        "DarkCyan", "#008B8B"
    ],
    [
        "Dark Golden Rod", "#B8860B"
    ],
    [
        "Dark Gray", "#A9A9A9"
    ],
    [
        "Dark Green", "#006400"
    ],
    [
        "Dark Khaki", "#BDB76B"
    ],
    [
        "Dark Magenta", "#8B008B"
    ],
    [
        "Dark Olive Greenn", "#556B2F"
    ],
    [
        "Dark Orange", "#FF8C00"
    ],
    [
        "Lavender", "#957DAD"
    ],
    [
        "Thistle Pink", "#E0BBe4"
    ],
    [
        "Candy Pink", "#FEC8D8"
    ],
    [
        "Misty Rose", "#FFDFD3"
    ],
    [
        "Pastel Pink", "#FFC4C4"
    ],
    [
        "Periwinkle", "#CBC7DD"
    ],
    [
        "Pale Orange", "#FFDFBD"
    ],
    [
        "Palest Yellow", "#F8FFEB"
    ],
    [
        "Dark Green", "#006400"
    ],
    [
        "Dark Green", "#006400"
    ],
    [
        "Dark Green", "#006400"
    ],
    [
        "Dark Green", "#006400"
    ],
])

const sort = ref([
    [
        "Highest",
    ],
    [
        "Lowest",
    ],
    [
        "Random",
    ],
])

const rotation = ref([
    [
        "All Vertical",
    ],
    [
        "All Horizontal",
    ],
    [
        "All Random",
    ],
])

const theme = ref([
    [
        "Gradient ",
    ],
    [
        "Random - Dark",
    ],
    [
        "Random - Light",
    ],
])

const shape = ref([
    [
        "Sqaure ",
    ],
    [
        "Diamond ",
    ],
    [
        "Circle ",
    ],
    [
        "X ",
    ],
    [
        "Star ",
    ],
    [
        "Pentagon ",
    ],
    [
        "Trianle Forward ",
    ],
    [
        "Diagonal Cover Half Down ",
    ],
    [
        "Diagonal Cover Half Up ",
    ],
    [
        "Paper Wheel ",
    ],
    [
        "Propeller ",
    ],
    [
        "Custom ",
    ],
])

const font = ref([
    [
        "Brotherside Signature", "BrothersideSignature400"
    ],
    [
        "Createland", "Createland400"
    ],
    [
        "Grilanty", "Grilanty400"
    ],
    [
        "Love", "LoveMatch400"
    ],
    [
        "Night", "NightForest400"
    ],
    [
        "Prospect Regular", "ProspectPERSONALUSEONLYRegular400"
    ],
    [
        "Stannum", "StannumTrialBold700"
    ],
    [
        "Bering Sea", "BeringSeaPersonalUse400"
    ],
    [
        "Comunismo Regular", "ComunismoRegular400"
    ],
    [
        "Happy Easter Egg", "HappyEasterEgg500"
    ],
    [
        "Boston", "boston"
    ],
    [
        "Bunny Rabbits", "BunnyRabbits"
    ],
    [
        "Cats", "CatsAlphabet"
    ],
    [
        "Guadalupe Italic", "GuadalupeItalic"
    ],
    [
        "Mrs. Monster", "mrsmonster"
    ],
    [
        "Orange", "orangejuice2"
    ],
    [
        "Remachine Script", "RemachineScript_Personal_Use"
    ],
    [
        "Wind Song", "Windsong"
    ],
    [
        "Lobster 1", "Lobster_1"
    ],
    [
        "Lobster 2", "LobsterTwo-Regular"
    ],
    [
        "Mona Shark", "MonaShark"
    ],
    [
        "Sofia", "Sofia-Regular"
    ],
    [
        "War Wound", "WarWound"
    ],
])


</script>

<template>
    <AppLayout title="Generate Item">
        <sidebar />
        <div class=" h-[100vmin] ">
            <!-- <div class=" mx-auto py-4 sm:px-9 ml-[22vh]   flex inline-flex uppercase group " >
                        <nav class="flex   py-3 px-4 rounded-lg " aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                            <a :href="route('projects.index')" class="text-3xl text-white  inline-flex items-center">
                                <svg class="w-7 h-9 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                                Projects
                            </a>
                            </li>
                            <li>
                            <div class="flex items-center ">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <p class="text-white ml-1 md:ml-2 text-3xl  font-medium ">{{ props.Project }} - Items</p>
                            </div>
                            </li>
                            <li>
                            <div class="flex items-center ">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <p class="text-white ml-1 md:ml-2 text-3xl  font-medium "> Generate</p>
                            </div>
                            </li>
                        </ol>
                        </nav>
                    </div> -->
            <div class=" bg-gray-900 shadow-lg  mt-0 text-center  h-[8vmin] ">
                <a
                    class="text-[#ffffff] text-3xl  text-gray-300 font-extrabold mt-6  font-xl inline-block uppercase">Controllers</a>
                <div class="relative inline-block text-left mt-6 ">
                    <div class="group inline-block  text-left -mt-1 ml-[1vmax]">
                        <button
                            class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-2 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <span>Theme</span>
                            <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 7l-5 5 5 5V7z" />
                            </svg>
                        </button>
                        <div
                            class="absolute z-10 hidden group-hover:block right-0 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <template v-for="(col, key) in theme" :key="key"> <a
                                    class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ col[0] }}</a>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left mt-6 ml-[1vmax]">
                    <div class="group inline-block  text-left -mt-1 -ml-[1vmin]">
                        <button
                            class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-2 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <span>Shape</span>
                            <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 7l-5 5 5 5V7z" />
                            </svg>
                        </button>
                        <div
                            class="absolute  overflow-y-scroll h-[25vmin] z-10 hidden group-hover:block right-0 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <template v-for="(size, key) in shape" :key="key">
                                <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ size[0] }}</a>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left mt-6 -ml-[1vmax]">
                </div>
                <div class="relative inline-block text-left ml-[1.5vmax]">
                    <div class="group inline-block  text-left">
                        <button class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-2 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset 
                            ring-gray-300 hover:bg-gray-50">
                            <span>Font Style</span>
                            <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 7l-5 5 5 5V7z" />
                            </svg>
                        </button>
                        <div
                            class="absolute overflow-y-scroll h-[25vmin] z-10 hidden group-hover:block right-0 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <template v-for="(text, key) in font" :key="key">
                                <option value="BrothersideSignature400" data-v-30254f34=""
                                    :style="`font-family:${text[1]}`">{{ text[0] }}</option>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left mt-6 1-ml-[1vmax]">
                    <div class="group inline-block  text-left -mt-1 ml-[1vmin]">
                        <button
                            class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <span>Rotation</span>
                            <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 7l-5 5 5 5V7z" />
                            </svg>
                        </button>
                        <div
                            class="absolute z-10 hidden group-hover:block right-0 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <template v-for="(rotate, key) in rotation" :key="key">
                                <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">{{ rotate[0]}}</a></template>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left mt-6 -ml-[1vmax]">
                    <div class="group inline-block  text-left ml-[3vmin] mr-5">
                        <button
                            class=" inline-flex rounded-md bg-white px-5 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <span>Sort</span>
                            <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 7l-5 5 5 5V7z" />
                            </svg>
                        </button>
                        <div
                            class="absolute z-10 hidden group-hover:block right-5 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <template v-for="(choose, key) in sort" :key="key">
                                <a class="block px-2 py-2 text-gray-800 hover:bg-gray-200">{{ choose[0]}}</a>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="relative inline-block text-left mt-6 1-ml-[1vmax] ">
                    <div class="group inline-block  text-left -ml-[1vmin] ">
                        <button
                            class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                            <span>Background Color</span>
                            <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M10 7l-5 5 5 5V7z" />
                            </svg>
                        </button>
                        <div
                            class="absolute z-10 overflow-y-scroll h-[25vmin] hidden group-hover:block right-0 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <template v-for="(color, key) in backgroundColor" :key="key">
                                <a class="block px-4 py-2 text-gray-800 " :style="`background-color:${color[1]}`">{{
                                color[0] }}</a>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" ml-[30vmin] grid">
                <div
                    class="md:flex bg-gray-900 rounded-lg shadow-lg p-2 mt-9 mr-[3vmin] gap-2 overflow-y-scroll h-[80vh]">
                    <div class="w-[90%] mb-2 lg:mb-0 lg:w-[100%] ">
                        <div class="container mx-auto bg-gray-200 h-[50vmin] rounded-md ">
                            <div
                                class="container bg-gray-350 shadow-lg h-[7vmin]  font-bold text-2xl text-marginleft-[2vmin] inline-block-fixed">
                                <button type="button" @click="open()"
                                    class="inline-flex ml-[66.5vmin] mt-[1vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 ">Upload
                                    Text File</button>
                                <label for="checked-toggle"
                                    class="inline-block relative -mt-[5vmin] mb-7 cursor-pointer ml-[60vmin]"
                                    data-v-30254f34="">
                                    <input type="checkbox" id="checked-toggle" class="sr-only peer" value=""
                                        data-v-30254f34="">
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
                                        data-v-30254f34="">
                                    </div>
                                </label>
                                <!-- <p class="ml-5 -mt- font-bold text-2xl text-gray-700 pt-4 inline-block fixed">Text Editor</p> -->
                                <template v-if="files">
                                    <p>You have selected: <b>{{ `${files.length} ${files.length === 1 ? 'file' :
                                            'files'}` }}</b></p>
                                    <li v-for="file of files" :key="file.name">
                                        {{ file.name }}
                                    </li>
                                </template>
                            </div>
                            <div id="app" class="h-[35vh] w-[80vh] overflow-hidden border ml-3 mr-3 mt-4">
                                <quill-editor></quill-editor>
                            </div>
                            <button type="button"
                                class=" ml-[72vmin] mt-[1vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Analyse</button>
                        </div>
                        <div class="mt-[1vmin] container mx-auto bg-gray-200 h-[50vmin] rounded-md">
                            <div class="container bg-gray-350 shadow-lg h-[7vmin] rounded">
                                <p class=" ml-5 mt-2 font-bold text-2xl text-gray-700 pt-4 inline-block justify-center">
                                    Words Extracted</p>
                                <button type="button"
                                    class="mt-[39vmin] ml-[66.8vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Download
                                    (img)</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto bg-gray-200 h-[101vmin] rounded-md">
                        <div class="container relative bg-blue-350 shadow-lg h-[7vmin] inline-block">
                            <p class="  ml-5 mt-2 font-bold text-2xl text-gray-700 pt-4 inline-block justify-center">
                                Analysis</p>
                            <img class="w-[20%] h-10 ml-[65vmin] -mt-11"
                                src="https://www.svgrepo.com/show/345315/graph-chart-data-analytics-statistic-report-analysis.svg">
                            <button type="button"
                                class="flex mt-[90.5vmin] ml-[63vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-2 py-2.5 text-center ">Download
                                CSV</button>
                        </div>

                        <div class="ml-5 mr-5 -mt-[89vmin]">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ml-5 mr-5 text-center">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            CLOUD ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            WORDS
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            REPEATING COUNT
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                            0
                                        </th>
                                        <td class="px-6 py-4">
                                            Apple MacBook Pro 17"
                                        </td>
                                        <td class="px-6 py-4">
                                            10
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </th>
                                        <td class="px-6 py-4">
                                            Microsoft Surface Pro
                                        </td>
                                        <td class="px-6 py-4">
                                            8
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 text-center">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2
                                        </th>
                                        <td class="px-6 py-4">
                                            Magic Mouse 2
                                        </td>
                                        <td class="px-6 py-4">
                                            5
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>