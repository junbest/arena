<?php
session_start();
//Set testnet or mainnet
//define('MTC_HOST', 'https://testnetrest.metacoin.network:20923');
// mainnet
define('MTC_HOST', 'https://rest.metacoin.network:20923');

//Change here if your ready for live or testnet
define('METASCAN', 'https://testnet.metascan.io/address/');
//define('METASCAN', 'https://metascan.io/address/');

//Set Database 
define('DB_SERVER_NAME','localhost'); //Change database server name
define('DB_USER','root'); // Change user
define('DB_PASSWORD',''); //Change the password
define('DB_NAME','arena'); //Change the db name

//TOKEN ID SETTINGS
define('TOKENID','2233'); //Please change this with your token ID

//This is create a wallet =======================================
function create_wallet($user, $pass, $name, $bank_n, $bank_account, $address, $key, $pub, $type)
    {
        $status='';

        $new_key_pair = openssl_pkey_new(array(
            "private_key_type" => OPENSSL_KEYTYPE_EC,
            'curve_name' => 'secp384r1',
        ));
        openssl_pkey_export($new_key_pair, $private_key_pem);
        $details = openssl_pkey_get_details($new_key_pair);
        $public_key_pem = $details['key'];
        $param = array(
            'publickey' => $public_key_pem,
            'addinfo' => 'It is Address extra info !!');
        $curl = curl_init();
        $opt = curl_setopt_array($curl, array(
            CURLOPT_URL => MTC_HOST . '/address',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_POST => false,
            CURLOPT_POSTFIELDS => http_build_query($param),
            CURLOPT_POST => true,
        ));
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        $body = curl_exec($curl);
        if(curl_errno($curl)){
            $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            printf("API Error [%d] %s", $http_code, $body);
            exit;
        }
        //Insert data to mysql
        $servername = DB_SERVER_NAME;
        $username = DB_USER;
        $password = DB_PASSWORD;
        $dbname = DB_NAME;
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $prv1 = str_replace("-----BEGIN EC PRIVATE KEY-----","", $private_key_pem); 
        $prv2 = str_replace("-----END EC PRIVATE KEY-----","", $prv1); 
        $prv3 = preg_replace("/\s+/", "br", $prv2);

        $pub1 = str_replace("-----BEGIN PUBLIC KEY-----","", $public_key_pem); 
        $pub2 = str_replace("-----END PUBLIC KEY-----","", $pub1); 
        $pub3 = preg_replace("/\s+/","br",$pub2);

        //$prv = mysqli_real_escape_string($prv2,$conn);
        //$pub = mysqli_real_escape_string($pub2, $conn);
        $check=mysqli_query($conn,"SELECT * FROM members WHERE username='$user'");
        $checkrows=mysqli_num_rows($check);

        if($checkrows>0) {
            $status = "exist";
        } else { 

            $username = stripslashes($user);
            $username = mysqli_real_escape_string($conn, $username);
            $password = stripslashes($pass);
            $password = mysqli_real_escape_string($conn, $password);

            $sql = "INSERT INTO members (username, password, name,  bank_name, bank_account, wallet_address, wallet_key, wallet_pub, type)
            VALUES ('$username', '" . md5($password) . "', '$name', '$bank_n', '$bank_account', '$body', '$prv3', '$pub3', '$type')";
        
            if (mysqli_query($conn, $sql)) {
                $status = "success";
            } else {
                $status = "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        return $status;
        $conn->close();
}
function login($username, $password){

	// attempt login if no errors on form
        $status='';

        //Insert data to mysql
        $servername = DB_SERVER_NAME;
        $user = DB_USER;
        $pass = DB_PASSWORD;
        $dbname = DB_NAME;
        // Create connection
        $conn = new mysqli($servername, $user, $pass, $dbname);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

		$query = "SELECT * FROM members WHERE username='$username' AND password='" . md5($password) . "'";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { 
			//$logged_in_user = mysqli_fetch_assoc($results);
            $row = mysqli_fetch_array($results);
			$_SESSION['username'] = $username;
            $_SESSION['wallet_address'] = $row['wallet_address'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['partner_id'] = $row['partner_id'];
            $status='success';
		}else {
			$status = 'failed';
		}

    return $status;
}
//This is get balance=======================================
function balance($address){

    $status='';

    $param = array(
        'address' => $address);
    
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_PORT => "20923",
          CURLOPT_URL => MTC_HOST . "/balance/". $address,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "", 
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: 75b36d6d-61a5-417c-b050-829dbb59927a"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          $status =  "cURL Error #:" . $err;
        } else {
            $output = json_decode($response, true); // <-- true = return arrays instead of objects

            foreach($output as $res)
            {
                $tokenid = $res['token'];
                if ($tokenid == TOKENID){
                    $status = $res['balance'];
                }else{
                    $status = '0.0';
                }
                // $status = $output;
            }
        }

    return $status;
}


function transfer_buy($address, $amount){

    //Insert data to mysql
    $servername = DB_SERVER_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;
    $dbname = DB_NAME;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql ="SELECT * FROM user WHERE id=1";
    $result = $conn->query($sql);

    $from_addr;
    $from_private_key;
    while($rows = mysqli_fetch_array($result)){
        $from_addr = $rows['wallet_address'];
        $pk1= $rows['wallet_key'];
        $pk2= str_replace("br","\r\n",$pk1);
        $from_private_key = "-----BEGIN EC PRIVATE KEY-----" . $pk2 . "-----END EC PRIVATE KEY-----\r\n";
    }

    $to_addr = $address;
    $amount = $amount * 100000000; // 1 MTC is 100000000
    $token = TOKENID;       // token 0 is MTC
    $tkey = mtc_get('/getkey/transfer/' . $from_addr);

    $data = implode('|', array($from_addr, $to_addr, $token, $amount, $tkey));
    openssl_sign($data, $signature, $from_private_key, OPENSSL_ALGO_SHA384);
    echo 'data' . $data;
    $r = mtc_post('/transfer/',
    array(
        'from' => $from_addr,
        'to' => $to_addr,
        'token' => $token,
        'amount' => $amount,
        'signature' => base64_encode($signature),
        'unlockdate' => '0',
        'tags' => 'it is tag',
        'memo' => 'it is memo',
        'checkkey' => $tkey)
    );
    return $r;
}

function transfer_sell($address, $amount){

    //Insert data to mysql
    $servername = DB_SERVER_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;
    $dbname = DB_NAME;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql ="SELECT * FROM user WHERE wallet_address='" .$address."'";
    $result = $conn->query($sql);
    
    $sql1 = "SELECT * FROM user WHERE id=1";
    $result1 = $conn->query($sql1);
    $row = mysqli_fetch_array($result1);

    $from_addr;
    $from_private_key;
    while($rows = mysqli_fetch_array($result)){
        $from_addr = $rows['wallet_address'];
        $pk1= $rows['wallet_key'];
        $pk2= str_replace("br","\r\n",$pk1);
        $from_private_key = "-----BEGIN EC PRIVATE KEY-----" . $pk2 . "-----END EC PRIVATE KEY-----\r\n";
    }

    $to_addr = $row['wallet_address'];
    $amount = $amount * 100000000; // 1 MTC is 100000000
    $token = TOKENID;       // token 0 is MTC
    $tkey = mtc_get('/getkey/transfer/' . $from_addr);

    $data = implode('|', array($from_addr, $to_addr, $token, $amount, $tkey));
    openssl_sign($data, $signature, $from_private_key, OPENSSL_ALGO_SHA384);
    echo 'data' . $data;
    $r = mtc_post('/transfer/',
    array(
        'from' => $from_addr,
        'to' => $to_addr,
        'token' => $token,
        'amount' => $amount,
        'signature' => base64_encode($signature),
        'unlockdate' => '0',
        'tags' => 'it is tag',
        'memo' => 'it is memo',
        'checkkey' => $tkey)
    );
    return $r;
}

//Functio MTC GET =================================
function mtc_get($uri){
    $curl = curl_init();
    $opt = curl_setopt_array($curl, array(
        CURLOPT_URL => MTC_HOST . $uri,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_POST => false,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $body = curl_exec($curl);

    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $err_msg = '';
    $err_code = curl_errno($curl);
    if ($err_code) {
        $err_msg = curl_error($curl);
    }

    printf("Response Http Code: %s, msg: %s\n", $http_code, $body);
    if ($err_code) {
        printf("Response CurlCode: %s, msg: %s\n", $err_code, $body);
    }

    curl_close($curl);
    $curl = null;

    return $body;
}
///////This is MTC POST ======================================================
function mtc_post($uri, $param){
    $curl = curl_init();
    $opt = curl_setopt_array($curl, array(
        CURLOPT_URL => MTC_HOST . $uri,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_POSTFIELDS => http_build_query($param),
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded')
    ));
    $body = curl_exec($curl);

    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $err_msg = '';
    $err_code = curl_errno($curl);
    if ($err_code) {
        $err_msg = curl_error($curl);
    }

    printf("Response Http Code: %s, msg: %s\n", $http_code, $body);
    if ($err_code) {
        printf("Response CurlCode: %s, msg: %s\n", $err_code, $body);
    }

    curl_close($curl);
    $curl = null;

    return $body;
}

//Query partner ID
function query_partner_id($partner_id){

    $status='';

    //Insert data to mysql
    $servername = DB_SERVER_NAME;
    $user = DB_USER;
    $pass = DB_PASSWORD;
    $dbname = DB_NAME;
    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);

    $query = "SELECT * FROM partner WHERE id='$partner_id'";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) { 
        //$logged_in_user = mysqli_fetch_assoc($results);
        $row = mysqli_fetch_array($results);
        $status=$row;
    }else {
        $status = 'failed';
    }

return $status;
}

//Query partner ID
function query_purchase($id){

    $status='';

    //Insert data to mysql
    $servername = DB_SERVER_NAME;
    $user = DB_USER;
    $pass = DB_PASSWORD;
    $dbname = DB_NAME;
    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);

    $query = "SELECT * FROM purchases WHERE id='$id'";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) { 
        //$logged_in_user = mysqli_fetch_assoc($results);
        $row = mysqli_fetch_array($results);
        $status=$row;
    }else {
        $status = 'failed';
    }

return $status;
}

function insert_purchase($qty, $amount, $partner, $member, $member_address, $partner_address){

    $status='';
    //Insert data to mysql
    $servername = DB_SERVER_NAME;
    $user = DB_USER;
    $pass = DB_PASSWORD;
    $dbname = DB_NAME;
    // Create connection
    $conn = new mysqli($servername, $user, $pass, $dbname);

    $sql = "INSERT INTO purchases (quantity, amount, partner_name,  member_name, partner_address, member_address)
    VALUES ('$qty', '$amount', '$partner', '$member', '$partner_address', '$member_address')";

    if (mysqli_query($conn, $sql)) {
        $status = "success";
    } else {
        $status = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

//Update Purchase status
function update_purchase_status($id){

    $status='';
    //Insert data to mysql
    $servername = DB_SERVER_NAME;
    $username = DB_USER;
    $password = DB_PASSWORD;
    $dbname = DB_NAME;
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE purchases SET `status` = 'Processing'WHERE `id` = '$id'";

    if (mysqli_query($conn, $sql)) {
        $status = "success";
    } else {
        $status = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    return $status;
    $conn->close();
}
function isLoggedIn()
{
	if (isset($_SESSION['username'])) {
		return true;
	}else{
		return false;
	}
}
