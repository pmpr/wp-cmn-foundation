<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61488e738039d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormMaker\Admin\Field; class Radio extends OptionAwareField { protected bool $inline; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { if (!(is_array($qiouiwasaauyaaue) && $qiouiwasaauyaaue)) { goto csiokukquwmccgqc; } $this->eyygsasuqmommkua(key($qiouiwasaauyaaue)); csiokukquwmccgqc: parent::__construct("\x72\141\x64\151\x6f", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc, $qiouiwasaauyaaue); } public function wmociykwcyesssui() : ?bool { return $this->inline; } public function awagieqcmmwkgwgs(bool $usyqkyomqcuocgoa) : self { $this->inline = $usyqkyomqcuocgoa; return $this; } public function mkmssscwmeekwgqo() : Field { $this->awagieqcmmwkgwgs(true); return parent::mkmssscwmeekwgqo(); } public function sqoiuykcoueiucgc($pkyyagewkiyckmwy, $wwgucssaecqekuek) { return array_merge(["\x6c\141\142\145\x6c" => $pkyyagewkiyckmwy], $wwgucssaecqekuek); } }
