<template>
    <div class="flex">
        <input type="text" name="name"
            class="border border-gray-300 text:sm py-1 px-2"
        >
        <p class="bg-blue-500 rounded text-white px-3 py-2 cursor-pointer"
            @click="showModal = true"
        >
            Choose
        </p>
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
            this.listTagsChoosed.push(tag.name);
        },
    },
    watch: {
        listTagsChoosed: 'addTagChoosed'
        // listTagsChoosed: {
        //     handler(newValue) {
        //         this.listTagsChoosed.push(newValue[0]);
        //         console.log("nuevo:", newValue);
        //     },
        //     deep: true
        // },
    }
}
</script>

