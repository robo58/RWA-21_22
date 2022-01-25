import axios from "vue-cli-plugin-axios/generator/templates/plugins/axios";

const baseUrl = 'http://localhost:5001';

const instance = axios.create({
    baseURL: baseUrl,
});

export default instance;