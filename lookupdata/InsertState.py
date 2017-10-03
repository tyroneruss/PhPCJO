import os
import sys

def CountRecordsFound(file1,file2):

	filevalue1 = 'data/AbbrState.csv'
	filevalue2 = 'data/CostOfLiving.csv'

	with open(filevalue1, "r") as infile1:
		data1 = infile1.read()  # Read the contents of the file into memory.		
	file1_list = data1.splitlines()

	with open(filevalue2, "r") as infile2:
		data2 = infile2.read()  # Read the contents of the file into memory.			
	file2_list = data2.splitlines()

	outfile = open("Results.csv", "w")
	
	i = 0
	strline = ''
	for line1 in file1_list:
		col_list = line1.split(",")
		print col_list
		for line2 in file2_list:
			list = line2.split(",")
			abbrstate = list[0]
			state 	  = list[1]	
			#print col_list[2]
			if (col_list[1] == 'FL'):
				i = i + 1
				strline = col_list[0] + ',' + col_list[1] + ',' 
				strline = strline + col_list[2] + ',' 
				strline = strline + state 		+ ',' 
				strline = strline + col_list[3] + ',' 
				strline = strline + col_list[4] + ',' 
				strline = strline + col_list[5] + ',' 
				strline = strline + col_list[6] + ',' 
				strline = strline + col_list[7] + ',' 
				strline = strline + col_list[8] + ',' 
				strline = strline + col_list[9] 
		
				#print i,': ',col_list[1],' ',FL
			strline = ''
			
def main(argv):

	# My code here
	if len(argv) < 2:
		print("\nError! You do not have enough arguments")
		exit()

	file1 = sys.argv[1]
	file2 = sys.argv[2]	
	
	CountRecordsFound(file1,file2)
	
# Initiate main program	
if __name__ == "__main__":
    main(sys.argv)
