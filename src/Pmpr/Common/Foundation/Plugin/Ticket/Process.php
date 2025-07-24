<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68821f1d309d2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const kwqsoeywkaegiuqe = 'pr_ticket_fetch_configuration_now'; const gikmesasuuecmiuo = 'pr_ticket_fetch_configuration_midnight'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'plugin_ticket'; } public function qkwwakswqmiecgcs() : int { return $this->ooosmymooksgmyos(strtotime('midnight'), DAY_IN_SECONDS * 2, self::gikmesasuuecmiuo); } public function qsaqkwuakgcomwya() : int { $ksaameoqigiaoigg = 0; if (!$this->wkoqewmcaeoycyic()) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::kwqsoeywkaegiuqe); } return $ksaameoqigiaoigg; } public function wkoqewmcaeoycyic() : bool { return $this->exists([Constants::cmooywkooekaakwk => self::kwqsoeywkaegiuqe, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo]); } }
