<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a9071795a84             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\164\x5f\141\160\151\137\151\156\x69\x74", [$this, "\x74\151\x73\x77\141\171\163\161\x61\x77\x75\x63\x67\147\165\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto geyiosucqswaeasw; } $ioqmgqkiwqgmgcks->register_routes(); geyiosucqswaeasw: omuemegmkesqgwys: } sgkqgucguyccaaki: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
