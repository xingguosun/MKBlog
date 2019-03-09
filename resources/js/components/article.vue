<style scoped>
.article{
    padding: 30px;
}
.article .title{
    text-align: center;
    margin: 10px 100px 30px 0px;
}
.newP{
    font-size: 15px;
    padding: 5px 0;
}
</style>
<template>
    <div class="article">
        <h1 class="title" :style="{'font-size': '1.7rem'}">{{article.title}}</h1>
        <p><vue-markdown :source="article.body"></vue-markdown></p>
        <BackTop></BackTop>
    </div>
</template>
<script>

import VueMarkdown from 'vue-markdown';
import hljs from 'highlight.js'
import 'highlight.js/styles/atom-one-dark.css'

export default {
    methods: {
        fetchData(){
            axios.get('/api/articles/'+this.$route.params.id).then(response => {
                this.article = response.data;
            })
            // console.log(this.$route.params.id);
        },
        highlightCode(){
            const preEl = document.querySelectorAll('pre');
            preEl.forEach((el) => {
                hljs.highlightBlock(el)
            });
        },
        updateStyle(){
            const updateStyleP = document.querySelectorAll('.article p');
            updateStyleP.forEach((el) => {
                el.style.cssText += 'font-size: 1.05rem; padding: 10px 0; line-height: 1.8;';
            });
            const updateStyleH2 = document.querySelectorAll('.article h2');
            updateStyleH2.forEach((el) => {
                el.style.cssText += 'font-size: 1.4rem; font-weight: 450; padding: 10px 0;';
            });
            const updateStyleH3 = document.querySelectorAll('.article h3');
            updateStyleH3.forEach((el) => {
                el.style.cssText += 'font-size: 1.3rem; padding: 10px 0;';
            });
            // document.querySelector('.article').innerHTML.replace('/ /g','');
            // console.log(document.querySelector('.article').innerHTML);
        }
    },
    created(){
        this.fetchData();
    },
    mounted(){
        this.highlightCode();
        this.updateStyle();
    },
    updated () {
        this.highlightCode();
        this.updateStyle();
    },
    data () {
        return {
            article: []
        }
    },
    components: {
        VueMarkdown
    },
    watch: {
        '$route' (to, from) {
            // 对路由变化作出响应...
            // if(to.params.id!=from.params.id){
            //     this.initPage();
            // }
            // this.id = to.query.id;
            // return this.getData();
            this.fetchData();

            const backTop = document.querySelector('.ivu-back-top');
            backTop.click();
        }
    }
}
</script>