<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             688b675cde12a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Process; class Cleanup extends Queue { const ekqmweaocsoswsmc = 'pr_queue_cleanup_old_items'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'foundation_cleanup'; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea'])->qcsmikeggeemccuu(self::ekqmweaocsoswsmc, [$this, 'sqsemkikkiaaqeig']); } public function yeyiguyegmmyusea() { return $this->ooosmymooksgmyos(strtotime('midnight'), DAY_IN_SECONDS, self::ekqmweaocsoswsmc); } public function sqsemkikkiaaqeig() { } }
