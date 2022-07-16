<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d27f9d93401             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\x73\x74\x5f\x61\x70\x69\137\x69\x6e\x69\164", [$this, "\164\151\x73\x77\x61\171\x73\x71\x61\x77\165\x63\147\x67\x75\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto gimmuoqwckiseaik; } $ioqmgqkiwqgmgcks->register_routes(); gimmuoqwckiseaik: iqcogmsguwoikame: } quwcqmyokicssyew: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
