<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             658012f9e1738             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x73\164\137\x61\160\151\137\x69\x6e\x69\164", [$this, "\164\151\x73\167\x61\171\163\161\141\167\x75\x63\x67\147\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto swqkyoemiswegyci; } $ioqmgqkiwqgmgcks->register_routes(); swqkyoemiswegyci: ccegsywqocccgegu: } ocgsiomyyckcausy: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
