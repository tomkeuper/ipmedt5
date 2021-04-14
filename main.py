import mysql.connector
import time

import serial
import os

mydb = mysql.connector.connect(
    host="83.85.113.219",
    user="ipmedt5project",
    passwd="m1K4F1tJYRmPnBvK",
    database="ipmedt5project"
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