import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="laravel",
    database="mantelzorg"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE count SET amount = amount + 1;")
mydb.commit()