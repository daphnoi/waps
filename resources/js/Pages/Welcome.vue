<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { Container } from 'postcss';
import { ContainerWithChildren } from 'postcss/lib/container';
import imglogo from '@/Components/img/SSR.png'
import imgfemale from '@/Components/img/Female.png'


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});


//const clientbanner 
</script>

<template>
    <Head title="Welcome" />
    <!--head navigation bar-->
    <div class=" fixed w-full bg-white static  shadow-xl flex items-center justify-between px-5 py-5  z-10 top-0 bg-fixed">
        <img src="https://waps.splitsecondsurveys.co.uk/images/logoS4.png" class=" max-w-[15vmin] ">

        <div
            class="flex justify-center  sm:gap-[0vmin] md:gap-[2vmin] lg:gap-[5vmin] xl:gap-[5vmin]  2xl:gap-[5vmin] sm:text-[2vmin] md:text-[2vmin] lg:text-[2vmin] xl:text-[2vmin] 2xl:text-[2vmin] sm:px-[2vmin] md:px-[5vmin] lg:px-[7vmin] xl:px-[6vmin]  2xl:px-[8vmin] ">
            <Link :href="route('login')" class=" text-gray shadow-xs rounded-lg py-2 px-5 hover:text-blue-600 max-w-20 ">
            Login</Link>
            <Link v-if="canRegister" :href="route('register')"
                class="text-gray shadow-xs rounded-lg py-2 px-5 hover:text-blue-600 max-w-20 ">
            Signup</Link>
        </div>
    </div>
    <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed "
        style="background-image:url(https://d1pnnwteuly8z3.cloudfront.net/images/dafc1e05-b0e8-4c6d-b375-4a62333bbd5a/71fe09e2-9320-4f61-8eca-067243e2ef68.jpeg)">
    </div>

    <!--firstpage in the landing page-->
    <div>
        <div>
            <img class="float-right  drop-shadow-lg overflow-hidden right-0  max-h-[100vh] w-[100vmin] -mr-20  "
                src="https://waps.splitsecondsurveys.co.uk/images/bg-lp.jpg   " />
        </div>
        <div
            class="  bg-[#1E71B8] text-white  h-[96vh] relative-parent  font-extrabold    px-10 py-80 sm:leading-[9vmin] md:leading-[9vmin] lg:leading-[8vmin] xl:leading-[7vmin] ">

            <div
                class="  bg-[#1E71B8] float-right absolute-child  absolute inset-y-[30vmin] inset-x-[0vmin] h-[50vmin]  rounded-full-lg rotate-[130deg]  overflow-hidden ">
            </div>

            <p class="justify-center absolute inset-y-[35vmin] "> <br> <span class="text-white-200  text-[11vmin]  ">
                    Word
                    Association <br>Production Software</span></p><br>
            <Link :href="route('login')"
                class=" relative  p-[2vmin] px-[6vmin] sm:text-[4vmin]  bg-[#FF9E45] text-white shadow-sm rounded-[70vmin] hover:bg-gray-600  transition ease-in-out delay-50 hover:-translate-y-1 hover:scale-100 duration-100 2xl:inset-y-[50vmin] inset-y-[30vmin]">
            Get Started</Link>
        </div>
    </div>
    
    <div class=" bg-fit relative bg-white text-gray h-[80vmin] font-extrabold  px-10 py-0 items-stretch  ">
        <div>
            <p
                class="font:family-serial text-[20vmin] font-extrabold p-5 float-left text-gray-700 justify-right leading-[15vmin] ml-0 py-[12vmin] hover:text-orange-400 ">
                OUR <br> <span class="text-[#1E71B8] "> Method</span> <span> </span><br>
            </p>
            <img class="float-right py-[45vh] w-[30vh]" src="./../Components/img/man.png">
            <p
                class=" text-stretch text-gray-600 px-6 py-[5vmin] sm:text-[2vmin] sm:leading-[4vmin] md:leading-[4vmin] lg:leading-[5vmin] xl:leading-[5vmin] 2xl:leading-[5vmin] sm:text-[4vmin]">
                <span class="text-gray-600 font-extrabold absolute "> The
                    way we define which attributes to use in an implicit test is through: </span> <br> <a
                    class=" text-blue-900"> 
                    <br> (a) Looking through our huge database
                    of attributes, </a> <a class="text-blue-900"> <br>(b) Discussions with the client </a> <a
                    class="text-blue-900"><br>(c) Searching for relevant sites on the internet and
                    applying our <span class="text-orange-600"> WAPS </span> <span class="text-blue-900"> tool. </span> <br>
                </a> <br>This can take one or more website addresses and crawl through
                counting the
                words
                used on the site. It can also search subdirectories of the website or it can analyse text pasted into the
                textbox. The output is a frequency table and a word cloud (where the frequency is represented by the size of
                the word).<br>
            </p>

        </div>

    </div>

    <div class="absolute bg-gray-200 w-full h-[100vh] left-0  bg-center repeat-x opacity-50 bg-fixed clientlogo "
        :style="{ 'background-image': 'url(' + imglogo + ')' }">
    </div>

    <div class="bg-gray-800 h-[100vh] p-7 ">
        <div
            class="float-right grid grid-cols-5  gap-y-[5vmin] gap-x-[35vmin] max-w-[100vmin]   px-[10vh] py-[13vh]  absolute text-white  inline-block flex   ">
            <div class="py-[10vh]">
                <p
                    class="bg-gray-200 rounded-full text-gray-800  text-4xl w-[30vmin]  text-center float-left p-11 font-bold  ">
                    Other Services</p>
            </div>
            <p class="bg-blue-900 rounded-full text-4xl w-[30vmin] p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90 duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/fluent/'">
                FLUENT
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/18-2.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin] p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/express-market-research-platform/'">
                EXPRESS
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/16-1.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin]  p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/impress-market-research-platform/'">
                IMPRESS
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/14-1.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin]  p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/fast-market-research-tool/'">
                FAST
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/16-3.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin] p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/impulse/'">
                IMPULSE
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/15-1.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin]  p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/imprint/'">
                IMPRINT
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/13-1.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin] p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/impact/'">
                IMPACT
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/18-1-1.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin]  p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer  hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/ast/'">
                ACT
                <img class="p-2 pt-1" src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/19-2.png" />
            </p>
            <p class="bg-blue-900 rounded-full  text-4xl w-[30vmin]  p-5 font-bold h-[30vmin] text-center transition ease-in-out delay-30 hover:scale-90  duration-150 cursor-pointer hover:bg-blue-700  shadow-lg transition duration-300"
                onclick="window.location.href = 'https://splitsecondresearch.co.uk/neuromarketing-and-biometric-recording/'">
                BIOMETRIC
                <img class="p-2 pt-1"
                    src="https://splitsecondresearch.co.uk/wp-content/uploads/2023/05/Dark-Grunge-Collage-Social-Media-Post-3-1.png" />
            </p>
        </div>
    </div>
    <div class="bg-gray-200 h-[10vh] grid grid-cols-7 gap-[0vmin] text-3xl text-black  p-9  inline-block cursor-pointer text-center">
        <p class=" hover:text-orange-400 font-bold" onclick="window.location.href = 'https://waps_s4.com/'">
                Home
            </p>
            <p class=" hover:text-orange-400 font-bold" onclick="window.location.href = 'https://splitsecondresearch.co.uk/who-we-are/'">
                Who We Are
            </p>
            <p class=" hover:text-orange-400 font-bold" onclick="window.location.href = 'https://splitsecondresearch.co.uk/our-methods/'">
                Our Methods
            </p>
            <div class="group inline-block">
                <button class=" text-black font-bold rounded inline-flex items-center  hover:text-orange-400">
                <span>Our Solutions</span>
                <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                </button>
                <div class="absolute z-10 hidden group-hover:block mt-2 py-2 w-45 bg-white rounded-md shadow-lg text-left">
                    <a href="https://splitsecondresearch.co.uk/packaging/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Packaging</a>
                    <a href="https://splitsecondresearch.co.uk/advertising/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Advertising</a>
                    <a href="https://splitsecondresearch.co.uk/digital-marketing/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Digital Marketing</a>
                    <a href="https://splitsecondresearch.co.uk/new-product-design/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">New Product Development</a>
                    <a href="https://splitsecondresearch.co.uk/product-claims/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Product Claims</a>
                    <a href="https://splitsecondresearch.co.uk/pricing-and-promotions/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Pricing and Promotions</a>
                    <a href="https://splitsecondresearch.co.uk/brand-equity/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Brand Equity</a>
                    <a href="https://splitsecondresearch.co.uk/brand-tracking/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Brand Tracking</a>
                    <a href="https://splitsecondresearch.co.uk/brand-positioning-swot-analysis/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Brand Positoning</a>
                    <a href="https://splitsecondresearch.co.uk/brand-positioning-swot-analysis/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Personal Branding & Public Image Insights </a>
                </div>
            </div>
            <div class="group inline-block">
                <button class=" text-black font-bold rounded inline-flex items-center  hover:text-orange-400">
                <span>Our Platforms</span>
                <svg class="fill-current h-4 w-4 ml-2 transition duration-300 transform group-hover:-rotate-180" viewBox="0 0 20 20"><path d="M10 7l-5 5 5 5V7z"/></svg>
                </button>
                <div class="absolute z-10 hidden group-hover:block mt-2 py-2 w-[30vmin] bg-white rounded-md shadow-lg text-left ">
                    <a href="https://splitsecondresearch.co.uk/fluent/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Fluent </a>
                    <a href="https://splitsecondresearch.co.uk/express-market-research-platform/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Express</a>
                    <a href="https://splitsecondresearch.co.uk/impress-market-research-platform/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Impress</a>
                    <a href="https://splitsecondresearch.co.uk/fast-market-research-tool/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Fast</a>
                    <a href="https://splitsecondresearch.co.uk/impulse/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Impulse</a>
                    <a href="https://splitsecondresearch.co.uk/imprint/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Imprint</a>
                    <a href="https://splitsecondresearch.co.uk/impact/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Impact</a>
                    <a href="https://splitsecondresearch.co.uk/ast/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Act</a>
                    <a href="https://splitsecondresearch.co.uk/neuromarketing-and-biometric-recording/" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Biometric</a>
                </div>
            </div>
            <p class=" hover:text-orange-400 font-bold" onclick="window.location.href = 'https://splitsecondresearch.co.uk/news/'">
                Blogs
            </p>
            <p class=" hover:text-orange-400 font-bold" onclick="window.location.href = 'https://splitsecondresearch.co.uk/events/">
                Events
            </p>
    </div>
    <div class="bg-white h-[50vh] ">
        <img class="float-right py-[2vh] px-[10vh] w-[80vh]" src="./../Components/img/SSRlogo2.png">
        <div class="p-24">
        <p class="text-7xl  text-blue-900 font-extrabold">Great things can happen<br> in a split-second.</p> 
        <p class="text-5xl  text-orange-500 font-extrabold">Start a conversation with us.</p> 
        <p class="text-3xl">Get in touch with our team of market research experts to see <br>
             how we can improve your marketing strategies.</p><br>
        <p class="text-4xl "> Email us at <span class="underline underline-offset-6"> info@splitsecondresearch.co.uk </span></p>
        <p class="text-3xl">Or you may contact us in the provided contact button (click here) below.</p>
        <div class="p-[2vmin] w-[40vmin] pl-0 ">
        <p class="text-2xl bg-orange-500 p-4 float-left  sm:text-[4vmin]   text-white shadow-sm rounded-[50vmin] cursor-pointer " onclick="window.location.href = 'https://splitsecondresearch.co.uk/contact-us/'"> Click here</p>
        </div>
        </div>
    </div>
    <div class="bg-[#1E71B8] h-[4vh]  ">
    </div>
</template>
<style>


.clientlogo {
    background-position: 0%;
    /* background-size: 100%; */
    background-repeat: repeat;
    background-size: contain;
    animation: clientlogoanimation 50s linear infinite;
}



@keyframes clientlogoanimation {
    from {
        background-position: 0%;
    }

    to {
        background-position: 500vw;
    }

}
</style>
