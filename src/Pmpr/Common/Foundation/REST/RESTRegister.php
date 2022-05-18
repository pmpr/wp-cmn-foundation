<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             628529c50a209             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x72\x65\x73\x74\137\x61\160\x69\x5f\151\x6e\151\x74", [$this, "\164\151\163\x77\141\x79\163\161\x61\x77\165\x63\x67\147\165\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto yguywoyayoeuakim; } $ioqmgqkiwqgmgcks->register_routes(); yguywoyayoeuakim: ouemywaioiewaukw: } iyakugyowcmiuqoi: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
