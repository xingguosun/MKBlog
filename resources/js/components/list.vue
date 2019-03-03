<style scoped>
.list-group-item{
    border:none;
}
</style>
<template>
<div>
    <div :style="{width:'850px',margin:'0 auto'}">
        <ul class="list-group">
            <li class="list-group-item" v-for="article in list" :key="article.id">
                <Card :bordered="true">
                    <p slot="" :style="{'font-size':'1.1rem','font-weight':'500'}">
                        <router-link :to="{path:'/'+article.column+'/'+article.sub_column+'/article/'+article.id}">
                            {{article.title}}
                        </router-link>
                    </p>
                    <p :style="{'font-size': '1.02rem', 'margin-top': '10px'}">{{article.body.substring(0,50)}}...</p>
                </Card>
            </li>
        </ul>
    </div>
    <BackTop></BackTop>
</div>
</template>
<script>
    import api from '../api.js';
    export default {
    methods: {
        fetchData(){
            axios.get('api/articles',{
                params: {column: this.$route.name, timeDesc: true, take: 10}
            }).then(response => {
                this.list = response.data;
                console.log(this.list);
            })
        }
    },
        mounted(){
            this.fetchData();
        },
        data(){
            return {
                list:[]
            }
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
