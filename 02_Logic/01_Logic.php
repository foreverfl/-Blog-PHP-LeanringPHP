<h3>거짓을 나타내는 표현</h3>
<?php
    if (!0) {
        print '거짓입니다.(1)'.'<br>';
    }

    if (!0.0) {
        print '거짓입니다.(2)'.'<br>';
    }
    if (!'') {
        print '거짓입니다.(3)'.'<br>';
    }
    if (!'0') {
        print '거짓입니다.(4)'.'<br>';
    }
    if (!false) {
        print '거짓입니다.(5)'.'<br>';
    }
    if (!null) {
        print '거짓입니다.(6)'.'<br>';
    }

?>
<hr>

<h3>비교연산자</h3>
<h4>숫자 비교</h4>
<?php
    if(1 == 2) {
        print '같습니다.'.'<br>';
    } else {
        print '다릅니다.'.'<br>';
    }

    if(1 != 2) {
        print '다릅니다.'.'<br>';
    } else {
        print '같습니다.'.'<br>';
    }

    if(1 > 2) {
        print '큽니다.'.'<br>';
    } else {
        print '크지 않습니다.'.'<br>';
    }

    if(1 >= 2) {
        print '크거나 같습니다.'.'<br>';
    } else {
        print '크거나 같지 않습니다.'.'<br>';
    }

    if(1 < 2) {
        print '작습니다.'.'<br>';
    } else {
        print '작지 않습니다.'.'<br>';
    }

    if(1 <= 2) {
        print '작거나 같습니다.'.'<br>';
    } else {
        print '작거나 같지 않습니다.'.'<br>';
    }

?>
<h4>문자 비교</h4>
<?php
    if('b' > 'a') {
        print '사전순으로 "b"가 뒤에 나옵니다.(큽니다.)'.'<br>';
    } else {
        print '사전순으로 "a"가 뒤에 나옵니다.(큽니다.)'.'<br>';
    }
?>

<h4>문자열 자동 변환</h4>
<?php
    if('6' < 55) {
        print '숫자 55가 더 큽니다.'.'<br>';
    } else {
        print '숫자 6이 더 큽니다.'.'<br>';
    }
?>

<hr>

<h3>if문</h3>
<p> 사과를 아는 언어로 입력해주세요. </p>
<form method="post" action="01_Logic.php">
    <input type="text" name="if">
    <button type="submit">제출</button>
</form>
<?php
    $inputIf = $_POST['if'];
    if ($inputIf == 'apple') {
        print '영어'.'<br>';
    } else if ($inputIf == '사과') {
        print '한국어'.'<br>';
    } else if ($inputIf == 'リンゴ') {
        print '일본어'.'<br>';
    } else {
        print '판단 불가 ㅠㅠ'.'<br>';
    }
?>
<hr>

<h3>while문</h3>
<?php
    $i = 1;
    print '<select>';
        while($i <=10){
            print "<option>$i</option>\n";
            $i++;
    }
    print '</select>';
 ?>

</select>
<hr>

<h3>for문</h3>
<?php
    print '<select>';
    for($i=1; $i<=10; $i++) {
        print "<option>$i</option>\n";
    }
    print '</select>';
?>
<hr>

<h3>함수</h3>
<?php
    if(abs(-3) > 2) {
        print '-3의 절대값이 더 큽니다.<br>';
    } else {
        print '-3의 절대값이 더 크지 않습니다.<br>';
    }

    print strcmp('str', 'str').'<br>';
    print strcmp('a', 'b').'<br>';
    print strcmp('b', 'a').'<br>';
?>
<hr>