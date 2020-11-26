require("./bootstrap");
require("moment");

import Vue from "vue";

import { InertiaApp } from "@inertiajs/inertia-vue";
import { InertiaForm } from "laravel-jetstream";
import PortalVue from "portal-vue";
import store from "./store";

Vue.store = store;
Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);


Vue.directive('clickaway', {
  priority: 700,
  bind (el, binding, vnode){
    
    window.event = function (event) { 
    	console.log('emitting event')
    	//el.vm.$emit(self.expression,event) 
 	  }
    el.addEventListener('click', window.stopProp)
    document.body.addEventListener('click',window.event)
  },
  
  unbind(el, binding, vnode) {
  	console.log('unbind')
    el.removeEventListener('click', vnode.stopProp)
    document.body.removeEventListener('click', window.event)
  },
  stopProp(event) {event.stopPropagation() }
})

new Vue({
    store: store,
    render: h =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: name => require(`./Pages/${name}`).default
            }
        })
}).$mount(app);
