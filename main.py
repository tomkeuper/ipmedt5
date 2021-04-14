import mysql.connector
import time

import serial
import os

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="mantelzorg"
)
port = serial.Serial("/dev/ttyACM0", baudrate=9600, timeout=3.0)

mycursor = mydb.cursor()

while True:
    
    rcv = port.readLine().strip()
    if (rcv == 'a'):
        os.system("python update.py")

    time.sleep(1)
    mydb.commit()

mydb.close()