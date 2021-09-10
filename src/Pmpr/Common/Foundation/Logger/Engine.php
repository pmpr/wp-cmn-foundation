<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
    const FILE_EXTENSION = "\x2e\154\157\x67";
    
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
            yuouykoggqagseog:
            $this->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($acqcekoeswseswws, "\123\x74\141\162\164\x20\x4c\157\147\40\146\x6f\x72\72\x20" . $ymqmyyeuycgmigyo . PHP_EOL);
            goto sauwooccoqomkyei;
            eiusewmkqqyyoqio:
            $wkcwykowmmmwioqs = rtrim($wkcwykowmmmwioqs, self::FILE_EXTENSION) . self::FILE_EXTENSION;
            goto qkggwaukgmuiwose;
            uecmkwyokqqcysim:
            
            if (!in_array($ymqmyyeuycgmigyo, $this->oquccoakoiimcoyk())) {
                goto auqyeogymwsekuue;
            }
            goto aqqwuwmasekigeus;
            owgsqkkemawskgos:
            if ($this->kcciqwskewsuaemk()->exists($acqcekoeswseswws)) {
                goto geaeoccyqqkyocuw;
            }
            goto yuouykoggqagseog;
            sauwooccoqomkyei:
            geaeoccyqqkyocuw:
            goto uecmkwyokqqcysim;
            cykouiuweogkyqee:
            owogoeykikyyqmck:
            goto ccsqcysqesqcmqqc;
            iqgceguocmwqeowe:
            $this->channels[$ymqmyyeuycgmigyo] = new MonologLogger($ymqmyyeuycgmigyo, [new StreamHandler($acqcekoeswseswws)]);
            goto cykouiuweogkyqee;
            qkggwaukgmuiwose:
            $acqcekoeswseswws = $this->eqosmaiseggiwsqi() . "\x2f" . $wkcwykowmmmwioqs;
            goto owgsqkkemawskgos;
            sooagyoeaycycmke:
            goto owogoeykikyyqmck;
            goto msmgiksiqawcgkqe;
            aqqwuwmasekigeus:
            throw new Exception("{$wkcwykowmmmwioqs}\40\x63\141\156\x6e\x6f\x74\x20\x61\144\x64\x20\x74\157\40\x6c\x6f\x67\147\x65\x72\x20\x6c\x69\163\x74\x3a\40\x43\150\x61\156\x6e\x65\x6c\40{$ymqmyyeuycgmigyo}\x20\151\x73\40\141\x6c\x72\145\141\144\x79\x20\x65\170\x69\x73\x74\x20\x69\156\x20\x63\150\141\156\156\145\154\40\x6c\x69\x73\164\x2e");
            goto sooagyoeaycycmke;
            msmgiksiqawcgkqe:
            auqyeogymwsekuue:
            goto iqgceguocmwqeowe;
            ccsqcysqesqcmqqc:
        } catch (Exception $wgaoewqkwgomoaai) {
            wp_die(__("\x53\157\155\x65\164\150\x69\156\147\40\151\163\x20\167\162\157\x6e\147\x20\151\x6e\x20\x61\144\144\x43\150\x61\x6e\x6e\145\x6c\x20\157\156\x20\154\x6f\147\x67\x65\x72\56", PR__CMN__FOUNDATION));
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
        ssoawgymwwgamowo:
        $umawqwoyymwaicas = ManipulateArray::get($qgysocqcuoqmacuo, 0);
        goto kuyggkawoaiiwseo;
        ymoeymaaemmysaam:
        wemkkueqksqmuyyk:
        goto uawsmeqsickqqyww;
        okuoucgkgyyseguu:
        
        $qogsmwakwacwqogk = $umawqwoyymwaicas->getUrl();
        goto ymoeymaaemmysaam;
        eqysgewmuookykug:
        if (!$iwcsiuuqeaaaeees instanceof MonologLogger) {
            goto gsgiaiymawugosgi;
        }
        goto saueimgassmwoyka;
        saueimgassmwoyka:
        
        $qgysocqcuoqmacuo = $iwcsiuuqeaaaeees->getHandlers();
        goto yeycmwocyqoegmaq;
        cqiuwwcuouuigawo:
        return $qogsmwakwacwqogk;
        goto gkkowgywckwwcoss;
        oieaoouoioamiqme:
        $iwcsiuuqeaaaeees = self::meyuyyociockkgow($ymqmyyeuycgmigyo);
        goto eqysgewmuookykug;
        uawsmeqsickqqyww:
        mowoyiecqoaiymym:
        goto igiumgigysasioec;
        yeycmwocyqoegmaq:
        if (!(is_array($qgysocqcuoqmacuo) && $qgysocqcuoqmacuo)) {
            goto mowoyiecqoaiymym;
        }
        goto ssoawgymwwgamowo;
        igiumgigysasioec:
        gsgiaiymawugosgi:
        goto cqiuwwcuouuigawo;
        ykokyisssyceccmy:
        $qogsmwakwacwqogk = null;
        goto oieaoouoioamiqme;
        kuyggkawoaiiwseo:
        if (!$umawqwoyymwaicas instanceof StreamHandler) {
            goto wemkkueqksqmuyyk;
        }
        goto okuoucgkgyyseguu;
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
        aecaygyqamswuqcu:
        if (!in_array($iqaosyayeiuaisqi, $xwwgygqkqwuaqwsa)) {
            goto yosmywouooecowyi;
        }
        goto oyywmoceqiqwyyek;
        gmkwekuakoueicws:
        goto qoqasyeyeesqmoye;
        goto cyguswquuckqoqcu;
        cyguswquuckqoqcu:
        sgskgsyiqcqsiwwe:
        goto euqaykgiqkmkaack;
        euqaykgiqkmkaack:
        $eawuoscsaksyqwiw->{$iqaosyayeiuaisqi}($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto qwyoggysuwmawqoo;
        qcqgacsuskoiskcg:
        $iqaosyayeiuaisqi = strtolower($iqaosyayeiuaisqi);
        goto iweimwuaemaquuse;
        eumaaywogiiuiyao:
        $iqaosyayeiuaisqi = MonologLogger::eueeseywswqsawac($iqaosyayeiuaisqi);
        goto qcqgacsuskoiskcg;
        awayeqowmyycaoqs:
        yosmywouooecowyi:
        goto aquiaqiseuwyomay;
        sgsgokmagckcoock:
        
        $eawuoscsaksyqwiw->error($uamcoiueqaamsqma, $mgkceomocowocqyo);
        goto gmkwekuakoueicws;
        oyywmoceqiqwyyek:
        
        $eawuoscsaksyqwiw = self::getChannel($ymqmyyeuycgmigyo);
        goto ucigyuukqagoagak;
        ieaayaguiywwyecq:
        
        $xwwgygqkqwuaqwsa = MonologLogger::getLevels();
        goto aecaygyqamswuqcu;
        qwyoggysuwmawqoo:
        qoqasyeyeesqmoye:
        goto yegecewiqewskmgm;
        yegecewiqewskmgm:
        owcweesegmoeogqc:
        goto awayeqowmyycaoqs;
        ucigyuukqagoagak:
        if (!$eawuoscsaksyqwiw instanceof MonologLogger) {
            goto owcweesegmoeogqc;
        }
        goto eumaaywogiiuiyao;
        aquiaqiseuwyomay:
    }
}
