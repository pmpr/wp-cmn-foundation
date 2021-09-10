<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Woocommerce\Attribute;

use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;
use Pmpr\Common\Foundation\ORM\DB\Model as BaseClass;
use stdClass;

class Model extends BaseClass
{
    const ATTRIBUTE_ID = "\x61\x74\164\x72\151\x62\165\164\145\x5f\151\x64";
    public $timestamps = false;
    public function ckgmycmaukqgkosk()
    {
        goto ywswgoesmiwgckcu;
        myikgqcgseikimwa:
        parent::ckgmycmaukqgkosk();
        goto ooyyuaswogikyggu;
        ummiwuqqisqgwoco:
        $this->oyeskqayoscwciem()->usuqmwksoeaayaig("\x61\x74\x74\162\151\142\x75\164\145\x5f\x6d\145\x74\141")->muuwuqssqkaieqge(__("\x41\x74\x74\162\151\142\165\x74\145\x20\x4d\x65\x74\x61\163", PR__CMN__FOUNDATION))->guiaswksukmgageq(__("\x41\x74\x74\162\151\142\165\164\145\x20\115\145\164\x61", PR__CMN__FOUNDATION))->myysgyqcumekoueo()->okgmqaeuaeymaocm($quowyokcwswmuois);
        goto myikgqcgseikimwa;
        ywswgoesmiwgckcu:
        $quowyokcwswmuois = self::akuociswqmoigkas();
        goto ummiwuqqisqgwoco;
        ooyyuaswogikyggu:
    }
    
    public function eucukwckumgiyyww($oyuikeusicgqgwak = []) : array
    {
        return [$this->mekgiwmysqksocmy(self::ATTRIBUTE_ID)->gswweykyogmsyawy(__("\101\164\x74\x72\151\x62\165\x74\x65", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_KEY)->gswweykyogmsyawy(__("\x4d\x65\x74\141\x20\113\145\171", PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(self::META_VALUE)->gswweykyogmsyawy(__("\115\x65\x74\141\40\x56\x61\x6c\165\x65", PR__CMN__FOUNDATION))];
    }
    
    public function aawsuyueaaimeqsm($ymkomoccmymcoiea, $uusmaiomayssaecw, $eqgoocgaqwqcimie)
    {
        goto ugwqwcgoswkkwcee;
        wwiasiiquqqmmqay:
        $icwicymcioeyeyek = [self::META_KEY => $uusmaiomayssaecw, self::META_VALUE => $eqgoocgaqwqcimie, self::ATTRIBUTE_ID => $ymkomoccmymcoiea];
        goto iwkwesmeiywuuugk;
        iwkwesmeiywuuugk:
        kgmwmmiemqggaqeq:
        goto akymcmmokgskeqiu;
        eoawekcguswgyykc:
        saueosiwcgqsmgmk:
        goto wwiasiiquqqmmqay;
        aosmakasyommmioc:
        if (!$icwicymcioeyeyek) {
            goto saueosiwcgqsmgmk;
        }
        goto swmkkiiauusieuqw;
        ycomuqussgiacuom:
        cigcsyiesymkuywu:
        goto yuuyqoyguaqsswey;
        ugwqwcgoswkkwcee:
        if (!($ymkomoccmymcoiea && $uusmaiomayssaecw)) {
            goto cigcsyiesymkuywu;
        }
        goto kgigsakiwsqqioim;
        sgqaaocqgayiigos:
        
        return;
        goto wmyagwwmquqeyyok;
        wmyagwwmquqeyyok:
        keigessgsgawiyyo:
        goto mocauoaugmiuacuu;
        kgigsakiwsqqioim:
        $icwicymcioeyeyek = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        goto aosmakasyommmioc;
        mocauoaugmiuacuu:
        goto kgmwmmiemqggaqeq;
        goto eoawekcguswgyykc;
        vgggsmmgmwumikmc:
        $this->gscuuyuyauokoyuo((array) $icwicymcioeyeyek);
        goto ycomuqussgiacuom;
        swmkkiiauusieuqw:
        if (!(ManipulateArray::get($icwicymcioeyeyek, self::META_VALUE) === $eqgoocgaqwqcimie)) {
            goto keigessgsgawiyyo;
        }
        goto sgqaaocqgayiigos;
        akymcmmokgskeqiu:
        ManipulateArray::set($icwicymcioeyeyek, [self::META_VALUE => maybe_serialize($eqgoocgaqwqcimie)]);
        goto vgggsmmgmwumikmc;
        yuuyqoyguaqsswey:
    }
    
    public function ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        goto iwigaaoiqyugwacm;
        wusuosaiqosakcqq:
        $eqgoocgaqwqcimie = maybe_unserialize(ManipulateArray::get($mksyucucyswaukig, self::META_VALUE));
        goto kaueiekkeciiaswy;
        yiuwqcqesuysmegs:
        return $mksyucucyswaukig;
        goto mauoymckskucuemc;
        iieykwekyukgsias:
        uqekawymqmyaqaao:
        goto yiuwqcqesuysmegs;
        kaueiekkeciiaswy:
        $mksyucucyswaukig = ManipulateArray::set($mksyucucyswaukig, [self::META_VALUE => $eqgoocgaqwqcimie]);
        goto iieykwekyukgsias;
        iwigaaoiqyugwacm:
        $mksyucucyswaukig = $this->oqomcmyuuakigusk([self::META_KEY => $uusmaiomayssaecw, self::ATTRIBUTE_ID => $ymkomoccmymcoiea]);
        goto yqismiumwaaeqgwu;
        yqismiumwaaeqgwu:
        if (!$mksyucucyswaukig) {
            goto uqekawymqmyaqaao;
        }
        goto wusuosaiqosakcqq;
        mauoymckskucuemc:
    }
    
    public function eukesgmuogimqwaa($ymkomoccmymcoiea, $uusmaiomayssaecw)
    {
        $mksyucucyswaukig = $this->ggckwgeqwseoemwg($ymkomoccmymcoiea, $uusmaiomayssaecw);
        return ManipulateArray::get($mksyucucyswaukig, self::META_VALUE);
    }
}
