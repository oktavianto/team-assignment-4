<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-white border border-gray-200 hover:border-blue-600 rounded-lg p-6">
                        <div class="flex items-center space-x-6 mb-4">
                            <img class="w-full h-56 object-cover object-center rounded" 
                            src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80" alt="photo">
                        </div>
                        <div>
                            <a href="#" class="text-blue-600 font-bold text-xl">Judul Videonya</a>
                            <p class="text-gray-700">20-20-2021</p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 hover:border-blue-600 rounded-lg p-6">
                        <div class="flex items-center space-x-6 mb-4">
                            <img class="w-full h-56 object-cover object-center rounded" 
                            src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80" alt="photo">
                        </div>
                        <div>
                            <a href="#" class="text-blue-600 font-bold text-xl">Judul Videonya</a>
                            <p class="text-gray-700">20-20-2021</p>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 hover:border-blue-600 rounded-lg p-6">
                        <div class="flex items-center space-x-6 mb-4">
                            <img class="w-full h-56 object-cover object-center rounded" 
                            src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80" alt="photo">
                        </div>
                        <div>
                            <a href="#" class="text-blue-600 font-bold text-xl">Judul Videonya</a>
                            <p class="text-gray-700">20-20-2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
        },
    })
</script>
