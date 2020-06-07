// import Dashboard from './components/dashboard/Dashboard1.vue'
// import Profile from './components/admin/ProfileComponent.vue'
// import User from './components/admin/UserComponent.vue'

const Dashboard = () => import(/* webpackChunkName: "dashboard-1" */ './components/dashboard/Dashboard1.vue')
const Users = () => import(/* webpackChunkName: "dashboard-1" */ './components/appSettings/users/Users.vue')
const Profile = () => import(/* webpackChunkName: "dashboard-1" */ './components/appSettings/users/Profile.vue')

export const routes = [
    {
        path: '/',
        component: Dashboard
    },
    {
        path:'/profile',
        component:Profile
    },
    { 
        path:'/users',
        component:Users
    },

];