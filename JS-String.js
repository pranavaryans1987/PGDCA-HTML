<script>
	var aaa = "PGDCA SEMESTER ONE";
	var course = "PGDCA";
	var sem = "2";
	var extra = "nd";
	var h = "H";
	var o = "O";
	document.write(course + "<br>");
	document.write(course.big()+"<br>");
	document.write(course.blink()+"<br>");
	document.write(course.bold()+"<br>");
	document.write(course.italics()+"<br>");
	document.write(course.small()+"<br>");
	document.write(course.strike()+"<br>");
	document.write(course+sem+extra.sup()+"<br>");
	document.write(h+sem.sub()+o+"<br>");
	document.write(course.toLowerCase()+"<br>");
	document.write(extra.toUpperCase()+"<br>");
	document.write(aaa.fontcolor("red")+"<br>");
	document.write(aaa.fontsize("40px")+"<br>");
	
	document.write(course.charAt(1)+"<br>");
	document.write(aaa.search("SEMESTER")+"<br>");
	document.write(aaa.replace("ONE","TWO")+"<br>");
	document.write(aaa.slice(6,14)+"<br>");
	document.write(aaa.substr(6,5)+"<br>");
	document.write(aaa.indexOf("S")+"<br>");
	document.write(aaa.lastIndexOf("S")+"<br>");
	document.write(aaa.concat(course)+"<br>");
</script>
