<pre><?php
// �_����
$a = 0xFF;
$b = 0xF0;
$c = $a & $b;
echo sprintf("%08b\n", $c); // ��i���ŏo�́� 11110000

// �_���a
$a = 0xF0;
$b = 0x0F;
$c = $a | $b; // �_���a
echo sprintf("%08b\n", $c); // ��i���ŏo�́� 11111111

