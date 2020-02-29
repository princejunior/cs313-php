const fs = require('fs');
var output = fs.readFileSync(process.argv[2]).toString().split('\n').length - 1;
console.log(output);