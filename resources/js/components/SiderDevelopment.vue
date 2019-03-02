<style scoped>
.layout-logo{
    width: 250px;
    height: 60px;
    line-height: 60px;
    /* background: #f9f9f9; */
    color: #000;
    font-size: 20px;
    font-weight: 700;
    border-radius: 3px;
    float: left;
    position: relative;
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
    width: 100px;
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
.ivu-menu-item-group{
    line-height: 0.6;
}
.ivu-menu-item-selected a{
    background: #a0056a;
    color: #FFF;
}
.ivu-menu-item a:hover{
    background: #a0056a;
    color: #FFF;
}
.ivu-menu-item:not(.layout-logo){
    padding: 0 !important;
    margin: 1px 0;
}
.ivu-menu-item:not(.layout-logo) a{
    padding: 14px 43px;
    display: block;
    margin: 0;
}
</style>

<template>
    <div>
        <Menu theme="light" width="auto">
            <MenuItem name="s0" class="layout-logo" :style="{'margin-bottom':'50px'}">
                <p class="line"></p>
                    <router-link to="/">
                        MonkeyKing's Blog
                    </router-link>
                <p class="line"></p>
            </MenuItem>
            <Submenu name="s1">
                <template slot="title">
                    <i class="ivu-icon"><img width="20" src="../../image/icon/icon_docker.svg"/></i>Docker
                </template>
                <MenuGroup title=" - 简介" on-select="">
                    <MenuItem name="1-1-1">
                        <router-link to="/development/docker/article/364">
                            &nbsp;&nbsp;&nbsp;&nbsp;-- 是什么
                        </router-link>
                    </MenuItem>
                    <MenuItem name="1-1-2">
                        <router-link to="/development/php/article/361">
                            &nbsp;&nbsp;&nbsp;&nbsp;-- 为什么
                        </router-link>
                    </MenuItem>
                </MenuGroup>
                <MenuGroup title=" - 基本概念" on-select="">
                    <MenuItem name="1-2-1">
                        <router-link to="/development/php/article/112">
                            &nbsp;&nbsp;&nbsp;&nbsp;-- 镜像
                        </router-link>
                    </MenuItem>
                    <MenuItem name="1-2-2">
                        <router-link to="/development/php/article/361">
                            &nbsp;&nbsp;&nbsp;&nbsp;-- 容器
                        </router-link>
                    </MenuItem>
                    <MenuItem name="1-2-3">
                        <router-link to="/development/php/article/361">
                            &nbsp;&nbsp;&nbsp;&nbsp;-- 仓库
                        </router-link>
                    </MenuItem>
                </MenuGroup>
            </Submenu>
            <Submenu name="s2">
                <template slot="title">
                    <i class="ivu-icon"><img width="20" src="../../image/icon/php.png"/></i>PHP
                </template>
                <MenuGroup title=" - Laravel" on-select="">
                    <MenuItem name="1-1">
                        <router-link to="/development/php/article/12">
                            &nbsp;&nbsp;&nbsp;&nbsp;-- 安装Laravel
                        </router-link>
                    </MenuItem>
                    <MenuItem name="1-2">
                        <router-link to="/development/php/article/361">
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
    </div>
</template>
<script>
export default {
    methods: {
        selectItem(){
            const updateSelectItem = document.querySelector('li .router-link-exact-active');
            updateSelectItem.parentNode.click();
            const father = updateSelectItem.parentNode.parentNode.parentNode.parentNode.parentNode.firstChild;
            father.click();
            // console.log(father.getAttribute('class'));
        },
        updateStyle() {
            const updateEl = document.querySelectorAll('.ivu-menu-item-group-title');
            updateEl.forEach(element => {
                element.style.height='30px';
                element.style['line-height']='30px';
            });
        }
    },
    data() {
        return {
        }
    },
    mounted() {
        this.selectItem();
        this.updateStyle();
    }
}
</script>