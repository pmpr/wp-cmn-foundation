<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Template\Traits;

use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\ManipulateFormat;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\Template\Engine;
use Pmpr\Common\Foundation\Template\Twig\Twig;

trait TemplateTrait
{
    
    protected ?Engine $templating = null;
    
    protected ?string $templatePrefix = '';
    
    public function kasioquywmeosmsi() : ?Engine
    {
        if (!$this->templating) {
            $this->templating = Twig::symcgieuakksimmu()->uykissogmuaaocsg();
        }
        return $this->templating;
    }
    
    public final function iuygowkemiiwqmiw(string $qqscaoyqikuyeoaw, array $qookweymeqawmcwo = [], array $ywmkwiwkosakssii = []) : string
    {
        $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ['echo' => false, 'class' => false, 'default' => false]);
        $koaqeegoeiaiccse = ManipulateArray::get($ywmkwiwkosakssii, 'echo', false);
        $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, 'class', false);
        $ggauoeuaesiymgee = ManipulateArray::get($ywmkwiwkosakssii, 'default', false);
        $wkcwykowmmmwioqs = $this->eskggqsasgsiommy($qqscaoyqikuyeoaw, $ggauoeuaesiymgee, $egkyssmuqcwaciya);
        $nsmgceoqaqogqmuw = $this->kasioquywmeosmsi()->render($wkcwykowmmmwioqs, $qookweymeqawmcwo);
        if ($koaqeegoeiaiccse) {
            echo $nsmgceoqaqogqmuw;
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public function sawwoqoiocqwakai($egkyssmuqcwaciya = null) : ?string
    {
        if ($egkyssmuqcwaciya) {
            return $this->kasioquywmeosmsi()->siameoooqiiuqgsm($egkyssmuqcwaciya);
        }
        if (empty($this->templatePrefix)) {
            $this->templatePrefix = $this->kasioquywmeosmsi()->siameoooqiiuqgsm(self::uqggkiomyiceyooa());
        }
        return $this->templatePrefix;
    }
    
    private final function omwawqyqikcsgyqo(string $mkomwsiykqigmqca) : string
    {
        $uomewyckeuqoqocu = explode(DIRECTORY_SEPARATOR, $mkomwsiykqigmqca);
        $ymqmyyeuycgmigyo = array_pop($uomewyckeuqoqocu);
        array_pop($uomewyckeuqoqocu);
        $uomewyckeuqoqocu[] = $ymqmyyeuycgmigyo;
        return implode(DIRECTORY_SEPARATOR, $uomewyckeuqoqocu);
    }
    
    public final function kkcywkucqsawqqqo($aiieyweysaukqemc = null, $mkomwsiykqigmqca = null)
    {
        $wksoawcgagcgoask = $this->akuociswqmoigkas();
        if (!$mkomwsiykqigmqca) {
            $mkomwsiykqigmqca = ManipulateFile::cmaecekuqkwmemms(strtoupper($wksoawcgagcgoask) . self::__ROOT__PATH);
        }
        if (!$aiieyweysaukqemc) {
            $aiieyweysaukqemc = strtolower($wksoawcgagcgoask);
        }
        return $this->kasioquywmeosmsi()->wkosicsekwkigyss($aiieyweysaukqemc, $mkomwsiykqigmqca);
    }
    
    public final function eskggqsasgsiommy($qqscaoyqikuyeoaw, ?string $ggauoeuaesiymgee = null, $egkyssmuqcwaciya = null)
    {
        $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim($qqscaoyqikuyeoaw);
        if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
            $sqeykgyoooqysmca = '';
            if (!preg_match('/\\.([0-9a-z]+$)/i', $qqscaoyqikuyeoaw, $meyiiwcswqmuggyg)) {
                $sqeykgyoooqysmca = '.html';
            }
            $wkcwykowmmmwioqs = $this->ygwkeuwkeyieqsim(trailingslashit($this->sawwoqoiocqwakai($egkyssmuqcwaciya)), "{$qqscaoyqikuyeoaw}{$sqeykgyoooqysmca}.twig", $ggauoeuaesiymgee);
        }
        return $wkcwykowmmmwioqs;
    }
    
    private final function ygwkeuwkeyieqsim(?string $wkcwykowmmmwioqs, ?string $qqscaoyqikuyeoaw = null, ?string $ggauoeuaesiymgee = null)
    {
        if ($wkcwykowmmmwioqs) {
            if ($qqscaoyqikuyeoaw) {
                if (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs . $qqscaoyqikuyeoaw)) {
                    $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
                }
                $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $qqscaoyqikuyeoaw;
                if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw) && $ggauoeuaesiymgee) {
                    $qqscaoyqikuyeoaw = $wkcwykowmmmwioqs . $ggauoeuaesiymgee;
                }
                $wkcwykowmmmwioqs = $qqscaoyqikuyeoaw;
            } elseif (!$this->kasioquywmeosmsi()->exists($wkcwykowmmmwioqs)) {
                $wkcwykowmmmwioqs = $this->omwawqyqikcsgyqo($wkcwykowmmmwioqs);
            }
        }
        return $wkcwykowmmmwioqs;
    }
}
