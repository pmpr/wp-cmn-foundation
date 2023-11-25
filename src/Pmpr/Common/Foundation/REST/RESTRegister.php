<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65622cf540ce2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\x73\x74\137\141\160\x69\137\x69\x6e\x69\164", [$this, "\164\151\x73\167\x61\x79\x73\x71\x61\167\x75\x63\x67\x67\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto laqgkacikykmcsos; } $ioqmgqkiwqgmgcks->register_routes(); laqgkacikykmcsos: amwqgwykwqyqsygy: } jwicyuowwocymagu: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
