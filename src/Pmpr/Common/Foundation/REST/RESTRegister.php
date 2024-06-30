<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66812ccd0a7ad             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\145\163\x74\x5f\x61\x70\x69\x5f\x69\156\151\x74", [$this, "\164\151\163\x77\x61\171\x73\161\x61\x77\165\143\147\x67\x75\x63"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto ysoqeuugiuswykyu; } $ioqmgqkiwqgmgcks->register_routes(); ysoqeuugiuswykyu: owaimkmgemoqewmm: } eoeiaccouaymakgm: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
