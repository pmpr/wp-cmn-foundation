<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             640d020920cd1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\x74\137\141\x70\x69\137\x69\156\x69\x74", [$this, "\x74\x69\x73\167\x61\x79\163\x71\141\167\165\143\147\x67\165\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto oomguqikqokqwgku; } $ioqmgqkiwqgmgcks->register_routes(); oomguqikqokqwgku: acsqgiuageaasiyy: } mugqyyeayeyggqqk: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
