<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6940431f1d8bd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Database\Query; class Union extends Statement { protected function run($siykeiywomwwuoiw) { if ($this->muyycecygiagkouk()) { $swwmymiaiosiyqis = null; foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { if ($wcgsoqmmciswkmiq instanceof Query) { $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($wcgsoqmmciswkmiq); if ($swwmymiaiosiyqis) { $siykeiywomwwuoiw->union($swwmymiaiosiyqis); } $swwmymiaiosiyqis = $siykeiywomwwuoiw; } } } return $siykeiywomwwuoiw; } }
