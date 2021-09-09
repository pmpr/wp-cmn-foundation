<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\141\x74\164\x72\151\142\165\x74\145\x5f\151\x64";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto gcqeuqmciwqwqisq;
        gcqeuqmciwqwqisq:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto okmuocsmgiyuiggc;
        okmuocsmgiyuiggc:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\x61\x74\164\x72\x69\x62\x75\x74\145\x5f\x6d\145\164\141")->muuwuqssqkaieqge(__("\101\164\x74\162\x69\142\x75\164\x65\40\x4d\145\164\141\163", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\101\x74\x74\x72\151\142\165\x74\145\x20\x4d\145\164\x61", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto umkugowakqmaakky;
        umkugowakqmaakky:
        parent::ckgmycmaukqgkosk();
        goto ggyguomagomqcmkq;
        ggyguomagomqcmkq:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\x41\164\x74\x72\151\142\165\x74\145", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\x4d\x65\x74\141\x20\113\145\171", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\x4d\x65\164\x61\40\x56\141\x6c\165\145", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto coukkakgwkwmoyou;
        myiuoyiycqukwuus:
        goto ogcysuekkcyswiku;
        goto oqckmkkyuymqomww;
        oasuqwiwsowakwam:
        koeyooaqusayoskm:
        goto akcmkmaymmcekecu;
        coukkakgwkwmoyou:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto koeyooaqusayoskm;
        }
        goto mqmqcqqgqcmiqeyu;
        wmyggsuagwosceiu:
        wuuqakiyccsuwswc:
        goto myiuoyiycqukwuus;
        yuyamyuwcskywmgg:
        
        return;
        goto wmyggsuagwosceiu;
        sqkqeueggemiwaqi:
        if (!$icwicymcioeyeyek) {
            goto ccccywcecqgsswqk;
        }
        goto aiggskceoswousgw;
        oqckmkkyuymqomww:
        ccccywcecqgsswqk:
        goto gmqqsceqqmkeuwsg;
        aiggskceoswousgw:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto wuuqakiyccsuwswc;
        }
        goto yuyamyuwcskywmgg;
        mmoceucgeiaguqsm:
        ogcysuekkcyswiku:
        goto sgyysmcsyuaucmau;
        mqmqcqqgqcmiqeyu:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto sqkqeueggemiwaqi;
        sgyysmcsyuaucmau:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto yauqaiisowsgmsau;
        gmqqsceqqmkeuwsg:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto mmoceucgeiaguqsm;
        yauqaiisowsgmsau:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto oasuqwiwsowakwam;
        akcmkmaymmcekecu:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto wuaogegqaecwwkyo;
        imoksosqowqmimoc:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto omscsmekaceaeico;
        ueiewmqseyuugaum:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto imoksosqowqmimoc;
        gakocaasskoagogo:
        if (!$mksyucucyswaukig) {
            goto qcogmismkiigwkcy;
        }
        goto ueiewmqseyuugaum;
        omscsmekaceaeico:
        qcogmismkiigwkcy:
        goto cwkowmwgwyakkmki;
        cwkowmwgwyakkmki:
        return $mksyucucyswaukig;
        goto qwqaqqqqiksaqkss;
        wuaogegqaecwwkyo:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto gakocaasskoagogo;
        qwqaqqqqiksaqkss:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
