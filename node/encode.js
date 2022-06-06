'use strict';
//node version v14.16.0
let data = 'And ... searching I found https://base64string.dev';
let buff = new Buffer.from(data);
let base64data = buff.toString('base64');

console.log('"' + data + '" converted to Base64 is "' + base64data + '"');