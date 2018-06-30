# arrlen

There was a function called strlen which was used to find out the length of a string and it did not really arrays. Since there was no function at PHP which actually counts the string length of every element in an array, I decided to make a function which actually does that. I will also introduce it in other programming languages, for now it's PHP.

It uses two functions with only a minimal difference of loops meaning one function uses foreach and another one uses for loop. Here are the results of the time taken between two loops:

For loop: Average time would be 1-5 seconds.

Foreach: Average time would be 1-6 seconds.

Not much of a difference but For loop seems to be much faster than foreach in average just because of a 1 second gap. All you need to do is open example.php and take the function, pass an array and then enjoy your results.

An example output:

Total number of elements in your array are: 4

Total string length of 4 elements are: 19

The string length of element orange is: 6

The string length of element food is: 4

The string length of element lol is: 3

The string length of element why is: 3

As you can see my array consisted of 4 elements which were, orange, food, lol and why. It found out the string length of each of those elements without any issues. If you are at least a bit experienced with PHP, you can modify the function and enjoy it for your purposes.
