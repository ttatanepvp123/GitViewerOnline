import socket

print("#" * 50)
print("PROTOCOL : UDP")
print("#" * 50)

ServerAddr = input("Server IP : ")
ServerPort = int(input("Server Port : "))
TunnelPort = int(input("Tunnel Port : "))
BufferSize = int(input("BufferSize : "))
print("Start Server")

sock = socket.socket(socket.AF_INET, socket.SOCK_DGRAM) # UDP
sock.bind(("", TunnelPort))
while True:
    data, addr = sock.recvfrom(BufferSize)
    if addr[0] != socket.gethostbyname(ServerAddr):
        print("Client IP : "+addr[0]+" PORT : "+str(addr[1])+"\n"+str(data))
        ClientAddr = addr
        sock.sendto(data, (ServerAddr, ServerPort))
    else:
        print("SERVER IP : "+addr[0]+" PORT : "+str(addr[1])+"\n"+str(data))
        sock.sendto(data, ClientAddr)