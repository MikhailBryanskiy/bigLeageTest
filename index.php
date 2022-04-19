<?php
// 1 задание
    $array = [
        [1,2,3,4,5,6,7,8,9,10]
    ];
        for($i = 0 ; $i < count($array);$i++){
                for($j=0; $j < count($array[$i]);$j++){
                        print($array[$i][$j].' ');
                };
        }

// 2 задание
// select * from table where id = 10;

// 3 задание
$arrayInfo = [
    'name'=>'Ivan',
    'surname'=>'Ivanov',
    'address'=>'Petrovsk',
    'telephone'=>'8 (985) 222-33-444'
];
print "<table>\n";
foreach($arrayInfo as $key => $value){
    print "<tr><td>$key</td><td>$value</td></tr>";
}
print "</table>";

// 4 задание 
$array = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
  ];
  foreach($array as $items){
      foreach($items as $key=>$value){
          print "<ul>";
          print"<li>$value</li>";
          print "</ul>";
      }
  }
// 5 задание
$f_json = 'years.json';
$json = file_get_contents($f_json);
$obj = json_decode($json);
$array = $obj->years;
foreach($array as $item){
    print "$item ";
}
//  6 задание
// 1. Да
// 2. Выведет все данные из таблицы users
// 3.$sql = 'delete from users where id between 1 and 5'
?>