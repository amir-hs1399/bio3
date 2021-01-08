<?php
/*
کانال مارو حمایت کنید 
 @sours_hoseein
 
 اپن کننده ی این نسخه ما بودیم 
 واین نسخه در هیچ جا اپن نیست
 
 اوپن شده توسط امیر ولف
 @amir_wolf512
*/
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
    include 'madeline.php';
    include ('jdf.php');


    $settings = ['logger'=>['logger'=>0],'app_info'=> ['api_id'=>1143857,'api_hash'=> '2132215fcaa4d07b154f4648fff124ec']];
    $MadelineProto = new \danog\MadelineProto\API('session.madeline',$settings);
    $MadelineProto->async(true);
    $MadelineProto->loop(function () use ($MadelineProto) {
    yield $MadelineProto->start();

    date_default_timezone_set('Asia/Tehran');
    $time = date("H:i");
    $fonts = [["𝟘","𝟙","ᄅ","𝟛","ㄣ","5̶","6̷","7͓̽","8̷","9̳"],["0̴͙̞̥͙̭͙̋","1̷̂̃̐̈́̀͒͘","2̵̠͔́͑̑̒͐͜","3̸̫̫̻͗","4̵̜̖͓͉̟̯͐̐͌͑̔̚ͅͅ","5̷̧͇͓̣̱̜͕̇̏̒͐̔̆͆̌̾͘","6̵̅́͒̓̐̋͝","7̸̛̺̝̦̦̹̹͈̟̰͈͌̄͂̌̋̔͌͝","8̴ ̮̙̀̐͊͆ͅ ͜","9̶͓̫͉̮̆̀̕"],["『0』","『1』","『2』","『3』","『4』","『5』","『6』","『7』","『8』","『9』"],["▪︎0","▪︎1","▪︎2","▪︎3","▪︎4","▪︎5","▪︎6","▪︎7","▪︎8","▪︎9"],["[̲̅0]","[̲̅1]","[̲̅2]","[̲̅3]","[̲̅4]","[̲̅5]","[̲̅6]","[̲̅7]","[̲̅8]","[̲̅9]"],["0","҉1","҉2","҉3","҉4","҉5","҉6","҉7","҉8","҉9҉"],["0","➀","➁","➂","➃","➄","➅","➆","➇","➈"],["¤0","¤1","¤2","¤3","¤4","¤5","¤6","¤7","¤8","¤9"],["○0","○1","○2","○3","○4","○5","○6","●7","■8","◇9"],["0","⑴","⑵","⑶","⑷","⑸","⑹","⑺","⑻","⑼"]];
	$time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("H:i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
try {
    yield $MadelineProto->sleep(1);

    yield $MadelineProto->account->updateProfile(['about' => "🕘π $time2 امروز $day_name 😄 $year_number/$month_number/$day_number "]);
    yield $MadelineProto->account->updateProfile(['last_name' => "$time2"]);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    } catch (\danog\MadelineProto\Exception $e2) {
    }
    });
   $MadelineProto->loop();
?>�9"],["[̲̅0]","[̲̅1]","[̲̅2]","[̲̅3]","[̲̅4]","[̲̅5]","[̲̅6]","[̲̅7]","[̲̅8]","[̲̅9]"],["0","҉1","҉2","҉3","҉4","҉5","҉6","҉7","҉8","҉9҉"],["0","➀","➁","➂","➃","➄","➅","➆","➇","➈"],["0","❶","❷","❸","❹","❺","❻","❼","❽","❾"],["0","①","②","③","④","⑤","⑥","⑦","⑧","⑨"],["0","⑴","⑵","⑶","⑷","⑸","⑹","⑺","⑻","⑼"]];
	$time2 = str_replace(range(0,9),$fonts[array_rand($fonts)],date("H:i"));
    $day_number = jdate('j');
    $month_number = jdate('n');
    $year_number = jdate('y');
    $day_name = jdate('l');
try {
    yield $MadelineProto->sleep(1);

    yield $MadelineProto->account->updateProfile(['about' => "🕘π $time2 امروز $day_name 😄 $year_number/$month_number/$day_number "]);
    yield $MadelineProto->account->updateProfile(['last_name' => "$time2"]);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    } catch (\danog\MadelineProto\Exception $e2) {
    }
    });
  