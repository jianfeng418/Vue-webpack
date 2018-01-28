<template>
	<div id='homePageDiv'>
		<div id='headDiv'>
			<div id='weather' class='headhome'>
				<span>-2℃</span><span>济南</span>
			</div>
			<div id='searchFoodDiv' class='headhome'>
				<input id='searchFood' />
			</div>
			<div id='moreDiv' class='headhome'>
				<span>+</span>
			</div>
		</div>
		<hr/>
		<div id='homeBodyDiv'>
			<ol>
				<li v-for='food in foodlist' @click='jumpFoodInfo' v-bind:food = 'food'>
					<fooditem v-bind:foodmsg = 'food'>
						
					</fooditem>
				</li>
			</ol>
		</div>
		 <input type='button' value='logout' v-on:click='logouts' />

	</div>
</template>
<script>
	import fooditem from './fooditem'
	import imgsrc from '../assets/logo.png'
	import imgsr2 from'../assets/profile.png'
	export default{
		name:'home',
		data(){
			return {
				msg:'',
				foodlist:[
				{	id:1,
					foodName:'回鱼时尚餐馆',
					//src:'../assets/logo.png',
					src:imgsr2,
					price:'￥67/人',
					address:'高新会展  1.1km',
					type:'北京菜',
					support:'支持外卖',
					juan:'69代100',
					buy:'买单立享8折'
				},
				{	
					id:2,
					foodName:'之香小馆',
					src:imgsrc,
					price:'￥80/人',
					address:'万达广场 786m',
					type:'四川菜',
					support:'支持预定',
					juan:'88代100',
					buy:'买单立享95折'

				},{
					id:3,
					foodName:'回鱼时尚餐馆',
					//src:'../assets/logo.png',
					src:imgsr2,
					price:'￥67/人',
					address:'高新会展  1.1km',
					type:'北京菜',
					support:'支持外卖',
					juan:'69代100',
					buy:'买单立享8折'
				},
				{
					id:4,
					foodName:'之香小馆',
					src:imgsrc,
					price:'￥80/人',
					address:'万达广场 786m',
					type:'四川菜',
					support:'支持预定',
					juan:'88代100',
					buy:'买单立享95折'

				},{
					id:5,
					foodName:'回鱼时尚餐馆',
					//src:'../assets/logo.png',
					src:imgsr2,
					price:'￥67/人',
					address:'高新会展  1.1km',
					type:'北京菜',
					support:'支持外卖',
					juan:'69代100',
					buy:'买单立享8折'
				},
				{
					id:6,
					foodName:'之香小馆',
					src:imgsrc,
					price:'￥80/人',
					address:'万达广场 786m',
					type:'四川菜',
					support:'支持预定',
					juan:'88代100',
					buy:'买单立享95折'

				}
				]
			}
		},
		methods:{
			logouts:function(){
				
				this.delCookie('session');
				this.$router.push('/login');
			},
			jumpFoodInfo(){
				//console.log(this.$data)
				//this.$router.push('/foodInfo/:id');
			}
		},
		components:{fooditem,imgsrc}


	}
</script>

<style>
	#headDiv{
		width:100%;
	}
	.headhome{
		display:inline-block;
	}
	#weather{
		width:30%;
		float:left;
		margin-left:10px
	}
	#searchFoodDiv{
		width: 50%;
	}
	#moreDiv{
		float:right;
		margin-right:10px;
	}
	ol li{
		list-style:none;
		//display:block;
		margin-left:-40px;
		//width:100%

	}
</style>