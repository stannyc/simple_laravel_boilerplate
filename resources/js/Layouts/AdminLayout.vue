<template>
  <div
    app
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen }"
  >
    <!-- --SIDEBAR-- -->
    <sidebar></sidebar>

    <!-- --MOBILE SIDE MENU -- -->
    <sidebar-mobile></sidebar-mobile>

    <!-- Backdrop -->
    <div
      v-show="isSideMenuOpen"
      class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
    ></div>

    <div class="flex flex-col flex-1">
      <!-- --HEADER-- -->
      <head-bar></head-bar>
      <main class="h-full pb-16 overflow-y-auto bg-white">
        <!-- Remove everything INSIDE this div to a really blank page -->
        <slot></slot>
      </main>
    </div>
  </div>
</template>

<script>
import Sidebar from "./../Components/Admin/Sidebar";
import SidebarMobile from "./../Components/Admin/SidebarMobile";
import HeadBar from "./../Components/Admin/HeadBar";
export default {
  methods: {

    togglePagesMenu() {
      return this.$store.commit("togglePagesMenu");
    },
    toggleSideMenu() {
      return this.$store.commit("toggleSideMenu");
    },
    toggleNotificationsMenu() {
      return this.$store.commit("toggleNotificationsMenu");
    },
    toggleProfileMenu() {
      return this.$store.commit("toggleProfileMenu");
    },
    closeProfileMenu() {
      return this.$store.commit("closeProfileMenu");
    },
    closeSideMenu() {
      this.$store.commit("closeSideMenu");
    },
  },
  computed: {
    isProfileMenuOpen() {
      return this.$store.getters.isProfileMenuOpen;
    },
    isNotificationsMenuOpen() {
      return this.$store.getters.isNotificationsMenuOpen;
    },
    isPagesMenuOpen() {
      return this.$store.getters.isPagesMenuOpen;
    },
    isSideMenuOpen() {
      return this.$store.getters.isSideMenuOpen;
    },
  },
  components: {
    Sidebar,
    SidebarMobile,
    HeadBar,
  },
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
/* Enter and leave animations can use different */
/* durations and timing functions.              */
.slide-fade-enter-active {
  transition: all 0.3s ease;
}
.slide-fade-leave-active {
  transition: all 0.3s ease;
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active below version 2.1.8 */ {
  transform: translateY(10px);
  opacity: 0;
}
</style>