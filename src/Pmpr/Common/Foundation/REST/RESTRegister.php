<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             627f3eeb1ef06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\163\x74\x5f\141\x70\x69\x5f\151\x6e\151\164", [$this, "\x74\x69\163\167\141\x79\163\x71\141\167\165\143\147\147\165\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto eawgawckwmwauyoe; } $ioqmgqkiwqgmgcks->register_routes(); eawgawckwmwauyoe: eugsieawaqqskgam: } ycaqgqcgsaogwqey: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
