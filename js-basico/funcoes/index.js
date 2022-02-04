function sum(n1, n2)
{
   var total = n1 + n2;

   return total;
}

/* function myFunc()
{
    console.log('Hello');
    return 5;
} */
/* setTimeout(function(){
    console.log('abc');
}, 100); */

/* setTimeout( () =>{ 
    console.log('def') 
}

, 2000); */

/* function myFunc(otherFunc)
{
    console.log(otherFunc());
}

myFunc( myFunc2 => 123 + 5); */


//Numero é primo ou não
function isPrime(num)
{
    for (var i = 2; i < num; i++)
    {
        if(num % i === 0)
        {
            return false;
        }
    }

    return num !== 1;
}
