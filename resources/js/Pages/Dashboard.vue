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
                    <div class="bg-white border border-gray-200 hover:border-blue-600 rounded-lg p-6" v-for="data in video">
                        <div class="flex items-center space-x-6 mb-4">
                            <img class="w-full h-56 object-cover object-center rounded" 
                            :src="'/thumbnails/'+data.thumbnail" alt="photo">
                        </div>
                        <div>
                            <jet-nav-link :href="route('video.watch', data.id)" class="text-blue-600 font-bold text-xl">{{ data.name }}</jet-nav-link>
                            <p class="text-gray-700">{{ data.created_at }}</p>
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
    import JetNavLink from '@/Jetstream/NavLink.vue'

    export default defineComponent({
        props: ['video'],
        components: {
            AppLayout,
            JetNavLink,
        },
    })
</script>
