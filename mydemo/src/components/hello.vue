<template>
 <div>
     <h2>Hello Vue.js</h2>
     <hr/>
     <p>{{sContent}}</p>


     <input type='button' value='logout' v-on:click='logout' />
 </div>
</template>
<script>
 export default{
     data(){
         return {
             sContent:"This is hello components"
         }
     },
     methods:{
     	logout(){
     		this.delCookie('session');
     		this.$router.push('/login');
     	}
     }
 }
</script>