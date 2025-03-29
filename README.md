# PHP WebSocket Server

This is a basic WebSocket server implemented in PHP using socket programming. The server listens for incoming connections from clients, accepts them, and sends/receives messages using PHP's socket functions. This server is ideal for learning about PHP socket programming.

## Features

- **TCP Socket**: The server listens on a specified IP address and port using TCP sockets.
- **Accept Client Connections**: The server accepts incoming connections from clients using the `socket_accept()` function.
- **Send and Receive Messages**: The server can send messages to connected clients and receive data from them.
- **Simple Communication**: Once a client connects, the server sends a welcome message and can read data from the client.

## Requirements

- **PHP 7.x or higher**
- **XAMPP or any other PHP environment with socket support**

## How to Set Up

### 1. **Clone or Download the Repository**

You can either clone the repository or simply download the PHP files to your local machine.

```bash
git clone https://github.com/42webok/Web-Sockets.git
cd php-websocket-server
