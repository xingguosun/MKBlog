<style scoped>
.layout{
    border: 1px solid #d7dde4;
    background: #f5f7f9;
    position: relative;
    border-radius: 4px;
    overflow: hidden;
}
.layout-menu{
    height: 100%;
    line-height: 600%
}
.layout-nav{
    width: 450px;
    margin: 0 auto;
    margin-right: 20px;
}
.layout-nav li{
    font-size: 1.1em;
    font-weight: normal;
    padding: 0 10px;
}
.layout-nav li a{
    border-radius: 5px;
    padding: 3px 5px;
    transition: all 0.3s ease-in-out;
    background: #f9f9f9;
    color: #000;
}
.layout-nav li a:hover{
    cursor: pointer;
    background: #8c0776;
    color: #FFF;
}
.layout-nav li a i{
    margin-right: 6px;
    position: relative;
    top: -2px;
}
.layout-footer-center{
    text-align: center;
}
.scrollbar { 
    overflow-y: auto;
    overflow-x: hidden;
    width: 250px;
    max-width: 300px;
    min-width: 250px;
    flex: 0 0 250px;
} 
.scrollbar::-webkit-scrollbar { 
width: 6px; 
background-color: rgba(134, 2, 101, 0.699); 
} 
.scrollbar::-webkit-scrollbar-thumb { 
background-color: rgba(134, 2, 101, 0.699); 
border-radius: 6px; 
} 
.scrollbar::-webkit-scrollbar-track { 
box-shadow: inset 0 0 6px rgba(134, 2, 101, 0.699); 
background-color: #fff; 
}
</style>
<template>
    <div class="layout">
        <Sider class="scrollbar" :style="{position: 'fixed', height: '100vh', left: 0, width: '250px', 'max-width': '300px'}">
            
            <sider-info  v-if="this.$route.path=='/' || this.$route.path=='/about'"></sider-info>
            <sider-development  v-if="this.$route.name=='development' || this.$route.name=='devPhpArticle' || this.$route.name=='devDockerArticle'"></sider-development>
            <sider-algorithm v-if="this.$route.name=='algorithm' || this.$route.name=='algoClassicArticle'"></sider-algorithm>
        </Sider>
        <Layout :style="{marginLeft: '250px'}">
            <Header :style="{background: '#fff', boxShadow: '0 2px 3px 2px rgba(0,0,0,.1)', padding: '0px'}">
                <Menu class="layout-menu" mode="horizontal" theme="dark" active-name="1">
                    <div class="layout-nav">
                        <MenuItem name="0">
                            <router-link to="/">
                                <Icon type="md-home" />首页
                            </router-link>
                        </MenuItem>
                        <MenuItem name="1">
                            <router-link to="/development">
                                <Icon type="md-code-working" />开发
                            </router-link>
                        </MenuItem>
                        <MenuItem name="2">
                            <router-link to="/algorithm">
                                <Icon type="md-barcode" />算法
                            </router-link>
                        </MenuItem>
                        <MenuItem name="3">
                            <router-link to="/about">
                                <Icon type="ios-contact" />关于
                            </router-link>
                        </MenuItem>
                        <MenuItem name="4">
                            <router-link to="/search">
                                <Icon type="md-search" />搜索
                            </router-link>
                        </MenuItem>
                    </div>
                </Menu>
            </Header>
            <Content :style="{padding: '0', 'margin-top': '8px'}">
                <router-view>
                    <!-- <Breadcrumb :style="{margin: '20px 0'}">
                        <BreadcrumbItem>Home</BreadcrumbItem>
                        <BreadcrumbItem>Components</BreadcrumbItem>
                        <BreadcrumbItem>Layout</BreadcrumbItem>
                    </Breadcrumb> -->
                    <!-- <Card>
                        <div style="min-height: 200px;">
                            Content
                        </div>
                    </Card> -->
                    <!-- <carousel></carousel> -->
                </router-view>
            </Content>
        </Layout>
    </div>
</template>
<script>
    import SiderInfo from './components/SiderInfo.vue';
    import SiderDevelopment from './components/SiderDevelopment.vue';
    import SiderAlgorithm from './components/SiderAlgorithm.vue';
    export default {
        data () {
            return {
                isCollapsed: false
            };
            console.log(this.$route);
        },
        components: {
            SiderInfo,
            SiderDevelopment,
            SiderAlgorithm
        }
    }
</script>
