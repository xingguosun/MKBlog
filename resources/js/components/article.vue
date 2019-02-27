<style scoped>
.article .title{
    text-align: center;
    margin: 30px 100px 30px 0px;
}
</style>
<template>
    <div class="article">
        <h1 class="title">{{article.title}}</h1>
        <p><vue-markdown :source="article.body" highlight.js></vue-markdown></p>
    </div>
</template>
<script>

import VueMarkdown from 'vue-markdown';
export default {
    methods: {
        fetchData(){
            axios.get('/api/articles/'+this.$route.params.id).then(response => {
                this.article = response.data;
            })
        }
    },
    created(){
        this.fetchData();
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
        }
    }
}
</script>