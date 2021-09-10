<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\141\x74\x74\x72\x69\x62\165\x74\x65\137\x69\x64";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto oekeqowkqecgsmuk;
        cequowgomkkwmoom:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\141\164\x74\x72\x69\x62\165\x74\145\137\155\145\164\x61")->muuwuqssqkaieqge(__("\x41\164\x74\x72\151\142\x75\x74\x65\x20\115\x65\x74\141\x73", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\x41\x74\x74\x72\x69\142\x75\164\145\40\115\145\x74\x61", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto gaymgiaccgkgsiwq;
        gaymgiaccgkgsiwq:
        parent::ckgmycmaukqgkosk();
        goto ywswgoesmiwgckcu;
        oekeqowkqecgsmuk:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto cequowgomkkwmoom;
        ywswgoesmiwgckcu:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\101\x74\x74\x72\151\142\165\164\x65", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\115\145\164\x61\40\113\x65\x79", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\x4d\x65\164\x61\40\126\x61\154\165\145", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto saueosiwcgqsmgmk;
        mocauoaugmiuacuu:
        ooyyuaswogikyggu:
        goto eoawekcguswgyykc;
        eoawekcguswgyykc:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto wwiasiiquqqmmqay;
        cigcsyiesymkuywu:
        if (!$icwicymcioeyeyek) {
            goto myikgqcgseikimwa;
        }
        goto ugwqwcgoswkkwcee;
        iwkwesmeiywuuugk:
        keigessgsgawiyyo:
        goto akymcmmokgskeqiu;
        wmyagwwmquqeyyok:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto mocauoaugmiuacuu;
        wwiasiiquqqmmqay:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto iwkwesmeiywuuugk;
        swmkkiiauusieuqw:
        goto ooyyuaswogikyggu;
        goto sgqaaocqgayiigos;
        saueosiwcgqsmgmk:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto keigessgsgawiyyo;
        }
        goto kgmwmmiemqggaqeq;
        kgmwmmiemqggaqeq:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto cigcsyiesymkuywu;
        ugwqwcgoswkkwcee:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto ummiwuqqisqgwoco;
        }
        goto kgigsakiwsqqioim;
        kgigsakiwsqqioim:
        
        return;
        goto aosmakasyommmioc;
        sgqaaocqgayiigos:
        myikgqcgseikimwa:
        goto wmyagwwmquqeyyok;
        aosmakasyommmioc:
        ummiwuqqisqgwoco:
        goto swmkkiiauusieuqw;
        akymcmmokgskeqiu:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto ycomuqussgiacuom;
        ycomuqussgiacuom:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto yuuyqoyguaqsswey;
        uqekawymqmyaqaao:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto iwigaaoiqyugwacm;
        yqismiumwaaeqgwu:
        vgggsmmgmwumikmc:
        goto wusuosaiqosakcqq;
        iwigaaoiqyugwacm:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto yqismiumwaaeqgwu;
        yuuyqoyguaqsswey:
        if (!$mksyucucyswaukig) {
            goto vgggsmmgmwumikmc;
        }
        goto uqekawymqmyaqaao;
        wusuosaiqosakcqq:
        return $mksyucucyswaukig;
        goto kaueiekkeciiaswy;
        kaueiekkeciiaswy:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
