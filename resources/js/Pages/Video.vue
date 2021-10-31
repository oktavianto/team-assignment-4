<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Upload Video
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="w-full bg-white p-5 shadow rounded">
                    <form @submit.prevent="submit">
                        <div class="w-full mb-2">
                            <label class="font-bold">Judul</label>
                            <input type="text" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" v-model="form.name" />
                            <input-error :message="form.errors.name" class="mt-2" />
                        </div>
                        <div class="w-full mb-2">
                            <label class="font-bold">Description</label>
                            <input type="text" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" v-model="form.description" />
                            <input-error :message="form.errors.description" class="mt-2" />
                        </div>
                        <div class="w-full mb-2">
                            <label class="font-bold">Thumbnail</label>
                            <input type="file" class="w-full" @input="form.thumbnail = $event.target.files[0]" />
                            <input-error :message="form.errors.thumbnail" class="mt-2" />
                        </div>
                        <div class="w-full mb-2">
                            <label class="font-bold">Video</label>
                            <input type="file" class="w-full" @input="form.video = $event.target.files[0]" />
                            <input-error :message="form.errors.video" class="mt-2" />
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { useForm } from '@inertiajs/inertia-vue3'
    import InputError from '@/Jetstream/InputError.vue'

    export default defineComponent({
        components: {
            AppLayout,
            InputError,
        },

        setup () {
            const form = useForm({
                name: null,
                description: null,
                thumbnail: null,
                video: null,
            })

            function submit() {
                form.post(route('video.store'))
            }

            return { form, submit }
        },
    })
</script>
