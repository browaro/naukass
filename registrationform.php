    <?php 
error_reporting(-1);
ini_set("display_errors", "On");


include 'header.php';
    $curl = curl_init();
        $data = [
        'username' => $POST['username'],
        'externalid' => $POST['externalid'],
        'email' => $POST['email'],
        'firstname' => $POST['firstname'],
        'lastname' => $POST['lastname'],
        'password' => $POST['password'],
        'rootadmin' => $POST['rootadmin'],
        'language' => $POST['language'],
        ]; 

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://domena.com/api/application/users",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "Accept: Application/vnd.pterodactyl.v1+json",
    "Authorization: Bearer FNp2hPro0Fu5EMHmAi9ui5cWA",

  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
    ?>