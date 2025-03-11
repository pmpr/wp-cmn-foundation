<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d02dbf4efea             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Pmpr\Common\Foundation\Interfaces\Constants; class RawSelect extends Statement { public function csyqowowokmwskks() { return $this->maqiysyuqmwcqoig(Constants::wgwemioaokwaiuyq); } public function suqwmwoiekgckekw(string $wiokgkkuiumaumci) : self { return $this->igiywquyccyiaucw('expression', $wiokgkkuiumaumci); } protected function run($siykeiywomwwuoiw) { $wiokgkkuiumaumci = $this->imkyoqyocosuqasu('expression'); if (!$wiokgkkuiumaumci) { switch ($this->auiqywousmcqsskq()) { case Constants::wgwemioaokwaiuyq: $wiokgkkuiumaumci = "SUM({$this->myywwqkyiwawwquy()}) as {$this->kwyoumwowyqcekys()}"; break; } } if ($wiokgkkuiumaumci) { return $siykeiywomwwuoiw->selectRaw($wiokgkkuiumaumci); } return $siykeiywomwwuoiw; } }
