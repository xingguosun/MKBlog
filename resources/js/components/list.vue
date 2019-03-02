<style scoped>
.list-group-item{
    border:none;
}
</style>
<template>
    <div style="">
        <ul class="list-group">
            <li class="list-group-item" v-for="article in list" :key="article.id">
                <Card :bordered="true">
                    <p slot="" :style="{'font-size':'1.1rem','font-weight':'500'}">
                        <router-link :to="{path:'/development/article/'+article.id}">
                            {{article.title}}
                        </router-link>
                    </p>
                    <p :style="{'font-size': '1.02rem', 'margin-top': '10px'}">{{article.body.substring(0,50)}}...</p>
                </Card>
            </li>
        </ul>
    </div>
</template>
<script>
    import api from '../api.js';
    export default {
        mounted(){
            // var apiData =api.getArticleList(this.category);
            // this.list =apiData;
            // console.log(this.list);
            axios.get('api/articles',{
                params: {timeDesc: true, take: 10}
            }).then(response => {
                this.list = response.data;
                console.log(this.list);
            })
        },
        data(){
            return {
                list:[]
            }
        }
    }
</script>
