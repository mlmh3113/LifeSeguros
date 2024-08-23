<template>

  <Head title="Home" />

  <Header />
  <HeroSlide />
  <Engagement />
  <InsurancesPricing />
  <PropositoLive />
  <Finance />
  <Footer />


</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import Header from "@/Components/Custom/Header.vue";
import HeroSlide from "@/Components/Custom/HeroSlide.vue"
import Engagement from "@/Components/Custom/Engagement.vue";
import InsurancesPricing from "@/Components/Custom/InsurancesPricing.vue";
import PropositoLive from "@/Components/Custom/PropositoLive.vue";
import Finance from "@/Components/Custom/Finance.vue";
import Footer from "@/Components/Custom/Footer.vue";

import { onMounted } from "vue";
import {
  initFlowbite,
  initAccordions,
  initCarousels,
  initCollapses,
  initDials,
  initDismisses,
  initDrawers,
  initDropdowns,
  initModals,
  initPopovers,
  initTabs,
  initTooltips,
} from "flowbite";

onMounted(() => {
  initFlowbite();
  initAccordions();
  initCarousels();
  initCollapses();
  initDials();
  initDismisses();
  initDrawers();
  initDropdowns();
  initModals();
  initPopovers();
  initTabs();
  initTooltips();
});



</script>
