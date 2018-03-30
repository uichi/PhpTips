<?php
$data = array(
    "Good" => "Ubuntu",
    "Average" => "Windows",
    "Poor" => "Mac"
);
/*
 * 配列、連想配列、オブジェクトの中身を表示できる
 * 4.3.0以降第２引数が追加されたので出力結果を変数に入れることが可能
 */
echo "---print_r---\n";
print_r($data);

/*
 * 構造、値だけでなく型やサイズまで表示できる
 * オブジェクトの場合はクラス名までわかる
 */
echo "---var_dump---\n";
var_dump($data);

/*
 * 構造化された値を返す
 * var=dump()と違って、PHPコードで返ってくる
 */
echo "---var_export---\n";
var_export($data);

/*
 * 呼ぼ出し元のバックとレースを取得できる
 * オブジェクト指向や多層的に関数を呼び出したいときに使える
 * 便利すぎてPHP4でも使用可能
 */
echo "---debug=debug_backtrace---\n";
function a($str){
  b($str);
}
function b($str){
  echo $str."\n\n";
  c();
}
function c(){
  print_r(debug_backtrace());
}
 
a("Hello  world!");

