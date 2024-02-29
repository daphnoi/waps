<template>
    <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
            <h3 class="text-5xl font-bold text-blue-900 ">
                <slot name="title" />
            </h3>

            <p class="mt-1 text-4xl font-md text-gray-900">
                <slot name="description" />
            </p>
        </div>

        <div class="px-4 sm:px-0">
            <slot name="aside" />
        </div>
    </div>
</template>
