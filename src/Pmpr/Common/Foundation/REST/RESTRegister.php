<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e1d4f314eb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\145\163\x74\137\x61\x70\x69\x5f\x69\156\x69\x74", [$this, "\164\151\163\167\x61\171\x73\x71\x61\x77\x75\x63\147\x67\165\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto qogqewiwmwiwskgm; } $ioqmgqkiwqgmgcks->register_routes(); qogqewiwmwiwskgm: qiaqsassksqiuyae: } cecuyayqoioasumi: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
