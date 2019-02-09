// Output result.
alert(Multiply(5, 3));

// Multiply without operator.
function Multiply(numberA, numberB)
{
	// Declare variables.
	let result = 0;
	
	// Multiply.
	for (let i = 0; i < numberA; i++)
		result += numberB;
	
	return result;
}