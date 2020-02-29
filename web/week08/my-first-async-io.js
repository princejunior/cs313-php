const fs = require('fs');
var buffer = fs.readFile(process.argv[2], 'utf-8',function callback (err, data) { 
    if(err) 
        return console.error(err);
    const results = data.split('\n').length - 1;
    console.log(results);
 });

//  const fs = require('fs')
//     const file = process.argv[2]
    
//     fs.readFile(file, function (err, contents) {
//       if (err) {
//         return console.log(err)
//       }
      // fs.readFile(file, 'utf8', callback) can also be used
    //   const lines = contents.toString().split('\n').length - 1
    //   console.log(lines)
    // })