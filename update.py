import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="mantelzorg"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE afstandsensor SET sensor_on = uit;")
mydb.commit()