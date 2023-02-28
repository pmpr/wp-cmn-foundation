<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe72e42d07f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\x73\164\x5f\x61\160\x69\137\x69\156\151\x74", [$this, "\x74\151\x73\x77\x61\x79\x73\x71\141\167\x75\143\147\x67\165\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto mocauoaugmiuacuu; } $ioqmgqkiwqgmgcks->register_routes(); mocauoaugmiuacuu: wmyagwwmquqeyyok: } sgqaaocqgayiigos: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
