import mysql.connector
import time
from datetime import datetime
import requests

import serial
import os

mydb = mysql.connector.connect(
    host="83.85.113.219",
    user="ipmedt5project",
    passwd="m1K4F1tJYRmPnBvK",
    database="ipmedt5project_tom"
)

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)

mycursor = mydb.cursor()

while True:

    rcv = str(port.readline().strip())
    
    if "W" in rcv:
        print(rcv.split("=")[1].strip("'"))
        print("Water")
        if rcv.split("=")[1].strip("'") == "0":
            print("Water: False")
            requests.get('http://83.85.113.219:8000/knop/2/false')
        else:
            print("Water: True")
            requests.get('http://83.85.113.219:8000/knop/2/true')
            
            
    elif "V" in rcv:
        now = datetime.now().strftime("%H:%M:%S")
        temp = rcv.split("=")[1].strip("'")
        mycursor.execute("UPDATE vochtigheid SET updated_at = '"+ str(now) + "', value = " + str(temp)+" WHERE id = 1")
    elif "T" in rcv:
        now = datetime.now().strftime("%H:%M:%S")
        temp = rcv.split("=")[1].strip("'")
        mycursor.execute("UPDATE temperatuur SET updated_at = '"+ str(now) + "', value = " + str(temp)+" WHERE id = 1")
    elif "G" in rcv:
        print(rcv.split("=")[1].strip("'"))
        print("Gas")
        if rcv.split("=")[1].strip("'") == "0":
            print("Gas: False")
            requests.get('http://83.85.113.219:8000/knop/3/false')
        else:
            print("Gas: True")
            requests.get('http://83.85.113.219:8000/knop/3/true')
        
    mydb.commit()

mydb.close()