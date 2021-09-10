<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
    const FILE_EXTENSION = "\x2e\x6c\157\x67";
    
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
            goto eiusewmkqqyyoqio;
            sauwooccoqomkyei:
            geaeoccyqqkyocuw:
            goto uecmkwyokqqcysim;
            sooagyoeaycycmke:
            goto owogoeykikyyqmck;
            goto msmgiksiqawcgkqe;
            aqqwuwmasekigeus:
            throw new Exception("{$wkcwykowmmmwioqs}\x20\143\x61\x6e\156\x6f\164\x20\141\144\x64\40\164\x6f\x20\x6c\157\147\147\145\x72\x20\154\151\x73\x74\x3a\40\x43\150\x61\156\156\x65\154\x20{$ymqmyyeuycgmigyo}\40\x69\x73\x20\141\x6c\162\145\x61\x64\171\x20\x65\170\151\x73\x74\40\151\156\x20\x63\x68\141\156\156\x65\x6c\40\154\151\x73\164\56");
            goto sooagyoeaycycmke;
            iqgceguocmwqeowe:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto cykouiuweogkyqee;
            eiusewmkqqyyoqio:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto qkggwaukgmuiwose;
            uecmkwyokqqcysim:
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                goto auqyeogymwsekuue;
            }
            goto aqqwuwmasekigeus;
            cykouiuweogkyqee:
            owogoeykikyyqmck:
            goto ccsqcysqesqcmqqc;
            qkggwaukgmuiwose:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\x2f" . $wkcwykowmmmwioqs;
            goto owgsqkkemawskgos;
            msmgiksiqawcgkqe:
            auqyeogymwsekuue:
            goto iqgceguocmwqeowe;
            yuouykoggqagseog:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\x53\164\141\x72\164\x20\114\157\147\40\x66\157\162\x3a\40" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto sauwooccoqomkyei;
            owgsqkkemawskgos:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto geaeoccyqqkyocuw;
            }
            goto yuouykoggqagseog;
            ccsqcysqesqcmqqc:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\123\x6f\155\145\x74\x68\151\x6e\147\40\151\163\x20\x77\162\x6f\156\x67\40\151\156\40\141\x64\x64\x43\x68\141\156\156\145\x6c\x20\x6f\x6e\40\x6c\x6f\147\x67\x65\x72\56", PR__CMN__FOUNDATION));
        }
        return $this;
    }
    
    public function kukckykeywuqakmu($esmqigouaegaycwg)
    {
        foreach ($esmqigouaegaycwg as $ymqmyyeuycgmigyo => $wkcwykowmmmwioqs) {
            $this->aeywacagikkcgoak($ymqmyyeuycgmigyo, $wkcwykowmmmwioqs);
            ocuecygeseyssqum:
        }
        wgycoeqcyascweia:
    }
    
    public function riwkcsuwoqaueoas($ymqmyyeuycgmigyo) : ?string
    {
        goto ykokyisssyceccmy;
        ymoeymaaemmysaam:
        wemkkueqksqmuyyk:
        goto uawsmeqsickqqyww;
        eqysgewmuookykug:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto gsgiaiymawugosgi;
        }
        goto saueimgassmwoyka;
        ssoawgymwwgamowo:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto kuyggkawoaiiwseo;
        igiumgigysasioec:
        gsgiaiymawugosgi:
        goto cqiuwwcuouuigawo;
        yeycmwocyqoegmaq:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto mowoyiecqoaiymym;
        }
        goto ssoawgymwwgamowo;
        ykokyisssyceccmy:
        $qogsmwakwacwqogk = null;
        goto oieaoouoioamiqme;
        oieaoouoioamiqme:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto eqysgewmuookykug;
        saueimgassmwoyka:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto yeycmwocyqoegmaq;
        kuyggkawoaiiwseo:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto wemkkueqksqmuyyk;
        }
        goto okuoucgkgyyseguu;
        okuoucgkgyyseguu:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ymoeymaaemmysaam;
        cqiuwwcuouuigawo:
        return $qogsmwakwacwqogk;
        goto gkkowgywckwwcoss;
        uawsmeqsickqqyww:
        mowoyiecqoaiymym:
        goto igiumgigysasioec;
        gkkowgywckwwcoss:
    }
    
    public function uimukyawykswgwsm($ymqmyyeuycgmigyo, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo = [])
    {
        goto ieaayaguiywwyecq;
        iweimwuaemaquuse:
        if ($iqaosyayeiuaisqi) {
            goto sgskgsyiqcqsiwwe;
        }
        goto sgsgokmagckcoock;
        yegecewiqewskmgm:
        owcweesegmoeogqc:
        goto awayeqowmyycaoqs;
        qwyoggysuwmawqoo:
        qoqasyeyeesqmoye:
        goto yegecewiqewskmgm;
        gmkwekuakoueicws:
        goto qoqasyeyeesqmoye;
        goto cyguswquuckqoqcu;
        eumaaywogiiuiyao:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto qcqgacsuskoiskcg;
        ieaayaguiywwyecq:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto aecaygyqamswuqcu;
        euqaykgiqkmkaack:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto qwyoggysuwmawqoo;
        oyywmoceqiqwyyek:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto ucigyuukqagoagak;
        sgsgokmagckcoock:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto gmkwekuakoueicws;
        aecaygyqamswuqcu:
        if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            goto yosmywouooecowyi;
        }
        goto oyywmoceqiqwyyek;
        ucigyuukqagoagak:
        if (!$eawuoscsaksyqwiw instanceof MonologLogger) {
            goto owcweesegmoeogqc;
        }
        goto eumaaywogiiuiyao;
        cyguswquuckqoqcu:
        sgskgsyiqcqsiwwe:
        goto euqaykgiqkmkaack;
        qcqgacsuskoiskcg:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto iweimwuaemaquuse;
        awayeqowmyycaoqs:
        yosmywouooecowyi:
        goto aquiaqiseuwyomay;
        aquiaqiseuwyomay:
    }
}
