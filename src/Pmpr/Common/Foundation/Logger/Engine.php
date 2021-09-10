<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
    const FILE_EXTENSION = "\56\154\x6f\147";
    
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
            sauwooccoqomkyei:
            geaeoccyqqkyocuw:
            goto uecmkwyokqqcysim;
            qkggwaukgmuiwose:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\57" . $wkcwykowmmmwioqs;
            goto owgsqkkemawskgos;
            sooagyoeaycycmke:
            goto owogoeykikyyqmck;
            goto msmgiksiqawcgkqe;
            aqqwuwmasekigeus:
            throw new Exception("{$wkcwykowmmmwioqs}\40\x63\141\x6e\156\x6f\164\40\x61\x64\144\x20\164\157\40\x6c\x6f\147\x67\x65\x72\40\x6c\x69\163\x74\72\x20\103\150\141\x6e\156\145\x6c\40{$ymqmyyeuycgmigyo}\x20\151\163\x20\x61\154\x72\x65\141\144\x79\40\x65\x78\x69\163\x74\40\151\x6e\x20\143\150\x61\156\x6e\145\x6c\40\x6c\151\x73\x74\56");
            goto sooagyoeaycycmke;
            owgsqkkemawskgos:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto geaeoccyqqkyocuw;
            }
            goto yuouykoggqagseog;
            msmgiksiqawcgkqe:
            auqyeogymwsekuue:
            goto iqgceguocmwqeowe;
            iqgceguocmwqeowe:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto cykouiuweogkyqee;
            yuouykoggqagseog:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\123\164\x61\162\x74\x20\114\x6f\147\40\146\157\162\72\x20" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto sauwooccoqomkyei;
            eiusewmkqqyyoqio:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto qkggwaukgmuiwose;
            cykouiuweogkyqee:
            owogoeykikyyqmck:
            goto ccsqcysqesqcmqqc;
            ccsqcysqesqcmqqc:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\x53\x6f\x6d\x65\x74\150\151\156\147\x20\x69\163\x20\x77\x72\x6f\x6e\147\40\151\156\40\141\x64\144\x43\150\141\x6e\x6e\145\154\40\157\x6e\40\x6c\157\x67\147\145\162\56", PR__CMN__FOUNDATION));
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
        okuoucgkgyyseguu:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ymoeymaaemmysaam;
        oieaoouoioamiqme:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto eqysgewmuookykug;
        uawsmeqsickqqyww:
        mowoyiecqoaiymym:
        goto igiumgigysasioec;
        ssoawgymwwgamowo:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto kuyggkawoaiiwseo;
        yeycmwocyqoegmaq:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto mowoyiecqoaiymym;
        }
        goto ssoawgymwwgamowo;
        cqiuwwcuouuigawo:
        return $qogsmwakwacwqogk;
        goto gkkowgywckwwcoss;
        ykokyisssyceccmy:
        $qogsmwakwacwqogk = null;
        goto oieaoouoioamiqme;
        kuyggkawoaiiwseo:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto wemkkueqksqmuyyk;
        }
        goto okuoucgkgyyseguu;
        saueimgassmwoyka:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto yeycmwocyqoegmaq;
        eqysgewmuookykug:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto gsgiaiymawugosgi;
        }
        goto saueimgassmwoyka;
        igiumgigysasioec:
        gsgiaiymawugosgi:
        goto cqiuwwcuouuigawo;
        gkkowgywckwwcoss:
    }
    
    public function uimukyawykswgwsm($ymqmyyeuycgmigyo, $iqaosyayeiuaisqi, $uamcoiueqaamsqma, $mgkceomocowocqyo = [])
    {
        goto ieaayaguiywwyecq;
        aecaygyqamswuqcu:
        if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            goto yosmywouooecowyi;
        }
        goto oyywmoceqiqwyyek;
        sgsgokmagckcoock:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto gmkwekuakoueicws;
        yegecewiqewskmgm:
        owcweesegmoeogqc:
        goto awayeqowmyycaoqs;
        euqaykgiqkmkaack:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto qwyoggysuwmawqoo;
        qcqgacsuskoiskcg:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto iweimwuaemaquuse;
        ieaayaguiywwyecq:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto aecaygyqamswuqcu;
        oyywmoceqiqwyyek:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto ucigyuukqagoagak;
        gmkwekuakoueicws:
        goto qoqasyeyeesqmoye;
        goto cyguswquuckqoqcu;
        awayeqowmyycaoqs:
        yosmywouooecowyi:
        goto aquiaqiseuwyomay;
        cyguswquuckqoqcu:
        sgskgsyiqcqsiwwe:
        goto euqaykgiqkmkaack;
        qwyoggysuwmawqoo:
        qoqasyeyeesqmoye:
        goto yegecewiqewskmgm;
        ucigyuukqagoagak:
        if (!$eawuoscsaksyqwiw instanceof MonologLogger) {
            goto owcweesegmoeogqc;
        }
        goto eumaaywogiiuiyao;
        eumaaywogiiuiyao:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto qcqgacsuskoiskcg;
        iweimwuaemaquuse:
        if ($iqaosyayeiuaisqi) {
            goto sgskgsyiqcqsiwwe;
        }
        goto sgsgokmagckcoock;
        aquiaqiseuwyomay:
    }
}
