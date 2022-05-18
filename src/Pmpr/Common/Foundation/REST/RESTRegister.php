<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             628504aed1139             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\x74\137\x61\160\151\137\151\156\151\x74", [$this, "\164\x69\163\167\141\x79\163\x71\x61\x77\165\143\147\147\165\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto suigamkkgmwiaakg; } $ioqmgqkiwqgmgcks->register_routes(); suigamkkgmwiaakg: wwwyuwogyaymawes: } mmkoaqwkqwweiuco: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
