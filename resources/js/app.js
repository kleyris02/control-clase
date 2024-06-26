import "./bootstrap";
import "../css/app.css";
import "@protonemedia/laravel-splade/dist/style.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";

import PlanCreate from "./components/PlanCreate.vue";
import Evaluacion from "./components/Evaluacion.vue";
import Barchart from "./components/Barchart.vue";

const el = document.getElementById("app");

const app = createApp({
    render: renderSpladeApp({ el }),
});

app.use(SpladePlugin, {
    max_keep_alive: 10,
    transform_anchors: false,
    progress_bar: true,
});

app.component("PlanCreate", PlanCreate);
app.component("Evaluacion", Evaluacion);
app.component("Chart", Barchart);

app.mount(el);
