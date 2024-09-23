<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e3829f9fd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template; abstract class Engine extends Common { protected array $paths = []; public function iwqysmawycmsmces() : array { return $this->paths; } public abstract function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool; public abstract function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string; public abstract function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool; public abstract function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []); public final function yqcmsqwcioyookau($wksoawcgagcgoask) { global $suqsoqugkiuuyoiu; if (isset($suqsoqugkiuuyoiu[$wksoawcgagcgoask])) { goto soacwieaayswiusy; } $mkomwsiykqigmqca = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . "\x5f\x5f\x52\117\117\124\137\x5f\120\101\x54\x48"); $aiieyweysaukqemc = strtolower($wksoawcgagcgoask); $this->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca); $suqsoqugkiuuyoiu[$wksoawcgagcgoask] = $aiieyweysaukqemc; soacwieaayswiusy: } public function qoqyomiqwooaeoiy() : bool { return true; } }
