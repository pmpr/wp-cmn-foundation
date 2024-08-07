<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3fc3df2d9f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x73\164\x5f\141\160\151\x5f\151\x6e\151\x74", [$this, "\x74\x69\x73\x77\141\171\163\x71\x61\x77\x75\x63\147\147\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto ymaiyayeueqekkqu; } $ioqmgqkiwqgmgcks->register_routes(); ymaiyayeueqekkqu: qayscesoyiskoeko: } kycuyyawyykwayum: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
