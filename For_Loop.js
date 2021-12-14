<script>
	var n = parseInt(prompt("Enter Number : "));
	var j = 3; 
	var k = 2;
	for (var i = 1;i <= n;i++)
	{
		if(i <= 2)
		{
			document.write(i + "   ");
		}
		else
		{
			document.write(j + "   ");	
			a = j; 
			j = j * k; 
			k = a; 
		}
	}
</script>
