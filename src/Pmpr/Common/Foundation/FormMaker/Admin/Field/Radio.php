<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b61855c9112             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormMaker\Admin\Field; class Radio extends OptionAwareField { protected bool $inline; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) { goto ysawmmcgoceiuqmg; } $this->eyygsasuqmommkua(key($qiouiwasaauyaaue)); ysawmmcgoceiuqmg: parent::__construct("\162\141\x64\151\157", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public function wmociykwcyesssui() : ?bool { return $this->inline; } public function awagieqcmmwkgwgs(bool $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function mkmssscwmeekwgqo() : Field { $this->awagieqcmmwkgwgs(true); return parent::mkmssscwmeekwgqo(); } public function sqoiuykcoueiucgc($pkyyagewkiyckmwy, $wwgucssaecqekuek) { return array_merge(["\154\x61\142\x65\x6c" => $pkyyagewkiyckmwy], $wwgucssaecqekuek); } }
