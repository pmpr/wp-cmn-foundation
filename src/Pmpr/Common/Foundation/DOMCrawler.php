<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation;

use DOMDocument;
use DOMElement;
use DOMNode;
use Exception;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString;
use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML;
use InvalidArgumentException;
use Symfony\Component\DomCrawler\Crawler;

class DOMCrawler
{
    const UPDATE_ACTION = 'update';
    const REMOVE_ACTION = 'remove';
    const RENAME_ACTION = 'rename';
    const REPLACE_ACTION = 'replace';
    const REPLACE_WITH_ACTION = 'replace_with';
    
    public static function qaqiuweqoukkgqsk($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ekiuyucoiagmscgy, $uuyoeicyoayimaoa = false, $ksaameoqigiaoigg = true)
    {
        if ($ekiuyucoiagmscgy) {
            $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
            if ($kasgukgceywckyou instanceof Crawler) {
                $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
                foreach ($kwmksuuciqkiymek as $momcykaoccoymeig => $ymyisaeksssueeik) {
                    if ($uuyoeicyoayimaoa && $momcykaoccoymeig > $uuyoeicyoayimaoa) {
                        goto cwugokqsmiomgmqg;
                    } elseif ($ymyisaeksssueeik instanceof DOMElement) {
                        if (!call_user_func_array($ekiuyucoiagmscgy, [&$ymyisaeksssueeik, $kasgukgceywckyou, $yuumukkaswwoywya])) {
                            goto cwugokqsmiomgmqg;
                        }
                    }
                    uuuceqkseqkqawko:
                }
                cwugokqsmiomgmqg:
                if ($ksaameoqigiaoigg) {
                    $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
                }
            }
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function _getCrawler($nsmgceoqaqogqmuw)
    {
        $kasgukgceywckyou = null;
        if ($nsmgceoqaqogqmuw instanceof Crawler) {
            $kasgukgceywckyou = $nsmgceoqaqogqmuw;
        } elseif ($nsmgceoqaqogqmuw && trim(preg_replace('/\\s+/', ' ', $nsmgceoqaqogqmuw))) {
            $kasgukgceywckyou = new Crawler(mb_convert_encoding($nsmgceoqaqogqmuw, 'HTML-ENTITIES', 'UTF-8'));
        }
        return $kasgukgceywckyou;
    }
    
    public static function after($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou instanceof Crawler) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMElement) {
                    $koaqiaecmascwuyy = self::_createElementFromHtml($kasgukgceywckyou, $ewgwqamkygiqaawc);
                    if ($koaqiaecmascwuyy) {
                        $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
                        $omwmuycmeqcqokom->cgeyeoimiuyogose($koaqiaecmascwuyy);
                    }
                }
                yksamaucqkqsawkk:
            }
            ekoegocuqoycoeyq:
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function umuecysoywoumgwo($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou instanceof Crawler) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            return $kwmksuuciqkiymek->count() > 0;
        }
        return false;
    }
    
    public static function igyokgqyiouieioo(Crawler $kasgukgceywckyou)
    {
        $ymyisaeksssueeik = $kasgukgceywckyou->wugqmqwisygwoeas(0);
        return $ymyisaeksssueeik->ownerDocument;
    }
    
    public static function ygmcsmegcysyeoss($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        $gaeqamemwmwsyukm = 0;
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou instanceof Crawler) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
        }
        return $gaeqamemwmwsyukm;
    }
    
    private static function _removeNode(DOMNode $ymyisaeksssueeik)
    {
        $ymyisaeksssueeik->parentNode->uwqgywaceaaymckg($ymyisaeksssueeik);
    }
    
    public static function oiycmcksqgqokggs($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $omwmuycmeqcqokom = null;
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMNode) {
                    $omwmuycmeqcqokom = $ymyisaeksssueeik->parentNode;
                    $omwmuycmeqcqokom->caqmeawgoiceoymu($ymyisaeksssueeik, $omwmuycmeqcqokom);
                    $nsmgceoqaqogqmuw = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo();
                    goto akeoaicoieaiekcw;
                }
                kskqquqsegiiogek:
            }
            akeoaicoieaiekcw:
        }
        return $nsmgceoqaqogqmuw;
    }
    
    private static function _getHtml($gykwsaeqegqowywy, $ggauoeuaesiymgee = '')
    {
        try {
            $ikoqkmiqkckowcgg = '<!DOCTYPE html>';
            $kkkqocwqmaokqcmc = strpos(strtolower($ggauoeuaesiymgee), strtolower($ikoqkmiqkckowcgg)) !== false;
            if ($gykwsaeqegqowywy instanceof Crawler) {
                if ($kkkqocwqmaokqcmc) {
                    $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->yqwwccackoayicyy();
                    $nsmgceoqaqogqmuw = $ikoqkmiqkckowcgg . $nsmgceoqaqogqmuw;
                } else {
                    $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->html($ggauoeuaesiymgee);
                    $nsmgceoqaqogqmuw = preg_replace(['/(<)(head)([^>]*?)(\\/?\\s*>)|<\\/head>/', '/(<)(body)([^>]*?)(\\/?\\s*>)|<\\/body>/', '/(parent=")([a-zA-Z0-9:;\\.\\s\\(\\)\\-\\,]*)(")/'], '', $nsmgceoqaqogqmuw);
                }
            } elseif ($gykwsaeqegqowywy instanceof DOMDocument) {
                $nsmgceoqaqogqmuw = $gykwsaeqegqowywy->skkueuquuqweeyqo();
            } elseif (is_string($gykwsaeqegqowywy)) {
                $nsmgceoqaqogqmuw = $gykwsaeqegqowywy;
            } else {
                throw new InvalidArgumentException();
            }
        } catch (Exception $wgaoewqkwgomoaai) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        if (!is_string($nsmgceoqaqogqmuw)) {
            $nsmgceoqaqogqmuw = $ggauoeuaesiymgee;
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function igmaewykumgwoaoy($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::UPDATE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ccekeuwwqqoiwuwy($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        $siquossayskcwkea = [];
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                $siquossayskcwkea = self::wuuawmeqqyyyemsw($ymyisaeksssueeik);
                if ($siquossayskcwkea) {
                    goto mocaoayiouggauiy;
                }
                ygskksomysgaokek:
            }
            mocaoayiouggauiy:
        }
        return $siquossayskcwkea;
    }
    
    public static function wuuawmeqqyyyemsw($ymyisaeksssueeik)
    {
        $siquossayskcwkea = [];
        if ($ymyisaeksssueeik instanceof DOMElement) {
            foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                $siquossayskcwkea[$sicussmmuqmeqygw->nodeName] = $sicussmmuqmeqygw->nodeValue;
                qgkiguggkyiycwow:
            }
            wwcwmkowgooocaem:
        }
        return $siquossayskcwkea;
    }
    
    public static function wugqmqwisygwoeas($nsmgceoqaqogqmuw, $yuumukkaswwoywya)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        return $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
    }
    
    public static function ekiwyqeukkqcuacc($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $ymqmyyeuycgmigyo) {
                $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
                foreach ($kwmksuuciqkiymek as $uumwowmewaqyggce) {
                    if ($uumwowmewaqyggce instanceof DOMNode) {
                        $okcscwesammossuq = [];
                        foreach ($uumwowmewaqyggce->childNodes as $wcgsoqmmciswkmiq) {
                            $okcscwesammossuq[] = $wcgsoqmmciswkmiq;
                            weouocwmwicayyiy:
                        }
                        iuysqgmmgqiywssm:
                        $uuswugicgoqcyiiy = $uumwowmewaqyggce->ownerDocument->auokmyiaciikcekk($ymqmyyeuycgmigyo);
                        foreach ($okcscwesammossuq as $wcgsoqmmciswkmiq) {
                            $uuswugicgoqcyiiy->cgeyeoimiuyogose($uumwowmewaqyggce->ownerDocument->gqskweuukuceuaoq($wcgsoqmmciswkmiq, true));
                            gkkwmqoacciwomqs:
                        }
                        ggyoywwggggekycs:
                        foreach ($uumwowmewaqyggce->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                            $qmgyyqwkskaiwcqg = $sicussmmuqmeqygw->nodeName;
                            $giueyucwwwwiooim = $sicussmmuqmeqygw->nodeValue;
                            $uuswugicgoqcyiiy->cmgoqeksagmigwmg($qmgyyqwkskaiwcqg, $giueyucwwwwiooim);
                            oycuaqewsskgkqci:
                        }
                        kucqcgeesiccuuia:
                        $uumwowmewaqyggce->parentNode->caqmeawgoiceoymu($uuswugicgoqcyiiy, $uumwowmewaqyggce);
                    }
                    ugiqiewymimqecsu:
                }
                aeaciamekuqyieys:
                wyugqoowakyicyic:
            }
            becceuuwokgoaewy:
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function suygukqgsuwaaumg($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou instanceof Crawler) {
            if (is_array($sgksuwkwyimqgaii)) {
                foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya) {
                    self::_removeElement($kasgukgceywckyou, $yuumukkaswwoywya);
                    amqgiisymksuuuss:
                }
                ocmagamuyawyiyka:
            } else {
                self::_removeElement($kasgukgceywckyou, $sgksuwkwyimqgaii);
            }
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function maakiyaweemewuao($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::RENAME_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function ogaeogwycyqqckeu($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REMOVE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    public static function mqyacwaaocgcsyag($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
                $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
                foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                    if ($ymyisaeksssueeik instanceof DOMNode) {
                        $msqkueqksqwmskak = array_keys($siquossayskcwkea);
                        foreach ($ymyisaeksssueeik->attributes as $qmgyyqwkskaiwcqg => $sicussmmuqmeqygw) {
                            $ymqmyyeuycgmigyo = $sicussmmuqmeqygw->nodeName;
                            if (in_array($ymqmyyeuycgmigyo, $msqkueqksqwmskak)) {
                                $ymyisaeksssueeik->cmgoqeksagmigwmg($siquossayskcwkea[$ymqmyyeuycgmigyo], $sicussmmuqmeqygw->nodeValue);
                            }
                            uugwmywmaqomeksa:
                        }
                        ucasigqmoiwaimkk:
                    }
                    gwkawguwsamuomuo:
                }
                sgiouaqukyycswqm:
                syoeqaqkseguwmgy:
            }
            iwgmywqocewwgoeo:
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function qcgocuceocquqcuw($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _find(?Crawler $kasgukgceywckyou, $yuumukkaswwoywya)
    {
        if ($kasgukgceywckyou instanceof Crawler) {
            return $kasgukgceywckyou->filter($yuumukkaswwoywya);
        }
        return $kasgukgceywckyou;
    }
    
    private static function _removeElement($kasgukgceywckyou, $yuumukkaswwoywya)
    {
        $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
            self::_removeNode($ymyisaeksssueeik);
            mmmqqoemusicwgqg:
        }
        wowmysuygugawmmu:
    }
    
    public static function waecsyqmwascmqoa($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $wisgiwskwawciiee)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        $eqgoocgaqwqcimie = '';
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMElement) {
                    $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($wisgiwskwawciiee);
                    if ($eqgoocgaqwqcimie) {
                        goto iquugwoswgkoiieg;
                    }
                }
                xogaycsaesgqeqig:
            }
            iquugwoswgkoiieg:
        }
        return $eqgoocgaqwqcimie;
    }
    
    public static function goqgkgckyagueiso($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii)
    {
        return self::_getHtml(self::_updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, self::REPLACE_WITH_ACTION), $nsmgceoqaqogqmuw);
    }
    
    private static function _createElement(DOMNode $omwmuycmeqcqokom, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        foreach ($qeaoumiemyikogys->auamuceiowkuacoq('body')->item(0)->childNodes as $ymyisaeksssueeik) {
            $omwmuycmeqcqokom->cgeyeoimiuyogose($omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true));
            syiyemqigyugagks:
        }
        gsiaskgsukseumig:
    }
    
    private static function _createElementFromHtml(Crawler $kasgukgceywckyou, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        $kgcekiucekagcgai = self::igyokgqyiouieioo($kasgukgceywckyou);
        return $kgcekiucekagcgai->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    public static function ksgyqykcguougeue(DOMNode $ymyisaeksssueeik, $nsmgceoqaqogqmuw)
    {
        $qeaoumiemyikogys = self::igyokgqyiouieioo(self::_getCrawler($nsmgceoqaqogqmuw));
        return $ymyisaeksssueeik->ownerDocument->gqskweuukuceuaoq($qeaoumiemyikogys->documentElement, true);
    }
    
    private static function _appendHTML($omwmuycmeqcqokom, $nsmgceoqaqogqmuw, $qmeuaeiseuacgiqc = true)
    {
        if ($omwmuycmeqcqokom instanceof DOMNode) {
            if ($nsmgceoqaqogqmuw instanceof DOMNode) {
                if ($qmeuaeiseuacgiqc) {
                    $omwmuycmeqcqokom->cgeyeoimiuyogose($nsmgceoqaqogqmuw);
                } else {
                    $omwmuycmeqcqokom->kqgwgkuykuumwcgw($nsmgceoqaqogqmuw, $omwmuycmeqcqokom->firstChild);
                }
            } else {
                $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
                foreach (self::_find($kasgukgceywckyou, 'body') as $ymyisaeksssueeik) {
                    $ymyisaeksssueeik = $omwmuycmeqcqokom->ownerDocument->gqskweuukuceuaoq($ymyisaeksssueeik, true);
                    self::_appendHTML($omwmuycmeqcqokom, $ymyisaeksssueeik, $qmeuaeiseuacgiqc);
                    imwiyqcekcykscui:
                }
                woqkgwmkmqsuceuy:
            }
        }
    }
    
    public static function wesimowqwekiqiow($nsmgceoqaqogqmuw, $eeqsmkqmsowmicwi = 'style', $cussukyecoaeayqk = true)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $kswaimykcacqyaay = self::_find($kasgukgceywckyou, "head > {$eeqsmkqmsowmicwi}")->wugqmqwisygwoeas(0);
            $ewgwqamkygiqaawc = '';
            if ($kswaimykcacqyaay instanceof DOMNode) {
                $ewgwqamkygiqaawc = $kswaimykcacqyaay->textContent;
            }
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, '[style]');
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMElement) {
                    $yuumukkaswwoywya = 'style';
                    $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($yuumukkaswwoywya);
                    if ($eqgoocgaqwqcimie) {
                        $ymyisaeksssueeik->ogaeogwycyqqckeu($yuumukkaswwoywya);
                        $omasqoksqewuwwkq = ManipulateString::uniqid(5);
                        if (!$cussukyecoaeayqk) {
                            $eqgoocgaqwqcimie = str_replace('!important', '', $eqgoocgaqwqcimie);
                        }
                        $acqqmqmcquukaqsc = ".{$omasqoksqewuwwkq}{{$eqgoocgaqwqcimie}}";
                        $ewgwqamkygiqaawc .= $acqqmqmcquukaqsc;
                        $egkyssmuqcwaciya = $ymyisaeksssueeik->waecsyqmwascmqoa('class');
                        $egkyssmuqcwaciya .= " {$omasqoksqewuwwkq}";
                        $ymyisaeksssueeik->cmgoqeksagmigwmg('class', $egkyssmuqcwaciya);
                    }
                }
                omsmaougqkqigogw:
            }
            umemmgiwimkymaya:
            if ($kswaimykcacqyaay instanceof DOMElement) {
                $kswaimykcacqyaay->nodeValue = $ewgwqamkygiqaawc;
            } else {
                self::pmouaioykaoceyag($kasgukgceywckyou, 'head', $ewgwqamkygiqaawc);
            }
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function qakiyayqiysiqqeo(string $nsmgceoqaqogqmuw, string $yuumukkaswwoywya, string $ewgwqamkygiqaawc, $egomoiciasmiesww = false)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $yuumukkaswwoywya)->wugqmqwisygwoeas(0);
            if ($ymyisaeksssueeik instanceof DOMNode) {
                if (!$egomoiciasmiesww) {
                    $ewgwqamkygiqaawc = $ymyisaeksssueeik->nodeValue . $ewgwqamkygiqaawc;
                }
                $ymyisaeksssueeik->nodeValue = $ewgwqamkygiqaawc;
            }
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function pmouaioykaoceyag($nsmgceoqaqogqmuw, $omwmuycmeqcqokom, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc = true)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $ymyisaeksssueeik = self::_find($kasgukgceywckyou, $omwmuycmeqcqokom)->wugqmqwisygwoeas(0);
            if ($ymyisaeksssueeik instanceof DOMNode) {
                self::_appendHTML($ymyisaeksssueeik, $wcgsoqmmciswkmiq, $qmeuaeiseuacgiqc);
            }
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function qqimkcgcmeewwwei($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        $aqykuigiuwmmcieu = '';
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            if ($kwmksuuciqkiymek) {
                $ymyisaeksssueeik = $kwmksuuciqkiymek->wugqmqwisygwoeas(0);
                if ($ymyisaeksssueeik instanceof DOMNode) {
                    if ($ewgwqamkygiqaawc) {
                        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->textContent;
                    } else {
                        $aqykuigiuwmmcieu .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
                    }
                }
            }
        }
        return $aqykuigiuwmmcieu;
    }
    
    public static function gyqqesecwssesmyy($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ewgwqamkygiqaawc = false)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        $sogksuscggsicmac = [];
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMNode) {
                    self::_removeNode($ymyisaeksssueeik);
                    if ($ewgwqamkygiqaawc) {
                        $aqykuigiuwmmcieu = $ymyisaeksssueeik->textContent;
                    } else {
                        $aqykuigiuwmmcieu = $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
                    }
                    $sogksuscggsicmac[] = $aqykuigiuwmmcieu;
                }
                qweyymyuuqwcmkqg:
            }
            geasgywiogoeamek:
        }
        return $sogksuscggsicmac;
    }
    
    public static function csgaeakcgyyikggq($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $ccamueccusigaaio, $ymkomoccmymcoiea = 'style', $wamcomkuwysqgwgk = '%s;')
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMElement) {
                    $eqgoocgaqwqcimie = $ymyisaeksssueeik->waecsyqmwascmqoa($ccamueccusigaaio);
                    $ymyisaeksssueeik->ogaeogwycyqqckeu($ccamueccusigaaio);
                    if ($eqgoocgaqwqcimie) {
                        $yeacayasgueouoqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
                        if ($wamcomkuwysqgwgk) {
                            $eqgoocgaqwqcimie = sprintf($wamcomkuwysqgwgk, $eqgoocgaqwqcimie);
                        }
                        if ($ymkomoccmymcoiea == 'style') {
                            $yeacayasgueouoqc = trim($yeacayasgueouoqc, ';') . ';';
                        }
                        $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, trim("{$yeacayasgueouoqc} {$eqgoocgaqwqcimie}"));
                    }
                }
                mccimkgwkkamsime:
            }
            guqmgiqaaowaauyo:
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    public static function yqmasmmquoocswuw($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $goiaaeekgeqqmaqo = '', $uuksaskqamgouosy = true)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMNode) {
                    if ($uuksaskqamgouosy) {
                        $ymyisaeksssueeik->nodeValue = '';
                        if ($goiaaeekgeqqmaqo) {
                            self::_createElement($ymyisaeksssueeik, $goiaaeekgeqqmaqo);
                        }
                    } else {
                        $ymyisaeksssueeik->nodeValue = $goiaaeekgeqqmaqo;
                    }
                }
                iuyagqakcieasiua:
            }
            ucaoyoamaycsiacq:
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
    
    private static function _updateAttribute($nsmgceoqaqogqmuw, $sgksuwkwyimqgaii, $aiamqeawckcsuaou = self::UPDATE_ACTION)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            foreach ($sgksuwkwyimqgaii as $yuumukkaswwoywya => $siquossayskcwkea) {
                $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
                if (isset($siquossayskcwkea['parent']) && $siquossayskcwkea['parent']) {
                    try {
                        $kwmksuuciqkiymek = $kwmksuuciqkiymek->eyagosskwwmgwmog();
                    } catch (Exception $wgaoewqkwgomoaai) {
                        goto iaoyeugekskmewgs;
                    }
                }
                if ($kwmksuuciqkiymek) {
                    foreach ($siquossayskcwkea as $ymkomoccmymcoiea => $eqgoocgaqwqcimie) {
                        $momcykaoccoymeig = 0;
                        $gaeqamemwmwsyukm = $kwmksuuciqkiymek->count();
                        foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                            self::_updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig);
                            $momcykaoccoymeig++;
                            kieyoaoawqacqamy:
                        }
                        eciksmgaqikwegwq:
                        okagauksoqkoqygi:
                    }
                    iokemmkgmcaksiqu:
                }
                iaoyeugekskmewgs:
            }
            oasisywuwssumsok:
            return $kasgukgceywckyou;
        }
        return $nsmgceoqaqogqmuw;
    }
    
    private static function _updateNodeAttribute($ymyisaeksssueeik, $aiamqeawckcsuaou, $ymkomoccmymcoiea, $eqgoocgaqwqcimie, $gaeqamemwmwsyukm, $momcykaoccoymeig)
    {
        if (is_callable($eqgoocgaqwqcimie)) {
            $cusosqmyoqiykqgw = call_user_func($eqgoocgaqwqcimie, $momcykaoccoymeig, $gaeqamemwmwsyukm);
        } else {
            $cusosqmyoqiykqgw = $eqgoocgaqwqcimie;
        }
        if ($ymyisaeksssueeik instanceof DOMElement) {
            $ymyqweogikqywwqc = $ymyisaeksssueeik->waecsyqmwascmqoa($ymkomoccmymcoiea);
            switch ($aiamqeawckcsuaou) {
                case self::REMOVE_ACTION:
                    if (is_numeric($ymkomoccmymcoiea)) {
                        $ymyisaeksssueeik->ogaeogwycyqqckeu($eqgoocgaqwqcimie);
                        $cusosqmyoqiykqgw = null;
                    } else {
                        $ymyqweogikqywwqc = explode(' ', $ymyqweogikqywwqc);
                        $uusmaiomayssaecw = array_search($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                        if (false !== $uusmaiomayssaecw) {
                            unset($ymyqweogikqywwqc[$uusmaiomayssaecw]);
                        }
                        if (is_array($ymyqweogikqywwqc)) {
                            $cusosqmyoqiykqgw = implode(' ', $ymyqweogikqywwqc);
                        }
                        if (!$cusosqmyoqiykqgw) {
                            $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                        }
                    }
                    goto qckouamqueqiykqi;
                case self::RENAME_ACTION:
                    $cusosqmyoqiykqgw = null;
                    if ($ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                        $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                        $ymyisaeksssueeik->cmgoqeksagmigwmg($eqgoocgaqwqcimie, $ymyqweogikqywwqc);
                    }
                    goto qckouamqueqiykqi;
                case self::REPLACE_ACTION:
                case self::UPDATE_ACTION:
                    if ($aiamqeawckcsuaou === self::REPLACE_ACTION) {
                        $ymyqweogikqywwqc = null;
                        
                        $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                    } elseif ($ymkomoccmymcoiea == 'class' && $ymyqweogikqywwqc) {
                        $cusosqmyoqiykqgw = "{$ymyqweogikqywwqc} {$cusosqmyoqiykqgw}";
                    }
                    goto qckouamqueqiykqi;
                case self::REPLACE_WITH_ACTION:
                    if ($ymyisaeksssueeik->seeegkogcamaigga($ymkomoccmymcoiea)) {
                        $ymyisaeksssueeik->cmgoqeksagmigwmg($cusosqmyoqiykqgw, $ymyqweogikqywwqc);
                        $ymyisaeksssueeik->ogaeogwycyqqckeu($ymkomoccmymcoiea);
                    }
                    $cusosqmyoqiykqgw = null;
                    goto qckouamqueqiykqi;
            }
            measoqewessauqma:
            qckouamqueqiykqi:
            if ($eqgoocgaqwqcimie && (is_string($cusosqmyoqiykqgw) || is_numeric($cusosqmyoqiykqgw))) {
                $ymyisaeksssueeik->cmgoqeksagmigwmg($ymkomoccmymcoiea, $cusosqmyoqiykqgw);
            }
        }
    }
    
    public static function mosawwqeoikikcuo($nsmgceoqaqogqmuw, $yuumukkaswwoywya, $eagcmyswaakcwyec = [], $omwmuycmeqcqokom = 'div', $qmeuaeiseuacgiqc = true)
    {
        $kasgukgceywckyou = self::_getCrawler($nsmgceoqaqogqmuw);
        if ($kasgukgceywckyou) {
            $kwmksuuciqkiymek = self::_find($kasgukgceywckyou, $yuumukkaswwoywya);
            $okcscwesammossuq = '';
            $ygickiygyemsowyo = null;
            foreach ($kwmksuuciqkiymek as $ymyisaeksssueeik) {
                if ($ymyisaeksssueeik instanceof DOMNode) {
                    $ygickiygyemsowyo = $ymyisaeksssueeik->parentNode;
                    self::_removeNode($ymyisaeksssueeik);
                    $okcscwesammossuq .= $ymyisaeksssueeik->ownerDocument->skkueuquuqweeyqo($ymyisaeksssueeik);
                }
                wiaesksmicgikqcm:
            }
            auaigccmwqwsqsku:
            $omwmuycmeqcqokom = ManipulateHTML::qgsekwygcgawekeq($omwmuycmeqcqokom, $eagcmyswaakcwyec, true, $okcscwesammossuq);
            self::_appendHTML($ygickiygyemsowyo, $omwmuycmeqcqokom, $qmeuaeiseuacgiqc);
            $nsmgceoqaqogqmuw = self::_getHtml($kasgukgceywckyou, $nsmgceoqaqogqmuw);
        }
        return $nsmgceoqaqogqmuw;
    }
}
