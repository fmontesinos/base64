# base64
The easiest way to encode Base64 strings in Node.js is via the Buffer object. 
In Node.js, Buffer is a global object which means that you do not need to use require statement in order to use Buffer object in your applications.

You can find the deprecated warning when using only Buffer, depending on the version, in versions higher than v14.16.0 you must use Buffer.from(<string>)