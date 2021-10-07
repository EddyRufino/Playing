<template>
    <div class="flex">
        <div class="max-w-xs">
            <li v-for="item in listTagsChoosed"
                class="inline-block p-2 m-1 bg-green-500 rounded cursor-pointer text-white hover:bg-green-600"
            >
                {{ item.name }}

                <input type="hidden" name="tag_id[]" :value="item.id"
                    class="border border-gray-300 text:sm py-1 px-2"
                >
            </li>
        </div>

        <div>
            <input type="text" name="name"
                class="border border-gray-300 text:sm py-1 px-2"
            >
            <p class="bg-blue-500 rounded text-white px-3 py-2 cursor-pointer block"
                @click="showModal = true"
            >
                Choose
            </p>
        </div>
    </div>

    <transition name="modal">
        <ModalTags
            :tags="tags"
            :showModal="showModal"
            @closeModal="showModal = false"
            @choosedTag="addTagChoosed($event)"
        ></ModalTags>
    </transition>
</template>

<script>
import ModalTags from "../components/ModalTags.vue";
export default {
    components: {
        ModalTags
    },
    props: ['tags'],
    data() {
        return {
            showModal: false,
            listTagsChoosed: [],
        }
    },
    methods: {
        addTagChoosed(tag) {
            if (this.listTagsChoosed.includes(tag) == false) {
                this.listTagsChoosed.unshift(tag)
            }
        },
    },
}
</script>

