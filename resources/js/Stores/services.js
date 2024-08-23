import { defineStore } from "pinia";
import axios from "axios";



export const useServicesStore = defineStore("services", {
    state: () => ({
        services: [],
    }),
    actions: {
        async getServices() {
            try {
                const response = await axios.get("/get-services");
                this.services = response.data;
            } catch (error) {
                console.error(error);
            }
        },
    },
});