<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a555f2117d2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ysaumykuimqigeqa; } try { if (class_exists($egkyssmuqcwaciya)) { goto kkogaccoqmsmmkmo; } wp_die("\x63\141\156\x20\x6e\157\x74\x20\x63\x72\145\x61\164\145\x20\151\156\163\164\141\156\143\145\x20\146\162\157\x20{$egkyssmuqcwaciya}\54\x20\162\x65\x71\165\x65\x73\164\x65\x64\x20\x63\154\141\163\x73\x20\x6e\x6f\164\x20\x65\170\x69\x73\x74\163\x2e"); goto qmiqicgscsuoyeqo; kkogaccoqmsmmkmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qmiqicgscsuoyeqo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oegaywiwywuyksaq; ysaumykuimqigeqa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oegaywiwywuyksaq: return $owgumcsyqsamiemg; } }
