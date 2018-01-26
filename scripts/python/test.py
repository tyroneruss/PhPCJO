from __future__ import print_function
from datetime import date, datetime, timedelta
import mysql.connector


cnx = mysql.connector.connect(user='root', password='rhouse11',
                              host='localhost',
                              database='cjodb')

cursor = cnx.cursor()

tomorrow = datetime.now().date() + timedelta(days=1)

add_test = ("INSERT INTO test "
               "(Test1,Test2) "
               "VALUES (%s, %s)")
			   
data_test = (101,102)

# Insert new employee
cursor.execute(add_test, data_test)
test_no = cursor.lastrowid

# Make sure data is committed to the database
cnx.commit()

cursor.close()
cnx.close()