<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642ad5cc3c612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x73\x74\137\x61\160\x69\x5f\x69\156\x69\x74", [$this, "\164\151\163\x77\141\x79\x73\161\141\167\165\x63\x67\147\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto wiaugmimkuikykys; } $ioqmgqkiwqgmgcks->register_routes(); wiaugmimkuikykys: qyeewwmuogssaegc: } egumckcoaaowkgoy: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
