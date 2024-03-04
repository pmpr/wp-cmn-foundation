<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65e5235100c8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\REST; abstract class RESTRegister extends Common { protected array $controllers = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\162\x65\163\x74\x5f\141\160\x69\137\151\x6e\x69\164", [$this, "\164\x69\163\167\x61\171\x73\161\x61\x77\x75\x63\147\147\165\143"]); parent::wigskegsqequoeks(); } public function tiswaysqawucgguc() { $this->gigwcakmiyayoigw(); foreach ($this->ksmgmuacawsaomao() as $ioqmgqkiwqgmgcks) { if (!$ioqmgqkiwqgmgcks instanceof RESTController) { goto eycgkegwmmsgwgsu; } $ioqmgqkiwqgmgcks->register_routes(); eycgkegwmmsgwgsu: uiokqiccsgcmweuw: } yikcmigmymmyykyy: } public function ksmgmuacawsaomao() : array { return $this->controllers; } public function ogyceaekywowkqsc(RESTController $ioqmgqkiwqgmgcks) : self { $this->controllers[] = $ioqmgqkiwqgmgcks; return $this; } public abstract function gigwcakmiyayoigw(); }
