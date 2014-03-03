<body style="background-image: url('heart2.jpg');"> 
 <div style="margin-top:96px;">
  <div style="width:960px;margin:0 auto;">
	<?php 
	for($i=0;$i<2014;$i++){
		if(
		($i>=665)&&($i<=675)||
		($i>=729)&&($i<=740)||
		($i>=792)&&($i<=804)||
		($i>=855)&&($i<=869)){
	?>
	<div>
		  <div style="border:1px solid #F2F2F2;float:left;margin:1px;">
		    <a href="<?php echo 'page?id='.$i?>">
			<div style="width:11px;height:11px;">
			
			</div>
			</a>
		  </div>
		</div>
	<?php
		}
		else{
	?>
		<div>
		  <div style="border:1px solid #6699FF;fill: rgb(238, 238, 238);float:left;margin:1px;background-color:#CCCCCC;">
		    <a href="<?php echo 'page?id='.$i?>">
			<div style="width:11px;height:11px;">
			
			</div>
			</a>
		  </div>
		</div>
	<?php
		}
	}
	?>
  </div>
</body>