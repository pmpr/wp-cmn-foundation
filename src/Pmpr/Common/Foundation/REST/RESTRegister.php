<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             664697d2b4114             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\x74\x5f\x61\x70\151\137\x69\x6e\x69\164", [$this, "\x74\151\x73\x77\x61\x79\x73\161\141\167\x75\143\x67\147\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto sumiomammkayeqis; } $ioqmgqkiwqgmgcks->register_routes(); sumiomammkayeqis: oqksakqyecmsuscq: } msaugmwuooqkmwus: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
