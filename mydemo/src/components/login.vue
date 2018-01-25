<template>
	<div class="login">
		<div id="clound0" class='clound'></div>
		<p class='login-head'>Welcome!</p>
		<loginclounds id="clound1"/>

		<div class='login-body'>
			<input id='userName' v-model='userName' type='text' placeholder='UserName' class='login-input' />
			<input id='userPass' v-model='userPass' type='password' placeholder='UserPassword' class='login-input' />

			<input id='loginbutton' v-on:click='checkLogin' type='button' class='login-input'   value='LOGIN' />
		</div>
	</div>

</template>


<script>
	import loginclounds from './login-clound.vue'

	export default{
		name:'login',
		data() {
		return{
			msg:'一个 vue 项目',
			userName:'',
			userPass:''
			}
		},
		methods:{
			checkLogin: function(){
				var that = this;
				
				this.$http.get('baidu.com');
				if(this.userName === '' || this.userPass === ''){
					alert('用户名或密码不能为空');
				}else{
					this.login();
				}
				
			},
			login(){
				
				
				let expireDay = 1000*60*60;
				this.setCookie('session','blblbl',expireDay);
				this.$router.push('/hello')
			}
		},
		components:{loginclounds}
	}
</script>

<style>
	.login{
		margin: 0px auto;
		width:40%;
		height:90%;
		min-height:500px;
		border:1px solid #888888;
		box-shadow:0px 0px 10px 5px  #888888;
		background: #fff url('../assets/login-bg.jpg') repeat-x ;
		overflow:hidden
	}
	.login-head{
		font-size:28px;
		color:#1fcab3;
		font-weight:700px;
		font-size:40px;
		text-align:center
	}
	#clound0{
		left:160px;
		animation: cloundmove 15s linear infinite;
		-webkit-animation:cloundmove 15s linear infinite;
	}
	#clound1{
		left:100px;
		animation: cloundmove1 15s linear infinite;
		-webkit-animation:cloundmove1 15s linear infinite;
	}
	.clound{
		position:relative;
		background:url('../assets/login-cloud.png') no-repeat;
		height:40px;
		width:100px;
	}
	@keyframes cloundmove{
		from {left:-200px;	}
		to {	left:600px;	}
	}
	@-webkit-keyframes cloundmove /* Safari 与 Chrome */
	{
   		 from {left:-200px;}
   		 to {left:600px;}
	}
	@keyframes cloundmove1{
		from {left:-100px;	}
		to {	left:600px;	}
	}
	@-webkit-keyframes cloundmove1 /* Safari 与 Chrome */
	{
   		 from {left:-100px;}
   		 to {left:600px;}
	}

	.login-body{
		text-align:center;
		position:relative;
		margin-top:80px;
	}
	.login-input{
		width:80%;
		height:40px;
		border:1px solid #999;
		border-radius :5px;
		margin:12px auto;

	}

	#loginbutton{
		border:1px solid #999;
		border-radius :5px;
		color:#fff;
		background-color:#50e3ce
	}
	#loginbutton:hover{
		cursor:pointer;
		opacity:0.8
	}
</style>