'use strict';
//node version v14.16.0
let data = 'And ... searching I found https://base64string.dev';
let buff = new Buffer.from(data);
let base64data = buff.toString('base64');

var buffer = Buffer.from(base64data, 'base64');
var base64string = buffer.toString('ascii');

console.log('"' + base64data + '" converted to String is "' + base64string + '"');