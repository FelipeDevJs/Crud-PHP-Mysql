var express = require("express");
var app = express();
 
var http = require("http").createServer(app);
var socketIO = require("socket.io")(http, {
    cors: {
        origin: "*"
    }
});
 
var users = [];
 
socketIO.on("connection", function (socket) {
 
    socket.on("connected", function (userId) {
        const user = users[userId] = socket.id;
        console.log("my id: "+user)
    });
 
    // socket.on("sendEvent") goes here
});
 
http.listen(process.env.PORT || 3000, function () {
    console.log("Server is started.");
});