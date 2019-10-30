<?php 
/*
  * A QAD routine to calculate Viewport Width

How many characters: 36
Font height: 2048
Font width: 1229
vw value: 4.4 approx


Not sure where Adam Maltpress got his values for fixed width font height to width ratio but I did find them in some StackOverflow questions.

https://stackoverflow.com/questions/19113725/what-dependency-between-font-size-and-width-of-char-in-monospace-font

 How do we find a reasonable value for vw for a string of 36 letters?

```
 The first thing that you have to do
```

From Adam Maltpress on Slack 30th October 2019

So... Windows 7 Courier New has a height/width ratio of 2048:1229,
or as near to 60% as makes no difference.
You have 36 letters in 320px so 320/36 = 8.9px for each character.
Multiply by 2048, divide by 1229 ( 1.66 ) = 14.77
14.77 / 320 = 4.6vw

See vw.php for more information
*/


$font_height = 2048;
$font_width = 1229;

for ( $chars = 26; $chars <= 36; $chars++ ) {

$vw = 100 / $chars * ( $font_height / $font_width );
echo "$chars $vw";

}