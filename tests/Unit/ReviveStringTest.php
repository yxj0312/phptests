<?php

namespace Tests\Unit;

use App\Test;
use PHPUnit\Framework\TestCase;

class ReviveStringTest extends TestCase
{
    /** @test */
    public function all_unique_possible_substrings_can_be_calculated()
    {
        $test = Test::reviveString('dbac', 3);
        $this->assertEquals('c', $test);

        $test = Test::reviveString('abc', 6);
        $this->assertEquals('c', $test);

        $test = Test::reviveString('dbacssxsa', 3);
        $this->assertEquals('c', $test);

        $test = Test::reviveString('lsedzyxvoigntpeyyzgbptllxcdqvupimvlnuiiktpxmedmefsguorhltmbqgszuqmikvquoftclyoqdjyzxpjklvmbcgcwwpeimxcaexeqysibdgdavmlgjzklfmkedqmpnrrsqvkoqsstyvuvjhesgqgncqtgigxwzpqpkagasywsvqpezvyfleuqwoyfwvdxktoxtuznuvhpnyvmuutfaqxxgveerhbdcrcvockiztanrvbl', 
        6091);
        $this->assertEquals('o', $test);        
    }

    /** @test */
    function long_time_taken_test_1()
    {
        $test = Test::reviveString('tupqtvoxbhgckivnfjrrsqkufbphpjgkdvcysqxtxdvknszscqjwgtqmwfvnqbxvyatqsqjsvgciydaatlybgopfwksmnqklsddmwmersiatlcvgquiyizdgkwtzofngkqsgfxazhcsteqbwkjvulybvuwwibjqlcjuhiuirwbmctozdzwzkuchraebbpsptdjcnfleborfhhgmgcnrzqysqetuunjnsushbdoerfjaosmuuzlvrmniqjckynarjuamxoqqvbqjtceqdrlvdzfukjgiyibjccvzqlpmmhvilbyptjmwktquczfahgjkkglbrdpfkmnwolnhvbfhuycwxjyepjqapcdgfunrgdnwocfldltxjxvggtmxcdzrhezoynfhqvdgxjudunafmwnurbtuevnnznbacjhuekadvugrjjwxhjryllurgihhvkhztqtxdtbyqhqbqozxaqyndsglanvxyewrvprylsybbqcsfbrfupuzkalkoiiomehhuyhfqiiuymodofkkxejhhwtxgbltgscctkjlurfsdtytbkdarpjyncvueinmcpovbxhvqoqtionlyslpjupxyktesiqxzgsdfbyvqqraeglfyywkumhsycxtkpqlwiodmpbcfscmyptynpijdrdctaxfsnrqxhtjwuneopqoglnvaxeepiikkfsculsrsodrkqvbinpoyemacqgtaqfnxxrrimldaoumgrnogffgjrgnjpgmfozdlswuehzgvttcmissnxyzqgmcxvodjpiuheqmmpujknnwygqlfokwxzauuozffhbmouaclvlwkbuihlwobimyhmvdcuihemusgwurthpgimqrxmgavubehwijsstwgnqmlmgfuxneldwkqelnymthkdtcwmbebrrmeztaygekkcucifrjtkqdolimzjqacjpikkijtpvftphcxalqmdwareoqphrrsiadsi', 
        216706);
        $this->assertEquals('s', $test);
    }

    /** @test */
    function long_time_taken_test_2()
    {
        $test = Test::reviveString('zjstazvxbioolkqcqhtfomwiwwnohdcgmubnwwmxeansmewelrjbfilbgzspcuyrqzgoysocvbwjhvoumzxsjjvqinfmjfdaflqdeehbigkpbaknahhjsdbaqjpaouctgsykxinfoxwpyieaqmlirplhyajmunicgiofqbmezkvztabloovfdgobiaqfnahvkwcbxqhybdzudafrpaysjmwtmoyaoixag', 
        23673);
        $this->assertEquals('a', $test);
    }

    /** @test */
    function long_time_taken_test_3()
    {
        $test = Test::reviveString('fqjgrofntgukxvkrgwnzldantikuqkvvdgbwwjkppeboblfhivjvyjistsmjfjgiqkemtqeixfyyrdibyrwxaeptydedmkleustnkxxhcvivzqwzhuwjanezqicfuqjpicesbccexkzyayyjuwuvkauciwhemttwvyrxctdbfeahcaqzwmuimolwkuaznwvluoiwjnxorzvwznvwzpgnfrjrokqbgomcewaolzcdbybalyynpfauymlmyeqgsciwbkmmlprmpuncsnphusbtgphetxknculfgytrpleeftgyiyhdsjwyyfetdqghmtmsrflispmakvatvhwnqunqztjejrnvnzpehanbsbbcwbvrltgdpvurofvxzjumkjstkhvclyghcebnxjqnfmgvubvtmphzbzsljppuqvdubghzqzoxouuixpdmhklilfvuxmqnhuhjcqkurarfwonvdshkcuuqapmzbdmlz', 
        67548);
        $this->assertEquals('h', $test);
    }

    /** @test */
    function long_time_taken_test_4()
    {
        $test = Test::reviveString('bniwgkpmgdbbjulvyfqoffbejeswfpsiecelmwzsbavkwggvowjtdkaoqukxmegsgmfskemmhiwdqcaeakaewcupwfmkjufshkkrrxfyhcdxgechqcnoehdcospamusvgcpzbuziydgfjimbmbpsivwznlzbhrzqvqpxmpflulqfvegjfxbpsaqhlpjvikneaebmtixpupurtcbaaesseiasalpivcmxgpjcyjruyoluqowqvolzzntzyijvmysvndznmqhngvhxjdneuagvnzunkfiydcttisgulohrjqquwgbqghluihhumstsumlchrzuhilqzenvkonqxamhhwcvoxpklapsuombyauxgjuqzjiwjvfsrjohgfruggmcwbfvdzujkrzjajhmgnexyughaybigpkdqpavruebnflqpscvhgvgdbndbolidxnwonrfjyjxdwpuqrsyxngcqvfulscqprmegglpeuojqdghwyhwnpydkexvwblouasagfqmagxsmdbibkeqzdwjhvefxstrsnuavkoxslpertnuftlfwhqfcxnbpivjwpjtbxqtkhabapwgijnhqdmuabwrktaiilbjkrexyeybvwjefwlvbzsebovlhytrjucwngtlntmiqxoxtbvvbnbebwpkwkbigfetlzgasvlksz', 
        166098);
        $this->assertEquals('u', $test);
    }

    /** @test */
    function all_substring_should_be_unique()
    {
        // should return aabababba
        $test = Test::reviveString('aba', 9);
        $this->assertEquals('a', $test);

        $test = Test::reviveString('aba', 10);
        $this->assertEquals('', $test);
    }
}
