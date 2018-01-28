<template>
	<div class='fooditembody' @click='jumpToinfo'>	
		<div class='fooditemImg'>
			<img :src='foodmsg.src' style="width:60px;height:60px"></img>
		</div>
		
		<div class='fooditemInfo'>
			<p class='foodName'>{{foodmsg.foodName}}</p>
			<p class='foodPriceAddress'>
				<span >{{foodmsg.price}}</span>
				<span class='foodAddress'>{{foodmsg.address}}</span>
			</p>
			<p class='foodTypeComment'>
				<span>{{foodmsg.type}}</span>
			</p>
			<p class='foodSupport'>
				<span>{{foodmsg.support}}</span>
			</p>
			<hr />
			<p class='foodCoupon'>
				<span id='foodJuan' class='foodDiscountIcon'></span><span>{{foodmsg.juan}}</span>
			</p>
			<p class='foodCoupon'>
				<span id='foodbuy' class='foodDiscountIcon'></span>{{foodmsg.buy}}
			</p>
		</div>
		
	</div>
</template>

<script>
	export default{
		name:'food-item',
		props:['foodmsg'],
		data(){
			return {
				msg:'',
			}
		},
		methods:{
			jumpToinfo(){
				//console.log(this.foodmsg)
				//this.$router.push('/foodInfo/:id');
				this.$router.push({path:'/foodInfo/'+ this.foodmsg.foodName})
			}
		}
	}

</script>

<style>
	.fooditembody{
		display:block;
		border:1px solid gray;
		clear:both;
		

	}
	.fooditemImg{
		float:left
	}
	.fooditemInfo{
		float:left;
		width:calc(100% - 80px);
		margin-left:10px;
		
	}
	.fooditemInfo p{
		margin:2px;
		font-size: 14px;
		width:100%;
		text-align:left
	}
	.fooditemInfo .foodName{
		font-weight:bold
	}
	
	.foodAddress{
		float:right;
		margin-right:10px

	}

	.foodSupport{
		color:gray
	}
	
	
	.fooditemInfo .foodCoupon{
		font-size:12px;
	}
	.foodDiscountIcon{
		display:inline-block;
		width:24px;
		height:24px;
		vertical-align:middle
	}
	#foodJuan{
		background:url('../assets/invoice_1@2x.png') no-repeat 0px 3px;
		background-size:16px 16px;
	}
	#foodbuy{
		background:url('../assets/discount_1@2x.png') no-repeat 0px 3px;
		background-size:16px 16px;
	}
</style>