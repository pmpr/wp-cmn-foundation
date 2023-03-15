<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             641183e17ed46             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto sykuuisikqcwuaqu; } $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; goto mquyemuqcqeassqc; sykuuisikqcwuaqu: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; mquyemuqcqeassqc: return $owgumcsyqsamiemg; } }
