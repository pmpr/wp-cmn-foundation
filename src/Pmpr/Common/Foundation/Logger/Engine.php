<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Logger;

use Exception;
use Pmpr\Common\Foundation\Manipulate\ManipulateFile;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;

class Engine extends Common
{
    const INFO_CODE = 200;
    const ERROR_CODE = 400;
    const DEBUG_CODE = 100;
    const ALERT_CODE = 550;
    const NOTICE_CODE = 250;
    const WARNING_CODE = 300;
    const CRITICAL_CODE = 500;
    const EMERGENCY_CODE = 600;
    const FILE_EXTENSION = "\x2e\x6c\x6f\147";
    
    protected array $channels = [];
    
    public function eqosmaiseggiwsqi()
    {
        return ManipulateFile::cmaecekuqkwmemms(self::PR__LOG__PATH);
    }
    
    public function oquccoakoiimcoyk() : array
    {
        return $this->channels;
    }
    
    public function meyuyyociockkgow($ymqmyyeuycgmigyo)
    {
        $esmqigouaegaycwg = self::symcgieuakksimmu()->oquccoakoiimcoyk();
        return ManipulateArray::get($esmqigouaegaycwg, $ymqmyyeuycgmigyo, false);
    }
    
    public function aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs) : self
    {
        try {
            goto geaeoccyqqkyocuw;
            sauwooccoqomkyei:
            goto uckyuqsuyqwgswaa;
            goto uecmkwyokqqcysim;
            eiusewmkqqyyoqio:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\x53\x74\141\x72\x74\x20\114\157\x67\x20\x66\x6f\x72\72\40" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto qkggwaukgmuiwose;
            uecmkwyokqqcysim:
            sacawqskusgwkkyg:
            goto aqqwuwmasekigeus;
            sooagyoeaycycmke:
            uckyuqsuyqwgswaa:
            goto msmgiksiqawcgkqe;
            qkggwaukgmuiwose:
            aqykwekaooeoqgoa:
            goto owgsqkkemawskgos;
            owogoeykikyyqmck:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto aqykwekaooeoqgoa;
            }
            goto eiusewmkqqyyoqio;
            auqyeogymwsekuue:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\x2f" . $wkcwykowmmmwioqs;
            goto owogoeykikyyqmck;
            yuouykoggqagseog:
            throw new Exception("{$wkcwykowmmmwioqs}\40\x63\x61\x6e\156\157\x74\x20\x61\x64\144\x20\164\157\x20\x6c\x6f\x67\147\145\x72\x20\x6c\151\x73\x74\x3a\40\x43\x68\141\156\156\145\154\x20{$ymqmyyeuycgmigyo}\x20\151\163\x20\141\154\162\145\x61\x64\x79\x20\145\x78\x69\163\164\40\x69\156\x20\x63\x68\x61\156\x6e\145\154\40\154\151\x73\x74\56");
            goto sauwooccoqomkyei;
            geaeoccyqqkyocuw:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto auqyeogymwsekuue;
            aqqwuwmasekigeus:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto sooagyoeaycycmke;
            owgsqkkemawskgos:
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                goto sacawqskusgwkkyg;
            }
            goto yuouykoggqagseog;
            msmgiksiqawcgkqe:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\123\x6f\x6d\x65\x74\150\x69\156\147\40\x69\163\x20\x77\x72\157\x6e\147\40\x69\156\x20\x61\144\144\103\150\x61\x6e\x6e\145\154\x20\157\156\x20\x6c\157\147\x67\145\x72\x2e", PR__CMN__FOUNDATION));
        }
        return $this;
    }
    
    public function kukckykeywuqakmu($esmqigouaegaycwg)
    {
        foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) {
            $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs);
            cykouiuweogkyqee:
        }
        iqgceguocmwqeowe:
    }
    
    public function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string
    {
        goto wemkkueqksqmuyyk;
        eqysgewmuookykug:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto saueimgassmwoyka;
        kuyggkawoaiiwseo:
        wgycoeqcyascweia:
        goto okuoucgkgyyseguu;
        ymoeymaaemmysaam:
        return $qogsmwakwacwqogk;
        goto uawsmeqsickqqyww;
        okuoucgkgyyseguu:
        ocuecygeseyssqum:
        goto ymoeymaaemmysaam;
        oieaoouoioamiqme:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto wgycoeqcyascweia;
        }
        goto eqysgewmuookykug;
        yeycmwocyqoegmaq:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ssoawgymwwgamowo;
        wemkkueqksqmuyyk:
        $qogsmwakwacwqogk = null;
        goto mowoyiecqoaiymym;
        ykokyisssyceccmy:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto oieaoouoioamiqme;
        gsgiaiymawugosgi:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto ocuecygeseyssqum;
        }
        goto ykokyisssyceccmy;
        mowoyiecqoaiymym:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto gsgiaiymawugosgi;
        saueimgassmwoyka:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto ccsqcysqesqcmqqc;
        }
        goto yeycmwocyqoegmaq;
        ssoawgymwwgamowo:
        ccsqcysqesqcmqqc:
        goto kuyggkawoaiiwseo;
        uawsmeqsickqqyww:
    }
    
    public function uimukyawykswgwsm($ymqmyyeuycgmigyo, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo = [])
    {
        goto qoqasyeyeesqmoye;
        aecaygyqamswuqcu:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto oyywmoceqiqwyyek;
        cyguswquuckqoqcu:
        gkkowgywckwwcoss:
        goto euqaykgiqkmkaack;
        euqaykgiqkmkaack:
        sgskgsyiqcqsiwwe:
        goto qwyoggysuwmawqoo;
        eumaaywogiiuiyao:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto qcqgacsuskoiskcg;
        ucigyuukqagoagak:
        if ($iqaosyayeiuaisqi) {
            goto igiumgigysasioec;
        }
        goto eumaaywogiiuiyao;
        owcweesegmoeogqc:
        if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            goto sgskgsyiqcqsiwwe;
        }
        goto yosmywouooecowyi;
        qoqasyeyeesqmoye:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto owcweesegmoeogqc;
        gmkwekuakoueicws:
        cqiuwwcuouuigawo:
        goto cyguswquuckqoqcu;
        qcqgacsuskoiskcg:
        goto cqiuwwcuouuigawo;
        goto iweimwuaemaquuse;
        yosmywouooecowyi:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto ieaayaguiywwyecq;
        sgsgokmagckcoock:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto gmkwekuakoueicws;
        ieaayaguiywwyecq:
        if (!$eawuoscsaksyqwiw instanceof MonologLogger) {
            goto gkkowgywckwwcoss;
        }
        goto aecaygyqamswuqcu;
        oyywmoceqiqwyyek:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto ucigyuukqagoagak;
        iweimwuaemaquuse:
        igiumgigysasioec:
        goto sgsgokmagckcoock;
        qwyoggysuwmawqoo:
    }
}
