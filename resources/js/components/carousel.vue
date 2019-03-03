<template>
    <Carousel autoplay v-model="value2" loop :height="setting.height">
        <CarouselItem>
            <div class="demo-carousel"><img :src="image0"/></div>
        </CarouselItem>
        <CarouselItem>
            <div class="demo-carousel"><img :src="image1"/></div>
        </CarouselItem>
        <!-- <CarouselItem>
            <div class="demo-carousel">3</div>
        </CarouselItem>
        <CarouselItem>
            <div class="demo-carousel">4</div>
        </CarouselItem> -->
    </Carousel>
</template>
<script>
    export default {
        data () {
            return {
                value2: 0,
                image0: require('../../image/1.jpg'),
                image1: require('../../image/2.jpg'),
                setting: {
                    height: 600
                }
            }
        }
    }
</script>