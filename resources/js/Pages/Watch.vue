<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ video.name }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white border border-gray-200 rounded-lg p-6">
                    <div class="flex items-center space-x-6 mb-4">
                        <video class="w-full" controls><source :src="'/videos/'+video.video" type="video/mp4"></video>
                        </div>
                        <div>
                            <div class="text-blue-600 font-bold text-xl">{{ video.name }}</div>
                            <div class="text-gray-800">{{ video.description }}</div>
                            <p class="text-gray-700">{{ video.created_at }}</p>
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
            props: ['video'],
            components: {
                AppLayout,
            },
        })
    </script>
