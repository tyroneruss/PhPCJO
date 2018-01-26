from __future__ import print_function
from datetime import date, datetime, timedelta
import mysql.connector

# Read in date
import sys
import os
import re

def insertrecords(cnx,inputfile):


	cursor = cnx.cursor()

	tomorrow = datetime.now().date() + timedelta(days=1)

	
	with open(inputfile, "r") as infile:
		data = infile.read()  # Read the contents of the file into memory.

	insert_list = data.splitlines()
	
	i = 0
	add_statement  = "INSERT INTO col (City,State,StateTax,ColIndex,Grocery,Housing,Utilities,Transport,HealthCare,MiscGoodServices)"
	add_statement  = add_statement + " Values (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)"

	data_statement = ''
	
	for line in insert_list:
		if(i==0):
			print ('Add Insert ' + line)
			add_statement = line
		else:
			print (str(i) + ' ' + line)
			vlist = line.split(',')
			##Insert col data
			data_statement = "('" + vlist[0] + "','" + vlist[1] + "','" + vlist[2] + "'," + vlist[3] + "," + vlist[4] + "," + vlist[5] + ","
			data_statement = data_statement + vlist[6] + "," + vlist[7] + "," + vlist[8] + "," + vlist[9] + ")"
			
			print (str(i) + data_statement)
			cursor.execute(add_statement, data_statement)
			test_no = cursor.lastrowid

			##Make sure data is committed to the database
			cnx.commit()

		i = i + 1
		data_statement = ''

	cursor.close()
	cnx.close()
	

def main(argv):

	filename = '../data/' + sys.argv[1]
	
	cnx = mysql.connector.connect(user='root', password='rhouse11',
								  host='localhost',
								  database='cjodb')
	
	
	insertrecords(cnx,filename)
	
# Initiate main program	
if __name__ == "__main__":
    main(sys.argv)
	
