const state = {
    isSideMenuOpen: false,
    isPagesMenuOpen: false,
    isNotificationsMenuOpen: false
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
    toggleNotificationsMenu(state) {
        return (state.isNotificationsMenuOpen = !state.isNotificationsMenuOpen);
    },
    toggleProfileMenu(state){
        return state.isNotificationsMenuOpen = !state.isNotificationsMenuOpen;
    },
    closeNotificationsMenu(state){
        return state.isNotificationsMenuOpen = false;
    }
    /*    setSessionString(state, payload){
       state.session_string = payload;
   },
   setChatId(state, payload){
       state.chat_id = payload;
   } */
};

const actions = {};

const getters = {
    isNotificationsMenuOpen(state){
        return state.isNotificationsMenuOpen
    },
    isPagesMenuOpen(state) {
        return state.isPagesMenuOpen;
    },
    isSideMenuOpen(state) {
        return state.isSideMenuOpen;
    }
    /*     getChatId(state){
        return state.chat_id;
    },
    getSessionString(state){
        return state.session_string;
    } */
};

export default {
    state,
    mutations,
    actions,
    getters
};
