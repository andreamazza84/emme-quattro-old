<template>
  <section id="about">
    <div class="container">
      <h3>Descrizione</h3>
      <h4 class="title product-title"><span v-html="prodotto.title.rendered"></span></h4>
      <div class="box">
        <img :src="prodotto.acf.image.url" :alt="prodotto.acf.image.alt">
        <p class="description product-description"><span v-html="prodotto.content.rendered"></span></p>
      </div>
    </div>
  </section>
</template>

<script>
import prodotti from "@/store.js"
export default {
  props: {
    slug: {
      type: String,
      required: true
    },
  },
  data(){
    return {
      prodotti: prodotti,
    }
  },
  computed: {
    prodotto: function(){
      return this.prodotti.find(
        element => element.slug === this.slug
      );
    }
  },
  mounted() {
  },
}

</script>

<style lang="scss">
#about{
  .box{
    display: flex;
    img{
      width: 200px;
    }
    .product-description{
      text-align: justify;
    }

}
}
</style>