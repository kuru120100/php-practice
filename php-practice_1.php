<?php
// Q1 変数と文字列
$name = '佐野久瑠実';
echo '私の名前は「'.$name.'」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num."\n";
$num = $num / 2;
echo $num;

// Q3 日付操作
echo '現在の時刻は' .date("Y年m月d日H時i分s秒").'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if($device == 'windows'){
  echo '使用のOSは、Windowsです。' ; 
}else{
  if($device == 'mac'){
    echo '使用OSは、macです。';
  }else{
    echo 'どちらでもありません。';
  }
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age >= 20) ? '成人です。':'未成年です。';
echo $message;

// Q6 配列
$array = ['東京都','埼玉県','群馬県','栃木県','千葉県','神奈川県','茨城県'];
echo $array[3].'と'.$array[4].'は関東地方の都道府県です。';

// Q7 連想配列-1
$arr = ['東京都'=>'新宿区','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];
foreach($arr as $kanto){
  echo $kanto;
}

// Q8 連想配列-2
$kantoKey = array_keys($arr);
if($arr['埼玉県']){
  $saitamaKey = $kantoKey[3];
  echo $saitamaKey.'の県庁所在地は、'.$arr['埼玉県'].'です。';
}

// Q9 連想配列-3
$arr['愛知県'] = '名古屋市';
$arr['大阪府'] = '大阪市';

$kanto = ['東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県'];

foreach($arr as $ken => $kentyou){
  if(in_array($ken,$kanto)){
    echo $ken.'の県庁所在地は、'.$kentyou.'です。'."\n";
  }else{
    echo $ken.'は関東地方ではありません。'."\n";
  }
}


// Q10 関数-1
function hello($name = '金谷')
{
  echo $name.'さん、こんにちは。'."\n";
}

hello();
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
  return $price * 1.1;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price.'円の商品の税込7価格は'.$taxInPrice.'円です。';

// Q12 関数とif文
function distinguishNum($number)
{
  if($number % 2 === 0 ){
    return $number.'は偶数です。';
  }else{
    return $number.'は奇数です。';
  }
}
  echo distinguishNum(11);
  echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrande($test)
{
  switch($test){
    case 'A':
      return '合格です。'."\n";
      break;
    
    case 'B':
      return '合格です。'."\n";
      break;
    
    case 'C':
      return '合格ですが追加課題があります。'."\n";
      break;
    
    case 'D':
      return '不合格です。';
      break;

    default:
      return '判定不明です。講師に問い合わせてください。'."\n";
      break;
  }
}

echo evaluateGrande('A');
echo evaluateGrande('E');


?>