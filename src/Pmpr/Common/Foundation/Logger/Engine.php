<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
    const FILE_EXTENSION = "\x2e\x6c\x6f\x67";
    
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
            uecmkwyokqqcysim:
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                goto auqyeogymwsekuue;
            }
            goto aqqwuwmasekigeus;
            iqgceguocmwqeowe:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto cykouiuweogkyqee;
            owgsqkkemawskgos:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto geaeoccyqqkyocuw;
            }
            goto yuouykoggqagseog;
            msmgiksiqawcgkqe:
            auqyeogymwsekuue:
            goto iqgceguocmwqeowe;
            eiusewmkqqyyoqio:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto qkggwaukgmuiwose;
            sauwooccoqomkyei:
            geaeoccyqqkyocuw:
            goto uecmkwyokqqcysim;
            yuouykoggqagseog:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\x53\x74\141\x72\164\40\x4c\157\x67\40\146\157\x72\x3a\x20" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto sauwooccoqomkyei;
            qkggwaukgmuiwose:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\57" . $wkcwykowmmmwioqs;
            goto owgsqkkemawskgos;
            cykouiuweogkyqee:
            owogoeykikyyqmck:
            goto ccsqcysqesqcmqqc;
            sooagyoeaycycmke:
            goto owogoeykikyyqmck;
            goto msmgiksiqawcgkqe;
            aqqwuwmasekigeus:
            throw new Exception("{$wkcwykowmmmwioqs}\x20\x63\141\156\156\157\x74\x20\141\x64\x64\40\164\157\40\154\157\147\x67\145\162\x20\x6c\151\163\x74\72\x20\x43\x68\x61\x6e\156\x65\x6c\40{$ymqmyyeuycgmigyo}\x20\x69\163\x20\141\x6c\162\145\141\x64\171\40\145\170\x69\x73\x74\40\151\x6e\40\x63\x68\x61\x6e\156\x65\154\40\154\x69\163\164\x2e");
            goto sooagyoeaycycmke;
            ccsqcysqesqcmqqc:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\x53\157\x6d\145\164\x68\151\x6e\x67\40\x69\163\x20\x77\x72\157\156\x67\x20\151\156\x20\x61\144\x64\x43\150\x61\156\156\x65\154\x20\x6f\x6e\40\x6c\157\147\x67\145\162\x2e", PR__CMN__FOUNDATION));
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
        oieaoouoioamiqme:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto eqysgewmuookykug;
        kuyggkawoaiiwseo:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto wemkkueqksqmuyyk;
        }
        goto okuoucgkgyyseguu;
        ssoawgymwwgamowo:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto kuyggkawoaiiwseo;
        eqysgewmuookykug:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto gsgiaiymawugosgi;
        }
        goto saueimgassmwoyka;
        okuoucgkgyyseguu:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ymoeymaaemmysaam;
        cqiuwwcuouuigawo:
        return $qogsmwakwacwqogk;
        goto gkkowgywckwwcoss;
        uawsmeqsickqqyww:
        mowoyiecqoaiymym:
        goto igiumgigysasioec;
        igiumgigysasioec:
        gsgiaiymawugosgi:
        goto cqiuwwcuouuigawo;
        yeycmwocyqoegmaq:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto mowoyiecqoaiymym;
        }
        goto ssoawgymwwgamowo;
        ymoeymaaemmysaam:
        wemkkueqksqmuyyk:
        goto uawsmeqsickqqyww;
        saueimgassmwoyka:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto yeycmwocyqoegmaq;
        ykokyisssyceccmy:
        $qogsmwakwacwqogk = null;
        goto oieaoouoioamiqme;
        gkkowgywckwwcoss:
    }
    
    public function uimukyawykswgwsm($ymqmyyeuycgmigyo, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo = [])
    {
        goto ieaayaguiywwyecq;
        qwyoggysuwmawqoo:
        qoqasyeyeesqmoye:
        goto yegecewiqewskmgm;
        iweimwuaemaquuse:
        if ($iqaosyayeiuaisqi) {
            goto sgskgsyiqcqsiwwe;
        }
        goto sgsgokmagckcoock;
        ieaayaguiywwyecq:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto aecaygyqamswuqcu;
        sgsgokmagckcoock:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto gmkwekuakoueicws;
        euqaykgiqkmkaack:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto qwyoggysuwmawqoo;
        eumaaywogiiuiyao:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto qcqgacsuskoiskcg;
        oyywmoceqiqwyyek:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto ucigyuukqagoagak;
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
        awayeqowmyycaoqs:
        yosmywouooecowyi:
        goto aquiaqiseuwyomay;
        gmkwekuakoueicws:
        goto qoqasyeyeesqmoye;
        goto cyguswquuckqoqcu;
        yegecewiqewskmgm:
        owcweesegmoeogqc:
        goto awayeqowmyycaoqs;
        qcqgacsuskoiskcg:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto iweimwuaemaquuse;
        cyguswquuckqoqcu:
        sgskgsyiqcqsiwwe:
        goto euqaykgiqkmkaack;
        aquiaqiseuwyomay:
    }
}
