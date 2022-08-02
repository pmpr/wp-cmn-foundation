<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62e99d56cbfce             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\163\x74\137\x61\160\x69\137\151\156\151\164", [$this, "\164\x69\x73\167\x61\171\x73\x71\141\167\165\143\x67\147\165\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto ouowckcwkscikcic; } $ioqmgqkiwqgmgcks->register_routes(); ouowckcwkscikcic: iywceuecmmmqksuu: } wucoiwmyomgymyku: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
