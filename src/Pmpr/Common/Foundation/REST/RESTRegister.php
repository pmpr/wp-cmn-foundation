<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             641183e17ed46             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x73\x74\137\141\x70\x69\137\x69\x6e\151\x74", [$this, "\164\x69\163\x77\141\171\x73\x71\141\167\165\143\147\x67\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto xkgykmoskoqykakc; } $ioqmgqkiwqgmgcks->register_routes(); xkgykmoskoqykakc: yseacqgykcseamce: } qqowguycmsmuauyu: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
