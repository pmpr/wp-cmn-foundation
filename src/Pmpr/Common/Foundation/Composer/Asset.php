<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Composer;

use Exception;
use Pmpr\Common\Foundation\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Finder\Finder;

class Asset
{
    const METHOD_COPY = 'copy';
    const EXCLUDE_PARENT = ['symfony'];
    const METHOD_ABSOLUTE_SYMLINK = 'absolute symlink';
    const METHOD_RELATIVE_SYMLINK = 'relative symlink';
    
    public function ywwqugyyeuaqousg($iswcokucwmiosiaq)
    {
        echo $iswcokucwmiosiaq . PHP_EOL;
    }
    
    public function kcciqwskewsuaemk() : Filesystem
    {
        return Filesystem::symcgieuakksimmu();
    }
    
    private function iuuicquiigqcwyii($ymiuaqwqkqoqkmck, $eisqsskqimiigkay) : array
    {
        $iykcmaymmeyaakmg = $this->smgcygggmywqmcmo($ymiuaqwqkqoqkmck, $eisqsskqimiigkay);
        $oegoegssokkyiqam = [];
        foreach ($iykcmaymmeyaakmg as $ymqmyyeuycgmigyo) {
            $qmwoqyacswkwkiog = explode("/", $ymqmyyeuycgmigyo);
            if (is_array($qmwoqyacswkwkiog) && end($qmwoqyacswkwkiog) === $eisqsskqimiigkay || $ymqmyyeuycgmigyo === $eisqsskqimiigkay) {
                array_pop($qmwoqyacswkwkiog);
                
                if (is_array($qmwoqyacswkwkiog)) {
                    $uusmaiomayssaecw = end($qmwoqyacswkwkiog);
                    $oegoegssokkyiqam[$uusmaiomayssaecw] = $ymqmyyeuycgmigyo;
                } else {
                    $oegoegssokkyiqam[] = $ymqmyyeuycgmigyo;
                }
            }
            gyeayeuuyiemuwuq:
        }
        aymmymequcisekie:
        return $oegoegssokkyiqam;
    }
    
    private function qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        $this->kcciqwskewsuaemk()->mkdir($gwgkqsyaesmocmsk, 0777);
        $this->kcciqwskewsuaemk()->sqqcuwaswygikqua($amwwiceekosasokk, $gwgkqsyaesmocmsk, Finder::create()->gmsgucyogkysueyi(false)->ymmyeygsewqgsqea($amwwiceekosasokk));
        return self::METHOD_COPY;
    }
    
    public function smgcygggmywqmcmo($miawkwqioaeasiig, $ccamueccusigaaio) : array
    {
        $iuaemokqameyemms = [];
        $msyoeiaqaaseqiaw = array_filter(glob($miawkwqioaeasiig), 'is_dir');
        $iuaemokqameyemms = array_merge($iuaemokqameyemms, $msyoeiaqaaseqiaw);
        foreach ($msyoeiaqaaseqiaw as $smaiamkswqkisawm) {
            $iuaemokqameyemms = array_merge($iuaemokqameyemms, $this->smgcygggmywqmcmo($smaiamkswqkisawm . '/*', $ccamueccusigaaio));
            sugumgeqcwgekcqs:
        }
        kyggwyywiycksgqq:
        return $iuaemokqameyemms;
    }
    
    private function symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, $hssqsasscequuyky = false)
    {
        if ($hssqsasscequuyky) {
            $this->kcciqwskewsuaemk()->mkdir(dirname($gwgkqsyaesmocmsk));
            $amwwiceekosasokk = $this->kcciqwskewsuaemk()->ikeyocqcquygwoia($amwwiceekosasokk, realpath(dirname($gwgkqsyaesmocmsk)));
        }
        $this->kcciqwskewsuaemk()->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        if (!file_exists($gwgkqsyaesmocmsk)) {
            throw new IOException(sprintf('Symbolic link "%s" was created but appears to be broken.', $gwgkqsyaesmocmsk), 0, null, $gwgkqsyaesmocmsk);
        }
    }
    
    private function eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        try {
            $this->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk, true);
            $qgciuiagkkguykgs = self::METHOD_RELATIVE_SYMLINK;
        } catch (IOException $iewosgggaueeyymg) {
            $qgciuiagkkguykgs = $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        }
        return $qgciuiagkkguykgs;
    }
    
    private function wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk) : string
    {
        try {
            $this->symlink($amwwiceekosasokk, $gwgkqsyaesmocmsk);
            $qgciuiagkkguykgs = self::METHOD_ABSOLUTE_SYMLINK;
        } catch (IOException $iewosgggaueeyymg) {
            
            $qgciuiagkkguykgs = $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
        }
        return $qgciuiagkkguykgs;
    }
    
    public function eeqkqkkwqyeoucok($omckemiaycwscaws, $aocoewseyaaosiag = self::METHOD_RELATIVE_SYMLINK) : int
    {
        $owousuaweekeyagq = 0;
        $omckemiaycwscaws = rtrim($omckemiaycwscaws, '/\\');
        $wpContent = realpath("{$omckemiaycwscaws}/../");
        $ymiuaqwqkqoqkmck = "{$omckemiaycwscaws}/vendor";
        $oegoegssokkyiqam = $this->iuuicquiigqcwyii($ymiuaqwqkqoqkmck, 's');
        if ($oegoegssokkyiqam) {
            $yaeakkosskocswae = "{$wpContent}/s";
            $this->ywwqugyyeuaqousg('asset script start.');
            if ($this->kcciqwskewsuaemk()->exists([$omckemiaycwscaws, $wpContent])) {
                $this->kcciqwskewsuaemk()->remove($yaeakkosskocswae);
                foreach ($oegoegssokkyiqam as $omwmuycmeqcqokom => $amwwiceekosasokk) {
                    if (count(scandir($amwwiceekosasokk)) > 2) {
                        try {
                            $gwgkqsyaesmocmsk = $yaeakkosskocswae . '/' . $omwmuycmeqcqokom;
                            switch ($aocoewseyaaosiag) {
                                case self::METHOD_RELATIVE_SYMLINK:
                                    $this->eouuaskgwsyskmgm($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                                    goto gaceikykesgywssm;
                                case self::METHOD_ABSOLUTE_SYMLINK:
                                    $this->wasqaycmmwksimoa($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                                    goto gaceikykesgywssm;
                                default:
                                    $this->qaoyikksceuyeigw($amwwiceekosasokk, $gwgkqsyaesmocmsk);
                            }
                            weggeeowykuqooyg:
                            gaceikykesgywssm:
                            $this->ywwqugyyeuaqousg(sprintf("Copy Operation from %s to %s is successful", $amwwiceekosasokk, $gwgkqsyaesmocmsk));
                        } catch (Exception $iewosgggaueeyymg) {
                            $this->ywwqugyyeuaqousg($iewosgggaueeyymg->sagusgigmkeysock());
                        }
                    } else {
                        $this->ywwqugyyeuaqousg(sprintf("%s directory is empty.", $amwwiceekosasokk));
                    }
                    aqmiewawgseaqeqk:
                }
                imeaiksowuukikui:
            } else {
                $this->ywwqugyyeuaqousg("Require directories not exists");
            }
        } else {
            $this->ywwqugyyeuaqousg("can not find any valid path in {$ymiuaqwqkqoqkmck}");
        }
        $this->ywwqugyyeuaqousg('asset script done.');
        return $owousuaweekeyagq;
    }
}
