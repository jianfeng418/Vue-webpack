<template>
	<div class="container" id='myapp'>
		<transition name="fade">
			<keep-alive>
					{{msg}}
			</keep-alive>
		</transition>
	
		

	</div>
	
</template>	

<script>
export default{
	name:'myapp',
	data: function(){
		return {
		msg:'this is test'
		}
	}
}
</script>