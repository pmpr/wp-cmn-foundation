<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a3b6296ad02             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; use Exception; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto ysaumykuimqigeqa; } try { if (class_exists($egkyssmuqcwaciya)) { goto kkogaccoqmsmmkmo; } wp_die("\x63\141\156\x20\156\157\164\40\x63\162\x65\141\164\x65\x20\151\156\163\164\x61\x6e\143\145\x20\146\162\x6f\40{$egkyssmuqcwaciya}\x2c\40\x72\x65\161\x75\x65\163\164\x65\144\x20\143\x6c\x61\163\163\x20\156\157\164\40\145\170\151\x73\x74\163\x2e"); goto qmiqicgscsuoyeqo; kkogaccoqmsmmkmo: $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; qmiqicgscsuoyeqo: } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai); } goto oegaywiwywuyksaq; ysaumykuimqigeqa: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; oegaywiwywuyksaq: return $owgumcsyqsamiemg; } }
