<?php

function send_LINE($msg,$userid){
  $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ]; 
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_Check($userid){
    $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
  $messages = [
              
          
                "type"=> "image",
                "originalContentUrl"=> "https://imgur.com/a0vMdA5.jpg",
                "previewImageUrl"=> "https://imgur.com/a0vMdA5.jpg"
            
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_FALL($userid,$esp,$elder_name,$emergency_number){
   $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
  $messages = [
          "type"=> "template",
          "altText"=> "this is a buttons template",
          "template"=> [
              "type"=> "buttons",
              "thumbnailImageUrl"=> "https://i.imgur.com/h3ujqrZ.jpg",
           //   https://i.imgur.com/al9Fmdg.jpg
              "imageAspectRatio"=> "square",
              "imageSize"=> "cover",
              "title"=> "หมายเลขอุปกรณ์ : ".$esp."",
              "text"=> "คุณ ".$elder_name,
              "defaultAction"=> [
                     "type"=> "message",
                     "label"=> "ตอบรับ",
                     "text"=> "Acknowledge:".$esp
  //               "type"=> "uri",
  //               "label"=> "View detail",
  //               "uri"=> "http://google.com"
                ],
              "actions"=> [
                  [
                    "type"=> "message",
                    "label"=> "ตอบรับ",
                    "text"=> "Acknowledge:".$esp
                  ],
                  [
                    "type"=> "uri",
                    "label"=> "โทร",
                    "uri"=> "tel:".$emergency_number
                  ]
              ]
          ]
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_PRESS($userid,$esp,$elder_name,$emergency_number){
   
  $messages = [
          "type"=> "template",
          "altText"=> "this is a buttons template",
          "template"=> [
              "type"=> "buttons",
              "thumbnailImageUrl"=> "https://i.imgur.com/oWiGMzD.jpg",
              "imageAspectRatio"=> "square",
              "imageSize"=> "cover",
              "title"=> "หมายเลขอุปกรณ์ : ".$esp."",
              "text"=> "คุณ ".$elder_name,
              "defaultAction"=> [
                   "type"=> "message",
                   "label"=> "ตอบรับ",
                   "text"=> "Acknowledge:".$esp
//               "type"=> "uri",
//               "label"=> "View detail",
//               "uri"=> "http://google.com"
              ],
              "actions"=> [
                  [
                    "type"=> "message",
                    "label"=> "ตอบรับ",
                    "text"=> "Acknowledge:".$esp
                  ],
                   [
                    "type"=> "uri",
                    "label"=> "โทร",
                    "uri"=> "tel:".$emergency_number
                  ]
              ]
          ]
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_LOWBAT($userid,$esp,$elder_name){
   $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
    $messages = [
      
    "type"=> "text",
    "text"=>  "หมายเลขอุปกรณ์ : ".$esp." คุณ ".$elder_name." เหลือพลังงานต่ำกว่า 20%"
      ];
  //     $messages = [
         
//                 "type"=> "image",
//                 "originalContentUrl"=> "https://i.imgur.com/c65ILrh.jpg",
//                 "previewImageUrl"=> "https://i.imgur.com/c65ILrh.jpg"
//       ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_Menu($userid){
    $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
  $messages = [
          "type"=> "imagemap",
          "baseUrl"=> "https://i.imgur.com/J9KHVzn.jpg",
          "altText"=> "this is a buttons template",
          "baseSize"=> [
              "height"=> 1040,
              "width"=> 1040
          ],
         
                   // "uri"=> "https://numpapick.herokuapp.com/manage.php?userid=".$userid
               
              "actions"=> [
                      [
                            "type"=> "uri",
                     
                            "thumbnailImageUrl"=> "https://i.imgur.com/J9KHVzn.jpg",
                            "linkUri"=> "https://numpapick.herokuapp.com/main.php?userid=".$userid,
                            "area"=> [
                                "x"=> 0,
                                "y"=> 0,
                                "width"=> 1040,
                                "height"=> 1040
                            ]
                        ]
                
              
          ]
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_Setting($userid){
  $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU='; 
  $messages = [
          "type"=> "imagemap",
          "baseUrl"=> "https://i.imgur.com/ZdUE0ih.jpg",
          "altText"=> "this is a buttons template",
          "baseSize"=> [
              "width"=> 1040,
              "height"=> 550
          ],
         
                   // "uri"=> "https://numpapick.herokuapp.com/manage.php?action=".$userid
               
              "actions"=> [
                      [
                            "type"=> "uri",
                     
                            "thumbnailImageUrl"=> "https://i.imgur.com/ZdUE0ih.jpg",
                            "linkUri"=> "https://numpapick.herokuapp.com/main.php?userid=".$userid,
                            "area"=> [
                                "x"=> 0,
                                "y"=> 0,
                                "width"=> 1040,
                                "height"=> 550
                            ]
                        ]
                
              
          ]
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_CALL($userid){
    $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
  $messages = [
          "type"=> "template",
          "altText"=> "this is a buttons template",
          "template"=> [
              "type"=> "confirm",
              "text"=> "โทรหา 1669 ?",
             
              "actions"=> [
           [
              "type"=> "uri",
              "label"=> "โทร",
              "uri"=> "tel:1669"
            ], 
          [
            "type"=> "message",
            "label"=> "ยกเลิก",
            "text"=> "ยกเลิก"
          ]
//                   [
//                     "type"=> "uri",
//                     "label"=> "โทร",
//                     "uri"=> "tel:1669"
//                   ],  
              ]
          ]
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
function send_tutorial($userid){
  $access_token = 'FJVHsIVISrTjsYR87I5h3PySe9Nk3p8PklGovZcaEard3VxglFqCNj1VKSPaOr0aY6A5gkZRENuCjVgeBhRMuWDfQLy8Cx/1NikOnZMPOg8C9qp1hmJy/A0ajfKhf+cRb+KAsH09um2womP/YTt6VwdB04t89/1O/w1cDnyilFU=';
  $messages = [
              
          
                "type"=> "image",
                "originalContentUrl"=> "https://i.imgur.com/GcU2NS9.jpg",
                "previewImageUrl"=> "https://i.imgur.com/GcU2NS9.jpg"
            
      ];
      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [
        'to' => $userid,
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);
      echo $result . "\r\n"; 
}
?>
