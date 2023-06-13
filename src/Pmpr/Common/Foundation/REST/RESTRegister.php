<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             648879b8b8674             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\164\137\141\160\x69\x5f\x69\156\151\164", [$this, "\x74\151\163\167\x61\x79\163\161\141\167\165\x63\147\x67\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto imagiycyokkwucge; } $ioqmgqkiwqgmgcks->register_routes(); imagiycyokkwucge: msmcmycooiwwqiik: } iaewsguseweeqcqe: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
