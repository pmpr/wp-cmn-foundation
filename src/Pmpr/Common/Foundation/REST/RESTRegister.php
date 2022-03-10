<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622a1b598f12e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\x73\x74\137\x61\160\151\x5f\151\x6e\x69\164", [$this, "\x74\151\163\x77\141\x79\163\161\141\167\165\143\x67\147\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto awkqcyusycccekwq; } $ioqmgqkiwqgmgcks->register_routes(); awkqcyusycccekwq: myooisakyuggoggc: } qsaoyggkqwcgskwk: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
