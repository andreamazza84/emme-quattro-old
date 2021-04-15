<template>
    <div>
        <section class="prodotti">
            <h1>Prodotti</h1>
        </section>
        
        <section class="dettagli">
            <div class="container">
                <h3>Prodotti suddivisi per ambito di applicazione</h3>
                <ul class="cards">
                    <li class="card" 
                    v-for="prodotto in prodotti" 
                    :key="prodotto.slug"
                    >
                        <router-link class="innerlink" :to="{
                            name: 'ProdottiDescrizione',
                            params: {slug: prodotto.slug}
                        }">
                            <span v-html="prodotto.title.rendered"></span>
                            <img :src="prodotto.acf.image.url" :alt="prodotto.acf.image.alt">
                        
                        </router-link>
                    </li>
                </ul>
            </div>
        </section>
        <router-view :key="$route.path"/>
    </div> 
</template>
<script>
//import axios from 'axios'
//import VueAxios from 'vue-axios'
import prodotti from "@/store.js";

//console.log(items);

export default {
    
    data(){
        return{
            prodotti: prodotti,
            //images: images,
        }
    },
    mounted() {
    }
}
</script>
<style lang="scss">
.cards{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    .card{
        display: flex;
        flex-direction: column;
        align-items: space-around;
        justify-content: center;
        width: calc(100% / 6);
        min-height: 300px;
        padding: 20px;
        border: 1px solid #aaa;
        list-style: none;
            img{
                width: 100%;
                height: 100%;
        }
    }
}

</style>