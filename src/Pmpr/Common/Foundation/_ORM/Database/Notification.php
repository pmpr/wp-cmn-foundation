<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdb08957             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Pmpr\Common\Foundation\_ORM\Traits\ORMTrait; use Pmpr\Common\Foundation\Interfaces\Constants; class Notification extends Common { use ORMTrait; protected $gateways = [Constants::mkywiykkiqimykiw => true, Constants::muqaqimusmckkieq => false]; public function ssssuiueweooweeg() : array { return $this->gateways; } public function ayqamywsyyeucmoo(string $csagckiyuikmowek) : bool { return $this->gateways[$csagckiyuikmowek] ?? false; } public function dimsswsyskyecscu(string $csagckiyuikmowek) : self { $this->gateways[$csagckiyuikmowek] = true; return $this; } public function syemgsuewkasoaek(array $qceyowgiyaiaqeyi) : self { foreach ($qceyowgiyaiaqeyi as $csagckiyuikmowek) { $this->dimsswsyskyecscu($csagckiyuikmowek); aicoaaeeewwmioou: } cuqsyqewuemsysgi: return $this; } public function notify($aokagokqyuysuksm, array $icwicymcioeyeyek) : self { return $this; } public function qicmaqwoqqguccmo($aokagokqyuysuksm) : self { $this->aqaqiqcucamsygaq()->wqikesawekycweoi($aokagokqyuysuksm, [Constants::sugcoawcimusgaga => 1]); return $this; } }
