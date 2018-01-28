<template>
	<div id='main' >
		<div id='topNavDiv'>

		</div>

		<router-view></router-view>

		<div id='bottomNavDiv'>
			<router-link to='/home' class='bottomNav'>首页</router-link>
			<router-link to='/nearby' class='bottomNav'>附近</router-link>
			<router-link to='/order' class='bottomNav'>订单</router-link>
			<router-link to='/info' class='bottomNav'>我的</router-link>
		</div>
	</div>

</template>
<script>
	export default{
		name:'main',
		data(){
			return {
				msg:'main page'
			}
		}
	}
</script>

<style>
	#bottomNavDiv{
		position:absolute;
		bottom:0px;
		width:100%;
		background-color:#ddf;
		height:30px;

	}
	.bottomNav{
		display:inline-block;
		width:23%;
		margin:0px;
		padding:0px;
		border:0px;
		color:green;

	}
</style>