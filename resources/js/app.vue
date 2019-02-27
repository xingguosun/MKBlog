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
.layout-logo{
    width: 250px;
    height: 60px;
    line-height: 60px;
    background: #f9f9f9;
    color: #000;
    font-size: 20px;
    font-weight: 700;
    border-radius: 3px;
    float: left;
    position: relative;
    top: 15px;
    left: 20px;
    -webkit-font-smoothing: antialiased;
    animation-duration: 0.5s;
    animation-timing-function: ease;
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-direction: normal;
    animation-fill-mode: none;
    animation-play-state: running;
}
.layout-logo .line{
    width: 70px;
    height: 2px;
    background-color: #262a30;
    animation-duration: 0.5s;
    animation-timing-function: ease;
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-direction: normal;
    animation-fill-mode: none;
    animation-play-state: running;
    transition: width .3s;
}
.layout-nav{
    width: 380px;
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
    min-width: 250px;
} 
.scrollbar::-webkit-scrollbar { 
width: 6px; 
background-color: rgba(217,217,217,0.3); 
} 
.scrollbar::-webkit-scrollbar-thumb { 
background-color: rgba(217,217,217,0.3); 
border-radius: 6px; 
} 
.scrollbar::-webkit-scrollbar-track { 
box-shadow: inset 0 0 6px rgba(217,217,217,0.3); 
background-color: #fff; 
}

.collapsed-menu span{
    width: 0px;
    transition: width .2s ease;
}
.collapsed-menu i{
    transform: translateX(5px);
    transition: font-size .2s ease .2s, transform .2s ease .2s;
    vertical-align: middle;
    font-size: 22px;
}
</style>
<template>
    <div class="layout">
        <Layout>
            <Header>
                <Menu class="layout-menu" mode="horizontal" theme="dark" active-name="1">
                    <div class="layout-logo">
                        <p class="line"></p>
                            <router-link to="/">
                                MonkeyKing's Blog
                            </router-link>
                        <p class="line"></p>
                    </div>
                    <div class="layout-nav">
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
            <layout>
                <Sider class="scrollbar" collapsible :collapsed-width="78" v-model="isCollapsed" width=“250px” v-if="this.$route.path!='/' && this.$route.path!='/about'">
                    <Menu active-name="" :open-names="['1']">
                        <Submenu name="s1">
                            <template slot="title">
                                <i class="ivu-icon"><img width="20" src="../image/icon/php.png"/></i>PHP
                            </template>
                            <MenuGroup title=" - Laravel" on-select="">
                                <MenuItem name="1-1">
                                    <router-link to="/article/12">
                                        &nbsp;&nbsp;&nbsp;&nbsp;-- 安装Laravel
                                    </router-link>
                                </MenuItem>
                                <MenuItem name="1-2">
                                    <router-link to="/article/361">
                                        &nbsp;&nbsp;&nbsp;&nbsp;-- DB操作
                                    </router-link>
                                </MenuItem>
                            </MenuGroup>
                            <MenuGroup title="Item 2">
                                <MenuItem name="1-3">Option 3</MenuItem>
                                <MenuItem name="1-4">Option 4</MenuItem>
                            </MenuGroup>
                        </Submenu>
                        <Submenu name="s2">
                            <template slot="title">
                                <Icon type="ios-filing" />
                                Navigation Two
                            </template>
                            <MenuItem name="2-1">Option 5</MenuItem>
                            <MenuItem name="2-2">Option 6</MenuItem>
                            <Submenu name="s3">
                                <template slot="title">Submenu</template>
                                <MenuItem name="3-1">Option 7</MenuItem>
                                <MenuItem name="3-2">Option 8</MenuItem>
                            </Submenu>
                        </Submenu>
                        <Submenu name="s4">
                            <template slot="title">
                                <Icon type="ios-cog" />
                                Navigation Three
                            </template>
                            <MenuItem name="4-1">Option 9</MenuItem>
                            <MenuItem name="4-2">Option 10</MenuItem>
                            <MenuItem name="4-3">Option 11</MenuItem>
                            <MenuItem name="4-4">Option 12</MenuItem>
                        </Submenu>
                    </Menu>
                </Sider>
                <Content> 
                    <!-- :style="{padding: '0 50px'}" -->
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
            </layout>
            <Footer class="layout-footer-center">2019-2025 &copy; MonkeyKing</Footer>
        </Layout>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                isCollapsed: false
            };
        },
        computed: {
            menuitemClasses: function () {
                return [
                    'menu-item',
                    this.isCollapsed ? 'collapsed-menu' : ''
                ]
            }
        }
    }
</script>
