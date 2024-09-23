<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e3829f9fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Pmpr\Common\Foundation\_ORM\Traits\ModelTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Notification extends Common { use ModelTrait; protected $gateways = [Constants::mkywiykkiqimykiw => true, Constants::muqaqimusmckkieq => false]; public function ssssuiueweooweeg() : array { return $this->gateways; } public function ayqamywsyyeucmoo(string $csagckiyuikmowek) : bool { return $this->gateways[$csagckiyuikmowek] ?? false; } public function dimsswsyskyecscu(string $csagckiyuikmowek) : self { $this->gateways[$csagckiyuikmowek] = true; return $this; } public function syemgsuewkasoaek(array $qceyowgiyaiaqeyi) : self { foreach ($qceyowgiyaiaqeyi as $csagckiyuikmowek) { $this->dimsswsyskyecscu($csagckiyuikmowek); cwyaysecsakaqgew: } swesqeqmagkicuws: return $this; } public function notify($aokagokqyuysuksm, array $icwicymcioeyeyek) : self { return $this; } public function qicmaqwoqqguccmo($aokagokqyuysuksm) : self { $this->mgogaykgkoogasim()->gssiscqyqsacmeca()->wqikesawekycweoi($aokagokqyuysuksm, [Constants::sugcoawcimusgaga => 1]); return $this; } }
