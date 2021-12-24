<script>
	var d = new Date();
	document.write(d.getTime()+"<br>");
	document.write(d+"<br>");
	document.write(d.getFullYear()+"<br>");
	document.write(d.getMonth()+"<br>");
	document.write(d.getDate()+"<br>");
	document.write(d.getHours()+"<br>");
	document.write(d.getMinutes()+"<br>");
	document.write(d.getSeconds()+"<br>");
	document.write(d.getMilliseconds()+"<br>");
	document.write(d.getDay()+"<br>");
	document.write(Date.now()+"<br>");
	
	var time1 = d.setTime(1332403882588);
	document.write(d.getTime()+"<br>");
	document.write(d+"<br>");
	time1 = d.setDate(5);
	document.write(d.getDate()+"<br>");
	time1 = d.setMonth(1);
	document.write(d.getMonth()+"<br>");
	time1 = d.setFullYear(2012);
	document.write(d.getFullYear()+"<br>");
	time1 = d.setYear(12);
	document.write(d.getYear()+"<br>");
	time1 = d.setHours(3);
	document.write(d.getHours()+"<br>");
	time1 = d.setMinutes(50);
	document.write(d.getMinutes()+"<br>");	
	time1 = d.setSeconds(50);
	document.write(d.getSeconds()+"<br>");
	time1 = d.setMilliseconds(980);
	document.write(d.getMilliseconds()+"<br>");
	document.write(d.toString());
</script>
