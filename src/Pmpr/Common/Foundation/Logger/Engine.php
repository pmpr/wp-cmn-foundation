<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
    const FILE_EXTENSION = "\56\x6c\157\147";
    
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
            qkggwaukgmuiwose:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\57" . $wkcwykowmmmwioqs;
            goto owgsqkkemawskgos;
            eiusewmkqqyyoqio:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto qkggwaukgmuiwose;
            aqqwuwmasekigeus:
            throw new Exception("{$wkcwykowmmmwioqs}\x20\x63\141\156\156\157\164\40\141\x64\144\40\x74\x6f\x20\x6c\157\x67\x67\x65\162\40\x6c\151\163\164\72\x20\x43\150\141\x6e\156\145\x6c\40{$ymqmyyeuycgmigyo}\40\151\x73\40\141\154\162\145\x61\x64\171\x20\x65\170\x69\163\164\x20\x69\x6e\x20\x63\150\x61\x6e\156\x65\154\x20\154\x69\163\x74\x2e");
            goto sooagyoeaycycmke;
            msmgiksiqawcgkqe:
            auqyeogymwsekuue:
            goto iqgceguocmwqeowe;
            owgsqkkemawskgos:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto geaeoccyqqkyocuw;
            }
            goto yuouykoggqagseog;
            iqgceguocmwqeowe:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto cykouiuweogkyqee;
            sauwooccoqomkyei:
            geaeoccyqqkyocuw:
            goto uecmkwyokqqcysim;
            cykouiuweogkyqee:
            owogoeykikyyqmck:
            goto ccsqcysqesqcmqqc;
            yuouykoggqagseog:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\123\164\x61\162\164\40\114\x6f\147\40\x66\157\x72\x3a\40" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto sauwooccoqomkyei;
            sooagyoeaycycmke:
            goto owogoeykikyyqmck;
            goto msmgiksiqawcgkqe;
            uecmkwyokqqcysim:
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                goto auqyeogymwsekuue;
            }
            goto aqqwuwmasekigeus;
            ccsqcysqesqcmqqc:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\123\x6f\155\145\x74\x68\x69\x6e\147\40\x69\163\40\167\x72\157\156\147\40\x69\x6e\x20\141\144\x64\x43\x68\x61\156\x6e\145\x6c\x20\x6f\156\x20\x6c\157\x67\147\145\162\56", PR__CMN__FOUNDATION));
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
        kuyggkawoaiiwseo:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto wemkkueqksqmuyyk;
        }
        goto okuoucgkgyyseguu;
        ssoawgymwwgamowo:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto kuyggkawoaiiwseo;
        oieaoouoioamiqme:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto eqysgewmuookykug;
        igiumgigysasioec:
        gsgiaiymawugosgi:
        goto cqiuwwcuouuigawo;
        eqysgewmuookykug:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto gsgiaiymawugosgi;
        }
        goto saueimgassmwoyka;
        ymoeymaaemmysaam:
        wemkkueqksqmuyyk:
        goto uawsmeqsickqqyww;
        yeycmwocyqoegmaq:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto mowoyiecqoaiymym;
        }
        goto ssoawgymwwgamowo;
        okuoucgkgyyseguu:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ymoeymaaemmysaam;
        ykokyisssyceccmy:
        $qogsmwakwacwqogk = null;
        goto oieaoouoioamiqme;
        cqiuwwcuouuigawo:
        return $qogsmwakwacwqogk;
        goto gkkowgywckwwcoss;
        saueimgassmwoyka:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto yeycmwocyqoegmaq;
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
        qcqgacsuskoiskcg:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto iweimwuaemaquuse;
        aecaygyqamswuqcu:
        if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            goto yosmywouooecowyi;
        }
        goto oyywmoceqiqwyyek;
        cyguswquuckqoqcu:
        sgskgsyiqcqsiwwe:
        goto euqaykgiqkmkaack;
        eumaaywogiiuiyao:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto qcqgacsuskoiskcg;
        qwyoggysuwmawqoo:
        qoqasyeyeesqmoye:
        goto yegecewiqewskmgm;
        awayeqowmyycaoqs:
        yosmywouooecowyi:
        goto aquiaqiseuwyomay;
        gmkwekuakoueicws:
        goto qoqasyeyeesqmoye;
        goto cyguswquuckqoqcu;
        sgsgokmagckcoock:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto gmkwekuakoueicws;
        euqaykgiqkmkaack:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto qwyoggysuwmawqoo;
        yegecewiqewskmgm:
        owcweesegmoeogqc:
        goto awayeqowmyycaoqs;
        oyywmoceqiqwyyek:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto ucigyuukqagoagak;
        ucigyuukqagoagak:
        if (!$eawuoscsaksyqwiw instanceof MonologLogger) {
            goto owcweesegmoeogqc;
        }
        goto eumaaywogiiuiyao;
        ieaayaguiywwyecq:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto aecaygyqamswuqcu;
        aquiaqiseuwyomay:
    }
}
