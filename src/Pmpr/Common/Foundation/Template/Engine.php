<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebf559ba6b4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template; abstract class Engine extends Common { protected array $paths = []; public function iwqysmawycmsmces() : array { return $this->paths; } public abstract function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool; public abstract function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string; public abstract function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool; public abstract function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []); public final function yqcmsqwcioyookau($wksoawcgagcgoask) { global $suqsoqugkiuuyoiu; if (isset($suqsoqugkiuuyoiu[$wksoawcgagcgoask])) { goto qwiwekqsmmeakmuw; } $mkomwsiykqigmqca = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . "\137\x5f\122\x4f\x4f\x54\x5f\x5f\120\x41\x54\x48"); $aiieyweysaukqemc = strtolower($wksoawcgagcgoask); $this->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca); $suqsoqugkiuuyoiu[$wksoawcgagcgoask] = $aiieyweysaukqemc; qwiwekqsmmeakmuw: } public function qoqyomiqwooaeoiy() : bool { return true; } }
