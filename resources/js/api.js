import axios from 'axios'
 export default {
    //获取文章
    getArticleList: function (params) {
        var articles=[];
        axios.get('api/articles', {
            params: params
        }).then(response => {articles=response.data;})
    },
    //获取谋篇文章详情
    getArticleDetail: function (id) {
        return axios.get('api/articles'+id)
    }
 }