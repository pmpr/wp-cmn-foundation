<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             647cafa1ad878             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\163\164\x5f\x61\160\x69\x5f\x69\156\x69\164", [$this, "\164\151\163\167\141\171\x73\x71\141\x77\165\143\147\147\165\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto imagiycyokkwucge; } $ioqmgqkiwqgmgcks->register_routes(); imagiycyokkwucge: msmcmycooiwwqiik: } iaewsguseweeqcqe: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
