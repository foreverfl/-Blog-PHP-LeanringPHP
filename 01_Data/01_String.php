<h3>문자열 출력하기</h3>
<?php 
    print '문자열을 출력합니다.'
?>
<hr>

<h3>문자열 연결하기</h3>
<?php 
    print '문자열을'.' 연결합니다.'
?>
<hr>

<h3>이스케이프 문자</h3>
<?php 
    print "줄바꿈을 \n 제공합니다.<br>";
    print "캐리지리턴을 \r 제공합니다.<br>";
    print "탭 띄어쓰기를 \t 제공합니다.<br>";
    print "\\<br>";
    print "\$<br>";
    print "\"<br>";
?>
<hr>

<h3>here 문서</h3>
<?php
$hereDoc = <<<here
<p> here문서입니다.
here;
    print $hereDoc;
?>
<hr>

<h3>함수</h3>
<?php
$trimExample = '        apple          ';
print trim($trimExample).'<br>';

$strlenExample = 'apple';
print strlen($strlenExample).'<br>';

$equalExample1 = 'apple';
$equalExample2 = 'apple';
if($equalExample1 == $equalExample2) {
    print '참입니다.<br>';
} 

$strChangingExample = 'aPPle';
print strtolower($strChangingExample).'<br>';
print strtoupper($strChangingExample).'<br>';
print ucwords($strChangingExample).'<br>';

$substrExample = 'banana';
print substr($substrExample, 0, 2).'<br>';

$replaceExample = 'Watermelon is delicious.';
print str_replace('Watermelon', 'apple', $replaceExample).'<br>';
?>
<hr>

<h3>printf</h3>
<?php
$str = '10.10';

printf("%d<br>", $str);

printf("[%s]<br>", $str);
printf("[%100s]<br>", $str);
printf("[%-100s]<br>", $str);
printf("[%010s]<br>", $str);

printf("%f<br>", $str);
printf("%0.2f<br>", $str);
?>