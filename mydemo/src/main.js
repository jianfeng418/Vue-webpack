// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import Router from 'vue-router'
import vueRecource from 'vue-resource'
Vue.config.productionTip = false

import hello from './components/hello'
import index from './components/index'
import login from './components/login'


const routes=[
	{path:'/',component:login},
	{path:'/login',component:login},
	{path:'/hello',component:hello},
	{path:'/index',component:index}
]

const router = new Router({
	routes
})
//模块化编程，导入Router
Vue.use(Router)
Vue.use(vueRecource)
//拓展实例方法
Vue.prototype.setCookie = (c_name,value,expiredays) => {
	var exdate = new Date();
	exdate.setDate(exdate.getDate() + expiredays);
	document.cookie = c_name + "=" + escape(value) + ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString());
}
//获取cookie、
function getCookie(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  if (arr = document.cookie.match(reg))
    return (arr[2]);
  else
    return null;
}
Vue.prototype.getCookie = getCookie;

//删除cookie
Vue.prototype.delCookie =(name) => {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = getCookie(name);
    if (cval != null)
      document.cookie = name + "=" + cval + ";expires=" + exp.toGMTString();
  }



/* eslint-disable no-new */
const app = new Vue({
  el: '#app',
  router,
  created(){
  	this.checkLogin();
  },
  methods:{
  	checkLogin(){
  		//检查是否存在session
  		if(this.getCookie('session')){
  			this.$router.push('/hello');
  		}else{
  			this.$router.push('/login');
  		}
  	}
  },
  components: { App },
  //template: '<App/>'
})
