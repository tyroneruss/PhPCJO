from __future__ import print_function
from datetime import date, datetime, timedelta
import mysql.connector

# Read in date
import sys
import os
import re

def createDB(newdb)

	cnx = mysql.connector.connect(host='localhost'user='root', password='rhouse11')

	cursor = cnx.cursor()
	sql = 'CREATE DATABASE ' + newdb
	cursor.execute(sql
	
	cursor.close()
	
	

def main(argv):

	dbname = '../data/' + sys.argv[1]

	createDB(dbname)
	
	
	
# Initiate main program	
if __name__ == "__main__":
    main(sys.argv)
