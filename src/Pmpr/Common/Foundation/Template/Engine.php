<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675819f57c47e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Template; use Pmpr\Common\Foundation\Container\Container; abstract class Engine extends Container { protected array $paths = []; public function iwqysmawycmsmces() : array { return $this->paths; } public abstract function exists($qqscaoyqikuyeoaw, $wksoawcgagcgoask = null) : bool; public abstract function siameoooqiiuqgsm($egkyssmuqcwaciya) : ?string; public abstract function wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca) : bool; public abstract function ugcgocaoguesoiic(string $wkcwykowmmmwioqs, array $qookweymeqawmcwo = []); public final function yqcmsqwcioyookau($wksoawcgagcgoask) { global $suqsoqugkiuuyoiu; if (!isset($suqsoqugkiuuyoiu[$wksoawcgagcgoask])) { $mkomwsiykqigmqca = $this->caokeucsksukesyo()->gyecsegqciqykomu()->cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . "\x5f\x5f\122\117\x4f\124\x5f\x5f\x50\101\124\x48"); $aiieyweysaukqemc = strtolower($wksoawcgagcgoask); $this->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca); $suqsoqugkiuuyoiu[$wksoawcgagcgoask] = $aiieyweysaukqemc; } } public function qoqyomiqwooaeoiy() : bool { return true; } }
