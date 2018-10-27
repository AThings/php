<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="dbupdate">更新</a>
	<a href="dbmodel">查询</a>

	<?php 
		if($query){
	foreach($query as $queryrow):?>
		<div>		
			<ul>
				<li>id:<?php echo$queryrow->id?></li>
				<li>studentid:<?php echo$queryrow->studentid?></li>
				<li>coststatue:<?php echo$queryrow->coststatue?></li>
				<li>costdate:<?php echo$queryrow->costdate?></li>
				<li>workstatue:<?php echo$queryrow->workstatue?></li>
				<li>company:<?php echo$queryrow->company?></li>
				<li>workdate:<?php echo$queryrow->workdate?></li>
				<li>note:<?php echo$queryrow->note?></li>
			</ul>
		</div>
	<?php endforeach;}?>
</body>
</html>