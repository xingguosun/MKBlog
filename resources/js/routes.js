// 1. 定义 (路由) 组件。
// 可以从其他文件 import 进来
// const Layout = { template: '<div>bar</div>' }
import VueRouter from 'vue-router';

const Carousel = require('./components/carousel.vue');
const List = require('./components/list.vue');
const Article = require('./components/article.vue');
// const User = {
//     template: '<div>User {{ $route.params.id }}</div>'
//   }
// 2. 定义路由
let routes = [
    {
        path : '/',
        components : Carousel
    },
    {
        path : '/development/docker/article/:id',
        components : Article,
        name : 'devDockerArticle'
    },
    {
        path : '/development/php/article/:id',
        components : Article,
        name : 'devPhpArticle'
    },
    {
        path : '/development',
        components : List,
        name : 'development'
    },
    {
        path : '/algorithm/classic/article/:id',
        components : Article,
        name : 'algoClassicArticle'
    },
    {
        path : '/algorithm',
        components : List,
        name : 'algorithm',
        props : {
            category : 'algorithm'
        }
    },
    {
        path : '/article/:id',
        components : Article
    },
    // { path: '/user/:id', component: User },
    {
        path : '/about/article/:id',
        components : Article,
        name : 'aboutArticle'
    },
    {
        path : '/about',
        components : List,
        props : {
            category : 'about'
        }
    },
]

export default new VueRouter({
    mode:'history',
    routes
})
// export default[
//     {
//         path : '/',
//         components : Carousel
//     },
//     {
//         path : '/development',
//         components : List,
//         props : {
//             category : 'development'
//         }
//     },
//     {
//         path : '/algorithm',
//         components : List,
//         props : {
//             category : 'algorithm'
//         }
//     },
//     {
//         path : '/article:id',
//         components : Article,
//         // watch: {
//         //     '$route' (to, from) {
//         //         // 对路由变化作出响应...
//         //         if(to.params.id!=from.params.id){
//         //             this.initPage();
//         //         }
//         //     }
//         // }
//     },
//     {
//         path : '/about',
//         components : List,
//         props : {
//             category : 'about'
//         }
//     },
// ]