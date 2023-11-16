<?php
require_once './config.php';
extract($_POST);
if(empty($_POST)) {
    die('Page Does not have its params');
}
$inputArr = array_values($_POST);
$iterate = 1;
append_to_sheet('1egdhfxkqAaV-42LecUj740UghPwpYnD6VW3DlKT0-Sw', $inputArr);
function append_to_sheet($spreadsheetId = '', $inputArr=[]) {
    global $iterate;
    if($iterate > 2) {
        return ;
    }
    
    $client = new Google_Client();
  
    $db = new DB();
  
    $arr_token = (array) $db->get_access_token();
    $accessToken = array(
        'access_token' => $arr_token['access_token'],
        'expires_in' => $arr_token['expires_in'],
        // 'access_token' => 'ya29.a0AfH6SMA7E9lS_IVmEhu0ZrEBXFVmtC14lDt6MhQeoUtLGkKunyaqsSm422Kw0d3L1GNBv2EUa2WCm77mcVgRQUTZ3YTY4G8wkKbZpMzaj93b-LkVypxQEoqSQ3rura4jb4J5YYKCc0QvUMQrWccpHg_t9bWoEg',
        // 'expires_in' => 3599,
    );
  
    $client->setAccessToken($accessToken);
  
  
    $service = new Google_Service_Sheets($client);
  
    try {
        $range = 'A1:K1';
        $values = [
            // [
            //     'John Doe',
            //     'john@test.com',
            // ],
            // [
            //     'Jack Waugh',
            //     'jack@test.com',
            // ],
            // Additional rows ...
        ];
        $values[] = array_merge([], $inputArr);
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        $params = [
            'valueInputOption' => 'USER_ENTERED'
        ];
        $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
        printf("%d cells appended.", $result->getUpdates()->getUpdatedCells());
    } catch(Exception $e) {
        if( 401 == $e->getCode() ) {
            $iterate++;
            $refresh_token = $db->get_refersh_token();
  
            $client = new GuzzleHttp\Client(['base_uri' => 'https://accounts.google.com']);
  
            $response = $client->request('POST', '/o/oauth2/token', [
                'form_params' => [
                    "grant_type" => "refresh_token",
                    "refresh_token" => $refresh_token,
                    "client_id" => GOOGLE_CLIENT_ID,
                    "client_secret" => GOOGLE_CLIENT_SECRET,
                ],
            ]);
  
            $data = (array) json_decode($response->getBody());
            $data['refresh_token'] = $refresh_token;
            //$new_access_token = $data['access_token'];
            // print_r($data);
            //var_dump($new_access_token);
            // $db->update_access_token($new_access_token);
            $db->update_access_token(json_encode($data));
  
  
            append_to_sheet($spreadsheetId, $inputArr);
        } else {
            echo $e->getMessage(); //print the error just in case your video is not uploaded.
        }
    }
}