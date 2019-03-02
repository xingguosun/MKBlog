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
.ivu-menu-item a{
    /* text-decoration: underline; */
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
        <Menu active-name="this.$route.name" theme="light" width="auto" :open-names="['1']">
            <MenuItem name="s0" class="layout-logo" :style="{'margin-bottom':'50px'}">
                <p class="line"></p>
                    <router-link to="/">
                        MonkeyKing's Blog
                    </router-link>
                <p class="line"></p>
            </MenuItem>
            <Submenu name="s1">
                    <template slot="title">
                        <i class="ivu-icon"><img width="20" src="../../image/icon/php.png"/></i>经典算法
                    </template>
                    <MenuGroup title=" - 排序" on-select="">
                        <MenuItem name="1-1">
                            <router-link to="/algorithm/classic/article/362">
                                &nbsp;&nbsp;&nbsp;&nbsp;-- 冒泡排序
                            </router-link>
                        </MenuItem>
                        <MenuItem name="1-2">
                            <router-link to="/algorithm/classic/article/361">
                                &nbsp;&nbsp;&nbsp;&nbsp;-- 快速排序
                            </router-link>
                        </MenuItem>
                    </MenuGroup>
                </Submenu>
        </Menu>
    </div>
</template>
