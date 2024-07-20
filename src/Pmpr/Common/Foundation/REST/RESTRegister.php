<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c3a21eaac3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\x73\164\x5f\x61\160\x69\x5f\x69\x6e\151\164", [$this, "\164\151\163\167\x61\x79\x73\161\141\x77\x75\143\x67\x67\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto smqiciaewkmmyswu; } $ioqmgqkiwqgmgcks->register_routes(); smqiciaewkmmyswu: cqeyqcauamscauiq: } ewaqcgwowgogwaqi: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
