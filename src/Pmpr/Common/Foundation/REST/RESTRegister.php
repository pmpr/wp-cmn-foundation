<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679574b80d243             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; use Pmpr\Common\Foundation\Container\Container; abstract class RESTRegister extends Container { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x73\x74\137\141\x70\x69\x5f\151\156\x69\x74", [$this, "\164\151\x73\167\x61\x79\x73\x71\141\167\x75\x63\x67\x67\x75\x63"]); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if ($ioqmgqkiwqgmgcks instanceof RESTController) { $ioqmgqkiwqgmgcks->register_routes(); } } } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
