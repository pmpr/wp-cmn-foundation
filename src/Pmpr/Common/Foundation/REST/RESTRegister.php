<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644783315822d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x73\164\x5f\141\160\151\137\151\x6e\151\x74", [$this, "\x74\151\x73\167\x61\x79\x73\x71\x61\x77\165\143\x67\147\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto ygiycusyssyegauq; } $ioqmgqkiwqgmgcks->register_routes(); ygiycusyssyegauq: swowyqmmmawuumkq: } sceeeykswowqeqyi: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
