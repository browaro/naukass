    <?php 
error_reporting(-1);
ini_set("display_errors", "On");
include 'header.php';
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://domaim/api/application/users",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"  {\r\n      \"external_id\": \"example_ext_id\",\r\n      \"username\": \"example\",\r\n      \"email\": \"example@example.com\",\r\n      \"first_name\": \"John\",\r\n      \"last_name\": \"Doe\",\r\n      \"password\": \"cat\",\r\n      \"root_admin\": false,\r\n      \"language\": \"en\"\r\n  }",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: Application/vnd.pterodactyl.v1+json",
    "Authorization: Bearer qpaFNp2hPro0Fu5EMHmAi9ui5cWA",
    "Cookie: XSRF-TOKEN=eyJpdiI6InZobWs0bFY0YkxCelVpQkM2VzJcL1dBPT0iLCJ2YWx1ZSI6IkNTVVwvSGxKdWs1ZEZNUDA3MU52OHdNbnNvdTVxQnRFZUpZRTBORmE4c0xJUmk0N01mZVcwTWhUbFlYRXFYcGxqIiwibWFjIjoiNzU4NGE2ZDY5NDAzYjEyOTY3NTU5YzhiZjYwNGZiOTI5OWQ0MTUwMzY0YWE2ZjkzMDhmZTFlZmY4YTRjNjYxYiJ9; pterodactyl_session=eyJpdiI6ImlQZXI1cm82bVBoTUMxUXduRlZCclE9PSIsInZhbHVlIjoiNHhqSUp1T3pLY0dYdHJETjNBc211Ynk4WWdOZjhQTU9vYWJqXC9uc0ppN01OTHFvT1Ywd2Z4ZnFDanJRc3NjOGoiLCJtYWMiOiIwNzZkYTM1NTBiMTNiYjViNDEzODA0MzEwMGY3Y2NkMzMwNTZjMGE3OGY5YjI5YzhkNDlhY2E1MDMxOWEzOWY3In0%3D"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    ?>