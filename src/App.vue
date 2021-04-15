<template>
  <div id="app">
    <div id="nav">
      <div class="container">
        <router-link to="/">Home</router-link>
        <router-link to="/prodotti">Prodotti</router-link>
        <router-link to="/servizi">Servizi</router-link>
        <router-link to="/news">News</router-link>
        <router-link to="/contatti">Contatti</router-link>
        <router-link to="/area-clienti">Area Clienti</router-link>
      </div>
    </div>
    
    <router-view id="main"/>
    
    <div id="footer">
    
    </div>
  </div>
</template>
<script>
import axios from 'axios'
import VueAxios from 'vue-axios'

export default {
  // data(){
  //   return {
  //     items: [],
  //   }
  // },
  // methods:{
  //   apiRequest: function(string){
  //     //Estende l'indirizzo della chiamata API
  //     axios
  //     .get(`wp/v2/${string}`)
  //     .then(response =>{
  //       for(let item in response.data){
  //         this.items.push(response.data[item]);
  //       }
  //     })
  //     .catch(error => {
  //       console.log(error);
  //     })
  //   }
  // },
  // created: function(){
  //   this.apiRequest('prodotti');
  // }
}
</script>

<style lang="scss">
/*Fonts*/ 
/* Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
/*/Fonts*/

*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

/*Commons*/
.container{
  width: 80%;
  height: 100%;
  max-width: 1170px;
  margin: auto;
}
section{
  padding: 40px 0;
}
/*/Commons*/

/*Variables*/

/*Colors*/

$darkcolor: #222;
$lightcolor: #f7f7f7;

/*Font sizes*/
$xxlarge: 45px;
$xlarge: 36px;
$large: 24px;
$normal: 16px;
$text: 14px;
$small: 11px;

/*/Variables*/


#app {
  font-family: 'Poppins', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #f7f7f7;
}

#nav {
  position: fixed;
  width: 100%;
  height: 100px;
  background-color: $darkcolor;
  .container{
    display: flex;
    justify-content: space-around;
    align-items: center;
    a {
      font-weight: bold;
      color: #2c3e50;

      &.router-link-exact-active {
        color: #42b983;
      }
    }
  }
}

#main{
  padding-top: 100px;
  min-height: 100vh;
}

#footer{
  min-height: 300px;
  width: 100%;
  background-color: $darkcolor;
}

</style>
