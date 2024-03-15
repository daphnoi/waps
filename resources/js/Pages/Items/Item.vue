<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import sidebar from './../components/sidebar.vue';
import { onMounted, ref, watch, defineProps} from 'vue';
import { useForm, usePage,router } from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import Input from '@/Components/Input.vue';
import moment from 'moment';
import InputError from '@/Components/InputError.vue';
import Dropdown from '@/Components/Dropdown.vue';



const props = defineProps([
    "Item"
]) 


</script>

<template>
    <AppLayout title="Generate Item">
            <sidebar/>
            <div class=" h-[100vmin] ">
                <div class="md:flex bg-gray-900 shadow-lg p-2 mr-full h-[8vmin]">
                        <a class="text-[#ffffff] font-bold ml-[28vmin] mt-2 font-xl">Controllers</a>
                        <div class="relative inline-block text-left mt-6 ml-[1vmax]">
                            <div class="group inline-block  text-left -mt-1 ml-[1vmax]">
                        <button class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <span>Theme</span>
                        <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                        </button>
                        <div class="absolute z-10 hidden group-hover:block right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Choose a Color Type</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Gradient</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Random - Dark</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Random - Light</a>
                        </div>
                    </div>
                    </div>
                    <div class="relative inline-block text-left mt-6 ml-[1vmax]">
                            <div class="group inline-block  text-left -mt-1 -ml-[1vmin]">
                        <button class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <span>Shape</span>
                        <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                        </button>
                        <div class="absolute z-10 hidden group-hover:block right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Choose a Shape</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Sqaure</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Diamond</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Circle</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">X</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Star</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Pentagon</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Triangle</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Trianle Forward</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Diagonal Cover Half Down</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Diagonal Cover Half Up</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Paper Wheel</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Propeller</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Custom</a>
                            
                        </div>
                    </div>
                    </div>
                    <div class="relative inline-block text-left mt-6 -ml-[1vmax]">
                            <div class="group inline-block  text-left -mt-1 ml-[3vmin]">
                        <button class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <span>Background Color</span>
                        <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                        </button>
                        <div class="absolute z-10 hidden group-hover:block right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <option disabled="" data-v-30254f34="">Choose a Background Color</option>
                                <option class="font-bold" value="#00FFFF" data-v-30254f34="" style="background-color: rgb(0, 255, 255);">Aqua</option>
                                <option class="font-bold" value="#7FFFD4" data-v-30254f34="" style="background-color: rgb(127, 255, 212);">Aquamarine</option>
                                <option class="font-bold" value="#F0FFFF" data-v-30254f34="" style="background-color: rgb(240, 255, 255);">Azure</option>
                                <option class="font-bold" value="#F5F5DC" data-v-30254f34="" style="background-color: rgb(245, 245, 220);">Beige</option>
                                <option class="font-bold" value="#FFE4C4" data-v-30254f34="" style="background-color: rgb(255, 228, 196);">Bisque</option>
                                <option class="font-bold" value="#000000" data-v-30254f34="" style="background-color: rgb(0, 0, 0);">Black</option>
                                <option class="font-bold" value="#FFEBCD" data-v-30254f34="" style="background-color: rgb(255, 235, 205);">Blanched Almond</option>
                                <option class="font-bold" value="#0000FF" data-v-30254f34="" style="background-color: rgb(0, 0, 255);">Blue</option>
                                <option class="font-bold" value="#8A2BE2" data-v-30254f34="" style="background-color: rgb(138, 43, 226);">Blue Violet</option>
                                <option class="font-bold" value="#A52A2A" data-v-30254f34="" style="background-color: rgb(165, 42, 42);">Brown</option>
                                <option class="font-bold" value="#DEB887" data-v-30254f34="" style="background-color: rgb(222, 184, 135);">Burly Wood</option>
                                <option class="font-bold" value="#5F9EA0" data-v-30254f34="" style="background-color: rgb(95, 158, 160);">Cadet Blue</option>
                                <option class="font-bold" value="#7FFF00" data-v-30254f34="" style="background-color: rgb(127, 255, 0);">Chartreuse</option>
                                <option class="font-bold" value="#D2691E" data-v-30254f34="" style="background-color: rgb(210, 105, 30);">Chocolate</option>
                                <option class="font-bold" value="#FF7F50" data-v-30254f34="" style="background-color: rgb(255, 127, 80);">Coral</option>
                                <option class="font-bold" value="#6495ED" data-v-30254f34="" style="background-color: rgb(100, 149, 237);">Cornflower Blue</option>
                                <option class="font-bold" value="#FFF8DC" data-v-30254f34="" style="background-color: rgb(255, 248, 220);">Cornsilk</option>
                                <option class="font-bold" value="#DC143C" data-v-30254f34="" style="background-color: rgb(220, 20, 60);">Crimson</option>
                                <option class="font-bold" value="#00FFFF" data-v-30254f34="" style="background-color: rgb(0, 255, 255);">Cyan</option>
                                <option class="font-bold" value="#00008B" data-v-30254f34="" style="background-color: rgb(0, 0, 139);">Dark Blue</option>
                                <option class="font-bold" value="#008B8B" data-v-30254f34="" style="background-color: rgb(0, 139, 139);">DarkCyan</option>
                                <option class="font-bold" value="#B8860B" data-v-30254f34="" style="background-color: rgb(184, 134, 11);">Dark Golden Rod</option>
                                <option class="font-bold" value="#A9A9A9" data-v-30254f34="" style="background-color: rgb(169, 169, 169);">Dark Gray</option>
                                <option class="font-bold" value="#006400" data-v-30254f34="" style="background-color: rgb(0, 100, 0);">Dark Green</option>
                                <option class="font-bold" value="#BDB76B" data-v-30254f34="" style="background-color: rgb(189, 183, 107);">Dark Khaki</option>
                                <option class="font-bold" value="#8B008B" data-v-30254f34="" style="background-color: rgb(139, 0, 139);">Dark Magenta</option>
                                <option class="font-bold" value="#556B2F" data-v-30254f34="" style="background-color: rgb(85, 107, 47);">Dark Olive Green</option>
                                <option class="font-bold" value="#FF8C00" data-v-30254f34="" style="background-color: rgb(255, 140, 0);">Dark Orange</option>
                                <option class="font-bold" value="#9932CC" data-v-30254f34="" style="background-color: rgb(153, 50, 204);">Dark Orchid</option>
                                <option class="font-bold" value="#8B0000" data-v-30254f34="" style="background-color: rgb(139, 0, 0);">Dark Red</option>
                                <option class="font-bold" value="#E9967A" data-v-30254f34="" style="background-color: rgb(233, 150, 122);">Dark Salmon</option>
                                <option class="font-bold" value="#8FBC8F" data-v-30254f34="" style="background-color: rgb(143, 188, 143);">Dark Sea Green</option>
                                <option class="font-bold" value="#483D8B" data-v-30254f34="" style="background-color: rgb(72, 61, 139);">Dark Slate Blue</option>
                                <option class="font-bold" value="#2F4F4F" data-v-30254f34="" style="background-color: rgb(47, 79, 79);">Dark Slate Gray</option>
                                <option class="font-bold" value="#2F4F4F" data-v-30254f34="" style="background-color: rgb(47, 79, 79);">Dark Slate Grey</option>
                                <option class="font-bold" value="#00CED1" data-v-30254f34="" style="background-color: rgb(0, 206, 209);">Dark Turquoise</option>
                                <option class="font-bold" value="#9400D3" data-v-30254f34="" style="background-color: rgb(148, 0, 211);">Dark Violet</option>
                                <option class="font-bold" value="#2F4F4F" data-v-30254f34="" style="background-color: rgb(47, 79, 79);">Deep Pink</option>
                                <option class="font-bold" value="#00BFFF" data-v-30254f34="" style="background-color: rgb(0, 191, 255);">Deep Sky Blue</option>
                                <option class="font-bold" value="#696969" data-v-30254f34="" style="background-color: rgb(105, 105, 105);">Dim Gray</option>
                                <option class="font-bold" value="#696969" data-v-30254f34="" style="background-color: rgb(105, 105, 105);">Dim Grey</option>
                                <option class="font-bold" value="#1E90FF" data-v-30254f34="" style="background-color: rgb(30, 144, 255);">Dodger Blue</option>
                                <option class="font-bold" value="#B22222" data-v-30254f34="" style="background-color: rgb(178, 34, 34);">Fire Brick</option>
                                <option class="font-bold" value="#FFFAF0" data-v-30254f34="" style="background-color: rgb(255, 250, 240);">Floral White</option>
                                <option class="font-bold" value="#228B22" data-v-30254f34="" style="background-color: rgb(34, 139, 34);">Forest Green</option>
                                <option class="font-bold" value="#FF00FF" data-v-30254f34="" style="background-color: rgb(255, 0, 255);">Fuchsia</option>
                                <option class="font-bold" value="#DCDCDC" data-v-30254f34="" style="background-color: rgb(220, 220, 220);">Gainsboro</option>
                                <option class="font-bold" value="#F8F8FF" data-v-30254f34="" style="background-color: rgb(248, 248, 255);">Ghost White</option>
                                <option class="font-bold" value="#FFD700" data-v-30254f34="" style="background-color: rgb(255, 215, 0);">Gold</option>
                                <option class="font-bold" value="#DAA520" data-v-30254f34="" style="background-color: rgb(218, 165, 32);">Golden Rod</option>
                                <option class="font-bold" value="#808080" data-v-30254f34="" style="background-color: rgb(128, 128, 128);">Gray</option>
                                <option class="font-bold" value="#008000" data-v-30254f34="" style="background-color: rgb(0, 128, 0);">Green</option>
                                <option class="font-bold" value="#ADFF2F" data-v-30254f34="" style="background-color: rgb(173, 255, 47);">Green Yellow</option>
                                <option class="font-bold" value="#F0FFF0" data-v-30254f34="" style="background-color: rgb(240, 255, 240);">Honey Dew</option>
                                <option class="font-bold" value="#FF69B4" data-v-30254f34="" style="background-color: rgb(255, 105, 180);">Hot Pink</option>
                                <option class="font-bold" value="#CD5C5C" data-v-30254f34="" style="background-color: rgb(205, 92, 92);">Indian Red</option>
                                <option class="font-bold" value="#4B0082" data-v-30254f34="" style="background-color: rgb(75, 0, 130);">Indigo</option>
                                <option class="font-bold" value="#FFFFF0" data-v-30254f34="" style="background-color: rgb(255, 255, 240);">Ivory</option>
                                <option class="font-bold" value="#F0E68C" data-v-30254f34="" style="background-color: rgb(240, 230, 140);">Khaki</option>
                                <option class="font-bold" value="#E6E6FA" data-v-30254f34="" style="background-color: rgb(230, 230, 250);">Lavender</option>
                                <option class="font-bold" value="#FFF0F5" data-v-30254f34="" style="background-color: rgb(255, 240, 245);">Lavender Blush</option>
                                <option class="font-bold" value="#7CFC00" data-v-30254f34="" style="background-color: rgb(124, 252, 0);">Lawn Green</option>
                                <option class="font-bold" value="#FFFACD" data-v-30254f34="" style="background-color: rgb(255, 250, 205);">Lemon Chiffon</option>
                                <option class="font-bold" value="#ADD8E6" data-v-30254f34="" style="background-color: rgb(173, 216, 230);">Light Blue</option>
                                <option class="font-bold" value="#F08080" data-v-30254f34="" style="background-color: rgb(240, 128, 128);">Light Coral</option>
                                <option class="font-bold" value="#E0FFFF" data-v-30254f34="" style="background-color: rgb(224, 255, 255);">Light Cyan</option>
                                <option class="font-bold" value="#FAFAD2" data-v-30254f34="" style="background-color: rgb(250, 250, 210);">Light Golden Rod Yellow</option>
                                <option class="font-bold" value="#D3D3D3" data-v-30254f34="" style="background-color: rgb(211, 211, 211);">Light Gray</option>
                                <option class="font-bold" value="#90EE90" data-v-30254f34="" style="background-color: rgb(144, 238, 144);">Light Green</option>
                                <option class="font-bold" value="#FFB6C1" data-v-30254f34="" style="background-color: rgb(255, 182, 193);">Light Pink</option>
                                <option class="font-bold" value="#FFA07A" data-v-30254f34="" style="background-color: rgb(255, 160, 122);">Light Salmon</option>
                                <option class="font-bold" value="#20B2AA" data-v-30254f34="" style="background-color: rgb(32, 178, 170);">Light Sea Green</option>
                                <option class="font-bold" value="#87CEFA" data-v-30254f34="" style="background-color: rgb(135, 206, 250);">Light Sky Blue</option>
                                <option class="font-bold" value="#778899" data-v-30254f34="" style="background-color: rgb(119, 136, 153);">Light Slate Gray</option>
                                <option class="font-bold" value="#B0C4DE" data-v-30254f34="" style="background-color: rgb(176, 196, 222);">Light Steel Blue</option>
                                <option class="font-bold" value="#FFFFE0" data-v-30254f34="" style="background-color: rgb(255, 255, 224);">Light Yellow</option>
                                <option class="font-bold" value="#00FF00" data-v-30254f34="" style="background-color: rgb(0, 255, 0);">Lime</option>
                                <option class="font-bold" value="#32CD32" data-v-30254f34="" style="background-color: rgb(50, 205, 50);">Lime Green</option>
                                <option class="font-bold" value="#FAF0E6" data-v-30254f34="" style="background-color: rgb(250, 240, 230);">Linen</option>
                                <option class="font-bold" value="#FF00FF" data-v-30254f34="" style="background-color: rgb(255, 0, 255);">Magenta</option>
                                <option class="font-bold" value="#800000" data-v-30254f34="" style="background-color: rgb(128, 0, 0);">Maroon</option>
                                <option class="font-bold" value="#66CDAA" data-v-30254f34="" style="background-color: rgb(102, 205, 170);">Medium Aqua Marine</option>
                                <option class="font-bold" value="#0000CD" data-v-30254f34="" style="background-color: rgb(0, 0, 205);">Medium Blue</option>
                                <option class="font-bold" value="#BA55D3" data-v-30254f34="" style="background-color: rgb(186, 85, 211);">Medium Orchid</option>
                                <option class="font-bold" value="#9370DB" data-v-30254f34="" style="background-color: rgb(147, 112, 219);">Medium Purple</option>
                                <option class="font-bold" value="#3CB371" data-v-30254f34="" style="background-color: rgb(60, 179, 113);">Medium Sea Green</option>
                                <option class="font-bold" value="#7B68EE" data-v-30254f34="" style="background-color: rgb(123, 104, 238);">Medium Slate Blue</option>
                                <option class="font-bold" value="#00FA9A" data-v-30254f34="" style="background-color: rgb(0, 250, 154);">Medium Spring Green</option>
                                <option class="font-bold" value="#48D1CC" data-v-30254f34="" style="background-color: rgb(72, 209, 204);">Medium Turquoise</option
                                ><option class="font-bold" value="#C71585" data-v-30254f34="" style="background-color: rgb(199, 21, 133);">Medium Violet Red</option>
                                <option class="font-bold" value="#191970" data-v-30254f34="" style="background-color: rgb(25, 25, 112);">Midnight Blue</option>
                                <option class="font-bold" value="#F5FFFA" data-v-30254f34="" style="background-color: rgb(245, 255, 250);">Mint Cream</option>
                                <option class="font-bold" value="#FFE4E1" data-v-30254f34="" style="background-color: rgb(255, 228, 225);">Misty Rose</option>
                                <option class="font-bold" value="#FFE4B5" data-v-30254f34="" style="background-color: rgb(255, 228, 181);">Moccasin</option>
                                <option class="font-bold" value="#FFDEAD" data-v-30254f34="" style="background-color: rgb(255, 222, 173);">Navajo White</option>
                                <option class="font-bold" value="#000080" data-v-30254f34="" style="background-color: rgb(0, 0, 128);">Navy</option>
                                <option class="font-bold" value="#FDF5E6" data-v-30254f34="" style="background-color: rgb(253, 245, 230);">Old Lace</option>
                                <option class="font-bold" value="#808000" data-v-30254f34="" style="background-color: rgb(128, 128, 0);">Olive</option>
                                <option class="font-bold" value="#6B8E23" data-v-30254f34="" style="background-color: rgb(107, 142, 35);">Olive Drab</option>
                                <option class="font-bold" value="#FFA500" data-v-30254f34="" style="background-color: rgb(255, 165, 0);">Orange</option>
                                <option class="font-bold" value="#FF4500" data-v-30254f34="" style="background-color: rgb(255, 69, 0);">Orange Red</option>
                                <option class="font-bold" value="#DA70D6" data-v-30254f34="" style="background-color: rgb(218, 112, 214);">Orchid</option>
                                <option class="font-bold" value="#EEE8AA" data-v-30254f34="" style="background-color: rgb(238, 232, 170);">Pale Golden Rod</option>
                                <option class="font-bold" value="#98FB98" data-v-30254f34="" style="background-color: rgb(152, 251, 152);">PaleGreen</option>
                                <option class="font-bold" value="#AFEEEE" data-v-30254f34="" style="background-color: rgb(175, 238, 238);">Pale Turquoise</option>
                                <option class="font-bold" value="#DB7093" data-v-30254f34="" style="background-color: rgb(219, 112, 147);">Pale Violet Red</option>
                                <option class="font-bold" value="#FFEFD5" data-v-30254f34="" style="background-color: rgb(255, 239, 213);">Papaya Whip</option>
                                <option class="font-bold" value="#FFDAB9" data-v-30254f34="" style="background-color: rgb(255, 218, 185);">Peach Puff</option>
                                <option class="font-bold" value="#CD853F" data-v-30254f34="" style="background-color: rgb(205, 133, 63);">Peru</option>
                                <option class="font-bold" value="#FFC0CB" data-v-30254f34="" style="background-color: rgb(255, 192, 203);">Pink</option>
    	                        <option class="font-bold" value="#DDA0DD" data-v-30254f34="" style="background-color: rgb(221, 160, 221);">Plum</option>
    	                        <option class="font-bold" value="#B0E0E6" data-v-30254f34="" style="background-color: rgb(176, 224, 230);">Powder Blue</option>
    	                        <option class="font-bold" value="#800080" data-v-30254f34="" style="background-color: rgb(128, 0, 128);">Purple</option>
    	                        <option class="font-bold" value="#663399" data-v-30254f34="" style="background-color: rgb(102, 51, 153);">Rebecca Purple</option>
    	                        <option class="font-bold" value="#FF0000" data-v-30254f34="" style="background-color: rgb(255, 0, 0);">Red</option>
    	                        <option class="font-bold" value="#BC8F8F" data-v-30254f34="" style="background-color: rgb(188, 143, 143);">Rosy Brown</option>
    	                        <option class="font-bold" value="#4169E1" data-v-30254f34="" style="background-color: rgb(65, 105, 225);">Royal Blue</option>
    	                        <option class="font-bold" value="#8B4513" data-v-30254f34="" style="background-color: rgb(139, 69, 19);">Saddle Brown</option>
    	                        <option class="font-bold" value="#FA8072" data-v-30254f34="" style="background-color: rgb(250, 128, 114);">Salmon</option>
    	                        <option class="font-bold" value="#F4A460" data-v-30254f34="" style="background-color: rgb(244, 164, 96);">Sandy Brown</option>
    	                        <option class="font-bold" value="#2E8B57" data-v-30254f34="" style="background-color: rgb(46, 139, 87);">Sea Green</option>
    	                        <option class="font-bold" value="#FFF5EE" data-v-30254f34="" style="background-color: rgb(255, 245, 238);">Sea Shell</option>
    	                        <option class="font-bold" value="#A0522D" data-v-30254f34="" style="background-color: rgb(160, 82, 45);">Sienna</option>
    	                        <option class="font-bold" value="#C0C0C0" data-v-30254f34="" style="background-color: rgb(192, 192, 192);">Silver</option>
    	                        <option class="font-bold" value="#87CEEB" data-v-30254f34="" style="background-color: rgb(135, 206, 235);">SkyBlue</option>
    	                        <option class="font-bold" value="#6A5ACD" data-v-30254f34="" style="background-color: rgb(106, 90, 205);">Slate Blue</option>
    	                        <option class="font-bold" value="#708090" data-v-30254f34="" style="background-color: rgb(112, 128, 144);">SlateGray</option>
    	                        <option class="font-bold" value="#FFFAFA" data-v-30254f34="" style="background-color: rgb(255, 250, 250);">Snow</option>
    	                        <option class="font-bold" value="#00FF7F" data-v-30254f34="" style="background-color: rgb(0, 255, 127);">Spring Green</option>
    	                        <option class="font-bold" value="#4682B4" data-v-30254f34="" style="background-color: rgb(70, 130, 180);">Steel Blue</option>
    	                        <option class="font-bold" value="#D2B48C" data-v-30254f34="" style="background-color: rgb(210, 180, 140);">Tan</option>
    	                        <option class="font-bold" value="#008080" data-v-30254f34="" style="background-color: rgb(0, 128, 128);">Teal</option>
    	                        <option class="font-bold" value="#D8BFD8" data-v-30254f34="" style="background-color: rgb(216, 191, 216);">Thistle</option>
    	                        <option class="font-bold" value="#FF6347" data-v-30254f34="" style="background-color: rgb(255, 99, 71);">Tomato</option>
    	                        <option class="font-bold" value="#40E0D0" data-v-30254f34="" style="background-color: rgb(64, 224, 208);">Turquoise</option>
    	                        <option class="font-bold" value="#EE82EE" data-v-30254f34="" style="background-color: rgb(238, 130, 238);">Violet</option>
    	                        <option class="font-bold" value="#F5DEB3" data-v-30254f34="" style="background-color: rgb(245, 222, 179);">Wheat</option>
    	                        <option class="font-bold" value="#FFFFFF" data-v-30254f34="" style="background-color: rgb(255, 255, 255);">White</option>
    	                        <option class="font-bold" value="#F5F5F5" data-v-30254f34="" style="background-color: rgb(245, 245, 245);">White Smoke</option>
    	                        <option class="font-bold" value="#FFFF00" data-v-30254f34="" style="background-color: rgb(255, 255, 0);">Yellow</option>
                                <option class="font-bold" value="#9ACD32" data-v-30254f34="" style="background-color: rgb(154, 205, 50);">YellowGreen</option>
                        </div>
                    </div>
                    </div>
                    <div class="relative inline-block text-left mt-6 -ml-[1vmax]">
                            <div class="group inline-block  text-left -mt-1 ml-[3vmin]">
                        <button class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <span>Font Style</span>
                        <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                        </button>
                        <div class="absolute z-10 hidden group-hover:block right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <option disabled="" data-v-30254f34="">Choose a Font Style</option>
                                <option value="BrothersideSignature400" data-v-30254f34="" style="font-family: BrothersideSignature400;">Brotherside Signature</option>
                                <option value="Createland400" data-v-30254f34="" style="font-family: Createland400;">Createland</option>
                                <option value="Grilanty400" data-v-30254f34="" style="font-family: Grilanty400;">Grilanty</option>
                                <option value="LoveMatch400" data-v-30254f34="" style="font-family: LoveMatch400;">Love Match</option>
                                <option value="NightForest400" data-v-30254f34="" style="font-family: NightForest400;">Night Forest</option>
                                <option value="ProspectPERSONALUSEONLYRegular400" data-v-30254f34="" style="font-family: ProspectPERSONALUSEONLYRegular400;">Prospect Regular</option>
                                <option value="StannumTrialBold700" data-v-30254f34="" style="font-family: StannumTrialBold700;">Stannum Bold</option>
                                <option value="StannumTrialLight300" data-v-30254f34="" style="font-family: StannumTrialLight300;">Stannum Light</option>
                                <option value="StannumTrialMedium500" data-v-30254f34="" style="font-family: StannumTrialMedium500;">Stannum Medium</option>
                                <option value="StannumTrialRegular400" data-v-30254f34="" style="font-family: StannumTrialRegular400;">Stannum Regular</option>
                                <option value="BeringSeaPersonalUse400" data-v-30254f34="" style="font-family: BeringSeaPersonalUse400;">Bering Sea</option>
                                <option value="ComunismoRegular400" data-v-30254f34="" style="font-family: ComunismoRegular400;">Comunismo Regular</option>
                                <option value="HappyEasterEgg500" data-v-30254f34="" style="font-family: HappyEasterEgg500;">Happy Easter Egg</option>
                                <option value="MeriendaBold" data-v-30254f34="" style="font-family: MeriendaBold;">Merienda Bold</option>
                                <option value="MeriendaRegular" data-v-30254f34="" style="font-family: MeriendaRegular;">Merienda Regular</option>
                                <option value="neonledlight400" data-v-30254f34="" style="font-family: neonledlight400;">Neon Led Light</option>
                                <option value="AliceandtheWickedMonster" data-v-30254f34="" style="font-family: AliceandtheWickedMonster;">Alice &amp; the Wicked Monster</option>
                                <option value="Amperzand" data-v-30254f34="" style="font-family: Amperzand;">Amperzand</option>
                                <option value="Arizonia-Regular" data-v-30254f34="" style="font-family: Arizonia-Regular;">Arizona Regular</option>
                                <option value="armalite" data-v-30254f34="" style="font-family: armalite;">Armalite</option>
                                <option value="BADABB__" data-v-30254f34="" style="font-family: BADABB__;">BADABB</option>
                                <option value="BeforeTheRain_personal_use_demo" data-v-30254f34="" style="font-family: BeforeTheRain_personal_use_demo;">Before The Rain</option>
                                <option value="boston" data-v-30254f34="" style="font-family: boston;">Boston</option>
                                <option value="BunnyRabbits" data-v-30254f34="" style="font-family: BunnyRabbits;">Bunny Rabbits</option>
                                <option value="CalligraphyFLF" data-v-30254f34="" style="font-family: CalligraphyFLF;">Calligraphy FLF</option>
                                <option value="Capsmall" data-v-30254f34="" style="font-family: Capsmall;">Capsmall</option>
                                <option value="Capsmall_clean" data-v-30254f34="" style="font-family: Capsmall_clean;">Capsmall Clean</option>
                                <option value="Captureit" data-v-30254f34="" style="font-family: Captureit;">Capture it</option>
                                <option value="CatsAlphabet" data-v-30254f34="" style="font-family: CatsAlphabet;">Cats Alphabet</option>
                                <option value="charlotte" data-v-30254f34="" style="font-family: charlotte;">Charllote</option>
                                <option value="ConfettiStream" data-v-30254f34="" style="font-family: ConfettiStream;">Confetti Stream</option>
                                <option value="ennobled" data-v-30254f34="" style="font-family: ennobled;">Ennobled</option>
                                <option value="FatTats" data-v-30254f34="" style="font-family: FatTats;">Fat Tats</option>
                                <option value="FFF_Tusj" data-v-30254f34="" style="font-family: FFF_Tusj;">FFF Tusj</option>
                                <option value="Fridays" data-v-30254f34="" style="font-family: Fridays;">Fridays</option>
                                <option value="Gretoon" data-v-30254f34="" style="font-family: Gretoon;">Gretoon</option>
                                <option value="GretoonHighlight" data-v-30254f34="" style="font-family: GretoonHighlight;">Grentoon Highlight</option>
                                <option value="FromCartoonBlocks" data-v-30254f34="" style="font-family: FromCartoonBlocks;">Cartoon Blocks</option>
                                <option value="GuadalupeItalic" data-v-30254f34="" style="font-family: GuadalupeItalic;">Guadalupe Italic</option>
                                <option value="Guadalupe" data-v-30254f34="" style="font-family: Guadalupe;">Guadalupe</option>
                                <option value="LuckiestGuy" data-v-30254f34="" style="font-family: LuckiestGuy;">Luckiest Guy</option>
                                <option value="mrsmonster" data-v-30254f34="" style="font-family: mrsmonster;">Mrs. Monster</option>
                                <option value="mrsmonster3dital" data-v-30254f34="" style="font-family: mrsmonster3dital;">Mrs. Monster 3 Dital</option>
                                <option value="mrsmonsteracad" data-v-30254f34="" style="font-family: mrsmonsteracad;">Mrs. Monster Acad</option>
                                <option value="mrsmonsterboldout" data-v-30254f34="" style="font-family: mrsmonsterboldout;">Mrs. Monster Bold Out</option>
                                <option value="mrsmonstercond" data-v-30254f34="" style="font-family: mrsmonstercond;">Mrs. Monster Cond</option>
                                <option value="mrsmonstercondital" data-v-30254f34="" style="font-family: mrsmonstercondital;">Mrs. Monster Cond Ital</option>
                                <option value="mrsmonsterexpand" data-v-30254f34="" style="font-family: mrsmonsterexpand;">Mrs. Monster Expand</option>
                                <option value="mrsmonsterexpandital" data-v-30254f34="" style="font-family: mrsmonsterexpandital;">Mrs. Monster Expand Ital</option>
                                <option value="mrsmonsterital" data-v-30254f34="" style="font-family: mrsmonsterital;">Mrs. Mrs. Monster Ital</option>
                                <option value="mrsmonsterleft" data-v-30254f34="" style="font-family: mrsmonsterleft;">Mrs. Monster Left</option>
                                <option value="mrsmonsterout" data-v-30254f34="" style="font-family: mrsmonsterout;">Mrs. Monster Out</option>
                                <option value="mrsmonsteroutital" data-v-30254f34="" style="font-family: mrsmonsteroutital;">Mrs. Monster Out Ital</option>
                                <option value="mrsmonsterrotal" data-v-30254f34="" style="font-family: mrsmonsterrotal;">Mrs. Monster rotal</option>
                                <option value="mrsmonsterrotate" data-v-30254f34="" style="font-family: mrsmonsterrotate;">Mrs. Monster Rotate</option>
                                <option value="mrsmonsterrotate2" data-v-30254f34="" style="font-family: mrsmonsterrotate2;">Mrs. Monster Rotate 2</option>
                                <option value="orangejuice2" data-v-30254f34="" style="font-family: orangejuice2;">Orange Juice</option>
                                <option value="planetbe" data-v-30254f34="" style="font-family: planetbe;">Planet Be</option>
                                <option value="RemachineScript_Personal_Use" data-v-30254f34="" style="font-family: RemachineScript_Personal_Use;">Remachine Script</option>
                                <option value="SnackerComic_PerosnalUseOnly" data-v-30254f34="" style="font-family: SnackerComic_PerosnalUseOnly;">Snacker Comic</option>
                                <option value="STONB___" data-v-30254f34="" style="font-family: STONB___;">STONB</option>
                                <option value="Windsong" data-v-30254f34="" style="font-family: Windsong;">Wind Song</option>
                                <option value="AeroliteCPone" data-v-30254f34="" style="font-family: AeroliteCPone;">Aerolite CP one</option>
                                <option value="AeroliteCPtwo" data-v-30254f34="" style="font-family: AeroliteCPtwo;">Aerolite CP Two</option>
                                <option value="charlotte" data-v-30254f34="" style="font-family: charlotte;">Charllote</option>
                                <option value="Guadalupe" data-v-30254f34="" style="font-family: Guadalupe;">Guadalupe</option>
                                <option value="Lobster_1" data-v-30254f34="" style="font-family: Lobster_1;">Lobster 1</option>
                                <option value="LobsterTwo-Bold" data-v-30254f34="" style="font-family: LobsterTwo-Bold;">Lobster 2</option>
                                <option value="LobsterTwo-BoldItalic" data-v-30254f34="" style="font-family: LobsterTwo-BoldItalic;">lobster 2 Bold Italic</option>
                                <option value="LobsterTwo-Italic" data-v-30254f34="" style="font-family: LobsterTwo-Italic;">Lobster 2 Italic</option>
                                <option value="LobsterTwo-Regular" data-v-30254f34="" style="font-family: LobsterTwo-Regular;">Lobster 2 Regular</option>
                                <option value="MonaShark" data-v-30254f34="" style="font-family: MonaShark;">Mona Shark</option>
                                <option value="Sofia-Regular" data-v-30254f34="" style="font-family: Sofia-Regular;">Sofia Regular</option>
                                <option value="WarWound" data-v-30254f34="" style="font-family: WarWound;">War Wound</option>
                        </div>
                    </div>
                    </div>
                    <div class="relative inline-block text-left mt-6 1-ml-[1vmax]">
                            <div class="group inline-block  text-left -mt-1 ml-[1vmin]">
                        <button class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <span>Rotation</span>
                        <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                        </button>
                        <div class="absolute z-10 hidden group-hover:block right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">All Vertical</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">All Horizontal</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">All Random</a>
                        </div>
                    </div>
                    </div>
                    <div class="relative inline-block text-left mt-6 -ml-[1vmax]">
                            <div class="group inline-block  text-left -mt-1 ml-[3vmin]">
                        <button class=" inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                        <span>Sort</span>
                        <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                        </button>
                        <div class="absolute z-10 hidden group-hover:block right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Highest</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Lowest</a>
                            <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Random</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class=" ml-[30vmin] grid">
                    <div class="md:flex bg-gray-900 rounded-lg shadow-lg p-2 mt-10 mr-[3vmin] gap-2  overflow-y-scroll h-[80vh]">
                    <div class="w-[100%] mb-2 lg:mb-0 lg:w-[100%] ">
                        <div class="container mx-auto bg-gray-200 h-[50vmin] rounded-md ">
                            <div class="container bg-gray-350 shadow-lg h-[7vmin] inline-block">
                                <p class=" ml-5 font-bold text-xl pt-4 inline-block" >Text Editor</p>
                                <button type="button" class=" ml-[51vmin] -mt-5 text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Upload Text File</button>
                            </div>
                            <button type="button" class="mt-[38.3vmin] ml-[67.9vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4  focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Analayse</button>
                        </div>
                        <div class="mt-[2vmin] container mx-auto bg-gray-200 h-[48vmin] rounded-md">
                            <div class="container bg-gray-350 shadow-lg h-[7vmin] rounded">
                                <p class="ml-5 font-bold text-xl pt-4">Words Extracted</p>
                                <button type="button" class="mt-[39vmin] ml-[63.3vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Download (img)</button>
                            </div>
                        </div>
                    </div>
                    <div class="container mx-auto bg-gray-200 h-[100vmin] rounded-md">
                        <div class="container relative bg-blue-350 shadow-lg h-[7vmin] inline-block">
                            <p class=" ml-[2vmin] mt-6 font-bold text-2xl" >Analysis</p>
                            <img class="w-[20%] h-10 ml-[6.3vmin] -mt-11" src="https://www.svgrepo.com/show/345315/graph-chart-data-analytics-statistic-report-analysis.svg">
                        <button type="button" class="flex mt-[90vmin] ml-[63.8vmin] text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Download CSV</button>
                        </div>
                        
                        <div class="relative ml-5 mr-5 -mt-[89vmin]">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ml-5 mr-5 text-center">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            CLOUD ID
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            WORDS
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            REAPETING COUNT
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
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
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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