var http = require('http');

function helloWorld(request, response){
    console.log(request);
    response.writeHead(200, {"Content-Type": "application/json"});
    response.writeHead(404, {"Content-Type": "text/html"});
    response.write("<h1 style='color:red;'>Hello World</h1>");
    response.write("1 + 5 = " + (1+5));
    response.end();
}
var server = http.createServer(helloWorld);
server.listen(5000);
console.log("server is working"); 

