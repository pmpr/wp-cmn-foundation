<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             625c3eff69106             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x73\x74\x5f\x61\160\151\137\151\x6e\151\164", [$this, "\x74\x69\x73\167\141\171\x73\x71\x61\x77\165\143\x67\147\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto ickcmqoiosquugwe; } $ioqmgqkiwqgmgcks->register_routes(); ickcmqoiosquugwe: eiawsoasmscmqswa: } goeoymmqqqeeoime: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
