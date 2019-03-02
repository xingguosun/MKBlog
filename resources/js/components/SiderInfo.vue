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
.name{
    text-align: center;
    height: 50px;
    line-height: 50px;
    font-size: 1.2rem;
    font-weight: 500;
}
.intro{
    width: 160px;
    margin: 0px auto;
    font-size: 0.9rem;
    line-height: 1.5;
    font-weight: 400;
}
.intro ul{
    margin:10px 0 10px 15px;
}
.github{
    font-weight: 600;
    font-size: 1.05rem;
    margin-top: 10px;
}
.github i{
    font-size: 1.3rem;
    vertical-align: text-bottom;
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
        </Menu>
        <Avatar src="/images/avatar.jpeg" :style="{height: '100px', width: '100px', 'line-height': '100px', margin: '0 auto', display: 'block'}"/>
        <div>
            <p class="name">孙行者</p>
            <p class="intro">PHP & 前端 软件工程师 <br>Full Stack Developer 
                <ul>
                    <li> PHP</li>
                    <li> CodeIgniter</li>
                    <li> Laravel</li>
                    <li> Vue</li>
                    <li> Mysql</li>
                    <li> MongoDB</li>
                    <li> Redis, etc.</li>
                </ul>
                <a class="github" href="https://github.com/sunxguo" target="_blank"><Icon type="logo-github" />GitHub</a>
            </p>
        </div>
    </div>
</template>
<script>
    export default {
        mounted(){
           
        },
        data(){
            return {
                
            }
        }
    }
</script>