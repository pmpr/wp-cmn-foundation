<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             652b9c2925f06             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\163\164\137\x61\x70\x69\x5f\x69\x6e\x69\x74", [$this, "\164\x69\163\x77\141\x79\x73\x71\x61\x77\165\x63\x67\147\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto iweywcmciioqsoka; } $ioqmgqkiwqgmgcks->register_routes(); iweywcmciioqsoka: qkqgiqqqauueicmg: } gsukkgwiogagoeym: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
