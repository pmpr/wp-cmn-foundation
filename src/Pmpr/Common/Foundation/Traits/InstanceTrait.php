<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6421b30117b6e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait InstanceTrait { protected array $instances = []; private function akywgsiaucyaasgw(string $egkyssmuqcwaciya) : bool { return isset($this->instances[$egkyssmuqcwaciya]) && !empty($this->instances[$egkyssmuqcwaciya]); } private function symcgieuakksimmu(string $egkyssmuqcwaciya) { if ($this->akywgsiaucyaasgw($egkyssmuqcwaciya)) { goto cauqmacqkssciwyq; } $owgumcsyqsamiemg = new $egkyssmuqcwaciya(); $this->instances[$egkyssmuqcwaciya] = $owgumcsyqsamiemg; goto gusgywuaimwooawc; cauqmacqkssciwyq: $owgumcsyqsamiemg = $this->instances[$egkyssmuqcwaciya]; gusgywuaimwooawc: return $owgumcsyqsamiemg; } }
