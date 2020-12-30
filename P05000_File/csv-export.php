<?php
require 'MDB2.php';
// �f�[�^�x�[�X�ɐڑ�����
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
$db->loadModule('Extended');
$result = $db->getAll("SELECT * FROM users");
// �o�̓w�b�_���Z�b�g����
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="users.csv"');
// ���ʂ��o�͂���
foreach ($result as $cols) {
  echo implode_csv_cols($cols);
}
// CSV�Z���̃G�X�P�[�v���K�v�����ׂăG�X�P�[�v����
function implode_csv_cols($cols) {
  foreach ($cols as $i => $v) {
    $esc = false;
    foreach (array(',','"',' ',"\t","\n","\r") as $ch) {
      if (strpos($v, $ch) !== false) { $esc = true; break; }
    }
    if ($esc) {
      $v = str_replace('"', '""', $v);
      $cols[$i] = '"'.$v.'"';
    }
  }
  return implode(',', $cols)."\n";
}
