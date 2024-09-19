<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08eec428e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template; abstract class Engine extends Common { protected array $paths = []; public function iwqysmawycmsmces() : array { return $this->paths; } public abstract function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool; public abstract function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string; public abstract function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool; public abstract function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []); public final function yqcmsqwcioyookau($wksoawcgagcgoask) { global $suqsoqugkiuuyoiu; if (isset($suqsoqugkiuuyoiu[$wksoawcgagcgoask])) { goto kauowiucwweueecy; } $mkomwsiykqigmqca = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . "\137\x5f\122\117\117\124\x5f\x5f\x50\101\124\x48"); $aiieyweysaukqemc = strtolower($wksoawcgagcgoask); $this->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca); $suqsoqugkiuuyoiu[$wksoawcgagcgoask] = $aiieyweysaukqemc; kauowiucwweueecy: } public function qoqyomiqwooaeoiy() : bool { return true; } }
