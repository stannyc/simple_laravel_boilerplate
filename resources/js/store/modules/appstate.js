const state = {
    isSideMenuOpen: false,
    isPagesMenuOpen: false,
    isNotificationsMenuOpen: false,
    isProfileMenuOpen: false
};

const mutations = {
    closeSideMenu(state, payload) {
        return (state.isSideMenuOpen = false);
    },
    toggleSideMenu(state, payload) {
        return (state.isSideMenuOpen = !state.isSideMenuOpen);
    },
    togglePagesMenu(state, payload) {
        return (state.isPagesMenuOpen = !state.isPagesMenuOpen);
    },
    closePagesMenu(state, payload) {
        return state.state.isPagesMenuOpen = false;
    },
    toggleNotificationsMenu(state) {
        return (state.isNotificationsMenuOpen = !state.isNotificationsMenuOpen);
    },
    closeNotificationsMenu(state) {
        return (state.isNotificationsMenuOpen = false);
    },
    toggleProfileMenu(state) {
        return (state.isProfileMenuOpen = !state.isProfileMenuOpen);
    },
    closeProfileMenu(state) {
        return (state.isProfileMenuOpen = false);
    }
};

const actions = {};

const getters = {
    isProfileMenuOpen(state) {
        return state.isProfileMenuOpen;
    },
    isNotificationsMenuOpen(state) {
        return state.isNotificationsMenuOpen;
    },
    isPagesMenuOpen(state) {
        return state.isPagesMenuOpen;
    },
    isSideMenuOpen(state) {
        return state.isSideMenuOpen;
    }
};

export default {
    state,
    mutations,
    actions,
    getters
};
