import mysql.connector

mydb = mysql.connector.connect(
    host="83.85.113.219",
    user="ipmedt5project",
    passwd="m1K4F1tJYRmPnBvK",
    database="ipmedt5project"
)

mycursor = mydb.cursor()

mycursor.execute("UPDATE beveiliging SET triggered = true;")
mydb.commit()