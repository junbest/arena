const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const mysql = require('mysql');
const cors = require("cors");

const crypto = require('crypto');
const algorithm = 'aes-256-cbc'; //Using AES encryption
const key = crypto.randomBytes(32);
const iv = crypto.randomBytes(16);

app.use(cors());
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: false
}));

const mc = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '',
    database: 'arena'
});

mc.connect();

const code = "code";

//Encrypting text
function encrypt(text) {
    let cipher = crypto.createCipheriv('aes-256-cbc', Buffer.from(key), iv);
    let encrypted = cipher.update(text);
    encrypted = Buffer.concat([encrypted, cipher.final()]);
    return { iv: iv.toString('hex'), encryptedData: encrypted.toString('hex') };
 }
 
 // Decrypting text
 function decrypt(text) {
    let iv = Buffer.from(text.iv, 'hex');
    let encryptedText = Buffer.from(text.encryptedData, 'hex');
    let decipher = crypto.createDecipheriv('aes-256-cbc', Buffer.from(key), iv);
    let decrypted = decipher.update(encryptedText);
    decrypted = Buffer.concat([decrypted, decipher.final()]);
    return decrypted.toString();
 }

app.get('/', function (req, res) {
    return res.send({ error: true, message: 'Server Online' })
});

//Register Members
app.post('/v1/members', function (req, res) {

    var passcode = req.body.code;
    var username = req.body.username;
    var fullname = req.body.fullname;
    var password = req.body.password;
    var bank_name = req.body.bank_name;
    var bank_account = req.body.bank_account;
    var type = req.body.type;
    var address = req.body.address;
    var key = req.body.key;
    var pub = req.body.pub;
    var pass = encrypt(password);
    //console.log(bank_name);

    if (passcode!= code) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
    }

    mc.query("INSERT INTO members SET ? ", {username: username, password: pass, name: fullname, bank_name: bank_name, bank_account: bank_account, type: type, wallet_address: address, wallet_key: key, wallet_pub: pub}, function (error, results, fields) {
        if (error) throw error;
        console.log(results);
        return res.send({ error: false, data: results, message: 'success' });
    });
});
//Register Agency
app.post('/v1/member', function (req, res) {

    var passcode = req.body.code;
    var username = req.body.username;
    var password = req.body.password;
    var bank_name = req.body.bank_name;
    var bank_account = req.body.bank_account;
    var type = req.body.type;
    var address = req.body.address;
    var key = req.body.key;
    var pub = req.body.pub;
    var pass = encrypt(password);
    //console.log(bank_name);

    if (passcode!= code) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
    }

    mc.query("INSERT INTO members SET ? ", {username: username, password: pass, bank_name: bank_name, bank_account: bank_account, type: type, wallet_address: address, wallet_key: key, wallet_pub: pub}, function (error, results, fields) {
        if (error) throw error;
        console.log(results);
        return res.send({ error: false, data: results, message: 'success' });
    });
});
//Login Members
app.post('/v1/auth', function(req, res) {
	var email = req.body.email;
	var password = req.body.password;
	if (email && password) {
		mc.query('SELECT * FROM users WHERE email = ? AND password = ?', [email, password], function(error, results, fields) {
			if (results.length > 0) {
				return res.send ({data: 1, user: results });
			} else {
				return res.send ({data: 0});
			}			
			
		});
	} else {
		
	}
});

app.post('/v1/select', function (req, res) {
    var word = req.body.word;

    if (!word) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Error savng data");
    }

        mc.query('SELECT * FROM users where word =?', word, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });

});


app.post('/v1/ethbalance', function (req, res) {

       var address = req.body.address;
        if (typeof web3 !== 'undefined') {
            web3 = new Web3(web3.currentProvider);
        } else {
            web3 = new Web3(new Web3.providers.HttpProvider("https://mainnet.infura.io/v3/fecebfef72ee4e31a909a2b2764a93e6"));
        }
       web3.eth.getBalance(address, function (error, result) {
        if (!error)
                return res.send({ error: false, balance: web3.utils.fromWei(result,'ether'), message: 'success' });
                console.log('Ether:', web3.utils.fromWei(result,'ether'));
        });
});
	 
	 
app.post('/v1/tokenbalance', function (req, res) {

       var address = req.body.address;
       var tokencontract = req.body.contract;
       var coin = req.body.coin;

       if (typeof web3 !== 'undefined') {
            web3 = new Web3(web3.currentProvider);
       } else {
           web3 = new Web3(new Web3.providers.HttpProvider("https://mainnet.infura.io/v3/fecebfef72ee4e31a909a2b2764a93e6"));
       }
       var tknAddress = (address).substring(2);
       var contractData = ('0x70a08231000000000000000000000000' + tknAddress);

       web3.eth.call({
         to: tokencontract, 
         data: contractData
          }, function(err, result) {
                if (result) {
                var tokens = web3.utils.toBN(result).toString(); // Convert the result to a usable number string
                if (coin == "USDC"){
                  console.log('Tokens Owned: ' + tokens);
                  return res.send({ error: false, balance: tokens, message: 'success' });
                }else{
                  console.log('Tokens Owned: ' + web3.utils.fromWei(tokens, 'ether'));
                  return res.send({ error: false, balance: web3.utils.fromWei(tokens,'ether'), message: 'success' });
                }

        }
        else {
                console.log(err); 
        }
        });
 });



app.post('/v1/insert_address', function (req, res) {
    var payaddress = req.body.address;
    var payin_address = req.body.id;
    var ex = req.body.ex;
    var from = req.body.from;
    var to = req.body.to;
    var hash = req.body.hash;


    if (!payin_address) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Error savng data");
    }

    mc.query("INSERT INTO exchange SET ? ", {address: payaddress, TransID: payin_address, exchange: ex, froms: from , tos: to, hash: hash}, function (error, results, fields) {
        if (error) throw error;
        console.log(results);
        return res.send({ error: false, data: results, message: 'success' });
    });
});


app.post('/v1/select_address', function (req, res) {
    var payaddress = req.body.address;

    if (!payaddress) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Error savng data");
    }

        mc.query('SELECT * FROM exchange where address=?', payaddress, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});


app.post('/v1/hash', function (req, res) {
    var hash = req.body.hash;

    var Web3 = require('web3')
    var web3 = new Web3(new Web3.providers.HttpProvider('https://mainnet.infura.io/v3/fecebfef72ee4e31a909a2b2764a93e6'))

    if (!hash) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Error savng data");
    }

          web3.eth.getTransactionReceipt(hash, function (err, receipt) {
            if (err) {
              console.log(err);
            }else{
              return res.send({ data: receipt.status});
            }
          });

});


app.post('/v1/insert_cashout', function (req, res) {
    var method  = req.body.method;
    var fname = req.body.fname;
    var lname = req.body.lname;
    var address = req.body.address;
    var email = req.body.email;
    var country = req.body.country;
    var city = req.body.city;
    var phone = req.body.phone;
    var amount_sent = req.body.amount_sent;
    var amount_want = req.body.amount_want;
    var rate = req.body.rate;
    var fee = req.body.fee;
    var miner_fee = req.body.miner_fee;
    var hash = req.body.hash;
    var status = req.body.status;
    var trans = req.body.trans;
    var coin_address = req.body.coin_address;

    if (!method) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("word");
    }
});


app.get('/v1/select_settings', function (req, res) {

        mc.query('SELECT * FROM settings', function (error, results, fields) {
        if (error) throw error;
        return res.send({results });
    });
});


app.post('/v1/select_history', function (req, res) {
        var address = req.body.address;

        mc.query('SELECT transid, method, status FROM cashout WHERE coin_address= ?',address, function (error, results, fields) {
        if (error) throw error;
        return res.send({results });
    });
});


app.post('/v1/check_email', function (req, res) {
    var email = req.body.email;

    if (!email) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Data query failed");
    }

        mc.query('SELECT email FROM users where email = ?', email, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });

});


app.post('/v1/email', function (req, res) {
    var email = req.body.email;

    if (!email) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Data query failed");
    }

        mc.query('SELECT email,username,country,dob,city,idtype,idno,code,status,password FROM users where email = ?', email, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });

});

app.put('/update', function (req, res) {
        var code = req.body.code;
        var name = req.body.name;
        var email = req.body.email;
        var password = req.body.password;

    if (code != "33GoDhh8D2iKuUpKMVvr1CpoiXgGRHwz") {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Data query failed");
    }

    mc.query("UPDATE users SET username = ?, password = ? WHERE email = ?", [name, password, email], function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});


app.put('/v1/update_otp', function (req, res) {
        var otpcode = req.body.otpcode;
        var email = req.body.email;

    mc.query("UPDATE users SET otpcode = ? WHERE email = ?", [otpcode, email], function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});


app.post('/v1/otpcode', function (req, res) {
    var email = req.body.email;

    if (!email) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Data query failed");
    }

        mc.query('SELECT otpcode FROM users where email = ?', email, function (error, results, fields) {
        if (error) throw error;
        return res.send({ data: results});
    });

});


app.put('/update2', function (req, res) {
        var code = req.body.code;
        var name = req.body.name;
        var email = req.body.email;

    if (code != "33GoDhh8D2iKuUpKMVvr1CpoiXgGRHwz") {
        return res.status(400).send({ error:true, message: 'Please provide task' });
       console.log("Data query failed");
    }

    mc.query("UPDATE users SET username = ? WHERE email = ?", [name, email], function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});


app.get('/v1/version', function (req, res) {
        return res.send('2.6');
});



app.get('/v1/update_content', function (req, res) {
        return res.send('Version 2.6 | Released Date: 11/28/2019');
});



app.all("*", function (req, res, next) {
return res.send('page not found');
next();
});

app.listen(8080, function () {
console.log('Node app is running on port 8080');
});

module.exports = app;

