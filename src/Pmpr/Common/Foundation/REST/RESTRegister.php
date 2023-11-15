<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655528d270d17             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x73\164\137\141\160\x69\137\x69\156\x69\x74", [$this, "\164\151\163\x77\141\x79\163\161\x61\167\x75\143\x67\147\165\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto csuwemcoeyqemwks; } $ioqmgqkiwqgmgcks->register_routes(); csuwemcoeyqemwks: ioocowswsiqoyaai: } ookeyiumgkqqucia: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
