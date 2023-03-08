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
    const encode = Buffer.from(text, 'utf8').toString('base64')
    return encode;
 }
 
 // Decrypting text
 function decrypt(text) {
    const decode = Buffer.from(text, 'base64').toString('utf8')  
    return decode;
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
    var fullname = req.body.fullname;
    var type = req.body.type;
    var address = req.body.address;
    var key = req.body.key;
    var pub = req.body.pub;
    var pass = encrypt(password);
    var partner = req.body.partner;
    var agency = req.body.agency;
    var agent = req.body.agent;

    if (passcode!= code) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
    }

    mc.query("INSERT INTO members SET ? ", {username: username, password: pass, bank_name: bank_name, bank_account: bank_account, name: fullname, type: type, wallet_address: address, wallet_key: key, wallet_pub: pub, partner_id: partner, agent_id: agent, agency_id: agency}, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});
//Register Partner
app.post('/v1/partner', function (req, res) {

    var passcode = req.body.code;
    var username = req.body.username;
    var password = req.body.password;
    var bank_name = req.body.bank_name;
    var bank_account = req.body.bank_account;
    var fullname = req.body.fullname;
    var address = req.body.address;
    var key = req.body.key;
    var pub = req.body.pub;
    var pass = encrypt(password);
    var member = req.body.member;
    var agency = req.body.agency;
    var agent = req.body.agent;

    if (passcode!= code) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
    }

    mc.query("INSERT INTO partner SET ? ", {username: username, password: pass, bank_name: bank_name, bank_account: bank_account, name: fullname, wallet_address: address, wallet_key: key, wallet_pub: pub, member_id: member, agent_id: agent, agency_id: agency}, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});
//Register Agency
app.post('/v1/agency', function (req, res) {

    var passcode = req.body.code;
    var username = req.body.username;
    var password = req.body.password;
    var bank_name = req.body.bank_name;
    var bank_account = req.body.bank_account;
    var fullname = req.body.fullname;
    var address = req.body.address;
    var key = req.body.key;
    var pub = req.body.pub;
    var pass = encrypt(password);
    var member = req.body.member;
    var partner = req.body.partner;
    var agent = req.body.agent;

    if (passcode!= code) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
    }

    mc.query("INSERT INTO agency SET ? ", {username: username, password: pass, bank_name: bank_name, bank_account: bank_account, name: fullname, wallet_address: address, wallet_key: key, wallet_pub: pub, member_id: member, agent_id: agent, partner_id: partner}, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});
//Register Agent
app.post('/v1/agent', function (req, res) {

    var passcode = req.body.code;
    var username = req.body.username;
    var password = req.body.password;
    var bank_name = req.body.bank_name;
    var bank_account = req.body.bank_account;
    var fullname = req.body.fullname;
    var address = req.body.address;
    var key = req.body.key;
    var pub = req.body.pub;
    var pass = encrypt(password);
    var member = req.body.member;
    var partner = req.body.partner;
    var agency = req.body.agency;

    if (passcode!= code) {
        return res.status(400).send({ error:true, message: 'Please provide task' });
    }

    mc.query("INSERT INTO agent SET ? ", {username: username, password: pass, bank_name: bank_name, bank_account: bank_account, name: fullname, wallet_address: address, wallet_key: key, wallet_pub: pub, member_id: member, agency_id: agency, partner_id: partner}, function (error, results, fields) {
        if (error) throw error;
        return res.send({ error: false, data: results, message: 'success' });
    });
});
//Login Members
app.post('/v1/auth', function(req, res) {
	var username = req.body.username;
	var password = req.body.password;
    var pass = encrypt(password);
	if (username && password) {
		mc.query('SELECT * FROM members WHERE username = ? AND password = ?', [username, pass], function(error, results, fields) {
			if (results.length > 0) {
				return res.send ({message: "success" });
			} else {
				return res.send ({message: "error"});
			}			
			
		});
	} else {
		
	}
});

app.all("*", function (req, res, next) {
return res.send('page not found');
next();
});

app.listen(8080, function () {
console.log('Node app is running on port 8080');
});

module.exports = app;

