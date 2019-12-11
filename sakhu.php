<?php
    $accessToken = "O+8w338ABfNYu+XG9Jk4Tsy+4OERj2XsWdZdjhLJNLSOwtx6iT0A+mKgDeaCHtia63gEplt0FUtWFLPAmSF4BA+q3iVClo3rqoBLUBTjh09gcrNgk3HOzZk5WBjLl5PDEd4Vvyw8j3QYOcjwmGjhNwdB04t89/1O/w1cDnyilFU=";//copy Channel access token ตอนที่ตั้งค่ามาใส่
    
    $content = file_get_contents('php://input');
    $arrayJson = json_decode($content, true);
    
    $arrayHeader = array();
    $arrayHeader[] = "Content-Type: application/json";
    $arrayHeader[] = "Authorization: Bearer {$accessToken}";

    



    //รับข้อความจากผู้ใช้
    $message = $arrayJson['events'][0]['message']['text'];
#ตัวอย่าง Message Type "Text"
    if($message == "rca"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "เรียน...ผู้บังคับบัญชา
             สภ.สาคู 
             ภ.จว.ภูเก็ต
วันนี้ 4 ธันวาคม ๒๕๖๒ เวลาประมาณ ๒๓.๐๐ น. ภายใต้การอำนวยการสั่งการของ พ.ต.อ.กิติพงษ์ คล้ายแก้ว ผกก.สภ.สาคู , พ.ต.ท.สลาน สันติศาสนกุลรอง ผกก.ป.สภ.สาคู โดย พ.ต.ท.ประวัติ ตันติปุษปรรฆ์ สวป.สภ.สาคู พร้อมด้วย ร.ต.อ.อุดม เยาว์แสง ร้อยเวร ๒๐ พร้อมพวก ได้ตรวจสอบสถานบริการในพื้นที่ รับผิดชอบ ดังนี้
๑.ร้าน ดรัฟฟี่บาร์ ตั้งอยู่ที่ ต.สาคู อ.ถลาง จ.ภูเก็ต 
มี นางสาวอาริสา มุตราศรี ที่อยู่ ๑๐๗ ม.๙ ต.โนนสมบูรณ์ อ.เสิงสาง จ.นครราชสีมาเป็นผู้ดูแล
- ไม่พบการค้าประเวณี
- ไม่พบเด็กอายุต่ำกว่า ๑๘ ปีให้บริการ
- ไม่พบบุคคลอายุต่ำกว่า ๒๐ ปีใช้          บริการ
- ไม่พบความผิดเกี่ยวกับการค้ามนุษย์
- ทำ mou ข้อตกลงว่าด้วยความร่วมมือในการพิทักษ์เด็ก สตรี และครอบครัว และการป้องกันปราบปรามการค้ามนุษย์กับร้านดังกล่าวเรียบร้อย
  โดยกำชับให้ปฏิบัติตามกฎหมายโดยเคร่งครัด 
     จึงเรียนมาเพื่อทราบ";
        replyMsg($arrayHeader,$arrayPostData);
    }
#ตัวอย่าง Message Type "Sticker"
   else if($message == "71"){
       $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "สาคู121 ว.4 ร้านสะดวกซื้อในเขตพื้นที่รับผิดชอบ เหตุการณ์ปกติ"DateThai($strDate,$strMonthThai,$strYear);
        replyMsg($arrayHeader,$arrayPostData);  
      //  DateThai($strDate,$strMonthThai,$strYear);

    }

    #ตัวอย่าง Message Type "Sticker"
    else if($message == "ฝันดี"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "sticker";
        $arrayPostData['messages'][0]['packageId'] = "2";
        $arrayPostData['messages'][0]['stickerId'] = "46";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Image"
    else if($message == "รูปน้องแมว"){
        $image_url = "https://manager.line.biz/api/bots/@180mismv/contents/ir-4864192-2?timestamp=1575969028292";
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "image";
        $arrayPostData['messages'][0]['originalContentUrl'] = $image_url;
        $arrayPostData['messages'][0]['previewImageUrl'] = $image_url;
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Location"
    else if($message == "พิกัดสยามพารากอน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "location";
        $arrayPostData['messages'][0]['title'] = "สยามพารากอน";
        $arrayPostData['messages'][0]['address'] =   "13.7465354,100.532752";
        $arrayPostData['messages'][0]['latitude'] = "13.7465354";
        $arrayPostData['messages'][0]['longitude'] = "100.532752";
        replyMsg($arrayHeader,$arrayPostData);
    }
    #ตัวอย่าง Message Type "Text + Sticker ใน 1 ครั้ง"
    else if($message == "ลาก่อน"){
        $arrayPostData['replyToken'] = $arrayJson['events'][0]['replyToken'];
        $arrayPostData['messages'][0]['type'] = "text";
        $arrayPostData['messages'][0]['text'] = "อย่าทิ้งกันไป";
        $arrayPostData['messages'][1]['type'] = "sticker";
        $arrayPostData['messages'][1]['packageId'] = "1";
        $arrayPostData['messages'][1]['stickerId'] = "131";
        replyMsg($arrayHeader,$arrayPostData);
    }
function replyMsg($arrayHeader,$arrayPostData){
        $strUrl = "https://api.line.me/v2/bot/message/reply";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$strUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);    
        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($arrayPostData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close ($ch);
    }
  function DateThai($strDate)
{
$strYear = date("Y",strtotime($strDate))+602;
$strMonth= date("n",strtotime($strDate));
$strDay= date("j",strtotime($strDate));
$strHour= date("H",strtotime($strDate));
$strMinute= date("i",strtotime($strDate));
$strSeconds= date("s",strtotime($strDate));
$strMonthCut = Array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
$strMonthThai=$strMonthCut[$strMonth];
return "$strDay $strMonthThai $strYear";
}
 
//$strDate = "2008-08-14 13:42:44";
//echo "ThaiCreate.Com Time now : ".DateThai($strDate);
   exit;
?>

