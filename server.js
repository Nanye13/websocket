const express = require("express");
const { message } = require("laravel-mix/src/Log");

const app = express();

const server = require("http").createServer(app);

const io = require("socket.io")(server, {
    cors: { origin: "*" },
});

io.on("connection", (socket) => {
    console.log("connection", socket.id);

    // Funcion para escuchar
    socket.on("envioBoton", (message) => {
        console.log(message, socket.id);
        // Para escuchar el servirdor
        socket.broadcast.emit("jugadorBoton", message);
    });

    // Funcion para activar de nuevo el boton para nueva pregunta
    socket.on("nuevaPregunta", (message) => {
        console.log(message, socket.id, "nueva pregunta");

        socket.broadcast.emit("activoBoton", message);

    });

    socket.on("sendChatToServer", (message) => {
        console.log(message, socket.id);

        // Para que los dos reciban el mismo mensaje
        // io.sockets.emit('sendChatToCliente',message);

        // Para que el otro vea lo que envio pero el no visualiza lo que escribio
        socket.broadcast.emit("sendChatToCliente", message);
    });

    socket.on("disconnect", (socket) => {
        console.log("Desconectado", socket.id);
    });
});

server.listen(3000, () => {
    console.log("server is running");
});
