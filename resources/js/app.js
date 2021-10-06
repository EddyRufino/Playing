require('./bootstrap');

import { createApp } from "vue";

import Welcome from './components/Welcome';
import Tags from "./components/Tags";
// import ModalTags from "./components/ModalTags";

const app = createApp({
  components: {
    Welcome,
    Tags
    // ModalTags
  }
});

app.mount('#app');
