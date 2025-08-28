<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します'."\n";

for($i = 1; $i <= 100; $i++){
  if($i % 4 == 0 AND $i % 5 ==0){
    echo 'tic-tac'."\n";
  }elseif($i % 4 == 0){
    echo 'tic'."\n";
  }elseif($i % 5 == 0){
    echo 'tac'."\n";
  }else{
    echo $i."\n";
  }

}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

// 問題1
echo $personalInfos[1]['name'].'さんの電話番号は'.$personalInfos[1]['tel'].'です。';

// 問題2
foreach ($personalInfos as $person => $info){
  $num = $person + 1;
  echo $num.'番目の'.$info['name'].'さんのメルアドレスは'.$info['mail'].'で、電話番号は'.$info['tel'].'です。'."\n";

}

// 問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $age => $list){
  $personalInfo[$age]['age'] = $ageList[$age];
}

var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student('120','山田');

echo '学籍番号'.$yamada -> studentId.'番の生徒は'.$yamada -> studentName.'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this -> studentName.'は'.$subject.'の授業に参加しました。学籍番号:'.$this -> studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$date = new DateTime('now');
// DateTimeオブジェクトに格納されている日付や時刻の値を指定した書式に従って変更する
$date -> modify('-1 month');

echo $date -> format('Y-m-d');

// 問題2
$day = new DateTime();
$past = new DateTime('1992-04-25');
//差分を出す
$interval = $day -> diff($past);

echo 'あの日から'.$interval -> days.'日が経過しました。';
?>